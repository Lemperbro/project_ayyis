<?php
namespace App\Repositories;

use App\Models\Anggota;
use App\Repositories\Interfaces\AnggotaInterface;

class AnggotaRepository implements AnggotaInterface{
 
    public function getAll($paginate){
        $data = Anggota::latest()->paginate($paginate);
        return $data;
    }

    public function getById(Anggota $id){
        return $id;
    }

    public function getByRanting($ranting, $paginate){
        $data = Anggota::where('ranting', Auth()->user()->ranting)->where('cabang', $ranting)->latest();
        return $data->paginate($paginate);
    }

    public function getByCabang($cabang,$paginate){
        $data = Anggota::where('cabang', $cabang)->latest();
        return $data->paginate($paginate);
    }
    public function store(){

    }
    public function update(){

    }
    public function delete($id){
        
    }
}