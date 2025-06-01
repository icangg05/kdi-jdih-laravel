@extends('backend.layouts.backend')
@section('content')
  <x-backend.breadcrumb title="Video" :listNav="[['label' => 'Video']]" />

  <section class="content">
    <x-backend.table-data title="Video" :data="$video" prefixRoute="video" :columns="[
        ['title' => 'Tanggal', 'key' => 'tanggal', 'format' => 'date'],
        ['title' => 'Judul', 'key' => 'judul', 'limit' => 100],
        ['title' => 'Link', 'key' => 'link'],
    ]" />
  </section>
@endsection
