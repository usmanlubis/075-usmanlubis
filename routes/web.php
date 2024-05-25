<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\UserIsLoggedIn;
use App\Http\Middleware\UserRole;

Route::controller(CarController::class)->middleware(UserIsLoggedIn::class)->group(function() {
    Route::get('/', "index")->name("homepage");
    Route::get('/cars', "show")->name("cars");
    Route::get('/car/{id}', "detail")->name("car-detail");
    Route::get('/add', "create")->name("add")->middleware(UserRole::class);
    Route::post('add', "store")->name("car-store")->middleware(UserRole::class);
    Route::get('/edit/{id}', "edit")->name("car.edit")->middleware(UserRole::class);
    Route::patch('edit/{id}', "update")->name("car-update")->middleware(UserRole::class);
    Route::get('/delete/{id}', "delete")->name("car.delete")->middleware(UserRole::class);
    Route::delete('delete/{id}', "destroy")->name("car-destroy")->middleware(UserRole::class);
});

Route::controller(TransactionController::class)->middleware(UserIsLoggedIn::class)->group(function() {
    Route::get('/transaction', "index")->name("transaction");
    Route::post('/car/{id}', "store")->name("transaction-store")->middleware(UserRole::class);
    Route::patch('/transaction', "update")->name("transaction-update")->middleware(UserRole::class);
});

Route::controller(AuthController::class)->group(function() {
    Route::get('/login', "loginPage")->name('login-page');
    Route::post('/login', "login")->name('login');
    Route::get('/logout', "logout")->name('logout')->middleware(UserIsLoggedIn::class);
});


Route::view('/about', 'about')->name('about')->middleware(UserIsLoggedIn::class);

Route::view('/contact', 'contact')->name('contact')->middleware(UserIsLoggedIn::class);

Route::get('/getSession', function(){
    return [
        "isLogged" => session()->get("isLogged"),
        "id" => session()->get("id"),
        "name" => session()->get("name"),
        "email" => session()->get("email"),
        "phone" => session()->get("phone"),
        "role_id" => session()->get("role_id"),
    ];
});