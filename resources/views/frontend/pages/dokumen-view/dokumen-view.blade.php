@php
  if ($kategori == 'peraturan') {
      $columnField = [
          ['Tempat Terbit', 'tempat_terbit'],
          ['Tanggal Penetapan', 'tanggal_penetapan'],
          ['Tanggal Pengundangan', 'tanggal_pengundangan'],
          ['Sumber', 'sumber'],
          ['Urusan Pemerintahan', 'urusan_pemerintahan'],
          ['Bidang Hukum', 'bidang_hukum'],
          ['Bahasa', 'bahasa'],
          ['Penandatanganan', 'penandatanganan'],
          ['Pemrakarsa', 'pemrakarsa'],
      ];
  } elseif ($kategori == 'monografi') {
      $columnField = [
          ['Nomor Panggil', 'nomor_panggil'],
          ['Penerbit', 'penerbit'],
          ['Tahun Terbit', 'tahun_terbit'],
          ['Deskripsi Fisik', 'deskripsi_fisik'],
          ['Klasifikasi', 'klasifikasi'],
          ['Bahasa', 'bahasa'],
          ['ISBN', 'isbn'],
          ['Tempat Terbit', 'tempat_terbit'],
          ['Anotasi', 'sumber'],
          ['Bidang Hukum', 'bidang_hukum'],
      ];
  } elseif ($kategori == 'artikel') {
      $columnField = [
          ['Tahun Terbit', 'tahun_terbit'],
          ['Sumber', 'sumber'],
          ['Bahasa', 'bahasa'],
          ['Bidang Hukum', 'bidang_hukum'],
      ];
  } elseif ($kategori == 'putusan') {
      $columnField = [
          ['Klasifikasi', 'klasifikasi'],
          ['Amar Putusan', 'amar_status'],
          ['Tanggal Dibacakan', 'tanggal_penetapan'],
          ['Tingkat Proses', 'sub_klasifikasi'],
          ['Penggugat / Pemohon', 'pemohon'],
          ['Tergugat / Termohon', 'termohon'],
          ['Tempat Pengadilan', 'lembaga_peradilan'],
          ['Lokasi', 'tempat_terbit'],
          ['Bahasa', 'bahasa'],
      ];
  }
@endphp

