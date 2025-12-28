<div>
	<x-frontend.breadcrumb
		title="Pengumuman"
		:listNav="[['label' => 'Pengumuman', 'route' => route('frontend.pengumuman.index')], ['label' => 'Detail']]" />

	<section class="blogs pengumumans">
		<div class="container">
			<div class="row">
				<!--  start blog left-->
				<div class="col-lg-9 col-md-12 sm-margin-50px-bottom">
					<div class="posts">
						<!--  start post-->
						<div class="post">
							<div class="blog-list-simple-text post-meta margin-20px-bottom">
								<div class="post-title">
									<label>{{ $data->tag }}</label>
									<h5>{{ $data->judul }}</h5>
									<div class="detail">
										<p>
											<i class="fa-regular fa-calendar-days"></i>&nbsp;
											{{ Carbon\Carbon::parse($data->tanggal)->translatedFormat('d F Y') }}
										</p>
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="post-img col-lg-4 mb-4">
									@php
										$image = checkFilePath(config('app.img_directory'), $data->image)
										    ? asset('storage/' . config('app.img_directory') . $data->image)
										    : asset('assets/img/default-img.jpg');
									@endphp
									<img class="rounded" src="{{ $image }}" alt="img">
									<div class="mt-4">
										<form action="{{ route('download_file') }}" method="POST" style="display: inline">
											@csrf
											<input type="hidden" name="filePath"
												value="{{ config('app.doc_directory') . $data->dokumen }}">
											<button @disabled(!checkFilePath(config('app.doc_directory'), $data->dokumen))
												onclick="window.location='{{ $data->dokumen ? route('download_file', $data->dokumen) : '#' }}'"
												style="opacity: {{ !checkFilePath(config('app.doc_directory'), $data->dokumen) ? '.4' : '1' }};"
												class="btn-custom mr-3">
												<i class="fa-solid fa-file-lines"></i>&nbsp; Download
											</button>
										</form>
									</div>
								</div>
								<div class="content col-lg-8 pt-2">
									{!! $data->isi !!}
								</div>
							</div>
							<hr>

							@if (checkFilePath(config('app.doc_directory'), $data->dokumen))
								<iframe src="{{ asset('storage/' . config('app.doc_directory') . $data->dokumen) }}" width="100%"
									height="600" style="border: 1px solid; border-radius: 16px;" allowfullscreen></iframe>
							@endif
						</div>
						<!--  start post-->
					</div>
				</div>
				<!--  end blog left-->

				<!--  start blog right-->
				<div class="col-lg-3 col-md-12 padding-30px-left sm-padding-15px-left">
					<div class="side-bar">
						<div class="widget search my-0">
							<div class="widget-title">
								<h3>Cari Pengumuman</h3>
							</div>
							<div class="input-group my-0">
								<form action="{{ route('frontend.pengumuman.index') }}" method="get">
									<div class="form-group field-pengumumansearch-judul">
										<div class="input-group-append">
											<input type="text" id="pengumumansearch-judul" class="form-control"
												name="q" placeholder="Search">
											<button type="submit"
												class="btn btn-primary"><span class="ti-search"></span></button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<h3 class="mt-4">Terbaru</h3>
						<div class="section new">
							<div class="row">
								@foreach ($berita as $item)
									<div class="col-lg-12" style="line-height: 24px !important;">
										@php
											$image = checkFilePath(config('app.img_directory'), $item->image)
											    ? asset('storage/' . config('app.img_directory') . $item->image)
											    : asset('assets/img/default-img.jpg');
										@endphp
										<img class="rounded mb-2" src="{{ $image }}" alt="image">
										<a wire:navigate href="{{ route('frontend.pengumuman.show', $item->id) }}">
											{{ str()->limit($item->judul, 35) }}
										</a>
										<div class="detail mt-1">
											<p>
												<i class="fa-regular fa-calendar-days"></i>&nbsp;
												{{ Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
											</p>
										</div>
									</div>
								@endforeach
							</div>
						</div>
						<hr>
						<h3 class="mt-4">Berita Video Terbaru</h3>
						<div class="section new">
							<div class="row">
								@foreach ($video as $item)
									<div class="col-lg-12 mb-3">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->link }}"
											frameborder="0" allowfullscreen></iframe>
										<h5>{{ $item->judul }}</h5>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<!--  end blog right-->
			</div>
		</div>
	</section>
</div>
