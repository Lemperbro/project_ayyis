<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;
use App\Repositories\Interfaces\ApiWilayahInterface;

class ApiWilayahRepository implements ApiWilayahInterface
{

    //

    public function cabangApi()
    {
        return $cabang = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/regencies/35.json')->json();
    }

    public function rantingApi($id)
    {
        return $ranting = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/districts/' . $id . '.json')->json();
    }
    public function getDetailRanting($id)
    {
        return $DetailRanting = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/district/' . $id . '.json')->json();
    }
    public function getDetailCabang($id)
    {
        return $cabang = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/regency/' . $id . '.json')->json();
    }
}
