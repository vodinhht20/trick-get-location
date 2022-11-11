<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
// Route::get('/signup', [AuthController::class, 'signupForm'])->name('signup');
// Route::get('/reset-password', [AuthController::class, 'resetPassForm'])->name('resetPass');
Route::get('/', [HomeController::class, 'index'])->name('index-location');
Route::post('/post-location', [HomeController::class, 'store'])->name('post-location');