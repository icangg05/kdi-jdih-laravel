<!-- Container -->
<section class="bg-[#292C36] py-14">
	<div class="max-w-7xl mx-auto px-6">

		<!-- Header -->
		<div class="text-center mb-12">
			<h1 class="text-white text-3xl font-bold tracking-wide">STATISTIK</h1>
			<p class="text-gray-300 mt-2">
				Menyediakan informasi hukum terpercaya untuk membantu Anda mendapatkan wawasan yang dibutuhkan.
			</p>
			<div class="w-12 h-1 bg-orange-500 mx-auto mt-4 rounded"></div>
		</div>

		<div class="max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-white">

			<!-- PERATURAN -->
			<div class="flex items-center gap-4">
				<img class="w-14" src="{{ asset('assets/img/peraturan.svg') }}" alt="img">
				<div>
					<p class="text-3xl font-bold">694+</p>
					<p class="text-blue-400 text-sm font-semibold tracking-wide">
						PERATURAN
					</p>
				</div>
			</div>

			<!-- MONOGRAFI -->
			<div class="flex items-center gap-4">
				<img class="w-14" src="{{ asset('assets/img/monogrofi.svg') }}" alt="img">
				<div>
					<p class="text-3xl font-bold">3</p>
					<p class="text-blue-400 text-sm font-semibold tracking-wide">
						MONOGRAFI
					</p>
				</div>
			</div>

			<!-- ARTIKEL -->
			<div class="flex items-center gap-4">
				<img class="w-14" src="{{ asset('assets/img/artikel.svg') }}" alt="img">
				<div>
					<p class="text-3xl font-bold">10</p>
					<p class="text-blue-400 text-sm font-semibold tracking-wide">
						ARTIKEL
					</p>
				</div>
			</div>

			<!-- PUTUSAN -->
			<div class="flex items-center gap-4">
				<img class="w-14" src="{{ asset('assets/img/yurisprudensi.svg') }}" alt="img">
				<div>
					<p class="text-3xl font-bold">5</p>
					<p class="text-blue-400 text-sm font-semibold tracking-wide">
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
			<p class="text-sm text-gray-500 text-center mt-1">
				Jumlah berkas 5 tahun terakhir berdasarkan jenis dokumen
			</p>
			<div class="w-10 h-1 bg-orange-500 mx-auto my-4 rounded"></div>

			<!-- Chart -->
			<div class="relative h-[380px]">
				<canvas id="statistikChart"></canvas>
			</div>
		</div>
	</div>
</section>

<!-- Chart Script -->
<script>
	const ctx = document.getElementById('statistikChart').getContext('2d');

	new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['2021', '2022', '2023', '2024', '2025'],
			datasets: [{
					label: 'Peraturan & Keputusan',
					data: [30, 95, 40, 290, 235],
					backgroundColor: 'rgba(56, 189, 248, 0.7)',
					borderRadius: 6
				},
				{
					label: 'Monografi',
					data: [0, 3, 0, 0, 2],
					backgroundColor: 'rgba(251, 113, 133, 0.7)',
					borderRadius: 6
				},
				{
					label: 'Putusan',
					data: [0, 1, 0, 0, 1],
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
