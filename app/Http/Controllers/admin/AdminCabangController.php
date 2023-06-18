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

        return view('admin.cabang.index', [
            'cabang' => $cabang->get()
        ]);
    }
}
