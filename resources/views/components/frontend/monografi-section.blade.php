<section class="document_hukum cover-background bg-img" data-overlay-dark="7"
  data-background="{{ asset('assets/img/background-2.jpg') }}">
  <div class="container">
    <div class="text-center margin-40px-bottom heading">
      <h3 class="margin-10px-bottom" style="font-size: 24px; color: #ff891e ;">Monografi Hukum</h3>
      <p style="font-size: 32px; line-height: 40px; font-weight: 600; color: #fafafa;">Buku Tanya Jawab Seputar
        Pembentukan Peraturan Daerah dan Peraturan Kepala Daerah</p>
      <div class="row justify-content-center align-items-center">
        <hr class="border-heading">
      </div>
    </div>
    <div class="row content-2 mb-5">
      <div class="col-lg-3 mb-5">
      </div>
      <div class="col-lg-9">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex">
              <span class="mr-4"><i class="fa-solid fa-arrow-right"></i></span>
              <div class="content">
                <h3>T.E.U. Badan/Pengarang</h3>
                <p>
                  @foreach ($pengarang as $i => $item)
                    {{ $item->name }} {{ $pengarang->count() - 1 !== $i ? '|' : '' }}
                  @endforeach
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="d-flex">
              <span class="mr-4"><i class="fa-solid fa-arrow-right"></i></span>
              <div class="content">
                <h3>Subjek</h3>
                <ul>
                  @foreach ($subjek as $item)
                    <li>- {{ $item->subyek }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="d-flex">
              <span class="mr-4"><i class="fa-solid fa-arrow-right"></i></span>
              <div class="content">
                <h3>Penerbit</h3>
                <p>{{ $monografi->penerbit }}</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="d-flex">
              <span class="mr-4"><i class="fa-solid fa-arrow-right"></i></span>
              <div class="content">
                <h3>Tempat Terbit</h3>
                <p>{{ $monografi->tempat_terbit }}</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="d-flex">
              <span class="mr-4"><i class="fa-solid fa-arrow-right"></i></span>
              <div class="content">
                <h3>Tahun Terbit</h3>
                <p>{{ $monografi->tahun_terbit }}</p>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <a wire:navigate href="{{ route('frontend.dokumen.show', ['monografi', $monografi->id]) }}" class="btn btn-secondary">
              <i class="fa-solid fa-book"></i> &nbsp;Lihat Detail &nbsp;<i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
