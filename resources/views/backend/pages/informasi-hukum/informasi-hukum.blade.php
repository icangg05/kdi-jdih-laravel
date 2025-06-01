@extends('backend.layouts.backend')
@section('content')
  <x-backend.breadcrumb title="Informasi Hukum" :listNav="[['label' => 'Informasi Hukum']]" />

  <section class="content">
    <x-backend.table-data title="Informasi Hukum" :data="$informasiHukum" prefixRoute="informasi-hukum" :columns="[
        ['title' => 'Tanggal', 'key' => 'tanggal', 'format' => 'date'],
        ['title' => 'Judul', 'key' => 'judul', 'limit' => 100],
        ['title' => 'Isi Informasi Hukum', 'key' => 'isi', 'limit' => 150, 'strip' => true],
    ]" />
  </section>
@endsection
