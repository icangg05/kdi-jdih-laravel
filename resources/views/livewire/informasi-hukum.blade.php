<div>
	<x-frontend.breadcrumb title="Informasi Hukum" :listNav="[['label' => 'Informasi Hukum']]" />

	<section class="news">
		<div class="container">
			<div class="border-bottom padding-20px-bottom margin-30px-bottom">
				<div class="widget search mb-4">
					<form id="w0" action="{{ route('frontend.informasi-hukum.index', $jenisInformasiHukumId) }}" method="get" data-pjax="1">
						<div class="form-row align-items-center">
							<div class="col-md-10 my-1">
								<input type="text" class="form-control" id="pengumumansearch-judul" name="q"
									placeholder="cari informasi hukum lainnya..." value="{{ request()->q }}">
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
						@forelse ($data as $item)
							<div class="col-lg-12 sm-margin-30px-bottom">
								<div class="card row h-100">
									@php
										$image = checkFilePath(config('app.img_directory'), $item->image)
										    ? asset('storage/' . config('app.img_directory') . $item->image)
										    : asset('assets/img/default-img.jpg');
									@endphp
									<img class="card-img-top col-lg-3" src="{{ $image }}" alt="img">
									<div class="card-body padding-30px-all col-lg-9">
										<label for="category">{{ $item->jenis }}</label>
										<h5 class="card-title font-size22 font-weight-500 magin-20px-bottom">
											<a href="#" class="text-extra-dark-gray">
												<a wire:navigate
													href="{{ route('frontend.informasi-hukum.show', $item->id) }}">{{ str()->limit($item->judul, 40) }}</a>
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
							<div class="empty text-center">No results found.</div>
						@endforelse
					</div>

					<div class="mt-4">
						{{ $data->onEachSide(3)->links() }}
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
