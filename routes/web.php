<?php

use App\Http\Controllers\Transaksi;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MotorController;
use App\Http\Livewire\TransaksiLivewire;
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

Route::resource('/transaksi', TransaksiController::class);
Route::resource('/motors', MotorController::class);
// Route::get('/livewiretransaksi', TransaksiLivewire::class)->name('transaksi');
// Route::resource('motors', 'MotorController');