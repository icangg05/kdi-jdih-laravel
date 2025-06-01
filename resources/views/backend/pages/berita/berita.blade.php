@extends('backend.layouts.backend')
@section('content')
  <x-backend.breadcrumb title="Berita" :listNav="[['label' => 'Berita']]" />

  <section class="content">
    <x-backend.table-data title="Berita" :data="$berita" prefixRoute="berita" :columns="[
        ['title' => 'Tanggal', 'key' => 'tanggal', 'format' => 'date'],
        ['title' => 'Judul', 'key' => 'judul', 'limit' => 100],
        ['title' => 'Isi Berita', 'key' => 'isi', 'limit' => 150, 'strip' => true],
    ]" />
  </section>
@endsection
