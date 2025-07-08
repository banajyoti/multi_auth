<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\Admin\Auth\AdminRegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserAuthController::class, 'login']);
Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');

Route::get('/register', [UserRegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserRegisterController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');
});

// ADMIN
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

     Route::get('/register', [AdminRegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AdminRegisterController::class, 'register']);

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });
});

