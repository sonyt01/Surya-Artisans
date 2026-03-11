<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('/dashboard');
    }

    return back()->with('error', 'Invalid credentials');
});

Route::get('/dashboard', function () {
    return "Welcome, you are logged in!";
})->middleware('auth');
