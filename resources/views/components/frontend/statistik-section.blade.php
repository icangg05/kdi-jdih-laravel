<section
	class="relative py-14 lg:py-20 lg:pb-23 overflow-hidden
	bg-linear-to-b from-[#1F2230] via-[#292C36] to-[#1A1C26]">

	<!-- Subtle diagonal lines -->
	<div class="absolute inset-0 opacity-[0.06]"
		style="background-image: repeating-linear-gradient(
			-45deg,
			#ffffff 0px,
			#ffffff 1px,
			transparent 1px,
			transparent 12px
		);">
	</div>

	<!-- Soft accent shapes -->
	<div class="absolute top-0 right-0 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl"></div>
	<div class="absolute bottom-0 left-0 w-72 h-72 bg-orange-500/10 rounded-full blur-3xl"></div>

	<div class="relative max-w-7xl mx-auto px-6">


		<!-- Header -->
		<div class="text-center mb-12">
			<h1 class="text-white text-2xl lg:text-3xl font-bold tracking-wide">STATISTIK</h1>
			<p class="text-sm lg:text-base text-gray-300 mt-2">
				Menyediakan informasi hukum terpercaya untuk membantu Anda mendapatkan wawasan yang dibutuhkan.
			</p>
			<div class="w-12 h-1 bg-orange-500 mx-auto mt-4 rounded"></div>
		</div>

		<div class="max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-white">

			<!-- PERATURAN -->
			<div class="flex items-center gap-4 transition hover:scale-[1.03]">
				<img class="w-10 lg:w-14" src="{{ asset('assets/img/peraturan.svg') }}" alt="img">
				<div>
					<p class="text-xl lg:text-3xl font-bold">{{ number_format($countPeraturan, 0, ',', '.') }}+</p>
					<p class="text-blue-400 text-[11px] lg:text-sm font-semibold tracking-wide">
						PERATURAN
					</p>
				</div>
			</div>

			<!-- MONOGRAFI -->
			<div class="flex items-center gap-4 transition hover:scale-[1.03]">
				<img class="w-10 lg:w-14" src="{{ asset('assets/img/monogrofi.svg') }}" alt="img">
				<div>
					<p class="text-xl lg:text-3xl font-bold">{{ number_format($countMonografi, 0, ',', '.') }}</p>
					<p class="text-blue-400 text-[11px] lg:text-sm font-semibold tracking-wide">
						MONOGRAFI
					</p>
				</div>
			</div>

			<!-- ARTIKEL -->
			<div class="flex items-center gap-4 transition hover:scale-[1.03]">
				<img class="w-10 lg:w-14" src="{{ asset('assets/img/artikel.svg') }}" alt="img">
				<div>
					<p class="text-xl lg:text-3xl font-bold">{{ number_format($countArtikel, 0, ',', '.') }}</p>
					<p class="text-blue-400 text-[11px] lg:text-sm font-semibold tracking-wide">
						ARTIKEL
					</p>
				</div>
			</div>

			<!-- PUTUSAN -->
			<div class="flex items-center gap-4 transition hover:scale-[1.03]">
				<img class="w-10 lg:w-14" src="{{ asset('assets/img/yurisprudensi.svg') }}" alt="img">
				<div>
					<p class="text-xl lg:text-3xl font-bold">{{ number_format($countPutusan, 0, ',', '.') }}</p>
					<p class="text-blue-400 text-[11px] lg:text-sm font-semibold tracking-wide">
						PUTUSAN
					</p>
				</div>
			</div>

		</div>

		<!-- Grafik Card -->
		<div class="mt-10 bg-white rounded-2xl p-8 shadow-lg max-w-5xl mx-auto">
			<h2 class="text-xl font-bold text-gray-800 text-center">
				GRAFIK PERATURAN
			</h2>
			<p class="text-xs lg:text-sm text-gray-500 text-center mt-1">
				Jumlah berkas 5 tahun terakhir berdasarkan jenis dokumen
			</p>
			<div class="w-10 h-1 bg-orange-500 mx-auto my-4 rounded"></div>

			<!-- Chart -->
			<div class="relative h-95">
				<canvas id="statistikChart"></canvas>
			</div>
		</div>
	</div>
</section>



@php
	$peraturan = DB::table('document')
	    ->where('tipe_dokumen', 1)
	    ->select(DB::raw('YEAR(created_at) as year'), DB::raw('COUNT(*) as total'))
	    ->whereBetween(DB::raw('YEAR(created_at)'), [2021, 2025])
	    ->groupBy('year')
	    ->pluck('total', 'year');

	$monografi = DB::table('document')
	    ->where('tipe_dokumen', 2)

	    ->select(DB::raw('YEAR(created_at) as year'), DB::raw('COUNT(*) as total'))
	    ->whereBetween(DB::raw('YEAR(created_at)'), [2021, 2025])
	    ->groupBy('year')
	    ->pluck('total', 'year');

	$keputusan = DB::table('document')
	    ->where('tipe_dokumen', 4)

	    ->select(DB::raw('YEAR(created_at) as year'), DB::raw('COUNT(*) as total'))
	    ->whereBetween(DB::raw('YEAR(created_at)'), [2021, 2025])
	    ->groupBy('year')
	    ->pluck('total', 'year');

	$years = range(2021, 2025);

	$peraturanData = [];
	$monografiData = [];
	$keputusanData = [];

	foreach ($years as $year) {
	    $peraturanData[] = $peraturan[$year] ?? 0;
	    $monografiData[] = $monografi[$year] ?? 0;
	    $keputusanData[] = $keputusan[$year] ?? 0;
	}
@endphp

<!-- Chart Script -->
<script>
	const ctx = document.getElementById('statistikChart').getContext('2d');

	new Chart(ctx, {
		type: 'bar',
		data: {
			labels: @json($years),
			datasets: [{
					label: 'Peraturan & Keputusan',
					data: @json($peraturanData),
					backgroundColor: 'rgba(56, 189, 248, 0.7)',
					borderRadius: 6
				},
				{
					label: 'Monografi',
					data: @json($monografiData),
					backgroundColor: 'rgba(251, 113, 133, 0.7)',
					borderRadius: 6
				},
				{
					label: 'Putusan',
					data: @json($keputusanData),
					backgroundColor: 'rgba(167, 139, 250, 0.7)',
					borderRadius: 6
				}
			]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			plugins: {
				legend: {
					position: 'top',
					labels: {
						color: '#374151'
					}
				}
			},
			scales: {
				y: {
					beginAtZero: true,
					ticks: {
						color: '#374151'
					},
					grid: {
						color: '#e5e7eb'
					}
				},
				x: {
					ticks: {
						color: '#374151'
					},
					grid: {
						display: false
					}
				}
			}
		}
	});
</script>
