<?php
namespace App\Repositories\Interfaces;

use App\Models\Anggota;

interface AnggotaInterface {
    public function getAll($paginate);
    public function getById(Anggota $id);
    public function getByRanting($ranting, $paginate);
    public function getByCabang($cabang, $paginate);
} 