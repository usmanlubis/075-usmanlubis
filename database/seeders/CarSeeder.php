<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::insert([
            [
                "name" => 'Nissan Livina',
                "image" => 'https://i.postimg.cc/2yqgT8Mt/nissan-livina.png',
                "year" => 2021,
                "price" => 175000,
                "description" => 'The car is in excellent condition with routine maintenance always performed on time. The interior is clean and comfortable, providing a pleasant driving experience. Fuel consumption is very efficient, making it a perfect choice for long-distance and city driving.'
            ]
            ]);
    }
}
