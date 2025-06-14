<section class="news">
	<div class="container">
		<div class="text-center margin-60px-bottom">
			<h3 class="margin-10px-bottom">Pengumuman Terbaru</h3>
			<p>Menyajikan pengumuman baru up-to-date dari <b>Jaringan Dokumentasi Dan Informasi Hukum Pemerintah Kota
					Kendari</b></p>
		</div>
		<div class="row pengumuman mx-1">
			@foreach ($pengumuman as $item)
				<div class="col-lg-12 sm-margin-30px-bottom">
					<div class="card row h-100">
						@php
							$image = checkFilePath(config('app.img_directory'), $item->image)
							    ? asset('storage/' . config('app.img_directory') . $item->image)
							    : asset('assets/img/default-img.jpg');
						@endphp
						<img class="card-img-top col-lg-3" src="{{ $image }}" alt="img">
						<div class="card-body padding-30px-all col-lg-9">
							<label for="category">Pemberitahuan Putusan</label>
							<h5 class="card-title font-size22 font-weight-500 magin-20px-bottom">
								<a wire:navigate href="{{ route('frontend.pengumuman.show', $item->id) }}" style="color: #595959">
									{{ __(Str::limit($item->judul, 29)) }}</a>
							</h5>
							<div class="detail">
								<p>
									<i class="fa-regular fa-calendar-days"></i>
									{{ Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
								</p>
							</div>
							<p class="no-margin-bottom">{{ __(Str::limit(strip_tags($item->isi), 63)) }}</p>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<div class="float-right mt-4 link">
			<a class="btn btn-primary" href="{{ route('frontend.pengumuman.index') }}" wire:navigate>
        <i class="fa-solid fa-bullhorn"></i> &nbsp; Pengumuman
				Lainnya</a>
		</div>
	</div>
</section>
