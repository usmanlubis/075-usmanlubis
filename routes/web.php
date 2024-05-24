<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;

Route::controller(CarController::class)->group(function() {
    Route::get('/', "index")->name("homepage");
    Route::get('/cars', "show")->name("cars");
    Route::get('/car/{id}', "detail")->name("car-detail");
    Route::get('/add', "create")->name("add");
    Route::post('add', "store")->name("car-store");
    Route::get('/edit/{id}', "edit")->name("car.edit");
    Route::patch('edit/{id}', "update")->name("car-update");
    Route::get('/delete/{id}', "delete")->name("car.delete");
    Route::delete('delete/{id}', "destroy")->name("car-destroy");
});

Route::controller(TransactionController::class)->group(function() {
    Route::get('/transaction', "index")->name("transaction");
    Route::patch('transaction', "update")->name("transaction-update");
});

Route::get('login', [UserController::class, "index"])->name('login');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');