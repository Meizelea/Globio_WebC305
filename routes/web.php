<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio'); // your home page
})->name('home');

Route::get('/about', function () {
    return view('about'); 
})->name('about');

Route::get('/projects', function () {
    return view('projects'); 
})->name('projects');

Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');

Route::get('register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('dashboard', function(){
    return view('dashboard');
})->middleware('auth')->name('dashboard');

