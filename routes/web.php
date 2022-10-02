<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
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

// Welcome
Route::get('/', [WelcomeController::class, 'index']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Pesan
Route::get('pesan/{barang}', [PesanController::class, 'index'])->middleware('auth')->name('pesan');
Route::post('pesan/{barang}', [PesanController::class, 'store'])->middleware('auth')->name('pesan.store');

// Checkout
Route::get('checkout', [PesanController::class, 'checkout'])->middleware('auth')->name('checkout');
Route::delete('checkout/{pesanan_detail}', [PesanController::class, 'destroy'])->middleware('auth')->name('destroy');
Route::post('konfirmasi', [PesanController::class, 'index'])->middleware('auth')->name('konfirmasi');


// Profile
Route::get('profile/{user}', [ProfileController::class, 'index'])->middleware('auth')->name('profile');
Route::put('profile/{user}', [ProfileController::class, 'update'])->middleware('auth')->name('profile.update');

require __DIR__.'/auth.php';
