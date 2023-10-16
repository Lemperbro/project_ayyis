<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\ApiCabangRanting\ApiCabangRantingController;
use Exception;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    //
    private $ApiWilayah;
    public function __construct()
    {
        $this->ApiWilayah = new ApiCabangRantingController();
    }

    public function editAnggota(Anggota $id, Request $request)
    {
        if (Auth()->user()->role == 'ranting') {
            if (Auth()->user()->ranting !== $id->ranting) {
                return redirect()->back();
            }
        } elseif (Auth()->user()->role == 'cabang') {
            if (Auth()->user()->cabang !== $id->cabang) {
                return redirect()->back();
            }
        }

        $CabangApi = $this->ApiWilayah->cabangApi();
        $filteredData = collect($CabangApi)->filter(function ($item) use ($id) {
            // Kondisi filter
            return $item['name'] == strtoupper($id->cabang);
        });

        foreach ($filteredData as $a) {
            $rantingApi = $this->ApiWilayah->rantingApi($a['id']);
        }
        if ($request->cabang !== null) {
            $ranting = $this->ApiWilayah->rantingApi($request->cabang);
            return response()->json([
                'success' => true,
                'id' => $request->cabang,
                'data' => $ranting
            ]);
        }
        return view('edit_anggota.index', [
            'data' => $id,
            'ranting' => $rantingApi,
            'cabang' => $CabangApi
        ]);
    }

    public function updateAnggota(Anggota $id, Request $request)
    {
        if (Auth()->user()->role == 'ranting') {
            if (Auth()->user()->ranting !== $id->ranting) {
                return redirect()->back();
            }
        } elseif (Auth()->user()->role == 'cabang') {
            if (Auth()->user()->cabang !== $id->cabang) {
                return redirect()->back();
            }
        }
        $validasi = $request->validate([
            'image' => 'mimes:png,jpg,jpeg|max:2048',
            'nama' => 'required',
            'nia' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'ranting' => 'required',
            'cabang' => 'required',
            'tingkatan' => 'required'
        ]);

        if ($files = $request->file('image')) {
            $extension = $files->getClientOriginalExtension();
            $nameImage = hash('sha256', time()) . '.' . $extension;
            $up = $files->move('ft_anggota', $nameImage);
            if ($up) {
                $storage = public_path('ft_anggota/' . $id->image);
                if (File::exists($storage)) {
                    unlink($storage);
                }
            }
        } else {
            $nameImage = $id->image;
        }
        $ranting = strtolower($this->ApiWilayah->getDetailRanting($request->ranting)['name']);
        $cabang = strtolower($this->ApiWilayah->getDetailCabang($request->cabang)['name']);
        $id->update([
            'image' => $nameImage,
            'nama' => $request->nama,
            'nia' => $request->nia,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'ranting' => $ranting,
            'cabang' => $cabang,
            'tingkatan' => $request->tingkatan
        ]);

        try {
            if (Auth()->user()->role == 'admin') {
                $url = '/admin';
            } elseif (Auth()->user()->role == 'cabang') {
                $url = '/cabang';
            } elseif (Auth()->user()->role == 'ranting') {
                $url = '/ranting';
            }
            return redirect($url)->with('toast_success', 'Berhasil memperbarui data');
        } catch (Exception $e) {
            return redirect()->back()->with('toast_error', 'Tidak berhasil memperbarui data');
        }
    }
}
