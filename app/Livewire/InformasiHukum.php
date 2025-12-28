<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class InformasiHukum extends Component
{
  public $jenisInformasiHukumId;

  public function mount($id)
  {
    $this->jenisInformasiHukumId = Hashids::decode($id)[0] ?? abort(404);
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


    return view('livewire.informasi-hukum', compact(
      'data',
    ));
  }
}
