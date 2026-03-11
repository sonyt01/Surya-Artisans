<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

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
