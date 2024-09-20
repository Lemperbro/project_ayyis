<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login', [
            'tittle' => 'login'
        ]);
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
         

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->verified == 'register') {
                Auth::logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();
                return redirect()->back()->with('info', 'Akun Berhasil Dibuat, Mohon Tunggu Konfirmasi Dari Admin Pusat Agar Akun Bisa Digunakan');
            }
            if (auth()->user()->role == 'admin') {
                return redirect()->intended('admin');
            } elseif (auth()->user()->role == 'ranting') {
                return redirect()->intended('ranting');
            } elseif (auth()->user()->role == 'cabang') {
                return redirect()->intended('cabang');
            }
        }

        return redirect()->back()->with('toast_error', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
