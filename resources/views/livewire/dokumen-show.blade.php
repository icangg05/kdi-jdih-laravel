@php
	if ($kategori == 'peraturan') {
	    $columnField = [
	        ['Tempat Terbit', 'tempat_terbit'],
	        ['Tanggal Penetapan', 'tanggal_penetapan'],
	        ['Tanggal Pengundangan', 'tanggal_pengundangan'],
	        ['Sumber', 'sumber'],
	        ['Urusan Pemerintahan', 'urusan_pemerintahan'],
	        ['Bidang Hukum', 'bidang_hukum'],
	        ['Bahasa', 'bahasa'],
	        ['Penandatanganan', 'penandatanganan'],
	        ['Pemrakarsa', 'pemrakarsa'],
	    ];
	} elseif ($kategori == 'monografi') {
	    $columnField = [
	        ['Nomor Panggil', 'nomor_panggil'],
	        ['Penerbit', 'penerbit'],
	        ['Tahun Terbit', 'tahun_terbit'],
	        ['Deskripsi Fisik', 'deskripsi_fisik'],
	        ['Klasifikasi', 'klasifikasi'],
	        ['Bahasa', 'bahasa'],
	        ['ISBN', 'isbn'],
	        ['Tempat Terbit', 'tempat_terbit'],
	        ['Anotasi', 'sumber'],
	        ['Bidang Hukum', 'bidang_hukum'],
	    ];
	} elseif ($kategori == 'artikel') {
	    $columnField = [
	        ['Tahun Terbit', 'tahun_terbit'],
	        ['Sumber', 'sumber'],
	        ['Bahasa', 'bahasa'],
	        ['Bidang Hukum', 'bidang_hukum'],
	    ];
	} elseif ($kategori == 'putusan') {
	    $columnField = [
	        ['Klasifikasi', 'klasifikasi'],
	        ['Amar Putusan', 'amar_status'],
	        ['Tanggal Dibacakan', 'tanggal_penetapan'],
	        ['Tingkat Proses', 'sub_klasifikasi'],
	        ['Penggugat / Pemohon', 'pemohon'],
	        ['Tergugat / Termohon', 'termohon'],
	        ['Tempat Pengadilan', 'lembaga_peradilan'],
	        ['Lokasi', 'tempat_terbit'],
	        ['Bahasa', 'bahasa'],
	    ];
	}
@endphp

