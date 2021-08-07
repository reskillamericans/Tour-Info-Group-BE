<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [TourController::class, 'index']);

Route::get('/about-us', [TourController::class, 'about']);

Route::get('/travel', [TourController::class, 'travel']);

Route::get('/results', [TourController::class, 'results']);

Route::get('/signin', [UserController::class, 'signin']);

Route::get('/booking-success', [BookingController::class, 'bookingSuccess']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::post('/contact', [ContactController::class, 'send_email']);
