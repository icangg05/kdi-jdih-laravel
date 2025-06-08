<div>
	<x-frontend.breadcrumb title="Berita" :listNav="[['label' => 'Berita']]" />

	<section class="news">
		<div class="container">
			<div class="border-bottom padding-20px-bottom margin-30px-bottom">
				<div class="widget search mb-4">
					<form id="w0" action="/berita/index" method="get" data-pjax="1">
						<div class="form-row align-items-center">
							<div class="col-md-10 my-1">
								<input type="text" class="form-control" id="beritasearch-judul" name="BeritaSearch[judul]"
									placeholder="cari berita lainnya...">
							</div>
							<div class="col-md-2 my-1">
								<button type="submit" class="butn btn-block">Cari</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="row">
				@forelse ($data as $item)
					<div class="col-lg-4 col-md-6 col-sm-12 margin-30px-bottom">
						<div class="card border-0 shadow h-100">
							<a href="#">
								@php
									$image = checkFilePath(config('app.img_directory'), $item->image)
									    ? asset('storage/' . config('app.img_directory') . $item->image)
									    : asset('assets/img/default-img.jpg');
								@endphp
								<img class="card-img-top rounded"
									src="{{ $image }}" alt="img">
							</a>
							<div class="card-body padding-30px-all">
								<div class="margin-10px-bottom">
									{{ Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
								</div>
								<h5 class="card-title font-size22 font-weight-500 magin-20px-bottom">
									<a wire:navigate class="text-extra-dark-gray" href="{{ route('frontend.berita.show', $item->id) }}">
										{{ str()->limit($item->judul, 30) }}</a>
								</h5>
								<p class="no-margin-bottom">
									{{ str()->limit(strip_tags($item->isi), 100) }}</p>
							</div>
						</div>
					</div>
				@empty
					<div class="empty">No results found.</div>
				@endforelse
			</div>

			{{ $data->onEachSide(3)->links() }}
		</div>
	</section>
</div>
