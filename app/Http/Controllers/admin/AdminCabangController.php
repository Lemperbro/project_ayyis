<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCabangController extends Controller
{
    //
    private $cabang;

    public function __construct()
    {
        $this->cabang = User::where('role', 'cabang')->where('verified', 'user');
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
        return view('admin.cabang.add');
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'nama' => 'required',
            'nia' => 'required|unique:users,nia',
            'cabang' => 'required',
            'email' => 'required|email|unique:users',
            'telp' => 'required|min:9',
            'password' => 'required|min:5|max:255'
        ]);

        $validasi['password'] = bcrypt($validasi['password']);
        
        
        $proses = User::create([
            'username' => $request->nama,
            'nia' => $request->nia,
            'telp' => $request->telp,
            'email' => $request->email,
            'password' => $validasi['password'],
            'role' => 'cabang',
            'cabang' => $request->cabang,
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
