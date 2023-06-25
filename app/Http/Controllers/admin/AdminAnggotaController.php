<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Anggota;

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

        return view('admin.anggota.index', [
            'data_anggota' => $data_anggota->get()
        ]);
    }
}
