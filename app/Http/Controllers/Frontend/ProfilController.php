<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
  public function index($kategori)
  {
    if ($kategori === 'sekilas-sejarah') {
      $title = "Sekilas Sejarah";
      $data  = DB::table('sejarah')->first();
    } elseif ($kategori === 'dasar-hukum') {
      $title = "Dasar Hukum";
      $data  = DB::table('dasar_hukum')->get();
    } elseif ($kategori === 'visi') {
      $title = "Visi";
      $data  = DB::table('visi_misi')->first();
    } elseif ($kategori === 'misi') {
      $title = "Misi";
      $data  = DB::table('visi_misi')->first();
    } elseif ($kategori === 'sto') {
      $title = "Struktur Organisasi";
      $data  = null;
    } else {
      return abort(404);
    }

    return view('frontend.pages.profil.profil', compact('title', 'data'));
  }
}
