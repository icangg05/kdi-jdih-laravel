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

  <section class="news">
    <div class="container">
      <div class="border-bottom padding-20px-bottom margin-30px-bottom">
        <div class="widget search mb-4">
          <form id="w0" action="/pengumuman/index" method="get" data-pjax="1">
            <div class="form-row align-items-center">
              <div class="col-md-10 my-1">
                <input type="text" class="form-control" id="pengumumansearch-judul" name="PengumumanSearch[judul]"
                  placeholder="cari pengumuman lainnya...">
              </div>
              <div class="col-md-2 my-1">
                <button type="submit" class="butn btn-block">Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="row pengumuman">
        <div id="w0" class="list-view" style="width: 100%">
          <div class="item">
            @forelse ($pengumuman as $item)
              <div class="col-lg-12 sm-margin-30px-bottom">
                <div class="card row h-100">
                  <img class="card-img-top col-lg-2" src="{{ asset('assets/frontend/img/default.jpg') }}" alt="img">
                  <div class="card-body padding-30px-all col-lg-10">
                    <label for="category">{{ $item->tag }}</label>
                    <h5 class="card-title font-size22 font-weight-500 magin-20px-bottom">
                      <a href="blog-details.html" class="text-extra-dark-gray">
                        <a href="{{ route('frontend.pengumuman_view', $item->id) }}">{{ str()->limit($item->judul, 40) }}</a>
                      </a>
                    </h5>
                    <div class="detail">
                      {{ Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                    </div>
                    <p class="no-margin-bottom">
                      {{ str()->limit(strip_tags($item->isi), 140) }}
                    </p>
                  </div>
                </div>
              </div>
            @empty
              <div class="empty">No results found.</div>
            @endforelse
          </div>

          <div class="mt-4">
            {{ $pengumuman->onEachSide(3)->links() }}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
