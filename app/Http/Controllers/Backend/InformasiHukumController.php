<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformasiHukumController extends Controller
{
  public function index()
  {
    $informasiHukum = DB::table('informasi_hukum')
      ->orderBy('created_at', 'desc')
      ->paginate(15);
    // dd($informasiHukum);

    return view('backend.pages.informasi-hukum.informasi-hukum', compact(
      'informasiHukum'
    ));
  }

  public function create()
  {
    return view('backend.pages.pengumuman-create.pengumuman-create');
  }
}
