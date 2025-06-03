<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class PeraturanController extends Controller
{
  protected string $docDirectory;
  protected string $imgDirectory;

  public function __construct()
  {
    $this->imgDirectory = config('app.img_directory');
    $this->docDirectory = config('app.doc_directory');
  }


  public function index()
  {
    $peraturan = DB::table('document')
      ->where('tipe_dokumen', 1)
      ->leftJoin('data_status', 'document.id', '=', 'data_status.id_dokumen')
      ->orderBy('created_at', 'desc')
      ->select('document.*', 'data_status.status_peraturan')
      ->paginate(15);

    return view('backend.pages.peraturan.peraturan', compact(
      'peraturan',
    ));
  }


  public function create()
  {
    $selectTipeDokumen = DB::table('document_type')
      ->where('parent_id', 1)
      ->get()
      ->map(fn($item) => ['label' => $item->name, 'value' => $item->name]);

    $selectTempatPenetapan = Storage::exists('data_wilayah.json')
      ? json_decode(Storage::get('data_wilayah.json'), true) : [];

    $selectBahasa = DB::table('bahasa')
      ->get()
      ->map(fn($item) => ['label' => $item->name, 'value' => $item->name])->toArray();

    $selectUrusanPemerintahan = DB::table('urusan_pemerintahan')
      ->get()
      ->map(fn($item) => ['label' => $item->name, 'value' => $item->name])->toArray();

    $selectBidangHukum = DB::table('bidang_hukum')
      ->get()
      ->map(fn($item) => ['label' => $item->name, 'value' => $item->name])->toArray();

    return view('backend.pages.peraturan-form.peraturan-form', compact(
      'selectTipeDokumen',
      'selectTempatPenetapan',
      'selectBahasa',
      'selectUrusanPemerintahan',
      'selectBidangHukum',
    ));
  }


  public function store(Request $request)
  {
    dd($request->all());
  }
}
