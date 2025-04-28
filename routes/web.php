<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home pages
Route::get('/', function () {
    return view('home', ['name' => 'Vert San']);
})->name('home');

// ...existing code...
Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
