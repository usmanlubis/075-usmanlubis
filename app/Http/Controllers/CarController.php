<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Transaction;

class CarController extends Controller
{
    public function index() {
        $cars = Car::all();

        $selectedCars = [];
        foreach ($cars as $car) {
            if ($car['isAvailable']){
                $selectedCars[] = $car;
            }
        }

        return view('homepage', [
        "cars" => $selectedCars
        ]);
    }

    public function show() {
        $cars = Car::all();

        return view('rent', [
        "cars" => $cars
        ]);
    }

    public function detail(int $id) {
        $cars = Car::all();
        $selectedCar = null;
        foreach ($cars as $car) {
            if ($car['id'] == $id)
            $selectedCar = $car;
        }

        return view('car.detail', [
            "car" => $selectedCar
        ]);
    }

    public function edit(int $id) {
        $cars = Car::all();
        $selectedCar = null;
        foreach ($cars as $car) {
            if ($car['id'] == $id)
            $selectedCar = $car;
        }

        return view('car.edit', [
            "car" => $selectedCar
        ]);
    }

    public function delete(int $id) {
        $cars = Car::all();
        $selectedCar = null;
        foreach ($cars as $car) {
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

    public function store(Request $request) {
        $payload = $request->all();
        $newCar = [
            "name" => $payload['name'],
            "image" => $payload['image'],
            "year" => $payload['year'],
            "description" => $payload['description'],
            "isAvailable" => true,
            "price" => $payload['price']
        ];

        $car = Car::create($newCar);

        return redirect()->route('car-detail', [
            "id" => $car['id']
        ]);
    }
    public function update(Request $request) {
        $payload = $request->all();
        $id = $payload['id'];

        $updatedCar = [
            "name" => $payload['name'],
            "image" => $payload['image'],
            "year" => $payload['year'],
            "description" => $payload['description'],
            "price" => $payload['price']
        ];

        $car = Car::findOrFail($id);
        $car->update($updatedCar);

        $transactions = Transaction::where('car_id', $id)->get();

        foreach ($transactions as $transaction) {
            $transaction->carName = $payload['name'];
            $transaction->carImage = $payload['image'];
            $transaction->save();
        }

        return redirect()->route('car-detail', [
            'id' => $car['id']
        ]);
    }

    public function destroy(int $id) {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars');
    }
}