<div class="bg-linear-to-b from-white via-slate-50 to-slate-100">
	<x-frontend.breadcrumb
		:title="Str::words($title, 1, '') . ' Detail'"
		:listNav="[
		    ['label' => Str::words($title, 1, ''), 'route' => route('frontend.dokumen.index', $kategori)],
		    ['label' => Str::title($data['jenis_peraturan'])],
		]" />

	{{-- TOP BAR (GANTI SEARCH JADI TOMBOL KEMBALI) --}}
	<div class="border-b-2 border-b-gray-200">
		<div class="max-w-6xl mx-auto px-6 py-4 flex items-center">

			<a wire:navigate.hover href="{{ route('frontend.dokumen.index', $kategori) }}"
				class="inline-flex items-center gap-2 text-sm font-medium
          text-slate-600 hover:text-black transition">
				<i class="fa-solid fa-arrow-left text-sm"></i>
				Kembali
			</a>
		</div>
	</div>

	{{-- MAIN --}}
	<div class="max-w-6xl mx-auto px-6 py-8">
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

			{{-- LEFT CONTENT --}}
			<div class="lg:col-span-2">

				{{-- TITLE --}}
				<h1 class="text-lg font-bold text-slate-800 leading-snug mb-6 uppercase">
					{{ $data['judul'] }}
				</h1>

				{{-- DETAIL --}}
				<div class="text-sm border-t-2 border-gray-200">

					<div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-0">
						@foreach ($columnField as $i => $item)
							@php
								$total = count($columnField);
								$isLast = $i === $total - 1;
								$isSecondLast = $i === $total - 2;

								$useThickBorder = $total % 2 === 0 ? $isLast || $isSecondLast : $isLast;
							@endphp

							<div class="{{ $useThickBorder ? 'border-b-2' : 'border-b' }} border-b-gray-200 py-4">
								<p class="text-accent-hover font-medium">{{ $item[0] }}</p>
								<p class="font-semibold text-slate-700">
									@if ($kategori == 'peraturan' && ($i == 1 || $i == 2))
										@if (!empty($data[$item[1]]))
											{{ Carbon\Carbon::parse($data[$item[1]])->translatedFormat('l, j F Y') }}
										@else
											—
										@endif
									@elseif ($kategori == 'putusan' && $i == 2)
										{{ Carbon\Carbon::parse($data[$item[1]])->translatedFormat('l, j F Y') }}
									@else
										{{ $data[$item[1]] != null || $data[$item[1]] != '' ? $data[$item[1]] : '—' }}
									@endif
								</p>
							</div>
						@endforeach
					</div>


					<!-- MEN PERATURAN & KEPUTUSAN -->
					@if ($kategori == 'peraturan')
						<div class="py-4 border-b-2 border-b-gray-200">
							<p class="text-accent-hover font-medium">Peraturan Terkait</p>
							<ul class="mt-1">
								@forelse ($peraturanTerkait as $item)
									<li>
										<span class="text-slate-600">{{ $item->status_perter }}</span> :
										<a class="font-medium text-primary hover:text-primary-hover transition hover:underline"
											href="{{ route('frontend.dokumen.show', ['peraturan', Hashids::encode($item->peraturan_terkait)]) }}">
											{{ $item->judul_peraturan_terkait }}
										</a>
									</li>
								@empty
									<p class="italic font-semibold text-slate-400">Data Tidak Tersedia</p>
								@endforelse
							</ul>
						</div>

						<div class="py-4 border-b-2 border-b-gray-200">
							<p class="text-accent-hover font-medium">Dokumen Terkait</p>
							<div class="mt-1 d-flex left-content-between align-items-start">
								@forelse ($dokumenTerkait as $item)
									<form action="{{ route('download_file') }}" method="post">
										@csrf
										<input type="hidden" name="filePath"
											value="{{ config('app.doc_directory') . $item->document_terkait }}">
										<button type="submit"
											class="text-white rounded text-xs px-2.5 py-1.5 bg-accent hover:bg-accent-hover transition">
											Download File</button>
									</form>
								@empty
									<p class="italic font-semibold text-slate-400">Data Tidak Tersedia</p>
								@endforelse
							</div>
						</div>

						<div class="py-4 border-b-2 border-b-gray-200">
							<p class="text-accent-hover font-medium">Hasil Uji Materi</p>
							<div class="mt-2 flex gap-1">
								@forelse ($hasilUjiMateri as $item)
									<form action="{{ route('download_file') }}" method="post">
										@csrf
										<input type="hidden" name="filePath"
											value="{{ config('app.doc_directory') . $item->hasil_uji_materi }}">
										<button type="submit"
											class="text-white rounded text-xs px-2.5 py-1.5 bg-accent hover:bg-accent-hover transition">
											Download File</button>
									</form>
								@empty
									<p class="italic font-semibold text-slate-400">Data Tidak Tersedia</p>
								@endforelse
							</div>
						</div>
					@endif
				</div>


				<!-- EKSEMPLAR -->
				@if ($kategori == 'monografi')
					<div class="mt-8 text-slate-700">
						<p class="font-semibold mb-2">EKSEMPLAR</p>

						<table class="w-full text-sm border border-black/15">
							<thead class="bg-gray-100">
								<tr>
									<th class="border border-black/15 px-3 py-2 text-left">Kode Eksemplar</th>
									<th class="border border-black/15 px-3 py-2 text-left">Lokasi Rak</th>
									<th class="border border-black/15 px-3 py-2 text-left">Status Buku</th>
								</tr>
							</thead>
							<tbody>
								@forelse ($eksemplar as $item)
									<tr>
										<td class="border border-black/15 px-3 py-2">{{ $item->kode_eksemplar }}</td>
										<td class="border border-black/15 px-3 py-2">{{ $item->lokasi_rak }}</td>
										<td class="border border-black/15 px-3 py-2">{{ $item->status_eksemplar }}</td>
									</tr>
								@empty
									<tr>
										<td colspan="3" class="border border-black/15 px-3 py-2 text-center">—</td>
									</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				@endif


				<!-- T.E.U -->
				<div class="mt-8 text-slate-700">
					<p class="font-semibold mb-2">T.E.U BADAN</p>

					<table class="w-full text-sm border border-black/15">
						<thead class="bg-gray-100">
							<tr>
								<th class="border border-black/15 px-3 py-2 text-left">Nama Pengarang</th>
								<th class="border border-black/15 px-3 py-2 text-left">Tipe Pengarang</th>
								<th class="border border-black/15 px-3 py-2 text-left">Jenis Pengarang</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($dataPengarang as $item)
								<tr>
									<td class="border border-black/15 px-3 py-2">{{ $item->nama_pengarang }}</td>
									<td class="border border-black/15 px-3 py-2">{{ $item->tipe_pengarang }}</td>
									<td class="border border-black/15 px-3 py-2">{{ $item->jenis_pengarang }}</td>
								</tr>
							@empty
								<tr>
									<td colspan="3" class="border border-black/15 px-3 py-2 text-center">—</td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>


				<!-- SUBJEK -->
				<div class="mt-6 text-sm text-slate-700">
					<strong>SUBJEK :</strong>
					@forelse ($subjek as $i => $item)
						{{ $item->subyek }} {{ $subjek->count() - 1 !== $i ? '|' : '' }}
					@empty
						—
					@endforelse
				</div>
			</div>



			<!-- RIGHT SIDEBAR -->
			<div class="space-y-6 text-sm">

				<!-- JENIS DOKUMEN -->
				<div class="border border-gray-200 bg-gray-50">
					<div class="border-b-2 border-b-gray-200 px-4 py-2 font-semibold text-gray-600">
						JENIS DOKUMEN
					</div>
					<div class="px-4 py-3">
						<span class="inline-block bg-blue-100 text-accent
              font-semibold px-3 py-1">
							PERATURAN DAERAH KOTA
						</span>
					</div>
				</div>

				<!-- STATUS -->
				<div class="border border-gray-200 bg-gray-50">
					<div class="border-b-2 border-b-gray-200 px-4 py-2 font-semibold text-gray-600">
						STATUS
					</div>
					<div class="px-4 py-3">
						<span class="inline-block bg-green-200 text-green-900
              font-semibold px-3 py-1">
							Berlaku
						</span>
					</div>
				</div>

				<!-- LAMPIRAN -->
				<div class="border border-gray-200 bg-gray-50">
					<div class="border-b-2 border-b-gray-200 px-4 py-2 font-semibold text-gray-600">
						LAMPIRAN
					</div>
					<div class="px-4 py-3 space-y-2">
						<a href="#"
							class="rounded flex justify-center items-center gap-2 text-center bg-accent text-white
                font-semibold py-2 hover:bg-accent-hover transition">
							<i class="fa-solid fa-file-arrow-down"></i>
							Download
						</a>

						<a href="#"
							class="rounded flex justify-center items-center gap-2 text-center bg-primary text-white
              font-semibold py-2 hover:bg-primary-hover transition">
							<i class="fa-solid fa-file-arrow-down"></i>
							Abstrak
						</a>
					</div>
				</div>

				<!-- KETERANGAN STATUS -->
				<div class="border border-gray-200 bg-gray-50">
					<div class="border-b-2 border-b-gray-200 px-4 py-2 font-semibold text-gray-600">
						KETERANGAN STATUS
					</div>
					<div class="px-4 py-3 text-gray-600">
						-
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
