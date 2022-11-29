<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', [CarController::class, 'list'])->name('cars.list');
Route::get('/car/{id}', [CarController::class, 'one'])->name('cars.single');
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/car/store', [CarController::class, 'store'])->name('cars.store');

Route::get('/drivers', [DriverController::class, 'list'])->name('drivers.list');
Route::get('/drivers/{id}', [DriverController::class, 'one'])
  ->where('id', '[1-9]+')->name('driver.single');
