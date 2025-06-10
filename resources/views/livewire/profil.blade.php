<div>
	<x-frontend.breadcrumb
		:title="$title"
		:listNav="[['label' => 'Tentang Kami']]" />

	<section>
		<div class="container">
			@if ($title !== 'Struktur Organisasi')
				<h4>
					{{ __($title === 'Visi' || $title === 'Misi' ? "$title JDIH Pemerintah Kota Kendari" : $title) }}
				</h4>
			@endif

			@if ($title === 'Sekilas Sejarah' || $title === 'Dasar Hukum' || $title === 'Visi' || $title === 'Misi')
				{!! __($data) !!}
			@endif

			@if ($title === 'Struktur Organisasi')
				<div class="text-center">
					<img class="width-87 margin-10px-bottom xs-margin-5px-bottom"
						src="{{ asset('assets/img/struktur-1.png') }}" alt="img">
					<br>
					<br>
					<img class="width-70 margin-10px-bottom margin-0px-left xs-margin-5px-bottom"
						src="{{ asset('assets/img/struktur-2.png') }}" alt="img">
				</div>
			@endif
		</div>
	</section>
</div>
