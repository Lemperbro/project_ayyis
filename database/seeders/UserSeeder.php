<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $randomInteger = random_int(10, 100);
        for($i = 1; $i <= 10; $i++){
        User::create([
            'image' => 'fp.png',
            'username' => Str::random(10),
            'nia' => '1323.213.2313.'.$randomInteger,
            'email' => 'example'.$i.'1@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'cabang',
            'ranting' => 'bluluk',
            'telp' => '082230736205',
            'cabang' => 'kabupaten lamongan',
            'verified' => 'user'
        ]);
        }
    }
}
