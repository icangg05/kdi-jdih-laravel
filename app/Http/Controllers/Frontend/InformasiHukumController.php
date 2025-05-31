<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformasiHukumController extends Controller
{
  public function index($id)
  {
    $informasiHukum = DB::table('berita')
      ->orderBy('created_at', 'desc')
      ->paginate(9);

    return view('frontend.pages.informasi-hukum.informasi-hukum', compact(
      'informasiHukum',
    ));
  }
}
