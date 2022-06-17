<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

// Music
Route::get('/hotel/edit/{id}', [HotelController::class, 'edit']);
Route::put('/hotel/edit/{id}', [HotelController::class, 'update']);
Route::get('/hotel', [HotelController::class, 'index']);
Route::get('/', [HotelController::class, 'home']);
Route::get('/hotel/add', [HotelController::class, 'create']);
Route::post('/hotel/add', [HotelController::class, 'store']);
Route::get('/hotel/{id}', [HotelController::class, 'show']);
Route::delete('/hotel/{id}', [HotelController::class, 'destroy']);