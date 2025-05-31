<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
  public function index()
  {
    $pengumuman = DB::table('pengumuman')
      ->orderBy('created_at', 'desc')
      ->paginate(8);

    return view('frontend.pages.pengumuman.pengumuman', compact(
      'pengumuman'
    ));
  }

  public function viewById($id)
  {
    $pengumuman = DB::table('pengumuman')
      ->where('id', $id)
      ->first();
    abort_if(!$pengumuman, 404);

    // Query data berita
    $berita = DB::table('berita')
      ->where('status', 1)
      ->orderBy('created_at', 'desc')
      ->limit(2)
      ->get();

    // Query data video
    $video = DB::table('video')
      ->orderBy('created_at', 'desc')
      ->limit(3)
      ->get();

    return view('frontend.pages.pengumuman-view.pengumuman-view', compact(
      'pengumuman',
      'berita',
      'video'
    ));
  }
}
