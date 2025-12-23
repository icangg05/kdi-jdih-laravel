<header class="w-full fixed bg-black/70 backdrop-blur-sm text-white top-0 z-50">
	<div class="max-w-7xl mx-auto px-4">
		<div class="flex items-center justify-between h-20">

			<!-- LOGO + TITLE -->
			<div class="flex items-center gap-4">
				<img src="{{ asset('assets/img/logo-new-jdih.png') }}" alt="JDIH" class="h-12">
				<div class="hidden md:block leading-tight">
					<p class="text-xs uppercase text-slate-300">
						Jaringan Dokumentasi dan Informasi Hukum
					</p>
					<p class="text-sm font-semibold text-primary">
						Pemerintah Kota Kendari
					</p>
				</div>
			</div>

			<!-- DESKTOP MENU -->
			<nav class="hidden lg:flex items-center gap-8 text-[13px] font-light">
				<a href="/" class="text-primary/90 transition-all uppercase">Beranda</a>

				<!-- PROFIL -->
				<div class="relative group">
					<button class="flex items-center gap-1 text-white/70 hover:text-primary transition-all uppercase">
						Profil
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M19 9l-7 7-7-7" />
						</svg>
					</button>
					<div
						class="absolute left-0 mt-3 w-48 bg-white text-slate-800 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
						<a href="#" class="block px-4 py-2 hover:bg-slate-100">Tentang JDIH</a>
						<a href="#" class="block px-4 py-2 hover:bg-slate-100">Struktur</a>
					</div>
				</div>

				<!-- JENIS DOKUMEN -->
				<div class="relative group">
					<button class="flex items-center gap-1 text-white/70 hover:text-primary transition-all uppercase">
						Jenis Dokumen
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M19 9l-7 7-7-7" />
						</svg>
					</button>
					<div
						class="absolute left-0 mt-3 w-56 bg-white text-slate-800 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
						<a href="#" class="block px-4 py-2 hover:bg-slate-100">Perda</a>
						<a href="#" class="block px-4 py-2 hover:bg-slate-100">Perwali</a>
						<a href="#" class="block px-4 py-2 hover:bg-slate-100">Keputusan</a>
					</div>
				</div>

				<a href="#" class="text-white/70 hover:text-primary transition-all uppercase">Pengumuman</a>
				<a href="#" class="text-white/70 hover:text-primary transition-all uppercase">Informasi Hukum</a>
				<a href="#" class="text-white/70 hover:text-primary transition-all uppercase">Berita</a>
			</nav>

			<!-- MOBILE BUTTON -->
			<button id="mobileBtn" class="lg:hidden">
				<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M4 6h16M4 12h16M4 18h16" />
				</svg>
			</button>

		</div>
	</div>

	<!-- MOBILE MENU -->
	<div id="mobileMenu" class="hidden lg:hidden bg-slate-900 border-t border-slate-700">
		<div class="px-6 py-4 space-y-3 text-sm">
			<a href="/" class="block text-primary">Beranda</a>
			<a href="#" class="block">Profil</a>
			<a href="#" class="block">Jenis Dokumen</a>
			<a href="#" class="block">Pengumuman</a>
			<a href="#" class="block">Informasi Hukum</a>
			<a href="#" class="block">Berita</a>
		</div>
	</div>
</header>
