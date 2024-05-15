<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/transaction', function () {
    return view('transaction.index');
})->name('transaction');

// Route::get('/car', function () {
//     return view('car.index');
// })->name('car');