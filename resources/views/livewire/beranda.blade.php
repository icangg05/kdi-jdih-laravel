<div>
	@include('components.frontend.hero-section')
	@include('components.frontend.pejabat-section')
	@include('components.frontend.statistik-section')
	@include('components.frontend.peraturan-section')
	@include('components.frontend.monografi-section')
	@include('components.frontend.pengumuman-section')
	@include('components.frontend.video-section')
	@include('components.frontend.berita-section')

	<footer class="bg-[#292C36] text-white/60">
		<div class="max-w-7xl mx-auto px-6 py-16">

			<!-- Grid -->
			<div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">

				<!-- Tentang -->
				<div>
					<div class="flex items-center gap-3 mb-4">
						<img src="https://jdih.kendarikota.go.id/assets/img/logo-new-jdih.png" alt="JDIH" class="h-20">
					</div>

					<p class="text-sm leading-relaxed text-white/50">
						JDIH Kota Kendari hadir untuk meningkatkan pelayanan kepada masyarakat
						atas kebutuhan dokumentasi dan informasi hukum secara lengkap,
						akurat, mudah, dan cepat.
					</p>
				</div>

				<!-- Tautan -->
				<div>
					<h3 class="text-lg font-semibold text-white mb-5 relative">
						Tautan
						<span class="absolute -bottom-2 left-0 w-10 h-1 bg-primary rounded"></span>
					</h3>

					<ul class="space-y-3 text-sm">
						<li>
							<a href="#" class="hover:text-orange-400 transition">
								Portal Kemenkumham RI
							</a>
						</li>
						<li>
							<a href="#" class="hover:text-orange-400 transition">
								Portal BPHN
							</a>
						</li>
						<li>
							<a href="#" class="hover:text-orange-400 transition">
								Portal JDIHN
							</a>
						</li>
						<li>
							<a href="#" class="hover:text-orange-400 transition">
								e-Government Kota Kendari
							</a>
						</li>
					</ul>
				</div>

				<!-- Kontak -->
				<div>
					<h3 class="text-lg font-semibold text-white mb-5 relative">
						Kontak Kami
						<span class="absolute -bottom-2 left-0 w-10 h-1 bg-primary rounded"></span>
					</h3>

					<ul class="space-y-4 text-sm">
						<li class="flex items-start gap-3">
							<span class="text-primary mt-1">📍</span>
							<span>
								Bagian Hukum Setda Kota Kendari<br>
								Jl. Drs. H. Abd. Silondae No. 8<br>
								Kel. Mandonga, Kec. Mandonga 93111
							</span>
						</li>

						<li class="flex items-center gap-3">
							<span class="text-primary">📞</span>
							0821-3527-3000
						</li>

						<li class="flex items-center gap-3">
							<span class="text-primary">✉️</span>
							pemkot@kendarikota.go.id
						</li>
					</ul>
				</div>

				<!-- Statistik -->
				<div>
					<h3 class="text-lg font-semibold text-white mb-5 relative">
						Statistik Pengunjung
						<span class="absolute -bottom-2 left-0 w-10 h-1 bg-primary rounded"></span>
					</h3>

					<div class="space-y-4 text-sm">
						<div class="flex items-center justify-between">
							<span>Hari Ini</span>
							<span class="px-3 py-1 rounded-full bg-gray-700 text-white">
								32
							</span>
						</div>

						<div class="flex items-center justify-between">
							<span>Bulan Ini</span>
							<span class="px-3 py-1 rounded-full bg-gray-700 text-white">
								393
							</span>
						</div>

						<div class="flex items-center justify-between">
							<span>Total</span>
							<span class="px-3 py-1 rounded-full bg-gray-700 text-white">
								39.207
							</span>
						</div>

						<div class="mt-6">
							<p class="text-xs text-slate-400 mb-3">
								Apakah pelayanan dokumentasi hukum dirasa puas?
							</p>

							<a
								href="#"
								class="inline-flex items-center gap-2 rounded bg-primary px-4 py-2 text-sm font-semibold text-white transition">
								📊 Ikuti Survey Kami
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Bottom -->
		<div class="border-t border-slate-800 bg-[#131313]">
			<div class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between gap-4">

				<p class="text-sm text-white/60">
					© 2025 All Rights Reserved by <span class="text-primary font-semibold">BPHN</span>
				</p>

				<!-- Sosial Media -->
				<div class="flex items-center gap-4">
					<a href="#" class="hover:text-orange-400 transition">🌐 JDIH Kota Kendari</a>
					<a href="#" class="hover:text-orange-400 transition">📸 jdihkotakendari2</a>
					<a href="#" class="hover:text-orange-400 transition">▶️ JDIH Kendari</a>
					<a href="#" class="hover:text-orange-400 transition">🎵 JDIH</a>
				</div>

			</div>
		</div>
	</footer>

</div>
