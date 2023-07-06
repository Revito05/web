<?php

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

Route::get('/',[App\Http\Controllers\DashboardController::class, 'index']);


Route::get('/datamobil', function () {
    return view('datamobil');
});

Route::get('/home', function () {
    return view('home');
});

use App\Http\Controllers\mobilController;
Route::controller(mobilController::class)->group(function() {
    Route::get('mobil/', 'index');
    Route::get('mobil/add', 'add');
    Route::post('mobil/store', 'store');
    Route::get('mobil/edit/{id}', 'edit');
    Route::post('mobil/update/{id}', 'update');
    Route::get('mobil/delete/{id}', 'delete');
});
use App\Http\Controllers\kriteriaController;
Route::controller(kriteriaController::class)->group(function() {
    Route::get('kriteria/', 'index');
    Route::get('kriteria/add', 'add');
    Route::post('kriteria/store', 'store');
    Route::get('kriteria/edit/{id}', 'edit');
    Route::post('kriteria/update/{id}', 'update');
    Route::get('kriteria/delete/{id}', 'delete');
});
use App\Http\Controllers\alternatifController;
Route::controller(alternatifController::class)->group(function() {
    Route::get('alternatif/', 'index');
    Route::get('alternatif/add', 'add');
    Route::post('alternatif/store', 'store');
    Route::get('alternatif/edit/{id}', 'edit');
    Route::post('alternatif/update/{id}', 'update');
    Route::get('alternatif/delete/{id}', 'delete');
});
use App\Http\Controllers\HitungController;
Route::get('/hitung', [HitungController::class, 'hitung'])->name('hitung');