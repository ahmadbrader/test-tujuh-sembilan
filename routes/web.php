<?php

use App\Http\Controllers\NasabahController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TransaksiController;
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
    return redirect('/nasabah');
});

// Nasabah
Route::get('nasabah', [NasabahController::class, 'index']);
Route::get('nasabah/add', [NasabahController::class, 'add']);
Route::post('nasabah/save', [NasabahController::class, 'save']);

// Transaksi
Route::get('transaksi', [TransaksiController::class, 'index']);
Route::get('transaksi/add', [TransaksiController::class, 'add']);
Route::post('transaksi/save', [TransaksiController::class, 'save']);

// Report

Route::get('report', [ReportController::class, 'index']);
