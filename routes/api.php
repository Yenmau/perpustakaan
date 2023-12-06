<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Buku
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/{kode_buku}', [BukuController::class, 'show']);
Route::post('/buku/store', [BukuController::class, 'store']);
Route::put('/buku/update/{kode_buku}', [BukuController::class, 'update']);
Route::delete('/buku/destroy/{kode_buku}', [BukuController::class, 'destroy']);

//Anggota
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::post('/anggota/store', [AnggotaController::class, 'store']);
Route::put('/anggota/update/{nomor_anggota}', [AnggotaController::class, 'update']);
Route::delete('/anggota/destroy/{nomor_anggota}', [AnggotaController::class, 'destroy']);

//Peminjaman
Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::post('/peminjaman/store', [PeminjamanController::class, 'store']);
Route::put('/peminjaman/update/{kode_pinjam}', [PeminjamanController::class, 'update']);
Route::put('/peminjaman/kembalikan_buku/{kode_pinjam}', [PeminjamanController::class, 'simpan_kembali']);
Route::delete('/peminjaman/destroy/{kode_pinjam}', [PeminjamanController::class, 'destroy']);
