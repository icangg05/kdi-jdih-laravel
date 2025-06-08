<x-layouts.backend :title="$title" :listNav="[['label' => $title]]">
	<x-backend.table-data :title="$title" :data="$monografi" prefixRoute="monografi" :columns="[
	    [
	        'title' => 'Jenis Monografi',
	        'key' => 'jenis_peraturan',
	        'type_search' => 'select',
	        'data_type_search' => ['UNDANG-UNDANG DASAR', 'KETETAPAN MPR', 'UNDANG-UNDANG'],
	    ],
	    ['title' => 'Judul Monografi', 'key' => 'judul', 'format' => 'href'],
	    ['title' => 'Tahun', 'key' => 'tahun_terbit'],
	    ['title' => 'Sumber Perolehan', 'key' => 'sumber_perolehan'],
	    ['title' => 'Subjek', 'key' => 'subyek'],
	    ['title' => 'Kode Eksemplar', 'key' => 'kode_eksemplar'],
	]" />

</x-layouts.backend>
