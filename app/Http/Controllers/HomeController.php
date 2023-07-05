<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $data = null;
        if(request('nia')){
            $data = Anggota::where('nia',request('nia'))->first();
        }
        return view('data.cari', [
            'data' => $data
        ]);
    }
}
