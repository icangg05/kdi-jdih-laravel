<?php

use App\Http\Controllers\Backend\ArtikelHukumController;
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
use App\Http\Controllers\Backend\MonografiController;
use App\Http\Controllers\Backend\NarasiController;
use App\Http\Controllers\Backend\ProfilController;
use App\Http\Controllers\Backend\PutusanController;


// Dashboard route
Route::middleware('auth')->prefix('dashboard')->name('backend.')->group(function () {
  // Route profil admin
  Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil');
  Route::post('/change-password', [ProfilController::class, 'changePassword'])
    ->name('change-password');
  Route::post('/change-image-profil', [ProfilController::class, 'changeImageProfil'])
    ->name('change-image-profil');

  Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
  Route::resource('/peraturan', PeraturanController::class);
  Route::resource('/monografi', MonografiController::class);
  Route::resource('/artikel', ArtikelHukumController::class);
  Route::resource('/putusan', PutusanController::class);
  Route::resource('/informasi-hukum', InformasiHukumController::class);
  Route::resource('/pengumuman', PengumumanController::class);
  Route::resource('/berita', BeritaController::class);
  Route::resource('/video', VideoController::class);


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


  // Route narasi
  Route::get('/narasi', [NarasiController::class, 'edit'])
    ->name('narasi.edit');
  Route::patch('/narasi/{id}/update', [NarasiController::class, 'update'])
    ->name('narasi.update');


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


  // Route redirect with session
  Route::get('/back/{idDokumen}/{tabActive}', function ($idDokumen, $tabActive) {
    return redirect()->route('backend.peraturan.show', $idDokumen)->with('tabActive', $tabActive);
  })->name('redirect-session');


  // Route redirect with session
  Route::get('/view/{route}/{idDokumen}/{tabActive}', function ($route, $idDokumen, $tabActive) {
    return redirect()->route($route, $idDokumen)->with('tabActive', $tabActive);
  })->name('redirect-view');
});
