@php
	$menus = config('app.menus');

	// ambil jenis informasi hukum
	$jenisInformasiHukum = DB::table('jenis_informasi_hukum')
	    ->select('id', 'singkatan')
	    ->orderBy('singkatan')
	    ->get()
	    ->map(
	        fn($row) => [
	            'label' => $row->singkatan,
	            'route' => 'frontend.informasi-hukum.index',
	            'param' => ['id' => Hashids::encode($row->id)],
	        ],
	    )
	    ->toArray();

	// inject ke menu yang labelnya "Informasi Hukum"
	foreach ($menus as &$menu) {
	    if ($menu['label'] === 'Informasi Hukum') {
	        $menu['sub'] = $jenisInformasiHukum;
	    }
	}
	unset($menu);
@endphp

<header
	class="w-full fixed bg-black/70 backdrop-blur-sm text-white top-0 z-50"
	x-data="{ mobileOpen: false, subOpen: {} }">
	<div class="max-w-7xl mx-auto px-4">
		<div class="flex items-center justify-between h-17 lg:h-20">

			<!-- LOGO -->
			<div class="flex items-center gap-2 lg:gap-2.5">
        <a wire:navigate href="{{ route('frontend.beranda') }}">
          <img src="{{ asset('assets/img/logo-new-jdih.png') }}" alt="JDIH" class="h-12 lg:h-15">
        </a>
				<div class="leading-tight">
					<p class="text-[17px] lg:text-xs font-bold lg:font-normal tracking-widest lg:tracking-normal uppercase text-slate-300">
						<span class="hidden lg:inline">Jaringan Dokumentasi dan Informasi Hukum</span>
            <span class="inline lg:hidden">JDIH</span>
					</p>
					<p class="text-xs lg:text-sm font-semibold text-primary">
						<span class="hidden lg:inline">Pemerintah</span> Kota Kendari
					</p>
				</div>
			</div>

			<!-- DESKTOP MENU -->
			<nav class="hidden lg:flex items-center gap-8 text-[13px] font-light">

				@foreach ($menus as $menu)
					@php
						$parentActive = isset($menu['startActive'])
						    ? request()->is($menu['startActive']) || request()->is($menu['startActive'] . '/*')
						    : request()->routeIs($menu['route'] . '*');
					@endphp

					{{-- MENU TANPA SUB --}}
					@if (!isset($menu['sub']))
						<a wire:navigate.hover
							href="{{ route($menu['route']) }}"
							class="uppercase transition
						   {{ $parentActive ? 'text-primary' : 'text-white/70 hover:text-primary' }}">
							{{ $menu['label'] }}
						</a>

						{{-- MENU DENGAN SUB --}}
					@else
						<div class="relative group">

							<button
								class="flex items-center gap-1 uppercase transition
								{{ $parentActive ? 'text-primary' : 'text-white/70 group-hover:text-primary' }}">
								{{ $menu['label'] }}
								<svg class="w-4 h-4 transition-transform group-hover:rotate-180"
									fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M19 9l-7 7-7-7" />
								</svg>
							</button>

							<!-- SUBMENU -->
							<div
								class="absolute left-0 top-full pt-3.5
								opacity-0 invisible
								group-hover:opacity-100 group-hover:visible
								transition">

								<div
									class="w-56 rounded
									bg-black/85 backdrop-blur-md
									shadow-lg ring-1 ring-white/15
									overflow-hidden">

									@foreach ($menu['sub'] as $sub)
										<a wire:navigate.hover
											href="{{ route($sub['route'], $sub['param'] ?? null) }}"
											class="block px-4.5 py-2 text-sm transition
										   text-white/65 hover:text-primary hover:bg-white/5
										   {{ $loop->first ? 'pt-4' : '' }}
										   {{ $loop->last ? 'pb-4' : '' }}">
											{{ $sub['label'] }}
										</a>
									@endforeach

								</div>
							</div>
						</div>
					@endif
				@endforeach
			</nav>

			<!-- MOBILE BUTTON -->
			<button @click="mobileOpen = !mobileOpen" class="lg:hidden">
				<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M4 6h16M4 12h16M4 18h16" />
				</svg>
			</button>
		</div>
	</div>

	<!-- MOBILE MENU -->
	<div
		class="lg:hidden bg-black/60 backdrop-blur-sm border-t border-gray-700"
		x-show="mobileOpen"
		x-transition>
		<div class="px-6 py-6 space-y-3 text-sm">

			@foreach ($menus as $i => $menu)
				{{-- TANPA SUBMENU --}}
				@if (!isset($menu['sub']))
					<a wire:navigate.hover
						href="{{ route($menu['route']) }}"
						class="block uppercase
                    {{ request()->routeIs($menu['route']) ? 'text-primary' : 'text-white/80' }}">
						{{ $menu['label'] }}
					</a>

					{{-- DENGAN SUBMENU --}}
				@else
					@php
						$parentActive = isset($menu['startActive'])
						    ? request()->is($menu['startActive']) || request()->is($menu['startActive'] . '/*')
						    : request()->routeIs($menu['route'] . '*');
					@endphp

					<div class="text-white/80"
						x-data="{ open: false }">

						<button
							class="flex w-full items-center justify-between py-2 uppercase
                        {{ $parentActive ? 'text-primary' : '' }}"
							@click="open = !open">
							<span>{{ $menu['label'] }}</span>

							<svg class="w-4 h-4 transition-transform"
								:class="open ? 'rotate-180' : ''"
								fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M19 9l-7 7-7-7" />
							</svg>
						</button>

						<div
							class="pl-4 space-y-2"
							x-show="open"
							x-transition>
							@foreach ($menu['sub'] as $sub)
								<a wire:navigate.hover
									href="{{ route($sub['route'], $sub['param'] ?? null) }}"
									class="block text-white/70 py-0.5
                                {{ $loop->first ? 'pt-1' : '' }}">
									{{ $sub['label'] }}
								</a>
							@endforeach
						</div>
					</div>
				@endif
			@endforeach

		</div>
	</div>
</header>
