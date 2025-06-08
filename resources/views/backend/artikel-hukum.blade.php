<x-layouts.backend :title="$title" :listNav="[['label' => $title]]">
	<x-backend.table-data :title="$title" :data="$data" prefixRoute="artikel" :columns="[
	    [
	        'title' => 'Jenis Artikel',
	        'key' => 'jenis_peraturan',
	        'type_search' => 'select',
	        'data_type_search' => ['UNDANG-UNDANG DASAR', 'KETETAPAN MPR', 'UNDANG-UNDANG'],
	    ],
	    ['title' => 'Judul Artikel', 'key' => 'judul', 'format' => 'href'],
	    ['title' => 'Tahun', 'key' => 'tahun_terbit'],
	    ['title' => 'Sumber', 'key' => 'sumber'],
	]" />

</x-layouts.backend>
