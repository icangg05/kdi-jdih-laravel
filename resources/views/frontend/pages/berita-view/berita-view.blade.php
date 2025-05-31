@extends('frontend.layouts.frontend')
@section('content')
  <section class="page-title-section bg-img cover-background" data-overlay-dark="7"
    data-background="{{ asset('assets/frontend/img/banner/header.jpg') }}">
    <div class="container">
      <h1>Berita</h1>
      <ul class="text-center">
        <li><a href="{{ route('frontend.beranda') }}">Home</a></li>
        <li>
          <span class="active">Berita</span>
        </li>
      </ul>
    </div>
  </section>

  <section class="blogs">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 sm-margin-50px-bottom">
          <div class="posts">
            <div class="post">
              <div class="post-img">
                <img class="rounded" src="{{ asset('assets/frontend/img/default.jpg') }}" alt="img">
              </div>
              <div class="content">
                <div class="blog-list-simple-text post-meta margin-20px-bottom">
                  <div class="post-title">
                    <h5>{{ $berita->judul }}</h5>
                  </div>
                </div>
                <div class="margin-30px-bottom" style="text-align: justify;">
                  {!! $berita->isi !!}
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 padding-30px-left sm-padding-15px-left">
          <div class="side-bar">
            <div class="widget search">
              <div class="widget-title margin-35px-bottom">
                <h3>Cari Berita</h3>
              </div>
              <div class="input-group mb-3">
                <form id="w0" action="/berita/index" method="get" data-pjax="1">
                  <div class="form-group field-beritasearch-judul">
                    <div class="input-group-append">
                      <input type="text" id="beritasearch-judul" class="form-control" name="BeritaSearch[judul]"
                        placeholder="Search">
                      <button type="submit" class="btn btn-primary">
                        <span class="ti-search"></span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
