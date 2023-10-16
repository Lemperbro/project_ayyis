<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\ApiCabangRanting\ApiCabangRantingController;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRantingController extends Controller
{
    //
    private $ranting,$ApiRanting;

    public function __construct()
    {
        $this->ranting = User::where('role', 'ranting')->where('verified', 'user');
        $this->ApiRanting = new ApiCabangRantingController();
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


    public function create(Request $request){

        $cabang = $this->ApiRanting->cabangApi();
        $ranting = null;
        if ($request->cabang !== null) {
            $ranting = $this->ApiRanting->rantingApi($request->cabang);
            return response()->json([
                'success' => true,
                'id' => $request->cabang,
                'data' => $ranting
            ]);
        }
        return view('admin.ranting.add', [
            'cabang' => $cabang,
            'ranting' => $ranting
        ]);
    }

    public function store(Request $request){

        $validasi = $request->validate([
            'nama' => 'required',
            'nia' => 'required|unique:users,nia',
            'ranting' => 'required',
            'cabang' => 'required',
            'email' => 'required|unique:users,email',
            'telp' => 'required',
            'password' => 'required'
        ]);
        $cabang = $this->ApiRanting->getDetailCabang($request->cabang)['name'];
        $ranting = $this->ApiRanting->getDetailRanting($request->ranting)['name'];
        $password = bcrypt($validasi['password']);

        $proses = User::create([
            'username' => $request->nama,
            'nia' => $request->nia,
            'telp' => $request->telp,
            'email' => $request->email,
            'password' => $password,
            'ranting' => strtolower($ranting),
            'cabang' => strtolower($cabang),
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
