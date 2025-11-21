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

