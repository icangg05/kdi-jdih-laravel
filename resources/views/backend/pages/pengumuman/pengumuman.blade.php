@extends('backend.layouts.backend')
@section('content')
  <x-backend.breadcrumb title="Pengumuman" :listNav="[['label' => 'Pengumuman']]" />

  <section class="content">
    <x-backend.table-data title="Pengumuman" :data="$pengumuman" prefixRoute="pengumuman" :columns="[
        ['title' => 'Tanggal', 'key' => 'tanggal', 'format' => 'date'],
        ['title' => 'Judul', 'key' => 'judul', 'limit' => 70],
        ['title' => 'Tag', 'key' => 'tag'],
        ['title' => 'Isi Pengumuman', 'key' => 'isi', 'limit' => 100, 'strip' => true],
    ]" />
  </section>
@endsection
