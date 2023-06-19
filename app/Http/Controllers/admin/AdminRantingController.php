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

        return view('admin.ranting.index', [
            'ranting' => $ranting->get()
        ]);
    }


    public function create(){
        return view('admin.ranting.add');
    }

    
}
