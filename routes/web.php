<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//home page
Route::get('/',function(){
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Example of a protected page

Route::get('/dashboard', function () {
    return "Welcome to your Clothing Store Dashboard!";
})->middleware('auth')->name('dashboard');

Route::get('/dashboard', function(){
    return view('dashboard');
});

// Product routes
Route::get('/products', [ProductController::class,'index'])->name('products.index');
Route::get('/products/create', [ProductController::class,'create'])->name('products.create');
Route::post('/products', [ProductController::class,'store'])->name('products.store');
