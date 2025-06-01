<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
  public function index()
  {
    $video = DB::table('video')
      ->orderBy('created_at', 'desc')
      ->paginate(15);

    return view('backend.pages.video.video', compact(
      'video'
    ));
  }

  public function create()
  {
    return view('backend.pages.pengumuman-create.pengumuman-create');
  }
}
