<?php

namespace App\Http\Controllers\auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class ResetPasswordController extends Controller
{
    //

    public function index(){
        return view('auth.forgotPassword');
    }

    public function store(Request $request){


        $request->validate(['email' => 'required|email']);
 
        $status = Password::sendResetLink(
            $request->only('email')
        );
     
        return $status === Password::RESET_LINK_SENT
                    ? back()->with('ResetSuccess', 'Silahkan cek email untuk melakukan reset password')
                    : back()->withErrors('ResetError' , $status);
                    
    }

    public function reset($token,$email){
        $check = DB::table('password_resets')->where('email', $email)->first();
        if($check !== null){
            if (!Hash::check($token, $check->token)) {
                return redirect('/login');
            }            
        }else{
            return redirect('/login');
        }

        return view('auth.changePassword', [
            'token' => $token,
            'email' => $email
        ]);
    }

    public function update(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|confirmed',
        ]);
     
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('UpdateSuccess', 'Berhasil memperbarui password')
                    : back()->withErrors('UpdateError', 'Tidak berhasil memperbarui password');
    }


}
