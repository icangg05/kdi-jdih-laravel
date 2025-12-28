<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Pengumuman extends Component
{
  use WithPagination;

  #[Url()]
  public $q = '';

  public function search()
  {
    // cukup kosong — Livewire akan re-render
  }

  public function render()
  {
    sleep(1);
    $data = DB::table('pengumuman')
      ->orderBy('created_at', 'desc')
      ->when(
        $this->q,
        fn($q) => $q->where('judul', 'like', "%{$this->q}%")
      )
      ->paginate(8)
      ->withQueryString();

    return view('livewire.pengumuman', compact(
      'data',
    ));
  }
}
