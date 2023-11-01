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

        $admin = User::where('role', 'admin')->where('verified', 'user')->get()->count();
        return view('auth.register', [
            'cabang' => $this->ApiCabangRanting->cabangApi(),
            'ranting' => $ranting,
            'admin' => $admin
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
        } elseif ($request->role == 'admin') {
            $validasi = $request->validate([
                'username' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'nia' => 'required',
                'telp' => 'required',
                'role' => 'required',
                'password' => 'required|confirmed|min:5|max:255',

            ]);

            $ranting = null;
        } elseif (!in_array($request->role, ['cabang', 'ranting', 'admin'])) {
            return redirect()->back()->with('toast_error', 'data tidak ada');
        }

        if (User::where('role', 'admin')->where('verified', 'user')->get()->count() < 1 && $request->role == 'admin') {
            $verified = 'user';
            $cabang= null;
        } else {
            $cabang = strtolower($this->ApiCabangRanting->getDetailCabang($request->cabang)['name']);
            $verified = 'register';
        }

        $validasi['password'] = bcrypt($validasi['password']);
        $proses = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'telp' => $request->telp,
            'nia' => $request->nia,
            'role' => $request->role,
            'ranting' => $ranting,
            'cabang' => $cabang,
            'password' => $validasi['password'],
            'verified' => $verified
        ]);

        if ($proses) {
            return redirect('/login')->with([
                'toast_success' => 'Registration successfull !!',
                'success_registrasi' => 'Akun Berhasil Dibuat, Mohon Tunggu Konfirmasi Dari Admin Agar Akun Bisa Digunakan',
                'verified' => $proses->verified
            ]);
        } else {
            return redirect()->back()->with('toast_warning', 'Registrasi Gagal');
        }
    }
}
