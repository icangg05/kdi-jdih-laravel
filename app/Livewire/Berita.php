<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Berita extends Component
{
	public function render()
	{
		$data = DB::table('berita')
			->orderBy('created_at', 'desc')
			->where('judul', 'like', '%'. request()->q. '%')
			->paginate(9);

		return view('livewire.berita', compact(
			'data'
		));
	}
}
