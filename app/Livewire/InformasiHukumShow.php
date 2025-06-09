<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class InformasiHukumShow extends Component
{
  public $id;

  public function mount($id)
  {
    $this->id = $id;
  }

  public function render()
  {
    $data = DB::table('informasi_hukum')
      ->where('informasi_hukum.id', $this->id)
      ->join('jenis_informasi_hukum', 'informasi_hukum.jenis', '=', 'jenis_informasi_hukum.id')
      ->select('informasi_hukum.*', 'jenis_informasi_hukum.singkatan as jenis', 'jenis_informasi_hukum.id as jenis_informasi_hukum_id')
      ->first();

    abort_if(!$data, 404);

    // Query data informasi hukum lainnya
    $informasiHukum = DB::table('informasi_hukum')
      ->where('status', 1)
      ->where('id', '!=', $this->id)
      ->orderBy('created_at', 'desc')
      ->limit(2)
      ->get();

    // Query data video
    $video = DB::table('video')
      ->orderBy('created_at', 'desc')
      ->limit(2)
      ->get();

    return view('livewire.informasi-hukum-show', compact(
      'data',
      'informasiHukum',
      'video'
    ));
  }
}
