<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Profil extends Component
{
  public $kategori;

  public function mount($kategori)
  {
    $this->kategori = $kategori;
  }

  public function render()
  {
    if ($this->kategori === 'sekilas-sejarah') {
      $title = "Sekilas Sejarah";
      $data  = DB::table('sejarah')->first();
    } elseif ($this->kategori === 'dasar-hukum') {
      $title = "Dasar Hukum";
      $data  = DB::table('dasar_hukum')->get();
    } elseif ($this->kategori === 'visi') {
      $title = "Visi";
      $data  = DB::table('visi_misi')->first();
    } elseif ($this->kategori === 'misi') {
      $title = "Misi";
      $data  = DB::table('visi_misi')->first();
    } elseif ($this->kategori === 'sto') {
      $title = "Struktur Organisasi";
      $data  = null;
    } else {
      return abort(404);
    }

    return view('livewire.profil', compact(
      'title',
      'data',
    ));
  }
}
