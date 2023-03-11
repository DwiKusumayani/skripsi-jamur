<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/ganti-status-alat/{id}/{alat}/{status}', [App\Http\Controllers\HomeController::class, 'gantiStatusAlat']);
Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');
Route::get('/get-jamur/{id}', [App\Http\Controllers\HomeController::class, 'getDataJamur']);

Route::get('/get-suhu-kelembapan/{id}', [App\Http\Controllers\HomeController::class, 'getDataSuhuDanKelembapan']);

Route::resource('jamur',App\Http\Controllers\JamurController::class);
Route::resource('monitoring-jamur',App\Http\Controllers\MonitoringJamurController::class);
Route::resource('kendali-alat',App\Http\Controllers\KendaliAlatController::class);