@extends('frontend.layouts.frontend')
@section('content')
  <section class="page-title-section bg-img cover-background" data-overlay-dark="7"
    data-background="{{ asset('assets/frontend/img/banner/header.jpg') }}">
    <div class="container">
      <h1>{{ Str::words($title, 1, '') }} Detail</h1>
      <ul class="text-center">
        <li><a href="{{ route('frontend.beranda') }}">Home</a></li>
        <li><a href="{{ route('frontend.dokumen', $kategori) }}">{{ Str::words($title, 1, '') }}</a></li>
        <li>
          <span class="active">{{ $data['jenis_peraturan'] }}</span>
        </li>
      </ul>
    </div>
  </section>

  <section class="blogs">
    <div class="container">
      @include('frontend.partials.search-dokumen')

      <div class="row">
        <!--  start blog left-->
        <div class="col-lg-8 col-md-12 sm-margin-50px-bottom">
          <div class="posts">
            <!--  start post-->
            <div class="content">
              <div class="blog-list-simple-text post-meta" style="margin-bottom: -11px">
                <div class="post-title">
                  <h5>{{ __($data['judul']) }}</h5>
                </div>
              </div>
              <div class="row align-items-start">
                <div class="col-md-12">
                  <hr class="mb-3 mt-2" style="border: none; height: 1px; background-color: #e0e0e0;">
                </div>
                @foreach ($columnField as $i => $item)
                  <div class="col-md-{{ $kategori == 'peraturan' && $i == count($columnField) - 1 ? '12' : '6' }}">
                    {{ $item[0] }}<br>
                    <span class="text-extra-dark-gray font-weight-600">
                      @if ($kategori == 'peraturan' && ($i == 1 || $i == 2))
                        {{ Carbon\Carbon::parse($data[$item[1]])->translatedFormat('l, j F Y') }}
                      @elseif ($kategori == 'putusan' && $i == 2)
                        {{ Carbon\Carbon::parse($data[$item[1]])->translatedFormat('l, j F Y') }}
                      @else
                        {{ $data[$item[1]] != null || $data[$item[1]] != '' ? $data[$item[1]] : '—' }}
                      @endif
                    </span>
                  </div>
                  @if ($i % 2 == 1 && $i < count($columnField) - 1)
                    <div class="col-md-12">
                      <hr class="my-3" style="border: none; height: 1px; background-color: #e0e0e0;">
                    </div>
                  @endif
                @endforeach
              </div>

              <hr class="my-4" style="border: none; height: 1px; background-color: #e0e0e0;">

              @if ($kategori == 'peraturan')
                <div class="row align-items-end">
                  <div class="col-lg-12 col-md-12">
                    Peraturan Terkait<br>
                    <ul class="mt-1">
                      @forelse ($peraturanTerkait as $item)
                        <li class="list-group-item">
                          {{ $item['status_perter'] }} :&nbsp;
                          <a class="text-primary" href="{{ route('download_file', $item->peraturan_terkait) }}">
                            Lihat detail</a>
                        </li>
                      @empty
                        <span class="text-extra-dark-gray font-weight-600 font-italic">Data Tidak Tersedia</span>
                      @endforelse
                    </ul>
                  </div>
                </div>
                <div class="row align-items-end">
                  <div class="col-lg-12 col-md-12">
                    Dokumen Terkait<br>
                    <div class="mt-1 d-flex left-content-between align-items-start">
                      @forelse ($dokumenTerkait as $item)
                        <a href="{{ route('download_file', $item->document_terkait) }}"
                          class="btn btn-secondary btn-sm btn-hover-primary">Download File</a><br>
                      @empty
                        <span class="text-extra-dark-gray font-weight-600 font-italic">Data Tidak Tersedia</span>
                      @endforelse
                    </div>
                  </div>
                </div>
                <div class="row align-items-end mb-2">
                  <div class="col-lg-12 col-md-12 mt-3">
                    Hasil Uji Materi<br>
                    <div class="mt-1 d-flex left-content-between align-items-start">
                      @forelse ($hasilUjiMateri as $item)
                        <a href="{{ route('download_file', $item->hasil_uji_materi) }}"
                          class="btn btn-secondary btn-sm btn-hover-primary">Download File</a><br>
                      @empty
                        <span class="text-extra-dark-gray font-weight-600 font-italic">Data Tidak Tersedia</span>
                      @endforelse
                    </div>
                  </div>
                </div>
              @endif

              @if ($kategori == 'monografi')
                <div class="row align-items-end">
                  <div class="col-lg-12 col-md-12">
                    EKSEMPLAR<br>
                    <table class="table table-bordered">
                      <thead>
                        <tr class="active">
                          <th>Kode Eksemplar</th>
                          <th>Lokasi Rak</th>
                          <th>Status Buku</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($eksemplar as $item)
                          <tr>
                            <td>{{ $item->kode_eksemplar }}</td>
                            <td>{{ $item->lokasi_rak }}</td>
                            <td>{{ $item->status_eksemplar }}</td>
                          </tr>
                        @empty
                          <tr>
                            <td colspan="3" class="text-center">—</td>
                          </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              @endif

              @if ($kategori != 'artikel' && $kategori != 'putusan')
                <hr class="my-4" style="border: none; height: 1px; background-color: #e0e0e0;">
              @endif

              <div class="row align-items-end">
                <div class="col-lg-12 col-md-12">
                  T.E.U BADAN<br>
                  <table class="table table-bordered">
                    <thead>
                      <tr class="active">
                        <th>Nama Pengarang</th>
                        <th>Tipe Pengarang</th>
                        <th>Jenis Pengarang</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($dataPengarang as $item)
                        <tr>
                          <td>{{ $item->nama_pengarang }}</td>
                          <td>{{ $item->tipe_pengarang }}</td>
                          <td>{{ $item->jenis_pengarang }}</td>
                        </tr>
                      @empty
                        <tr>
                          <td colspan="3" class="text-center">—</td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="row align-items-end">
                <div class="col-lg-12 col-md-12 mt-2">
                  <span class="text-extra-dark-gray font-weight-600"> SUBJEK : </span>
                  @forelse ($subjek as $i => $item)
                    {{ $item->subyek }} {{ $subjek->count() - 1 !== $i ? '|' : '' }}
                  @empty
                    —
                  @endforelse
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--  end blog left-->

        <!--  start blog right-->
        <div class="col-lg-4 col-md-12 padding-30px-left sm-padding-15px-left">
          <div class="side-bar">
            <div class="shadow">
              <ul class="list-group mt-2">
                <li class="list-group-item text-center">JENIS DOKUMEN</li>
                <li class="list-group-item list-group-item-primary text-center">
                  <strong>{{ $data['jenis_peraturan'] }}</strong>
                </li>
              </ul>
            </div>
            @if ($kategori != 'artikel')
              <div class="shadow">
                <ul class="list-group mt-2">
                  @if ($kategori == 'peraturan')
                    <li class="list-group-item text-center">STATUS</li>
                    <li class="list-group-item list-group-item-secondary text-center">
                      <strong>{{ $data['status'] }}</strong>
                    </li>
                  @elseif ($kategori == 'monografi')
                    <li class="list-group-item text-center">COVER</li>
                    <li class="list-group-item list-group-item-warning text-center">
                      <img
                        src="{{ $data['gambar_sampul'] ? asset('storage/' . $data['gambar_sampul']) : 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/book-cover-design-template-b3ea4adb013a3eb2329fad14af58895a_screen.jpg?ts=1637412011' }}"
                        alt="sampul.jpg" class="rounded">
                    </li>
                  @elseif ($kategori == 'putusan')
                    <li class="list-group-item text-center">AMAR PUTUSAN</li>
                    <li class="list-group-item list-group-item-secondary text-center">
                      <strong>{{ $data['amar_status'] != null || $data['amar_status'] != '' ? $data['amar_status'] : '—' }}</strong>
                    </li>
                  @endif
                </ul>
              </div>
            @endif

            <div class="widget">
              <div class="widget-title margin-35px-bottom mt-4">
                <h3>Lampiran</h3>
              </div>
              <div class="d-flex left-content-between align-items-start">
                <button @disabled(!checkFilePath($data['dokumen_lampiran']))
                  onclick="window.location='{{ $data['dokumen_lampiran'] ? route('download_file', $data['dokumen_lampiran']) : '#' }}'"
                  style="opacity: {{ !checkFilePath($data['dokumen_lampiran']) ? '.4' : '1' }};" class="btn-custom mr-3">
                  <i class="fa-solid fa-file-lines"></i>&nbsp; Download
                </button>
                <button @disabled(!checkFilePath($data['abstrak']))
                  onclick="window.location='{{ $data['abstrak'] ? route('download_file', $data['abstrak']) : '#' }}'"
                  style="opacity: {{ !checkFilePath($data['abstrak']) ? '.4' : '1' }};" class="btn-custom-2">
                  <i class="fa-solid fa-file-lines"></i>&nbsp; ABSTRAK
                </button>
              </div>
            </div>

            @if ($kategori == 'peraturan')
              <div class="widget">
                <div class="widget-title margin-35px-bottom mt-4">
                  <h3>Keterangan Status</h3>
                </div>
                <ul class="widget-list text-extra-dark-gray font-weight-600" style="opacity: 0.9;">
                  {{ $dataStatus ? $dataStatus->status_peraturan : '—' }}
                </ul>
              </div>
            @endif
          </div>
        </div>
        <!--  end blog right-->
      </div>
    </div>
  </section>
@endsection
