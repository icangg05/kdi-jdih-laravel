<section class="bg-theme mb-5 sambutan" style="background-color:#ffffff">
  <div class="container">
    <div class="d-flex justify-content-center flex-column align-items-center">
      <div class="margin-40px-bottom heading">
        <div class="photos" style="margin-bottom: 50px;">
          @foreach ($pejabat as $item)
            <div class="cards mb-5">
              <img src="{{ asset($item['gambar']) }}" alt="image"
                style="border: 1px solid rgb(230, 230, 230);">
              <div class="title" style="left: -30px; bottom:-40px; width: 300px;">
                <h3 style="font-size: 1rem;">{{ $item['nama'] }}</h3>
                <h4>{{ __($item['jabatan']) }}</h4>
              </div>
            </div>
          @endforeach

        </div>
        <!-- Narasi & quotes -->
        <h3 class="text-center mb-0">Narasi & Quotes</h3>
        <div class="d-flex justify-content-center">
          <hr class="border-heading">
        </div>
        <div class="descirption">
          {!! $narasi->text !!}
        </div>
      </div>
    </div>
  </div>
</section>
