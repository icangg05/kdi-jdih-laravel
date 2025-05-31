<?php

use App\Http\Controllers\Frontend\BerandaController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\DokumenController;
use App\Http\Controllers\Frontend\InformasiHukumController;
use App\Http\Controllers\Frontend\PengumumanController;
use App\Http\Controllers\Frontend\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('frontend.beranda');
Route::get('/profil/{kategori}', [ProfilController::class, 'index'])->name('frontend.profil');
Route::get('/dokumen/{kategori}', [DokumenController::class, 'index'])->name('frontend.dokumen');
Route::get('/dokumen/{kategori}/{id}', [DokumenController::class, 'viewById'])->name('frontend.dokumen_view');
Route::get('/download/{file}', [DokumenController::class, 'downloadFile'])->name('download_file');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('frontend.pengumuman');
Route::get('/pengumuman/{id}', [PengumumanController::class, 'viewById'])->name('frontend.pengumuman_view');

Route::get('/berita', [BeritaController::class, 'index'])->name('frontend.berita');
Route::get('/berita/{id}', [BeritaController::class, 'viewById'])->name('frontend.berita_view');

Route::get('/informasi-hukum/{id}', [InformasiHukumController::class, 'index'])->name('frontend.informasi_hukum');

