<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
  public function index()
  {
    $berita = DB::table('berita')
      ->orderBy('created_at', 'desc')
      ->paginate(9);

    return view('frontend.pages.berita.berita', compact(
      'berita',
    ));
  }

  public function viewById($id)
  {
    $berita = DB::table('berita')
      ->where('id', $id)
      ->first();
    abort_if(!$berita, 404);

    return view('frontend.pages.berita-view.berita-view', compact(
      'berita',
    ));
  }
}
