<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BeritaShow extends Component
{
	public $id;

	public function mount($id)
	{
		$this->id = $id;
	}

	public function render()
	{
		$data = DB::table('berita')
			->where('id', $this->id)
			->first();
		abort_if(!$data, 404);

		return view('livewire.berita-show', compact(
			'data',
		));
	}
}
