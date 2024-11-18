<?php

use App\Http\Controllers\ParkingController;
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


Route::controller(ParkingController::class)->group(function (){
    Route::get('/', 'home') ->name('parking.home');
    Route::get('/parking/sector1', 'sector1')->name('parking.sector1');
    Route::get('/parking/sector2', 'sector2')->name('parking.sector2');
    Route::get('/parking/sector3', 'sector3')->name('parking.sector3');
    Route::get('/parking/freeParking', 'freeParking')->name('parking.freeParking');
});