<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;

Route::get('/Mahasiswa', [MahasiswaController::class, 'Mahasiswa']);
Route::get('/Mahasiswa/{id}/edit', [MahasiswaController::class, 'editMahasiswa']);
Route::get('/Mahasiswa/create', [MahasiswaController::class, 'createMahasiswa']);
Route::post('/Mahasiswa/tambah', [MahasiswaController::class, 'tambahMahasiswa']);
Route::post('/Mahasiswa/ubah/{id}', [MahasiswaController::class, 'ubahMahasiswa']);
Route::get('/Mahasiswa/delete/{id}', [MahasiswaController::class, 'deleteMahasiswa']);
Route::get('/Mahasiswa/{id}', [MahasiswaController::class, 'showMahasiswa']);

Route::get('/Dosen', [DosenController::class, 'Dosen']);
Route::get('/Dosen/{id}/edit', [DosenController::class, 'editDosen']);
Route::get('/Dosen/create', [DosenController::class, 'createDosen']);
Route::post('/Dosen/tambah', [DosenController::class, 'tambahDosen']);
Route::post('/Dosen/ubah/{id}', [DosenController::class, 'ubahDosen']);
Route::get('/Dosen/delete/{id}', [DosenController::class, 'deleteDosen']);
Route::get('/Dosen/{id}', [DosenController::class, 'showDosen']);

route::get('/Jadwal', [JadwalController::class, 'Jadwal']);
route::get('/editJadwal', [JadwalController::class, 'ediJadwal']);
route::get('/showJadwal', [JadwalController::class, 'showJadwal']);