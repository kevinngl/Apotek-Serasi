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
Route::get('obat/edit',[ObatController::class, 'edit'])->name('obat.edit');
Route::get('obat/delete',[ObatController::class, 'destroy'])->name('obat.delete');

// Jenis Obat Controllers
Route::get('jenis_obat/create',[JenisObatController::class, 'create'])->name('jenis_obat.create');
Route::get('jenis_obat/edit',[JenisObatController::class, 'edit'])->name('jenis_obat.edit');

// Penjualan Controllers
Route::get('penjualan/create',[PenjualanController::class, 'create'])->name('penjualan.create');
Route::get('penjualan/edit',[penjualanController::class, 'edit'])->name('penjualan.edit');

// Users Controllers
Route::get('users/create',[UsersController::class, 'create'])->name('users.create');
Route::get('users/edit',[UsersController::class, 'edit'])->name('users.edit');
