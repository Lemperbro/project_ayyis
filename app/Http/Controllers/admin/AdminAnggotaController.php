<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Exception;

class AdminAnggotaController extends Controller
{
    //

    private $anggota;

    public function __construct()
    {
        $this->anggota = Anggota::latest();
    }

    public function index(){
        $data_anggota = $this->anggota;
        if(request('nama')){
            $data_anggota->where('nama', 'like','%'.request('nama').'%');
        }
        if(request('ranting')){
            $data_anggota->where('ranting', 'like','%'.request('ranting').'%');
        }
        if(request('cabang')){
            $data_anggota->where('cabang', 'like', '%'.request('cabang').'%');
        }
        if(request('nia')){
            $data_anggota->where('nia', request('nia'));
        }
        
        $appendsPaginate = [
            'nama' => request('nama'),
            'ranting' => request('ranting'),
            'cabang' => request('cabang'),
            'nia' => request('nia')
        ];
        return view('admin.anggota.index', [
            'data_anggota' => $data_anggota->paginate(20),
            'appendsPaginate' => $appendsPaginate
        ]);
    }
 
    
    public function delete($id){
        Anggota::where('id',$id)->delete();

        try{
            return redirect()->back()->with('toast_success', 'Berhasil Menghapus Anggota');
        }catch(Exception $e){
            return redirect()->back()->with('toast_error', 'Gagal Menghapus Anggota');
        }
    }
}
