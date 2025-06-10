<section class="bg-img screen-height cover-background line-banner" data-overlay-dark="7"
    data-background="{{ asset('assets/img/background.webp') }}">
    <div class="container position-relative">
      <div class="header-text display-table z-index-1 width-100">
        <div class="display-table-cell">
          <!-- start bannder headline text -->
          <img src="{{ asset('assets/img/kdi.png') }}" data-aos="fade-up">
          <p class="font-size18 xs-font-size16 text-white text-center" data-aos-delay="200" data-aos="fade-up">
            SELAMAT DATANG DI SITUS RESMI
          </p>
          <hr class="border-heading">
          <h1 class="cd-headline slide col-lg-8 mt-4 mb-3" data-aos="fade-up" data-aos-delay="400">
            JARINGAN DOKUMENTASI DAN INFORMASI HUKUM KOTA KENDARI
          </h1>
          <marquee class="mb-3 col-lg-8" style="color: #fafafa !important; font-size: 20px; padding-left:160px;">"Inae
            konasara ie'e pinesara inae liasara ie'e pinekasara"</marquee>
          <marquee class="mb-3 col-lg-8" style=" color: #fafafa !important; font-size: 18px;">Siapa yang menghargai
            adat ia akan dihormati. Siapa yang melanggar adat ia akan diberi sanksi.</marquee>
          <!-- end banner headline text -->

          <div class="box-search col-lg-8">
            <div class="">
              <form id="w0" class="shadow-sm rounded mb-8" action="{{ route('frontend.dokumen.index', 'peraturan') }}" method="get" data-pjax="1">
                <div class="row align-items-center justify-content-center">
                  <div class="col-lg-9 px-2 mt-2">
                    <input type="text" class="form-control" id="dokumensearch-judul" name="q"
                      placeholder="Masukkan Kata Kunci Pencarian..">
                  </div>
                  <button type="submit" class="butn btn-primary col-lg-3 px-2 mt-2">Search <i
                      class="fa-solid fa-magnifying-glass"></i></button>
                </div>
              </form>
            </div>

            <div class="margin-20px-top xs-margin-20px-top d-flex flex-column justify-content-center align-items-center">
              <span class="margin-10px-right text-white xs-display-block xs-margin-20px-bottom">Pencarian
                Populer</span>
              <div class="searchs display-inline-block mt-3">
                <ul class="no-margin-bottom">
                  <li><a wire:navigate class="text-white" href="/dokumen/peraturan">Peraturan</a></li>
                  <li><a wire:navigate class="text-white" href="/dokumen/monografi">Monografi</a></li>
                  <li><a wire:navigate class="text-white" href="/dokumen/artikel">Artikel</a></li>
                  <li><a wire:navigate class="text-white" href="/dokumen/putusan">Putusan</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
