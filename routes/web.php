<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserProductController;

//home page
Route::get('/welcome',function(){
    return view('welcome');
});

// Authentication routes
Route::get('/login', function () {
    return view('login');
});

// Route::post('/login', [AuthController::class, 'login']);

//Registration route
Route::get('/register', function () {
    return view('register');
});
// Example of a protected page

// Route::get('/dashboard', function () {
//     return "Welcome to your Clothing Store Dashboard!";
// })->middleware('auth')->name('dashboard');

Route::get('/dashboard', function(){
    return view('dashboard');
});

// ProductView routes
Route::get('/productsView', function () {
    return view('productsView.view');
})->name('productsView');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');  // ✅ This defines the route name "home"

// Product routes
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

//about page
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Cart routes
Route::post('/cart/add', [CartController::class, 'add'])->name('add.to.cart');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');


// Show Cart page
Route::post('/cart/update/{index}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove/{index}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout'); // optional

//home page
Route::get('/home', function () {
    return view('home');
})->name('home');

//registration page
Route::get('/register', function () {
    return view('register');
})->name('register');

//search page
Route::get('/dashboard/products', [ProductController::class, 'adminIndex'])->name('admin.products.index');
Route::get('/dashboard/products/search', [ProductController::class, 'adminSearch'])->name('admin.products.search');

Route::get('/products', [ProductController::class, 'userIndex'])->name('products.index');
Route::get('/products/search', [ProductController::class, 'userSearch'])->name('products.search');
