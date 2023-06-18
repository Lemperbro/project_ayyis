<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cabang = User::where('role', 'cabang')->where('verified', 'user')->get();
        $ranting = User::where('role', 'ranting')->where('verified', 'user')->get();



        return view('admin.dashboard.index', [
            'cabang' => $cabang,
            'ranting' => $ranting
        ]);
    }

    public function konfirmasi()
    {
        $data = User::latest()->where('verified', 0);

        return view('admin.konfirmasi.index',[
           'data' => $data->get(),
        ]);
        
    }




}
