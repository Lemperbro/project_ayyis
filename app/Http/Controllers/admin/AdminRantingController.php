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
            'image' => 'required',
            'nama' => 'required',
            'nia' => 'required|unique:users,nia',
            'ttl' => 'required',
            'alamat' => 'required',
            'ranting' => 'required',
            'tingkatan' => 'required|min:5|max:255'
        ],[
            'nama.required' => 'Nama Harus Di isi',
            'nia.required' => 'Nia Harus Di isi',
            'nia.unique' => 'Nia Yang Anda Masukan Sudah Tersedia',
            'ranting.required' => 'Ranting Harus Di Isi',
            'tingkatan.required' => 'Tingkatan Harus Di Isi',
            'tingkatan.unique' => 'Tingkatan Sudah Di pakai',
            'ttl.required' => 'ttl Harus Di isi',
            'alamat.required' => 'alamat Harus Di isi',
        ]);

        $files=array();
    

        if ($files = $request->file('image')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('ft_anggota', $name);
        }
        

        $proses = User::create([
            'image' => $name,
            'nama' => $request->nama,
            'nia' => $request->nia,
            'ranting' => $request->ranting,
            'tigkatan' => $request->tingkatan,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
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
