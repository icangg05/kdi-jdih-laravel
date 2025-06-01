<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
  public function index()
  {
    $berita = DB::table('berita')
      ->orderBy('created_at', 'desc')
      ->paginate(15);

    return view('backend.pages.berita.berita', compact(
      'berita'
    ));
  }

  public function create()
  {
    return view('backend.pages.pengumuman-create.pengumuman-create');
  }
}
