<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\CssSelector\Node\SelectorNode;

class DokumenController extends Controller
{
  public function index(Request $request, $kategori)
  {
    if ($kategori === 'peraturan') {
      $title = 'Peraturan dan Keputusan';
      $data  = DB::table('document')->where('tipe_dokumen', 1)
        ->leftJoin('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->select('document.*', 'data_lampiran.judul_lampiran', 'data_lampiran.dokumen_lampiran');
      $tipeDokumen = DB::table('document_type')->where('parent_id', 1)->get();
      //
    } elseif ($kategori === 'monografi') {
      $title       = 'Monografi Hukum';
      $data        = DB::table('document')->where('tipe_dokumen', 2)
        ->leftJoin('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->select('document.*', 'data_lampiran.judul_lampiran', 'data_lampiran.dokumen_lampiran');
      $tipeDokumen = DB::table('document_type')->where('parent_id', 0)->get();
      //
    } elseif ($kategori === 'artikel') {
      $title       = 'Artikel / Majalah Hukum';
      $data        = DB::table('document')->where('tipe_dokumen', 3)
        ->leftJoin('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->select('document.*', 'data_lampiran.judul_lampiran', 'data_lampiran.dokumen_lampiran');
      $tipeDokumen = DB::table('document_type')->where('parent_id', 0)->get();
      //
    } elseif ($kategori === 'putusan') {
      $title       = 'Putusan';
      $data        = DB::table('document')->where('tipe_dokumen', 4)
        ->leftJoin('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->select('document.*', 'data_lampiran.judul_lampiran', 'data_lampiran.dokumen_lampiran');
      $tipeDokumen = DB::table('document_type')->where('parent_id', 4)->get();
      //
    } else {
      return abort(404);
    }

    // User search input
    if ($request->q != '')
      $data = $data->where('judul', 'like', "%$request->q%");
    // Filter search
    if ($request->jenis != '')
      $data = $data->where('jenis_peraturan', $request->jenis);
    if ($request->tahun != '')
      $data = $data->where('tahun_terbit', $request->tahun);
    if ($request->status != '')
      $data = $data->where('status_terakhir', $request->status);
    if ($request->nomor != '')
      $data = $data->where('nomor_peraturan', $request->nomor);

    // Paginate 6 item perpage
    $data = $data->orderBy('created_at', 'desc')->paginate(6);
    // dd($data->first());

    return view('frontend.pages.dokumen.dokumen', compact(
      'kategori',
      'title',
      'data',
      'tipeDokumen'
    ));
  }

  public function viewById($kategori, $id)
  {
    $eksemplar = null;
    $data      = (array) DB::table('document')
      ->where('document.id', $id)
      ->leftJoin('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
      ->select('document.*', 'data_lampiran.judul_lampiran', 'data_lampiran.dokumen_lampiran')
      ->first();

    if ($kategori === 'peraturan') {
      $title = 'Peraturan dan Keputusan';
    } elseif ($kategori === 'monografi') {
      $title     = 'Monografi Hukum';
      $eksemplar = DB::table('eksemplar')->where('id_dokumen', $data['id'])->get();
    } elseif ($kategori === 'artikel') {
      $title = 'Artikel / Majalah Hukum';
    } elseif ($kategori === 'putusan') {
      $title = 'Putusan';
    } else {
      return abort(404);
    }

    abort_if(!$data, 404);

    $subjek = DB::table('data_subyek')->where('id_dokumen', $data['id'])->get();
    $dataPengarang = DB::table('data_pengarang')
      ->where('data_pengarang.id_dokumen', $data['id'])
      ->join('pengarang', 'data_pengarang.nama_pengarang', 'pengarang.id')
      ->join('tipe_pengarang', 'data_pengarang.tipe_pengarang', '=', 'tipe_pengarang.id')
      ->join('jenis_pengarang', 'data_pengarang.jenis_pengarang', '=', 'jenis_pengarang.id')
      ->select('data_pengarang.*', 'pengarang.name as nama_pengarang', 'tipe_pengarang.name as tipe_pengarang', 'jenis_pengarang.name as jenis_pengarang')
      ->get();
    $dataStatus = DB::table('data_status')
      ->where('id_dokumen', $data['id'])
      ->first();

    $peraturanTerkait = DB::table('peraturan_terkait')
      ->where('id_dokumen', $data['id'])
      ->get();
    $dokumenTerkait = DB::table('document_terkait')
      ->where('id_dokumen', $data['id'])
      ->get();
    $hasilUjiMateri = DB::table('hasil_uji_materi')
      ->where('id_dokumen', $data['id'])
      ->get();

    return view('frontend.pages.dokumen-view.dokumen-view', compact(
      'title',
      'kategori',
      'data',
      'subjek',
      'dataPengarang',
      'dataStatus',
      'eksemplar',
      'peraturanTerkait',
      'dokumenTerkait',
      'hasilUjiMateri',
    ));
  }

  public function downloadFile($file)
  {
    $filePath = config('app.doc_directory') . $file;
    return Storage::download($filePath);
  }
}
