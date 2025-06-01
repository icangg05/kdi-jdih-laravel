<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
  public function index()
  {
    $pengumuman = DB::table('pengumuman')
      ->orderBy('created_at', 'desc')
      ->paginate(15);

    return view('backend.pages.pengumuman.pengumuman', compact(
      'pengumuman'
    ));
  }

  public function create()
  {
    return view('backend.pages.pengumuman-create.pengumuman-create');
  }
}
