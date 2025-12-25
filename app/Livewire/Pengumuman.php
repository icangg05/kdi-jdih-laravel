<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Pengumuman extends Component
{
	public function render()
	{
		$data = DB::table('pengumuman')
			->orderBy('created_at', 'desc')
			->where('judul', 'like', '%'. request()->q. '%')
			->paginate(8)
      ->withQueryString();

		return view('livewire.pengumuman', compact(
			'data',
		));
	}
}
