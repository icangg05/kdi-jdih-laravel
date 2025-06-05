<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\BeritaController as BackendBeritaController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\InformasiHukumController as BackendInformasiHukumController;
use App\Http\Controllers\Backend\PengumumanController as BackendPengumumanController;
use App\Http\Controllers\Backend\PeraturanController as BackendPeraturanController;
use App\Http\Controllers\Backend\VideoController as BackendVideoController;
use App\Http\Controllers\BackendFormController;
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

  Route::get('/informasi-hukum/{id}', [InformasiHukumController::class, 'index'])
    ->name('informasi_hukum');

  Route::get('/berita', [BeritaController::class, 'index'])
    ->name('berita');
  Route::get('/berita/{id}', [BeritaController::class, 'viewById'])
    ->name('berita_view');
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

  // Route form data pengarang
  Route::get('/peraturan/{idDokumen}/create-teu', [BackendFormController::class, 'createTEU'])->name('form_teu.create');
  Route::post('/peraturan/{idDokumen}/store-teu', [BackendFormController::class, 'storeTEU'])->name('form_teu.store');
  Route::delete('/peraturan/{idDokumen}/{idDataPengarang}/destroy-teu', [BackendFormController::class, 'destroyTEU'])->name('form_teu.destroy');

  // Route form data subjek
  Route::get('/peraturan/{idDokumen}/create-subjek', [BackendFormController::class, 'createSubjek'])->name('form_subjek.create');
  Route::get('/peraturan/{idDokumen}/edit-subjek/{idSubjek}', [BackendFormController::class, 'editSubjek'])->name('form_subjek.edit');
  Route::patch('/peraturan/{idDokumen}/update-subjek/{idSubjek}', [BackendFormController::class, 'updateSubjek'])->name('form_subjek.update');
  Route::post('/peraturan/{idDokumen}/store-subjek', [BackendFormController::class, 'storeSubjek'])->name('form_subjek.store');
  Route::delete('/peraturan/{idDokumen}/{idDataPengarang}/destroy-subjek', [BackendFormController::class, 'destroySubjek'])->name('form_subjek.destroy');
});


// Route helper
Route::get('/tes', [DashboardController::class, 'downloadFile'])->name('tes');
Route::post('/download', [DashboardController::class, 'downloadFile'])->name('download_file');
Route::get('/exportdb', [DashboardController::class, 'exportDatabase'])->name('exrpot_db');
Route::get('/generate-wilayah', [DashboardController::class, 'generateWilayah'])->name('generate_wilayah');
