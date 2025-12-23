<section class="bg-slate-50 py-20">
	<div class="max-w-6xl mx-auto px-6">

		<!-- Header -->
		<div class="mb-12">
			<h2 class="text-3xl font-bold text-slate-900">
				Pengumuman Terbaru
			</h2>
			<p class="mt-2 text-slate-600 max-w-3xl">
				Menyajikan pengumuman terbaru dari Jaringan Dokumentasi dan Informasi
				Hukum Pemerintah Kota Kendari
			</p>
		</div>

		<!-- List -->
		<div class="space-y-6">

			@for ($i = 0; $i < 3; $i++)
				<article
					class="group bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-md transition">

					<div class="flex flex-col sm:flex-row">

						<!-- Image -->
						<div class="sm:w-60 shrink-0">
							<img
								src="https://jdih.kendarikota.go.id/assets/img/default-img.jpg"
								alt="Pengumuman JDIH"
								class="h-44 sm:h-full w-full object-cover" />
						</div>

						<!-- Content -->
						<div class="p-6 flex flex-col justify-between">

							<!-- Badge -->
							<span
								class="mb-3 inline-block w-fit rounded-full bg-orange-100 text-primary text-xs font-semibold px-3 py-1">
								Pemberitahuan Putusan
							</span>

							<div>
								<h3
									class="text-lg font-semibold text-slate-900 group-hover:text-primary transition">
									RELAS PEMBERITAHUAN PUTUSAN N...
								</h3>

								<p class="mt-2 text-sm text-slate-600 line-clamp-2">
									telah memberitahukan kepada LA MANSYUR ALIAS LA MANSYUR BIN LA
									sesuai ketentuan peraturan perundang-undangan yang berlaku...
								</p>
							</div>

							<div class="mt-4 flex items-center justify-between">
								<span class="text-sm text-slate-500">
									11 November 2025
								</span>

								<a href="#"
									class="text-sm font-semibold text-primary hover:text-orange-700">
									Baca Selengkapnya →
								</a>
							</div>

						</div>
					</div>
				</article>
			@endfor

		</div>

		<!-- CTA -->
		<div class="mt-14 text-center">
			<a href="#"
				class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-lg font-semibold transition">
				Pengumuman Lainnya
			</a>
		</div>

	</div>
</section>
