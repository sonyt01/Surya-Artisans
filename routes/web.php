<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//home page
Route::get('/welcome',function(){
    return view('welcome');
});

// Authentication routes
Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login']);

// Example of a protected page

// Route::get('/dashboard', function () {
//     return "Welcome to your Clothing Store Dashboard!";
// })->middleware('auth')->name('dashboard');

Route::get('/dashboard', function(){
    return view('dashboard');
});

// Product routes
Route::get('/products', function () {
    return view('products.index');
})->name('products');

Route::get('/welcome', function () {
    return view('welcome');
})->name('home');  // ✅ This defines the route name "home"



