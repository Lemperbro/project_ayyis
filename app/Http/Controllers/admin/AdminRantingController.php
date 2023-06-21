<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRantingController extends Controller
{
    //
    private $ranting;

    public function __construct()
    {
        $this->ranting = User::where('role', 'ranting')->where('verified', 'user');
    }

    public function index(){

        $ranting = $this->ranting;


        if(request('nama')){
            $ranting->where('username','like','%'.request('nama').'%');
        }

        if(request('ranting')){
            $ranting->where('ranting','like','%'.request('ranting').'%');
        }

        if(request('cabang')){
            $ranting->where('cabang','like','%'.request('cabang').'%');
        }

        if(request('nia')){
            $ranting->where('nia',request('nia'));
        }

        return view('admin.ranting.index', [
            'ranting' => $ranting->get()
        ]);
    }


    public function create(){

        return view('admin.ranting.add', [
            'ranting' => $this->ranting->latest()->get()
        ]);
    }

    public function store(Request $request){

        $validasi = $request->validate([
            'nama' => 'required',
            'nia' => 'required|unique:users,nia',
            'ranting' => 'required',
            'cabang' => 'required',
            'email' => 'required|email|unique:users,email',
            'telp' => 'required|min:8',
            'password' => 'required|min:5|max:255'
        ],[
            'nama.required' => 'Nama Harus Di isi',
            'nia.required' => 'Nia Harus Di isi',
            'nia.unique' => 'Nia Yang Anda Masukan Sudah Tersedia',
            'ranting.required' => 'Ranting Harus Di Isi',
            'cabang.required' => 'Cabang Harus Di Isi',
            'email.required' => 'Email Harus Di Isi',
            'email.unique' => 'Email Sudah Di pakai',
            'telp.required' => 'Nomor Telpon Harus Di isi',
            'telp.min' => 'Nomor Telpon Harus minimal :min',
            'password.required' => 'Password Harus Di isi',
            'password,min' => 'Password Harus minimal :min',
            'password.max' => 'Password maximal :max'
        ]);

        $validasi['password'] = bcrypt($validasi['password']);
        

        $proses = User::create([
            'username' => $request->nama,
            'nia' => $request->nia,
            'ranting' => $request->ranting,
            'cabang' => $request->cabang,
            'email' => $request->email,
            'telp' => $request->telp,
            'password' => $validasi['password'],
            'role' => 'ranting',
            'verified' => 'user'
        ]);

        if($proses){
            return redirect('/admin/ranting')->with('toast_success', 'Berhasil menambahkan data admin ranting');
        }
    }

    public function destroy($id){
        $this->ranting->where('id', $id)->delete();

        return redirect()->back()->with('toast_success', 'Berhasil Menghapus Akun');
    }

    
}
