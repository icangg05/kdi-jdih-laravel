<div>
	<x-frontend.breadcrumb 
  :title="$title"
  :listNav="[
    ['label' => 'Tentang Kami']
  ]" />

	<section>
		<div class="container">
			@if ($title !== 'Struktur Organisasi')
				<h4>
					{{ __($title === 'Visi' || $title === 'Misi' ? "$title JDIH Pemerintah Kota Kendari" : $title) }}
				</h4>
			@endif

			@if ($title === 'Sekilas Sejarah')
				{!! __($data->isi) !!}
			@endif

			@if ($title === 'Dasar Hukum')
				<ul>
					@foreach ($data as $item)
						<li>
							<a href="#">
								<p>{{ __($item->isi) }}</p>
							</a>
						</li>
					@endforeach
				</ul>
			@endif

			@if ($title === 'Visi' || $title === 'Misi')
				{!! __($data->visi_misi) !!}
			@endif

			@if ($title === 'Struktur Organisasi')
				<div class="text-center">
					<img class="width-87 margin-10px-bottom xs-margin-5px-bottom"
						src="{{ asset('assets/frontend/img/jdih/1.png') }}" alt="img">
					<br>
					<br>
					<img class="width-70 margin-10px-bottom margin-0px-left xs-margin-5px-bottom"
						src="{{ asset('assets/frontend/img/jdih/2.png') }}" alt="img">
				</div>
			@endif
		</div>
	</section>
</div>
