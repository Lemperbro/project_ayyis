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

        if(Auth()->user() !== null){
            if(Auth()->user()->role == 'admin'){
                return redirect('/admin');
            }elseif(Auth()->user()->role == 'cabang'){
                return redirect('/cabang');
            }elseif(Auth()->user()->role == 'ranting'){
                return redirect('/ranting');
            }
        }
        return view('data.cari', [
            'data' => $data
        ]);
    }
}
