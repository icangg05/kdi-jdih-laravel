<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PengumumanShow extends Component
{
	public $id;

	public function mount($id)
	{
		$this->id = $id;
	}

	public function render()
	{
		$data = DB::table('pengumuman')
			->where('id', $this->id)
			->first();
		abort_if(!$data, 404);

		// Query data berita
		$berita = DB::table('pengumuman')
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

		return view('livewire.pengumuman-show', compact(
			'data',
			'berita',
			'video'
		));
	}
}
