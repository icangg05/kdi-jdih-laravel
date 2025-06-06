<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\InformasiHukumController;
use App\Http\Controllers\Backend\PengumumanController;
use App\Http\Controllers\Backend\PeraturanController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Backend\FormController;
use App\Http\Controllers\Backend\FormPeraturanTerkaitController;
use App\Http\Controllers\Backend\BeritaController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FormHasilUjiMateriController;
use App\Http\Controllers\Backend\FormStatusController;
use App\Http\Controllers\BackendFormHasilUjiMateriController;

// Dashboard route
Route::middleware('auth')->prefix('dashboard')->name('backend.')->group(function () {
  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
  Route::resource('/peraturan', PeraturanController::class);
  Route::resource('/pengumuman', PengumumanController::class);
  Route::resource('/berita', BeritaController::class);
  Route::resource('/video', VideoController::class);
  Route::resource('/informasi-hukum', InformasiHukumController::class);

  // Route form data teu
  Route::get('/peraturan/{idDokumen}/create-teu', [FormController::class, 'createTEU'])
    ->name('form_teu.create');
  Route::post('/peraturan/{idDokumen}/store-teu', [FormController::class, 'storeTEU'])
    ->name('form_teu.store');
  Route::delete('/peraturan/{idDokumen}/{idDataPengarang}/destroy-teu', [FormController::class, 'destroyTEU'])
    ->name('form_teu.destroy');

  // Route form data subjek
  Route::get('/peraturan/{idDokumen}/create-subjek', [FormController::class, 'createSubjek'])
    ->name('form_subjek.create');
  Route::get('/peraturan/{idDokumen}/edit-subjek/{idSubjek}', [FormController::class, 'editSubjek'])
    ->name('form_subjek.edit');
  Route::patch('/peraturan/{idDokumen}/update-subjek/{idSubjek}', [FormController::class, 'updateSubjek'])
    ->name('form_subjek.update');
  Route::post('/peraturan/{idDokumen}/store-subjek', [FormController::class, 'storeSubjek'])->name('form_subjek.store');
  Route::delete('/peraturan/{idDokumen}/{idDataPengarang}/destroy-subjek', [FormController::class, 'destroySubjek'])
    ->name('form_subjek.destroy');

  // Route form peraturan terkait
  Route::prefix('peraturan-terkait/{idDokumen}')->group(function () {
    Route::resource('form-peraturan-terkait', FormPeraturanTerkaitController::class)->except('index');
  });

  // Route form hasil uji materi
  Route::prefix('hasil-uji-materi/{idDokumen}')->group(function () {
    Route::resource('form-hasil-uji-materi', FormHasilUjiMateriController::class)->except('index');
  });

  // Route form keterangan status peraturan
  Route::prefix('status/{idDokumen}')->group(function () {
    Route::resource('form-status', FormStatusController::class)->except('index');
  });
});
