<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Middleware\AdminMiddleware; // 👈 IMPORTANT: Import your new security guard

/*
|--------------------------------------------------------------------------
| Public Portfolio Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('portfolio'); 
})->name('home');

Route::get('/about', function () {
    return view('about'); 
})->name('about');

// Public Projects Page (Visible to everyone, fetches data from DB)
Route::get('/projects', [AdminProjectController::class, 'index'])->name('projects.index');

Route::get('/contact', function () {
    return view('contact'); 
})->name('contact');

/*
|--------------------------------------------------------------------------
| Regular User Authentication (Register/Login)
|--------------------------------------------------------------------------
*/

Route::get('register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login');

// Regular User Dashboard
Route::get('portfolio', function(){
    return view('portfolio');
})->middleware('auth')->name('portfolio');

/*
|--------------------------------------------------------------------------
| ADMIN PANEL (SECURED)
|--------------------------------------------------------------------------
*/

// 1. Admin Login Page (Public, so admins can find where to log in)
Route::get('/admin/login', function () {
    return view('admin.adminlogin');
})->name('admin.login');

// 2. Admin Login Logic (Processes the form)
Route::post('/admin/login', [AdminProjectController::class, 'login'])->name('admin.login.submit');

// 3. SECURE ZONE: Only accessible if Logged In + Is Admin
// We use the 'prefix' admin, so all URLs start with /admin/...
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    
    // Admin Dashboard
    Route::get('/dashboard', [AdminProjectController::class, 'dashboard'])->name('admin.dashboard');

    // Admin Logout
    Route::post('/logout', [AdminProjectController::class, 'logout'])->name('admin.logout');

    // CRUD: Create New Project
    Route::post('/projects', [AdminProjectController::class, 'store'])->name('admin.projects.store');

    // CRUD: Edit Project
    Route::get('/projects/{id}/edit', [AdminProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{id}', [AdminProjectController::class, 'update'])->name('admin.projects.update');

    // CRUD: Delete Project
    Route::delete('/projects/{id}', [AdminProjectController::class, 'destroy'])->name('admin.projects.destroy');
});