<section class="document_hukum">
  <div class="container">
    <div class="text-center margin-40px-bottom heading">
      <h3 class="margin-10px-bottom">STATISTIK</h3>
      <p>Menyediakan informasi hukum terpercaya untuk membantu Anda mendapatkan wawasan yang Anda butuhkan.</p>
      <div class="row justify-content-center align-items-center">
        <hr class="border-heading">
      </div>
      <!-- <p class="no-margin-bottom">Lorem Ipsum is simply dummy printing</p> -->
    </div>
    <div class="row content">
      <div class="card-model col-sm-6 col-md-4 col-lg-3">
        <a href="dokumen/peraturan">
          <div class="feature-inner display-table">
            <div class="vertical-align-middle">
              <div class="icon">
                <img src="{{ asset('assets/frontend/img/peraturan.svg') }}" alt="img">
              </div>
              <div class="content">
                <h6>{{ $countPeraturan }}+</h6>
                <h5 class="font-size20">Peraturan</h5>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="card-model col-sm-6 col-md-4 col-lg-3">
        <a href="dokumen/monografi">
          <div class="feature-inner display-table">
            <div class="vertical-align-middle">
              <div class="icon">
                <img src="{{ asset('assets/frontend/img/monogrofi.svg') }}" alt="img">
              </div>
              <div class="content">
                <h6>{{ $countMonografi }}</h6>
                <h5 class="font-size20">Monografi</h5>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="card-model col-sm-6 col-md-4 col-lg-3">
        <a href="dokumen/artikel">
          <div class="feature-inner display-table">
            <div class="vertical-align-middle">
              <div class="icon">
                <img src="{{ asset('assets/frontend/img/artikel.svg') }}" alt="img">
              </div>
              <div class="content">
                <h6>{{ $countBerita }}</h6>
                <h5 class="font-size20">Artikel</h5>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="card-model col-sm-6 col-md-4 col-lg-3">
        <a href="dokumen/putusan">
          <div class="feature-inner display-table">
            <div class="vertical-align-middle">
              <div class="icon">
                <img src="{{ asset('assets/frontend/img/yurisprudensi.svg') }}" alt="img">
              </div>
              <div class="content">
                <h6>{{ $countPutusan }}</h6>
                <h5 class="font-size20">Putusan</h5>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="cart">
      <div class="text-center margin-40px-bottom heading">
        <h3 class="margin-10px-bottom">Grafik Peraturan</h3>
        <p>Grafik menampilkan jumlah berkas 5 tahun terkahir dari masing-masing jenis dokumen</p>
        <div class="row justify-content-center align-items-center">
          <hr class="border-heading">
        </div>
      </div>
      <canvas id="myChart"></canvas>
    </div>
  </div>
</section>
<img src="{{ asset('assets/frontend/img/batas.svg') }}" class="mb-5" style="width: 100%;">
