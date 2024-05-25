<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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
    Route::post('/car/{id}', "store")->name("transaction-store");
    Route::patch('/transaction', "update")->name("transaction-update");
});

Route::controller(AuthController::class)->group(function() {
    Route::get('/login', "loginPage")->name('loginPage');
    Route::post('/login', "login")->name('login');
    Route::get('/logout', "logout")->name('logout');
});


Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');

Route::get('/getSession', function(){
    return [
        "id" => session()->get("id"),
        "name" => session()->get("name"),
        "email" => session()->get("email"),
        "phone" => session()->get("phone"),
        "role_id" => session()->get("role_id"),
    ];
});