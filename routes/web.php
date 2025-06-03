<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\BeritaController as BackendBeritaController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\InformasiHukumController as BackendInformasiHukumController;
use App\Http\Controllers\Backend\PengumumanController as BackendPengumumanController;
use App\Http\Controllers\Backend\PeraturanController as BackendPeraturanController;
use App\Http\Controllers\Backend\VideoController as BackendVideoController;
use App\Http\Controllers\Frontend\BerandaController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\DokumenController;
use App\Http\Controllers\Frontend\InformasiHukumController;
use App\Http\Controllers\Frontend\PengumumanController;
use App\Http\Controllers\Frontend\ProfilController;
use Illuminate\Support\Facades\Route;



// Auth route
Route::get('/backend', [AuthController::class, 'login'])
  ->middleware('guest')->name('login');
Route::post('/backend', [AuthController::class, 'authenticate'])
  ->middleware('guest')->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])
  ->middleware('auth')->name('logout');


// Frontend route
Route::get('/download/{file}', [DokumenController::class, 'downloadFile'])
  ->name('download_file');

Route::name('frontend.')->group(function () {
  Route::get('/', [BerandaController::class, 'index'])
    ->name('beranda');

  Route::get('/profil/{kategori}', [ProfilController::class, 'index'])
    ->name('profil');

  Route::get('/dokumen/{kategori}', [DokumenController::class, 'index'])
    ->name('dokumen');
  Route::get('/dokumen/{kategori}/{id}', [DokumenController::class, 'viewById'])
    ->name('dokumen_view');

  Route::get('/pengumuman', [PengumumanController::class, 'index'])
    ->name('pengumuman');
  Route::get('/pengumuman/{id}', [PengumumanController::class, 'viewById'])
    ->name('pengumuman_view');

  Route::get('/berita', [BeritaController::class, 'index'])
    ->name('berita');
  Route::get('/berita/{id}', [BeritaController::class, 'viewById'])
    ->name('berita_view');

  Route::get('/informasi-hukum/{id}', [InformasiHukumController::class, 'index'])
    ->name('informasi_hukum');
});


// Dashboard route
Route::middleware('auth')->prefix('dashboard')->name('backend.')->group(function () {
  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
  Route::resource('/peraturan', BackendPeraturanController::class);
  Route::resource('/pengumuman', BackendPengumumanController::class);
  Route::resource('/berita', BackendBeritaController::class);
  Route::resource('/video', BackendVideoController::class);
  Route::resource('/informasi-hukum', BackendInformasiHukumController::class);
  Route::resource('/informasi-hukum', BackendInformasiHukumController::class);
});


// Route helper
Route::post('/download', [DashboardController::class, 'downloadFile'])->name('download_file');
Route::get('/exportdb', [DashboardController::class, 'exportDatabase'])->name('exrpot_db');
Route::get('/generate-wilayah', [DashboardController::class, 'generateWilayah'])->name('generate_wilayah');
