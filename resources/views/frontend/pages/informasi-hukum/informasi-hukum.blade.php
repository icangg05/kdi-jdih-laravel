@extends('frontend.layouts.frontend')
@section('content')
  <section class="page-title-section bg-img cover-background" data-overlay-dark="7"
    data-background="{{ asset("assets/frontend/img/banner/header.jpg") }}">
    <div class="container">
      <h1>Informasi Hukum</h1>
      <ul class="text-center">
        <li><a href="{{ route('frontend.beranda') }}">Home</a></li>
        <li>
          <span class="active">Informasi Hukum</span>
        </li>
      </ul>
    </div>
  </section>

  <section class="news">
    <div class="container">
      <div class="border-bottom padding-20px-bottom margin-30px-bottom">
        <div class="widget search mb-4">
          <form id="w0" action="/informasi-hukum/index?jenis=1" method="get" data-pjax="1">
            <div class="form-row align-items-center">
              <div class="col-md-10 my-1">
                <input type="hidden" class="form-control" name="jenis" value="1"
                  placeholder="cari informasi hukum lainnya...">
                <input type="text" class="form-control" id="informasi-hukum-search-judul"
                  name="InformasiHukumSearch[judul]" placeholder="cari informasi hukum lainnya...">
              </div>
              <div class="col-md-2 my-1">
                <button type="submit" class="butn btn-block">Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row pengumuman">
        <div class="emptyo">No results found.</div>
      </div>
    </div>
  </section>
@endsection
