<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use App\Http\Controllers\ApiCabangRanting\ApiCabangRantingController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{

    private $ApiCabangRanting;

    public function __construct(ApiCabangRantingController $ApiCabangRanting)
    {
        $this->ApiCabangRanting = $ApiCabangRanting;
    }

    public function create(Request $request)
    {
        $ranting = null;
        if ($request->cabang !== null) {
            $ranting = $this->ApiCabangRanting->rantingApi($request->cabang);
            return response()->json([
                'success' => true,
                'id' => $request->cabang,
                'data' => $ranting
            ]);
        }

        return view('auth.register', [
            'cabang' => $this->ApiCabangRanting->cabangApi(),
            'ranting' => $ranting
        ]);
    }

    public function store(Request $request)
    {

        
        if ($request->role == 'ranting') {
            $validasi = $request->validate([
                'username' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'nia' => 'required',
                'telp' => 'required',
                'role' => 'required',
                'ranting' => 'required',
                'cabang' => 'required',
                'password' => 'required|confirmed|min:5|max:255',

            ]);

            $ranting = strtolower($this->ApiCabangRanting->getDetailRanting($request->ranting)['name']);

        } elseif ($request->role == 'cabang') {
            $validasi = $request->validate([
                'username' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'nia' => 'required',
                'telp' => 'required',
                'role' => 'required',
                'cabang' => 'required',
                'password' => 'required|confirmed|min:5|max:255',

            ]);

            $ranting = null;
        } elseif (!in_array($request->role, ['cabang', 'ranting'])) {
            return redirect()->back()->with('toast_error', 'gk ono cok');
        }
        $cabang = $this->ApiCabangRanting->getDetailCabang($request->cabang);
        $validasi['password'] = bcrypt($validasi['password']);
        $proses = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'telp' => $request->telp,
            'nia' => $request->nia,
            'role' => $request->role,
            'ranting' => $ranting,
            'cabang' => strtolower($cabang['name']),
            'password' => $validasi['password'],
        ]);

        if ($proses) {
            return redirect('/login')->with([
                'toast_success' => 'Registration successfull !!',
                'succes_registrasi' => 'Akun Berhasil Dibuat, Mohon Tunggu Konfirmasi Dari Admin Pusat Agar Akun Bisa Digunakan'
            ]);
        } else {
            return redirect()->back()->with('toast_warning', 'Registrasi Gagal');
        }
    }
}
