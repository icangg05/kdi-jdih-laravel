@extends('frontend.layouts.frontend')
@section('content')
  <section class="page-title-section bg-img cover-background" data-overlay-dark="7"
    data-background="{{ asset('assets/frontend/img/banner/header.jpg') }}">
    <div class="container">
      <h1>Pengumuman</h1>
      <ul class="text-center">
        <li><a href="{{ route('frontend.beranda') }}">Home</a></li>
        <li>
          <span class="active">Pengumuman</span>
        </li>
      </ul>
    </div>
  </section>

  <section class="blogs pengumumans">
    <div class="container">
      <div class="row">
        <!--  start blog left-->
        <div class="col-lg-9 col-md-12 sm-margin-50px-bottom">
          <div class="posts">
            <!--  start post-->
            <div class="post">
              <div class="blog-list-simple-text post-meta margin-20px-bottom">
                <div class="post-title">
                  <label>{{ $pengumuman->tag }}</label>
                  <h5>{{ $pengumuman->judul }}</h5>
                  <div class="detail">
                    <p>
                      <i class="fa-regular fa-calendar-days"></i>&nbsp;
                      {{ Carbon\Carbon::parse($pengumuman->tanggal)->translatedFormat('d F Y') }}
                    </p>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="post-img col-lg-4 mb-4">
                  <img class="rounded" src="{{ asset('assets/frontend/img/default.jpg') }}" alt="img">
                  <div class="mt-4">
                    <button @disabled(!checkFilePath($pengumuman->dokumen))
                      onclick="window.location='{{ $pengumuman->dokumen ? route('download_file', $pengumuman->dokumen) : '#' }}'"
                      style="opacity: {{ !checkFilePath($pengumuman->dokumen) ? '.4' : '1' }};" class="btn-custom mr-3">
                      <i class="fa-solid fa-file-lines"></i>&nbsp; Download
                    </button>
                  </div>
                </div>
                <div class="content col-lg-8 pt-2">
                  {!! $pengumuman->isi !!}
                </div>
              </div>
              <hr>

              @if (checkFilePath($pengumuman->dokumen))
                <iframe src="{{ asset('storage/' . config('app.doc_directory') . $pengumuman->dokumen) }}" width="100%"
                  height="600" style="border: 1px solid; border-radius: 16px;" allowfullscreen></iframe>
              @endif
            </div>
            <!--  start post-->
          </div>
        </div>
        <!--  end blog left-->

        <!--  start blog right-->
        <div class="col-lg-3 col-md-12 padding-30px-left sm-padding-15px-left">
          <div class="side-bar">
            <div class="widget search my-0">
              <div class="widget-title">
                <h3>Cari Pengumuman</h3>
              </div>
              <div class="input-group my-0">
                <form id="w0" action="/pengumuman/index" method="get" data-pjax="1">
                  <div class="form-group field-pengumumansearch-judul">
                    <div class="input-group-append"><input type="text" id="pengumumansearch-judul" class="form-control"
                        name="PengumumanSearch[judul]" placeholder="Search"><button type="submit"
                        class="btn btn-primary"><span class="ti-search"></span></button></div>
                  </div>
                </form>
              </div>
            </div>
            <h3 class="mt-4">Terbaru</h3>
            <div class="section new">
              <div class="row">
                @foreach ($berita as $item)
                  <div class="col-lg-12">
                    <img class="rounded" src="{{ asset('assets/frontend/img/default.jpg') }}" alt="">
                    <a href="{{ route('frontend.pengumuman_view', $item->id) }}">
                      {{ str()->limit($item->judul, 35) }}</a>
                    <div class="detail">
                      <p>
                        <i class="fa-regular fa-calendar-days"></i>&nbsp;
                        {{ Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                      </p>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            <hr>
            <h3 class="mt-4">Berita Video Terbaru</h3>
            <div class="section new">
              <div class="row">
                @foreach ($video as $item)
                <div class="col-lg-12 mb-3">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->link }}" frameborder="0"
                    allowfullscreen></iframe>
                  <h5>{{ $item->judul }}</h5>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <!--  end blog right-->

      </div>
    </div>
  </section>
@endsection
