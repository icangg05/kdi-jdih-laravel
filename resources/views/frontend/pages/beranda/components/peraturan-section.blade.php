<section class="bg-theme mb-5 sambutan" style="background-color:#ffffff">
  <div class="container">
    <div class="d-flex justify-content-center flex-column align-items-center">
      <div class="margin-40px-bottom heading">
        <div class="d-flex justify-content-between flex-wrap align-items-center">
          <div class="heading">
            <h3 class="mb-0">Peraturan Terbaru</h3>
            <hr class="border-heading">
          </div>
          <a class="btn btn-primary" href="/dokumen/peraturan"><i class="fa-solid fa-scale-balanced"></i> &nbsp;
            Peraturan Lainnya</a>
        </div>
        <div class="d-flex card-peraturan mt-5 justify-content-center">
          @foreach ($peraturan as $item)
            <div class="col-lg-5" onclick="window.location.href='/dokumen/view/'+ 553">
              <label>{{ __($item->jenis_peraturan) }} {{ $item->tahun_terbit }}</label>
              <h3>{{ __($item->pemrakarsa) }}</h3>
              <p>{{ __($item->judul) }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
