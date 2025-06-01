@extends('backend.layouts.backend')
@section('content')
  <x-backend.breadcrumb title="Peraturan" :listNav="[['label' => 'Peraturan']]" />

  <section class="content">
    <x-backend.table-data title="Peraturan" :data="$peraturan" prefixRoute="peraturan" :columns="[
        [
            'title'            => 'Jenis Peraturan',
            'key'              => 'bentuk_peraturan',
            'type_search'      => 'select',
            'data_type_search' => ['UNDANG-UNDANG DASAR', 'KETETAPAN MPR', 'UNDANG-UNDANG'],
        ],
        ['title' => 'Nomor', 'key' => 'nomor_peraturan'],
        ['title' => 'Tahun', 'key' => 'tahun_terbit'],
        ['title' => 'Judul Peraturan', 'key' => 'judul'],
        [
            'title'            => 'Status Peraturan',
            'key'              => 'status',
            'type_search'      => 'select',
            'data_type_search' => ['Berlaku', 'Tidak Berlaku'],
        ],
        [
            'title'            => 'Keterangan Status',
            'key'              => 'status_peraturan',
            'format'           => 'ucfirst',
            'type_search'      => 'select',
            'data_type_search' => ['Dicabut', 'Mencabut', 'Diubah', 'Mengubah', 'Tidak memiliki daya guna'],
        ],
    ]" />
  </section>
@endsection
