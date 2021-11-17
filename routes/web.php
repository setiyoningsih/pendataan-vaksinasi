<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataVaksinasiController;
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

//login
Route::get('/admin/login', [AuthController::class, 'index']);
Route::post('/admin/login', [AuthController::class, 'login']);

//logout
Route::get('/logout', function()
{
	auth()->logout();
	return redirect('/login');
});

//dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index']);

//data masuk
Route::get('/admin/data-masuk', [DashboardController::class, 'dataMasuk']);

Route::get('/admin/data-masuk/valid/{id}', [DashboardController::class, 'isValid']);

//data vaksinasi
Route::get('/admin/data-vaksinasi', [DataVaksinasiController::class, 'index']);

Route::get('/admin/data-vaksinasi/tambah', [DataVaksinasiController::class, 'tampilTambahVaksinasi']);
Route::post('/admin/data-vaksinasi/tambah', [DataVaksinasiController::class, 'tambahVaksinasi']);

Route::get('/admin/data-vaksinasi/edit/{id}', [DataVaksinasiController::class, 'tampilEditVaksinasi']);
Route::post('/admin/data-vaksinasi/edit/{id}', [DataVaksinasiController::class, 'editVaksinais']);

Route::get('/admin/data-vaksinasi/hapus/{id}', [DataVaksinasiController::class, 'hapusVaksinasi']);

//akun
Route::get('/admin/akun', [AkunController::class, 'index']);

Route::get('/admin/akun/tambah', [AkunController::class, 'tampilTambahAkun']);
Route::post('/admin/akun/tambah', [AkunController::class, 'tambahAkun']);

Route::get('/admin/akun/edit/{id}', [AkunController::class, 'tampilEditAkun']);
Route::post('/admin/akun/edit/{id}', [AkunController::class, 'editAkun']);

Route::get('/admin/akun/profil/{id}', [AkunController::class, 'tampilProfilAkun']);

Route::get('/admin/akun/hapus/{id}', [AkunController::class, 'hapusAkun']);


//Home
Route::get('/', [HomeController::class, 'index']);

//pendataan vaksinasi
Route::get('/pendataan-vaksinasi', [HomeController::class, 'tampilPendataan']);
Route::post('/pendataan-vaksinasi', [HomeController::class, 'tambahPendataan']);

//tentang vaksin
Route::get('/tentang-vaksin', [HomeController::class, 'tentangVaksin']);

//petunjuk
Route::get('/petunjuk', [HomeController::class, 'petunjuk']);