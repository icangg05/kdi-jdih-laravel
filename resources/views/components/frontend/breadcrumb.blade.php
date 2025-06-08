<section class="page-title-section bg-img cover-background" data-overlay-dark="7"
	data-background="{{ asset('assets/frontend/img/banner/header.jpg') }}">
	<div class="container">
		<h1>{{ __($title) }}</h1>
		<ul class="text-center">
			<li>
				<a wire:navigate href="{{ route('frontend.beranda') }}">Home</a>
			</li>
			@foreach ($listNav as $item)
				@if (!empty($item['route']))
					<li>
						<a wire:navigate href="{{ $item['route'] }}">{{ $item['label'] }}</a>
					</li>
				@else
					<li>
						<span class="active">{{ $item['label'] }}</span>
					</li>
				@endif
			@endforeach
		</ul>
	</div>
</section>
