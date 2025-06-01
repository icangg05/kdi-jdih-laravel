<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeraturanController extends Controller
{
  public function index()
  {
    $peraturan = DB::table('document')
      ->where('tipe_dokumen', 1)
      ->leftJoin('data_status', 'document.id', '=', 'data_status.id_dokumen')
      ->orderBy('created_at', 'desc')
      ->select('document.*', 'data_status.status_peraturan')
      ->paginate(15);
    // dd($peraturan);

    return view('backend.pages.peraturan.peraturan', compact(
      'peraturan'
    ));
  }

  public function create()
  {
    return view('backend.pages.pengumuman-create.pengumuman-create');
  }
}
