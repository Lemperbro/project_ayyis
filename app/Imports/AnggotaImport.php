<?php

namespace App\Imports;

use App\Models\Anggota;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class AnggotaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Anggota|null
     */
    public function model(array $row)
    {
        return new Anggota([
           'name'     => $row[0],
           'email'    => $row[1],
           'password' => Hash::make($row[2]),
        ]);
    }
}