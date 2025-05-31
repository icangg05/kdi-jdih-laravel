<section class="no-padding video-berita">
  <div class="container">
    <div class="text-center margin-40px-bottom heading">
      <h3 class="margin-10px-bottom" style="color: #ff891e ;">Berita Video Terbaru</h3>
      <p style="font-size: 16px;">Menyajikan berita video dari <b>Jaringan Dokumentasi Dan Informasi Hukum
          Pemerintah Kota Kendari</b></p>
      <div class="row justify-content-center align-items-center">
        <hr class="border-heading">
      </div>
    </div>
    <div class="row">
      @foreach ($video as $item)
        <div class="col-lg-4 cards">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->link }}" frameborder="0"
            allowfullscreen></iframe>
          <h3>{{ __($item->judul) }}</h3>
          <p>
            <i class="fa-regular fa-calendar-days"></i>
            {{ Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
          </p>
        </div>
      @endforeach
    </div>
    <div class="float-right mt-4 link">
      <a class="btn btn-primary" href="/video/index"><i class="fa-solid fa-video"></i> &nbsp; Video Lainnya</a>
    </div>
  </div>
</section>
