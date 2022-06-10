<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\JenisObatController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UsersController;

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

// Auth Controller
Route::get('login',[AuthController::class, 'login'])->name('login');
Route::get('register',[AuthController::class, 'register'])->name('register');

// Office Controller
Route::get('dashboard',[OfficeController::class, 'index'])->name('dashboard');
Route::get('obat',[OfficeController::class, 'obat'])->name('obat');
Route::get('penjualan',[OfficeController::class, 'penjualan'])->name('penjualan');
Route::get('users',[OfficeController::class, 'users'])->name('users');
Route::get('jenis_obat',[OfficeController::class, 'jenis_obat'])->name('jenis_obat');

// Obat Controllers
Route::get('obat/create',[ObatController::class, 'create'])->name('obat.create');
Route::get('obat/{obat}/edit',[ObatController::class, 'edit'])->name('obat.edit');
Route::post('obat/store',[ObatController::class, 'store'])->name('obat.store');
Route::post('obat/{obat}/update',[ObatController::class, 'update'])->name('obat.update');
Route::delete('obat/{obat}/destroy',[ObatController::class, 'destroy'])->name('obat.destroy');

// Jenis Obat Controllers
Route::get('jenis_obat/create',[JenisObatController::class, 'create'])->name('jenis_obat.create');
Route::get('jenis_obat/{jenis_obat}/edit',[JenisObatController::class, 'edit'])->name('jenis_obat.edit');
Route::post('jenis_obat/store',[JenisObatController::class, 'store'])->name('jenis_obat.store');
Route::post('jenis_obat/{jenis_obat}/update',[JenisObatController::class, 'update'])->name('jenis_obat.update');
Route::delete('jenis_obat/{jenis_obat}/destroy',[JenisObatController::class, 'destroy'])->name('jenis_obat.destroy');

// Penjualan Controllers
Route::get('penjualan/create',[PenjualanController::class, 'create'])->name('penjualan.create');
Route::get('penjualan/{penjualan}/edit',[PenjualanController::class, 'edit'])->name('penjualan.edit');
Route::post('penjualan/store',[PenjualanController::class, 'store'])->name('penjualan.store');
Route::post('penjualan/{penjualan}/update',[PenjualanController::class, 'update'])->name('penjualan.update');
Route::delete('penjualan/{penjualan}/destroy',[PenjualanController::class, 'destroy'])->name('penjualan.destroy');
// Users Controllers
Route::get('users/create',[UsersController::class, 'create'])->name('users.create');
Route::get('users/{users}/edit',[UsersController::class, 'edit'])->name('users.edit');
Route::post('users/store',[UsersController::class, 'store'])->name('users.store');
Route::post('users/{users}/update',[UsersController::class, 'update'])->name('users.update');
Route::delete('users/{users}/destroy',[UsersController::class, 'destroy'])->name('users.destroy');