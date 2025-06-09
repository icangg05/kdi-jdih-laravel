<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\DokumenController;
use App\Http\Controllers\Frontend\InformasiHukumController;
use App\Http\Controllers\Frontend\PengumumanController;
use App\Livewire\Beranda;
use App\Livewire\Berita;
use App\Livewire\BeritaShow;
use App\Livewire\Dokumen;
use App\Livewire\DokumenShow;
use App\Livewire\InformasiHukum;
use App\Livewire\InformasiHukumShow;
use App\Livewire\Pengumuman;
use App\Livewire\PengumumanShow;
use App\Livewire\Profil;
use Illuminate\Support\Facades\Route;



// Auth route
Route::get('/backend', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/backend', [AuthController::class, 'authenticate'])->middleware('guest')->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


// Frontend route
Route::name('frontend.')->group(function () {
  Route::get('/', Beranda::class)->name('beranda');
  Route::get('/profil/{kategori}', Profil::class)->name('profil');

  Route::get('/pengumuman', Pengumuman::class)->name('pengumuman.index');
  Route::get('/pengumuman/{id}', PengumumanShow::class)->name('pengumuman.show');

  Route::get('/dokumen/{kategori}', Dokumen::class)->name('dokumen.index');
  Route::get('/dokumen/{kategori}/{id}', DokumenShow::class)->name('dokumen.show');

  Route::get('/informasi-hukum/jenis/{id}', InformasiHukum::class)->name('informasi-hukum.index');
  Route::get('/informasi-hukum/{id}', InformasiHukumShow::class)->name('informasi-hukum.show');

  Route::get('/berita', Berita::class)->name('berita.index');
  Route::get('/berita/{id}', BeritaShow::class)->name('berita.show');
});


// Route helper
Route::get('/tes', [DashboardController::class, 'downloadFile'])->name('tes');
Route::post('/download', [DashboardController::class, 'downloadFile'])->name('download_file');
Route::get('/exportdb', [DashboardController::class, 'exportDatabase'])->name('exrpot_db');
Route::get('/generate-wilayah', [DashboardController::class, 'generateWilayah'])
  ->middleware('auth')
  ->name('generate_wilayah');
