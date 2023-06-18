<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index(){
        return view('auth.login',[
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
            
            if(auth()->user()->verified == 'register'){
                Auth::logout();
                
                $request->session()->invalidate();
                
                $request->session()->regenerateToken();
                return redirect()->back()->with('toast_error', 'gk iso login cok');
            }
            if(auth()->user()->role == 'admin'){
            return redirect()->intended('admin');

            } elseif(auth()->user()->role == 'ranting'){
            return redirect()->intended('ranting');

            } elseif(auth()->user()->role == 'cabang'){
                return redirect()->intended('cabang');
            }
 
        }
 
        return back()->with('LoginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login');
    }

}
