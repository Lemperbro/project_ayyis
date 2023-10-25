<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 40; $i++) {
            Anggota::create([
                'image' => 'fp.jpg',
                'nama' => Str::random(10),
                'admin_id' => 13,
                'nia' => '1213.4343.3433.353'.$i,
                'ttl' => 'Lamongan, 31 juli 2002',
                'alamat' => 'lamongan',
                'ranting' => 'bluluk',
                'cabang' => 'kabupaten lamongan',
                'tingkatan' => 'super'
            ]);
        }
    }
}
