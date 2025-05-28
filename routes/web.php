<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

// Regular expression with route parameter

Route::get("/demo/{about}", function ($about) {
    return 'demo . $about';
})->where('about', '[a-zA-Z]+');


// Route Admin
//local:host:8000/admin/dashboard
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('admin.settings');
});

//Fallback route - Route not found
Route::fallback(function () {
    return view('errors.404');
})->name('fallback');



Route::get('/student/form', [StudentController::class, 'Form'])->name('form');
Route::post('/student/submit', [StudentController::class, 'handleForm'])->name('student.handleForm');
