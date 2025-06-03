<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\DosenController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('tugas-tutorial-css','tugas-tutorial-css');
Route::view('FEC5026231220-html-dasar','FEC5026231220-html-dasar');
Route::view('boostrap-minggu-3','boostrap-minggu-3');
Route::view('materialC-minggu-4','materialC-minggu-4');
Route::view('tugas-linktree','tugas-linktree');
Route::view('ETS','ETS');


// // Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
// Route::get('/formulir', [PegawaiController::class, 'formulir']);
// Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
// Route::get('/dosen', [DosenController::class, 'index']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);