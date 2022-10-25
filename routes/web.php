<?php

use App\Http\Controllers\ResortController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;

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


Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::resource('resorts',ResortController::class);

Route::get('bookings', [BookingController::class,'index'])->name('bookings.index');
Route::get('resorts/{resort}/bookings', [BookingController::class, 'create'])->name('bookings.create');
Route::post('resorts/{resort}/bookings', [BookingController::class, 'store'])->name('bookings.store');

