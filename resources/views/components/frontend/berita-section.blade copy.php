<section class="news" style="background: #E5E5E5 ;">
	<div class="container">
		<div class="text-center margin-60px-bottom">
			<h3 class="margin-10px-bottom">Berita Terbaru</h3>
			<p>Kumpulan berita baru up-to-date dari <b>Jaringan Dokumentasi Dan Informasi Hukum Pemerintah Kota
					Kendari</b></p>
		</div>
		<div class="row">
			@foreach ($berita as $item)
				<div class="col-lg-4 sm-margin-30px-bottom">
					<div class="card h-100">
						<a wire:navigate href="{{ route('frontend.berita.show', $item->id) }}">
							@php
								$image = checkFilePath(config('app.img_directory'), $item->image)
								    ? asset('storage/' . config('app.img_directory') . $item->image)
								    : asset('assets/img/default-img.jpg');
							@endphp
							<img src="{{ $image }}" alt="img" class="card-img-top rounded">
						</a>
						<div class="card-body padding-30px-all">
							<div class="margin-10px-bottom">
								<span>{{ Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</span>
							</div>
							<h5 class="card-title font-size22 font-weight-500 magin-20px-bottom">
								<a wire:navigate href="{{ route('frontend.berita.show', $item->id) }}" style="color: #595959">
									{{ __(Str::limit($item->judul, 20)) }}</a>
							</h5>

							<p class="no-margin-bottom">
								{{ __(Str::limit(strip_tags($item->isi), 90)) }}
							</p>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<div class="float-right mt-4 link">
			<a class="btn btn-primary" href="{{ route('frontend.berita.index') }}" wire:navigate>
        <i class="fa-regular fa-newspaper"></i> &nbsp; Berita
				Lainnya</a>
		</div>
	</div>
</section>
