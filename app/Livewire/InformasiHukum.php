<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class InformasiHukum extends Component
{
  public $jenisInformasiHukumId;

  public function mount($id)
  {
    $this->jenisInformasiHukumId = $id;
  }

  public function render()
  {
    $data = DB::table('informasi_hukum')
      ->where('jenis', $this->jenisInformasiHukumId)
      ->where('status', 1)
      ->where('judul', 'like', '%' . request()->q . '%')
      ->join('jenis_informasi_hukum', 'informasi_hukum.jenis', '=', 'jenis_informasi_hukum.id')
      ->orderBy('created_at', 'desc')
      ->select('informasi_hukum.*', 'jenis_informasi_hukum.singkatan as jenis')
      ->paginate(8);

    $jenisInformasiHukumId = $this->jenisInformasiHukumId;

    return view('livewire.informasi-hukum', compact(
      'data',
      'jenisInformasiHukumId',
    ));
  }
}
