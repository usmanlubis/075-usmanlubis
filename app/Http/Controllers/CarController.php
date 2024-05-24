<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{

    public $cars = [];

    public function __construct() {
        $this->cars = [
            [
                "id" => 1,
                "name" => "Nissan Livina",
                "image" => "https://i.postimg.cc/2yqgT8Mt/nissan-livina.png",
                "year" => 2021,
                "description" => "The car is in excellent condition with routine maintenance always performed on time. The interior is clean and comfortable, providing a pleasant driving experience. Fuel consumption is very efficient, making it a perfect choice for long-distance and city driving.",
                "isAvailable" => true,
                "price" => 250000
            ],
            [
                "id" => 2,
                "name" => "Honda BRV",
                "image" => "https://i.postimg.cc/ryPk473b/honda-brv.png",
                "year" => 2021,
                "description" => "This car offers reliable engine performance and has passed various tests with satisfying results. With well-maintained regular maintenance, this car is very suitable for long-distance trips. Equipped with adequate comfort features for all passengers.",
                "isAvailable" => true,
                "price" => 310000
            ],
            [
                "id" => 3,
                "name" => "Toyota Yaris",
                "image" => "https://i.postimg.cc/tCxLxJhZ/toyota-yaris.png",
                "year" => 2020,
                "description" => "The car's design is very modern and stylish, making it look attractive on the road. The cabin is spacious with ample legroom, allowing passengers to feel comfortable throughout the journey. Equipped with complete safety features, providing safety and comfort for all passengers.",
                "isAvailable" => false,
                "price" => 225000
            ],
            [
                "id" => 4,
                "name" => "Suzuki Ertiga",
                "image" => "https://i.postimg.cc/B6nrLCg4/suzuki-ertiga.png",
                "year" => 2021,
                "description" => "The car is in prime condition with very low mileage. Equipped with the latest technology that enhances driving comfort and safety. The interior is equipped with various adequate entertainment and navigation features.",
                "isAvailable" => true,
                "price" => 220000
            ],
            [
                "id" => 5,
                "name" => "Toyota Agya",
                "image" => "https://i.postimg.cc/7Zb9v2bf/toyota-agya.png",
                "year" => 2020,
                "description" => "This car has a very fuel-efficient engine, making it very economical for daily use. Maintenance is easy and operational costs are low. Ideal to be used as a daily vehicle with comfort maintained.",
                "isAvailable" => true,
                "price" => 175000
            ],
            [
                "id" => 6,
                "name" => "Daihatsu Xenia",
                "image" => "https://i.postimg.cc/Xqm60y93/daihatsu-xenia.png",
                "year" => 2019,
                "description" => "The car's cabin is very comfortable and spacious, equipped with modern entertainment systems. With stable and efficient engine performance, this car is suitable for use in various road conditions.",
                "isAvailable" => false,
                "price" => 220000
            ],
            [
                "id" => 7,
                "name" => "BMW F30",
                "image" => "https://i.postimg.cc/q7kYSGWy/bmw-f30.png",
                "year" => 2022,
                "description" => "This car has high stability and advanced braking systems, providing safety during driving. Suitable to be used as a family vehicle with a large passenger capacity.",
                "isAvailable" => true,
                "price" => 1300000
            ],
            [
                "id" => 8,
                "name" => "Mini Cooper",
                "image" => "https://i.postimg.cc/1302vd7y/mini-cooper.png",
                "year" => 2020,
                "description" => "The car's interior is very elegant and comfortable, with a stylish and modern exterior. This car is very comfortable for long-distance and city driving, equipped with various comfort and safety features.",
                "isAvailable" => true,
                "price" => 1250000
            ],
            [
                "id" => 9,
                "name" => "Suzuki XL7",
                "image" => "https://i.postimg.cc/tJYGfzZ2/suzuki-xl7.png",
                "year" => 2021,
                "description" => "A high-performance car equipped with complete safety features, making it ideal for various road conditions. With low mileage and well-maintained, it ensures comfort and safety during driving.",
                "isAvailable" => false,
                "price" => 250000
            ],
            [
                "id" => 10,
                "name" => "Honda HRV",
                "image" => "https://i.postimg.cc/CMt35kfp/honda-hrv.png",
                "year" => 2020,
                "description" => "This car is in pristine condition with a powerful engine and efficient fuel consumption. Very suitable for long-distance trips and daily use with comfort maintained.",
                "isAvailable" => true,
                "price" => 200000
            ]
        ];
    }
    
    // setter function
    public function addCar(array $newCar) {
        $this->cars[] = $newCar;
    }

    public function updateCar(int $id, array $carData) {
        foreach ($this->cars as &$car) {
            if ($car['id'] == $carData['id']) {
                $car['name'] = $carData['name'];
                $car['image'] = $carData['image'];
                $car['year'] = $carData['year'];
                $car['description'] = $carData['description'];
                $car['price'] = $carData['price'];
            }
        }
    }

    public function deleteCar(int $id) {
        foreach ($this->cars as $key => $car) {
            if ($car['id'] == $id) {
                unset($this->cars[$key]);
                $this->cars = array_values($this->cars);
            }
        }
    }
    // end setter function

    // for get method
    public function index() {
        $selectedCars = [];
        foreach ($this->cars as $car) {
            if ($car['isAvailable']){
                $selectedCars[] = $car;
            }
        }

        return view('homepage', [
        "cars" => $selectedCars
        ]);
    }

    public function show() {
        return view('rent', [
        "cars" => $this->cars
    ]);
    }

    public function detail(int $id) {
        $selectedCar = null;
        foreach ($this->cars as $car) {
            if ($car['id'] == $id)
            $selectedCar = $car;
        }

        return view('car.detail', [
            "car" => $selectedCar
        ]);
    }

    public function edit(int $id) {
        $selectedCar = null;
        foreach ($this->cars as $car) {
            if ($car['id'] == $id)
            $selectedCar = $car;
        }

        return view('car.edit', [
            "car" => $selectedCar
        ]);
    }

    public function delete(int $id) {
        $selectedCar = null;
        foreach ($this->cars as $car) {
            if ($car['id'] == $id)
            $selectedCar = $car;
        }

        return view('car.delete', [
            "car" => $selectedCar
        ]);
    }

    public function create() {
        return view('add');
    }

    // end of get nethod

    // create new car
    public function store(Request $request) {
        $payload = $request->all();
        $id = ($this->cars[count($this->cars) - 1]['id']) + 1;
        $newCar = [
            "id" => $id,
            "name" => $payload['name'],
            "image" => $payload['image'],
            "year" => $payload['year'],
            "description" => $payload['description'],
            "isAvailable" => true,
            "price" => $payload['price']
        ];

        $this->addCar($newCar);

        // return redirect()->route('car-detail', ['id' => $id]);
        return $this->cars;
    }
    // end of create new car

    // edit car
    public function update(Request $request) {
        $payload = $request->all();

        $carData = [
            "id" => $payload['id'],
            "name" => $payload['name'],
            "image" => $payload['image'],
            "year" => $payload['year'],
            "description" => $payload['description'],
            "isAvailable" => true,
            "price" => $payload['price']
        ];

        $this->updateCar($payload['id'], $carData);

        // return redirect()->route('car-detail', ['id' => $payload['id']]);
        return $this->cars;
    }
    // end of edit car

    // delete car
    public function destroy(Request $request) {
        $id = $request->all()['id'];

        foreach ($this->cars as $key => $car) {
            if ($car['id'] == $id) {
                unset($this->cars[$key]);
                $this->cars = array_values($this->cars);
            }
        }
        
        // $this->deleteCar($id);
        // return $id
        return redirect()->route('cars');
    }
    //end of delete car
}
