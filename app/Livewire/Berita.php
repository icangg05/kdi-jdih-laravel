<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Url;
use Livewire\Component;

class Berita extends Component
{
  #[Url()]
  public $q = '';

  public function search()
  {
    // cukup kosong — Livewire akan re-render
  }

  public function render()
  {
    sleep(1);
    $data = DB::table('berita')
      ->orderBy('created_at', 'desc')
      ->when(
        $this->q,
        fn($q) => $q->where('judul', 'like', "%{$this->q}%")
      )
      ->paginate(9)
      ->withQueryString();

    return view('livewire.berita', compact(
      'data'
    ));
  }
}
