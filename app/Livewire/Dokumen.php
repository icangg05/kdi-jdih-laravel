<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dokumen extends Component
{
  public $kategori;

  public function mount($kategori)
  {
    $this->kategori = $kategori;
  }

  public function render(Request $request)
  {
    if ($this->kategori === 'peraturan') {
      $title = 'Peraturan dan Keputusan';
      $data  = DB::table('document')->where('tipe_dokumen', 1)
        ->leftJoin('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->select('document.*', 'data_lampiran.judul_lampiran', 'data_lampiran.dokumen_lampiran');
      $tipeDokumen = DB::table('document_type')->where('parent_id', 1)->get();
      //
    } elseif ($this->kategori === 'monografi') {
      $title       = 'Monografi Hukum';
      $data        = DB::table('document')->where('tipe_dokumen', 2)
        ->leftJoin('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->select('document.*', 'data_lampiran.judul_lampiran', 'data_lampiran.dokumen_lampiran');
      $tipeDokumen = DB::table('document_type')->where('parent_id', 2)->get();
      //
    } elseif ($this->kategori === 'artikel') {
      $title       = 'Artikel / Majalah Hukum';
      $data        = DB::table('document')->where('tipe_dokumen', 3)
        ->leftJoin('data_lampiran', 'document.id', '=', 'data_lampiran.id_dokumen')
        ->select('document.*', 'data_lampiran.judul_lampiran', 'data_lampiran.dokumen_lampiran');
      $tipeDokumen = DB::table('document_type')->where('parent_id', 3)->get();
      //
    } elseif ($this->kategori === 'putusan') {
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
    $data = $data->orderBy('created_at', 'desc')->paginate(6)->withQueryString();
    $kategori = $this->kategori;

    return view('livewire.dokumen', compact(
      'kategori',
      'title',
      'data',
      'tipeDokumen'
    ));
  }
}
