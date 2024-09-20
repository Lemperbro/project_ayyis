<?php

namespace App\Repository;

use App\Models\User;
use App\Repositories\ApiWilayahRepository;
use App\Repositories\Interfaces\ApiWilayahInterface;
use App\Repositories\Interfaces\RantingInterface;

class RantingRepository implements RantingInterface
{
    private $ApiWilayah;
    public function __construct(ApiWilayahInterface $ApiWilayah)
    {
        $this->ApiWilayah = $ApiWilayah;
    }

    public function getAll($paginate)
    {
        $data = User::where('role', 'ranting')->where('verified', 'user');

        if (request('nama')) {
            $data->where('username', 'like', '%' . request('nama') . '%');
        }

        if (request('ranting')) {
            $data->where('ranting', 'like', '%' . request('ranting') . '%');
        }

        if (request('cabang')) {
            $data->where('cabang', 'like', '%' . request('cabang') . '%');
        }

        if (request('nia')) {
            $data->where('nia', request('nia'));
        }
        return $data->paginate($paginate);
    }

    public function getByCabang($cabang, $paginate)
    {
        $data = User::where('role', 'ranting')->where('cabang', $cabang)->where('verified', 'user');

        if (request('nama')) {
            $data->where('username', 'like', '%' . request('nama') . '%');
        }
        if (request('ranting')) {
            $data->where('ranting', strtolower(request('ranting')));
        }
        if (request('nia')) {
            $data->where('nia', request('nia'));
        }

        return $data->latest($paginate);
    }

    public function getByRanting($ranting, $paginate)
    {
        $data = User::where('role', 'ranting')->where('ranting', $ranting)->where('verified', 'user')->latest()->paginate($paginate);
        return $data;
    }

    public function rantingConfirm($cabang = null, $paginate)
    {
        if ($cabang !== null) {
            $data = User::where('role', 'ranting')->where('cabang', $cabang)->where('verified', 'register')->latest()->paginate($paginate);
        } else {
            $data = User::where('role', 'ranting')->where('verified', 'register')->latest();
        }

        return $data;
    }

    public function getSelectRantingByCabang($cabang)
    {
        $CabangApi = $this->ApiWilayah->cabangApi();


        $filteredData = collect($CabangApi)->filter(function ($item) use ($cabang) {
            // Kondisi filter
            return $item['name'] == strtoupper($cabang);
        });
        foreach ($filteredData as $a) {
            $rantingApi = $this->ApiWilayah->rantingApi($a['id']);
        }

        return $rantingApi;
    }

    public function store($request, $cabang){

    }

    public function update(){

    }
    public function delete($id){

    }
}
