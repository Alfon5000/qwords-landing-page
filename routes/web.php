<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MembershipController;

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

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/bootcamps', BootcampController::class)->middleware('auth');

Route::resource('/memberships', MembershipController::class)->middleware('auth');

Route::resource('/visitors', VisitorController::class)->middleware('auth');
