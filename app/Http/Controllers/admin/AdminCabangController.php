<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\ApiCabangRanting\ApiCabangRantingController;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCabangController extends Controller
{
    //
    private $cabang,$ApiCabang;

    public function __construct()
    {
        $this->cabang = User::where('role', 'cabang')->where('verified', 'user');
        $this->ApiCabang = new ApiCabangRantingController();
    }

    public function index(){

        $cabang = $this->cabang;

        if(request('nama')){
            $cabang->where('username','like','%'.request('nama').'%');
        }

        if(request('cabang')){
            $cabang->where('cabang','like','%'.request('cabang').'%');
        }

        if(request('nia')){
            $cabang->where('nia',request('nia'));
        }

        $coba = User::select('cabang')->where('role','cabang')->where('verified','user')->distinct()->get();
        return view('admin.cabang.index', [
            'cabang' => $cabang->get(),
            'coba' => $coba
        ]);
    }

    public function create(){
        $cabang = $this->ApiCabang->cabangApi();
        return view('admin.cabang.add', [
            'cabang' => $cabang
        ]);
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'nama' => 'required',
            'nia' => 'required|unique:users,nia',
            'cabang' => 'required',
            'email' => 'required|email|unique:users',
            'telp' => 'required|min:9',
            'password' => 'required|min:5|max:255'
        ],[
            'nama.required' => 'Nama Harus Di isi',
            'nia.required' => 'Nia Harus Di isi',
            'nia.unique' => 'Nia Yang Anda Masukan Sudah Tersedia',
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
            'telp' => $request->telp,
            'email' => $request->email,
            'password' => $validasi['password'],
            'role' => 'cabang',
            'cabang' => strtolower($request->cabang),
            'verified' => 'user'
        ]);

        if($proses){
            return redirect('/admin/cabang')->with('toast_success','Data admin cabang berhasil ditambahkan');
        }

    }


    public function destroy($id){

        User::where('id', $id)->delete();

        return redirect()->back()->with('toast_success', 'Data admin cabang berhasil dihapus');
    }
}
