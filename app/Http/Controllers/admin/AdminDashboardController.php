<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{

    private $cabang, $ranting, $anggota;


    public function __construct()
    {
        $this->cabang = User::where('role', 'cabang')->where('verified', 'user');
        $this->ranting = User::where('role', 'ranting')->where('verified', 'user');
        $this->anggota = Anggota::latest();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabang = $this->cabang;
        $ranting = $this->ranting;
        $anggota = $this->anggota;






        return view('admin.dashboard.index', [
            'cabang' => $cabang->get(),
            'ranting' => $ranting->get(),
            'anggota' => $anggota->get()
        ]);
    }



    public function data_cabang()
    {
        $data_cabang = $this->cabang->get();
        $Anggotas = $this->anggota;

        if(request('cabang')){
            $Anggotas->where('cabang',request('cabang'));
        }

        if(request('ranting')){
            $Anggotas->where('ranting',request('ranting'));
        }

        if(request('tahun')){
            // NamaModel::whereRaw("SUBSTRING_INDEX(nia, '.', -2) = ?", [$year])
            //      ->get();
        }
        // dd($Anggotas->get());

                // $coba = "12./21]212;31";
        // $deli = array('./','/',']',';');
        // $a = str_replace($deli , '|', $coba);
        // $p = explode('|',$a);
        // dd(implode('.',$p));I
    }
}
