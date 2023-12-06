<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('login.index');
}); 

Route::get('login', [SessionController::class, 'index'])->middleware('isDashboard');
Route::post('login/proses', [SessionController::class, 'login']);
Route::get('logout', [SessionController::class, 'logout']);


Route::resource('buku', BukuController::class);
Route::resource('pinjam', PeminjamanController::class);
Route::resource('anggota', AnggotaController::class);
Route::resource('dashboard', DashboardController::class)->middleware('isLogin');

Route::get('pinjam/{id}/kembali', [PeminjamanController::class, 'kembali'])->name('pinjam.kembali');
Route::put('pinjam/{id}/simpan_kembali', [PeminjamanController::class, 'simpan_kembali'])->name('pinjam.simpan_kembali');

// Route::get('anggota/cari', [AnggotaController::class, 'cari']);

