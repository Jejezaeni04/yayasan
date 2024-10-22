<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.landingpage');
});

Route::get('/register', function () {
    return view('user.register');
});

Route::get('/reset', function () {
    return view('user.reset');
});

Route::get('/test', function () {
    return view('user.test');
});

Route::get('/login', function () {
    return view('user.login');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
});

use App\Livewire\Counter;
 
Route::get('/counter', Counter::class);

Route::get('/profile', function () {
    return view('user.profile');
});