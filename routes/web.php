<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;


Route::get('/', function () {
    return view('template');
});

Route::view('tugas-tutorial-css','tugas-tutorial-css');
Route::view('FEC5026231220-html-dasar','FEC5026231220-html-dasar');
Route::view('boostrap-minggu-3','boostrap-minggu-3');
Route::view('materialC-minggu-4','materialC-minggu-4');
Route::view('tugas-linktree','tugas-linktree');
Route::view('ETS','ETS');
Route::view('template', 'template');


// Pegawai
use App\Http\Controllers\PegawaiDBController;
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/input', [PegawaiDBController::class, 'input']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::post('/pegawai/proses', [PegawaiDBController::class, 'proses']);

// Buku Tulis
use App\Http\Controllers\BukuTulisController;
Route::get('/bukutulis', [BukuTulisController::class ,'index']);
Route::get('/bukutulis/tambah', [BukuTulisController::class, 'tambah']);
Route::get('/bukutulis/edit/{id}',[BukuTulisController::class, 'edit']);
Route::get('/bukutulis/hapus/{id}', [BukuTulisController::class, 'hapus']);
Route::get('/bukutulis/cari', [BukuTulisController::class, 'cari']);
Route::get('/bukutulis/input', [BukuTulisController::class, 'input']);
Route::post('/bukutulis/update',[BukuTulisController::class, 'update']);
Route::post('/bukutulis/store', [BukuTulisController::class, 'store']);
Route::post('/bukutulis/proses', [BukuTulisController::class, 'proses']);
Route::post('/bukutulis/proses', [BukuTulisController::class, 'proses']);



// Karyawan
use App\Http\Controllers\KaryawanController;
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);

// Keranjang Belanja
use App\Http\Controllers\KeranjangBelanjaController;
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjang/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::get('/keranjang/hapus{id}', [KeranjangBelanjaController::class, 'hapus']);
Route::post('/keranjang/store', [KeranjangBelanjaController::class, 'store']);

// Page Counter
use App\Http\Controllers\PageCounterDBController;
Route::get('/pagecounter', [PageCounterDBController::class, 'index']);


