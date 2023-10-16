<?php
namespace App\Repositories\Interfaces;

interface RantingInterface {
    public function getAll($paginate);
    public function getByCabang($cabang,$paginate);
    public function getByRanting($ranting, $paginate);
    public function rantingConfirm($cabang = null, $paginate);
    public function getSelectRantingByCabang($cabang);
}