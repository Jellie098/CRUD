<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Leslie Esparza",
            "email" => "leslie.esparza@gmail.com",
            "password" => Hash::make('Ares1234'),
            "tipo" => "administrador"
          ]);
        User::create([
            "name" => "Mario Guzman",
            "email" => "mariog@gmail.com",
            "password" => Hash::make('Futbol1'),
            "tipo" => "cliente"
        ]);
    }
}
