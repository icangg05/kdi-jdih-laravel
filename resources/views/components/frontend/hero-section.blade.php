<section class="relative h-195 lg:h-190 flex items-center justify-center text-white">

	<!-- BACKGROUND IMAGE -->
	<div class="absolute inset-0" data-aos="zoom-out" data-aos-duration="1200">
		<img
			src="{{ asset('assets/img/background.webp') }}"
			alt="Kota Kendari"
			class="w-full h-full object-cover">
		<div class="absolute inset-0 bg-black/65"></div>
	</div>

	<!-- CONTENT -->
	<div class="relative z-10 max-w-5xl mx-auto px-4 mt-10 text-center">

		<!-- SUBTITLE -->
		<p
			class="text-sm lg:text-base tracking-widest uppercase text-slate-300 mb-3"
			data-aos="fade-down"
			data-aos-delay="100">
			Selamat Datang di Situs Resmi
		</p>

		<div
			class="w-14 h-1 bg-primary mx-auto mb-6"
			data-aos="zoom-in"
			data-aos-delay="200">
		</div>

		<!-- TITLE -->
		<h1
			class="text-2xl md:text-4xl font-bold leading-tight mb-6"
			data-aos="fade-up"
			data-aos-delay="300">
			Jaringan Dokumentasi dan Informasi Hukum <br>
			<span class="text-primary">Kota Kendari</span>
		</h1>

		<!-- QUOTE -->
		<p
			class="text-sm lg:text-base italic text-slate-200 max-w-3xl mx-auto mb-10"
			data-aos="fade-up"
			data-aos-delay="450">
			“Inae konasara ie’e pinesara inae lia” <br>
			<span class="not-italic text-slate-300">
				Siapa yang menghargai adat ia akan dihormati
			</span>
		</p>

		<!-- SEARCH BOX -->
		<div
			class="bg-black/50 backdrop-blur-md rounded-2xl p-6 md:p-8 shadow-2xl max-w-4xl mx-auto"
			data-aos="fade-up"
			data-aos-delay="600">

			<form action="{{ route('frontend.dokumen.index', 'peraturan') }}" method="get"
				class="flex flex-col md:flex-row gap-4">
				<input
					type="text"
					placeholder="Masukkan Kata Kunci Pencarian..."
					class="bg-white text-xs lg:text-sm flex-1 rounded px-3 lg:px-5 py-3 text-slate-800 focus:ring-2 focus:ring-none outline-none"
					name="q"
          autocomplete="off">

				<button
					type="submit"
					class="bg-primary hover:bg-primary-hover text-white text-xs lg:text-sm font-semibold px-8 py-3 rounded flex items-center justify-center gap-2 transition">
					SEARCH
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M21 21l-4.35-4.35M16 10a6 6 0 11-12 0 6 6 0 0112 0z" />
					</svg>
				</button>
			</form>

			<!-- POPULAR SEARCH -->
			<div
				class="mt-6"
				data-aos="fade-up"
				data-aos-delay="750">
				<p class="text-xs lg:text-sm text-slate-300 mb-3">Pencarian Populer</p>
				<div class="flex flex-wrap justify-center gap-3">
					<a wire:navigate.hover href="{{ route('frontend.dokumen.index', 'peraturan') }}"
						class="px-4 py-2 bg-white/15 rounded text-xs lg:text-sm hover:bg-white/10 transition cursor-pointer">Peraturan</a>
					<a wire:navigate.hover href="{{ route('frontend.dokumen.index', 'monografi') }}"
						class="px-4 py-2 bg-white/15 rounded text-xs lg:text-sm hover:bg-white/10 transition cursor-pointer">Monografi</a>
					<a wire:navigate.hover href="{{ route('frontend.dokumen.index', 'artikel') }}"
						class="px-4 py-2 bg-white/15 rounded text-xs lg:text-sm hover:bg-white/10 transition cursor-pointer">Artikel</a>
					<a wire:navigate.hover href="{{ route('frontend.dokumen.index', 'putusan') }}"
						class="px-4 py-2 bg-white/15 rounded text-xs lg:text-sm hover:bg-white/10 transition cursor-pointer">Putusan</a>
				</div>
			</div>

		</div>
	</div>

</section>
