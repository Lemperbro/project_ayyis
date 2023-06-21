<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){

        if($request->role == 'ranting'){
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

        }elseif($request->role == 'cabang'){
            $validasi = $request->validate([
                'username' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'nia' => 'required',
                'telp' => 'required',
                'role' => 'required',
                'cabang' => 'required',
                'password' => 'required|confirmed|min:5|max:255',
                
            ]);
            
        }elseif(!in_array($request->role, ['cabang', 'ranting'])){
            return redirect()->back()->with('toast_error', 'gk ono cok');
        }

        $validasi['password'] = bcrypt($validasi['password']); 

        $proses = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'telp' => $request->telp,
            'nia' => $request->nia,
            'role' => $request->role,
            'ranting' => strtolower($request->ranting),
            'cabang' => strtolower($request->cabang),
            'password' => $validasi['password'],
        ]);

        if($proses){
            return redirect('/login')->with('toast_success', 'Registration successfull !!');

        }else{
            return redirect()->back()->with('warning', 'Registrasi Gagal');
        }
 
    }
}
