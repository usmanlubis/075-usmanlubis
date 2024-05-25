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
            ],
            [
                "name" => 'Honda BRV',
                "image" => 'https://i.postimg.cc/ryPk473b/honda-brv.png',
                "year" => 2021,
                "price" => 310000,
                "description" => 'This car offers reliable engine performance and has passed various tests with satisfying results. With well-maintained regular maintenance, this car is very suitable for long-distance trips. Equipped with adequate comfort features for all passengers.'
            ],
            [
                "name" => 'Toyota Yaris',
                "image" => 'https://i.postimg.cc/tCxLxJhZ/toyota-yaris.png',
                "year" => 2020,
                "price" => 225000,
                "description" => "The car's design is very modern and stylish, making it look attractive on the road. The cabin is spacious with ample legroom, allowing passengers to feel comfortable throughout the journey. Equipped with complete safety features, providing safety and comfort for all passengers."
            ],
            [
                "name" => 'Suzuki Ertiga',
                "image" => 'https://i.postimg.cc/B6nrLCg4/suzuki-ertiga.png',
                "year" => 2021,
                "price" => 220000,
                "description" => 'The car is in prime condition with very low mileage. Equipped with the latest technology that enhances driving comfort and safety. The interior is equipped with various adequate entertainment and navigation features.'
            ],
            [
                "name" => 'Toyota Agya',
                "image" => 'https://i.postimg.cc/7Zb9v2bf/toyota-agya.png',
                "year" => 2020,
                "price" => 175000,
                "description" => 'This car has a very fuel-efficient engine, making it very economical for daily use. Maintenance is easy and operational costs are low. Ideal to be used as a daily vehicle with comfort maintained.'
            ],
            ]);
    }
}
