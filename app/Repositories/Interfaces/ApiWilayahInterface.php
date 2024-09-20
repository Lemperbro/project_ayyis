<?php
namespace App\Repositories\Interfaces;

interface ApiWilayahInterface {
    public function cabangApi();
    public function rantingApi($id);
    public function getDetailRanting($id);
    public function getDetailCabang($id);
}