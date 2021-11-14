<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\HomeController;

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

//dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/data-masuk', [DashboardController::class, 'dataMasuk']);

Route::get('/admin/data-vaksinasi', [DashboardController::class, 'dataVaksinasi']);


//akun
Route::get('/admin/akun', [AkunController::class, 'index']);

Route::get('/admin/akun/tambah-akun', [AkunController::class, 'tampilTambahAkun']);

Route::get('/admin/akun/edit-akun', [AkunController::class, 'tampilEditAkun']);

//Home
Route::get('/', [HomeController::class, 'index']);

//pendataan vaksinasi
Route::get('/pendataan-vaksinasi', [HomeController::class, 'tampilPendataan']);
Route::post('/pendataan-vaksinasi', [HomeController::class, 'tambahPendataan']);

//tentang vaksin
Route::get('/tentang-vaksin', [HomeController::class, 'tentangVaksin']);

//petunjuk
Route::get('/petunjuk', [HomeController::class, 'petunjuk']);