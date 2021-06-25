<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;

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

Route::get('/', [TourController::class, 'view_all_tours']);

Route::get('/location/{location}', [TourController::class, 'view_tours_by_location']);

Route::get('/search', [TourController::class, 'redirect_search_tour_by_location'])->name('search_location');

Route::get('/search/{search_title}/{search_location}', [TourController::class, 'search_tour_by_location'])->name('search');
