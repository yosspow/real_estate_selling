<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
            "name" => "kpbatiment1",
            "email" => "batimentkp1@gmail.com",
            "password" => Hash::make("batiment@kp123"),
            

        ]);
        User::create([
            "name" => "kpbatiment2",
            "email" => "batimentkp2@gmail.com",
            "password" => Hash::make("batiment@kp123"),

        ]);
        User::create([
            "name" => "kpbatiment3",
            "email" => "batimentkp3@gmail.com",
            "password" => Hash::make("batiment@kp123"),

        ]);



    }
}
