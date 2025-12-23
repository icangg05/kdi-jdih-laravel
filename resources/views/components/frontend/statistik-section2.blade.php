<section class="document_hukum">
	<div class="container">
		<div class="text-center margin-40px-bottom heading">
			<h3 class="margin-10px-bottom">STATISTIK</h3>
			<p>Menyediakan informasi hukum terpercaya untuk membantu Anda mendapatkan wawasan yang Anda butuhkan.</p>
			<div class="row justify-content-center align-items-center">
				<hr class="border-heading">
			</div>
			<!-- <p class="no-margin-bottom">Lorem Ipsum is simply dummy printing</p> -->
		</div>
		<div class="row content">
			<div class="card-model col-sm-6 col-md-4 col-lg-3">
				<a wire:navigate href="{{ route('frontend.dokumen.index', 'peraturan') }}">
					<div class="feature-inner display-table">
						<div class="vertical-align-middle">
							<div class="icon">
								<img src="{{ asset('assets/img/peraturan.svg') }}" alt="img">
							</div>
							<div class="content">
								<h6>{{ $countPeraturan }}+</h6>
								<h5 class="font-size20">Peraturan</h5>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="card-model col-sm-6 col-md-4 col-lg-3">
				<a wire:navigate href="{{ route('frontend.dokumen.index', 'monografi') }}">
					<div class="feature-inner display-table">
						<div class="vertical-align-middle">
							<div class="icon">
								<img src="{{ asset('assets/img/monogrofi.svg') }}" alt="img">
							</div>
							<div class="content">
								<h6>{{ $countMonografi }}</h6>
								<h5 class="font-size20">Monografi</h5>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="card-model col-sm-6 col-md-4 col-lg-3">
				<a wire:navigate href="{{ route('frontend.dokumen.index', 'artikel') }}">
					<div class="feature-inner display-table">
						<div class="vertical-align-middle">
							<div class="icon">
								<img src="{{ asset('assets/img/artikel.svg') }}" alt="img">
							</div>
							<div class="content">
								<h6>{{ $countArtikel }}</h6>
								<h5 class="font-size20">Artikel</h5>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="card-model col-sm-6 col-md-4 col-lg-3">
				<a wire:navigate href="{{ route('frontend.dokumen.index', 'putusan') }}">
					<div class="feature-inner display-table">
						<div class="vertical-align-middle">
							<div class="icon">
								<img src="{{ asset('assets/img/yurisprudensi.svg') }}" alt="img">
							</div>
							<div class="content">
								<h6>{{ $countPutusan }}</h6>
								<h5 class="font-size20">Putusan</h5>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="cart">
			<div class="text-center margin-40px-bottom heading">
				<h3 class="margin-10px-bottom">Grafik Peraturan</h3>
				<p>Grafik menampilkan jumlah berkas 5 tahun terkahir dari masing-masing jenis dokumen</p>
				<div class="row justify-content-center align-items-center">
					<hr class="border-heading">
				</div>
			</div>
			<canvas id="myChart"></canvas>
		</div>
	</div>
</section>
<img src="{{ asset('assets/img/batas.svg') }}" class="mb-5" style="width: 100%;">


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

@push('script')
	<script>
		// Data untuk PERDA, PERWALI, dan PERDES
		var data = {
			labels: @json($years),
			datasets: [{
					label: 'PERATURAN & KEPUTUSAN',
					backgroundColor: 'rgba(75, 192, 192, 0.2)',
					borderColor: 'rgba(75, 192, 192, 1)',
					borderWidth: 1,
					data: @json($peraturanData)
				},
				{
					label: 'MONOGRAFI',
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255, 99, 132, 1)',
					borderWidth: 1,
					data: @json($monografiData)
				},
				{
					label: 'KEPUTUSAN',
					backgroundColor: 'rgba(153, 102, 255, 0.2)',
					borderColor: 'rgba(153, 102, 255, 1)',
					borderWidth: 1,
					data: @json($keputusanData)
				}
			]
		};

		function getRandomValue() {
			return Math.floor(Math.random() * (80 - 10 + 1) + 10);
		}

		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: data,
			options: {
				scales: {
					y: {
						beginAtZero: true
					},

				},
			}
		});
	</script>
@endpush
