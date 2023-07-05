<?php

namespace App\Http\Controllers\ApiCabangRanting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ApiCabangRantingController extends Controller
{
    //
    protected $cabang,$ranting;

    public function cabangApi(){
        return $this->cabang = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/regencies/35.json')->json();
    }

    public function rantingApi($id){
        return $this->ranting = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/districts/' . $id . '.json')->json();
    }
    public function getDetailRanting($id){
        return $DetailRanting = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/district/'.$id.'.json')->json();
    }
    public function getDetailCabang($id){
        return $cabang = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/regency/'.$id.'.json')->json();
    }
}
