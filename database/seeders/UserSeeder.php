<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
// use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                "name" => "Admin",
                "email" => "admin@erent.com",
                "password" => bcrypt('admin'),
                "phone" => "082119431576",
                "role_id" => 1,
            ],
            [
                "name" => "Joni",
                "email" => "joni@gmail.com",
                "password" => bcrypt('joni'),
                "phone" => "08219431577",
                "role_id" => 2,
            ],
            [
                "name" => "Toni",
                "email" => "toni@gmail.com",
                "password" => bcrypt('toni'),
                "phone" => "08219431578",
                "role_id" => 2,
            ]
            ]);
    }
}
