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
                "phone" => "082119431576",
                "password" => bcrypt('admin'),
                "role_id" => 1,
            ],
            [
                "name" => "User",
                "email" => "user@erent.com",
                "phone" => "08219431577",
                "password" => bcrypt('user'),
                "role_id" => 2,
            ]
            ]);
    }
}
