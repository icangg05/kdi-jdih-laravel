<x-layouts.backend :title="$title" :listNav="[['label' => 'Peraturan', 'route' => 'backend.peraturan.index'], ['label' => $title]]">
	<div class="nav-tabs-custom">
		<ul class="nav nav-tabs dashboard_tabs_cl">
			<li @class(['active' => !session('tabActive')])>
				<a href="#tab_1" data-toggle="tab">Data Utama</a>
			</li>
			<li @class(['active' => session('tabActive') == 'dataTeu'])>
				<a href="#tab_2" data-toggle="tab">T.E.U</a>
			</li>
			<li @class(['active' => session('tabActive') == 'dataSubjek'])>
				<a href="#tab_3" data-toggle="tab">Subjek</a>
			</li>
			<li @class(['active' => session('tabActive') == 'dataPeraturanTerkait'])>
				<a href="#tab_5" data-toggle="tab">Peraturan Terkait</a>
			</li>
			<li @class(['active' => session('tabActive') == 'dataHasilUjiMateri'])>
				<a href="#tab_7" data-toggle="tab">Hasil Uji Materi</a>
			</li>
			<li @class(['active' => session('tabActive') == 'dataStatus'])>
				<a href="#tab_8" data-toggle="tab">Status</a>
			</li>
		</ul>

		<div class="tab-content">
			{{-- Tab data utama --}}
			<div @class(['tab-pane', 'active' => !session('tabActive')]) id="tab_1">
				<div class="box-header">
					<a class="btn btn-success btn-flat" href="{{ route('backend.peraturan.index') }}">
						<i class="fa fa-mail-reply"></i> Kembali
					</a>&nbsp;
					<a class="btn btn-primary btn-flat" href="{{ route('backend.peraturan.edit', $peraturan->id) }}">
						<i class="fa fa-pencil"></i> Ubah Data Peraturan
					</a>
					<p></p>
					<table id="w0" class="table table-striped table-bordered detail-view">
						<tr>
							<td colspan="2">
								<x-backend.line-with-title title="Data Utama" />
							</td>
						</tr>
						<tr>
							<th>Jenis Peraturan</th>
							<td>{{ $peraturan->jenis_peraturan ?? '—' }}</td>
						</tr>
						<tr>
							<th>Singkatan Peraturan</th>
							<td>{{ $peraturan->singkatan_jenis ?? '—' }}</td>
						</tr>
						<tr>
							<th>Nomor Peraturan</th>
							<td>{{ $peraturan->nomor_peraturan ?? '—' }}</td>
						</tr>
						<tr>
							<th>Tahun</th>
							<td>{{ $peraturan->tahun_terbit ?? '—' }}</td>
						</tr>
						<tr>
							<th>Judul Peraturan</th>
							<td>{{ $peraturan->judul ?? '—' }}</td>
						</tr>
						<tr>
							<th>Tempat Penetapan</th>
							<td>{{ $peraturan->tempat_terbit ?? '—' }}</td>
						</tr>
						<tr>
							<th>Tanggal Penetapan</th>
							<td>
								{{ $peraturan->tanggal_penetapan ? Carbon\Carbon::parse($peraturan->tanggal_penetapan)->translatedFormat('d F Y') : '—' }}
							</td>
						</tr>
						<tr>
							<th>Tanggal Pengundangan</th>
							<td>
								{{ $peraturan->tanggal_pengundangan ? Carbon\Carbon::parse($peraturan->tanggal_pengundangan)->translatedFormat('d F Y') : '—' }}
							</td>
						</tr>
						<tr>
							<th>Sumber</th>
							<td>{{ $peraturan->sumber ?? '—' }}</td>
						</tr>
						<tr>
							<th>Bahasa</th>
							<td>{{ $peraturan->bahasa ?? '—' }}</td>
						</tr>
						<tr>
							<th>Bidang Hukum</th>
							<td>{{ $peraturan->bidang_hukum ?? '—' }}</td>
						</tr>
						<tr>
							<th>Dokumen Abstrak</th>
							<td>
								<form action="{{ route('download_file') }}" method="post">
									@csrf
									<input type="hidden" name="filePath"
										value="{{ config('app.doc_directory') . $peraturan->abstrak ?? '' }}">
									<button @disabled(!checkFilePath(config('app.doc_directory'), $peraturan->abstrak ?? '')) type="submit" class="btn btn-primary btn-sm badge">
										Download Abstrak
									</button>
								</form>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<x-backend.line-with-title title="Data Dokumen" />
							</td>
						</tr>
						<tr>
							<th>Judul Lampiran</th>
							<td>{{ $peraturan->judul_lampiran ?? '—' }}</td>
						</tr>
						<tr>
							<th>Deskripsi Lampiran</th>
							<td>{{ $peraturan->deskripsi_lampiran ?? '—' }}</td>
						</tr>
						<tr>
							<th>Dokumen Lampiran</th>
							<td>
								<form action="{{ route('download_file') }}" method="post">
									@csrf
									<input type="hidden" name="filePath"
										value="{{ config('app.doc_directory') . $peraturan->dokumen_lampiran ?? '' }}">
									<button @disabled(!checkFilePath(config('app.doc_directory'), $peraturan->dokumen_lampiran ?? '')) type="submit" class="btn btn-primary btn-sm badge">
										Download Lampiran
									</button>
								</form>
							</td>
						</tr>
						<tr>
							<th>Status Peraturan</th>
							<td>
								<span class="btn btn-{{ strtolower($peraturan->status) == 'berlaku' ? 'success' : 'danger' }} badge">
									{{ ucfirst($peraturan->status) }}
								</span>
							</td>
						</tr>
						<tr>
							<th>Keterangan Status</th>
							<td>{{ !empty($peraturan->status_terakhir) ? ucfirst($peraturan->status_terakhir) : '—' }}</td>
						</tr>
						<tr>
							<td colspan="2">
								<x-backend.line-with-title title="Data Created" />
							</td>
						</tr>
						<tr>
							<th>Created At</th>
							<td>
								{{ Carbon\Carbon::parse($peraturan->created_at)->translatedFormat('d F Y, H:i:s') }}
							</td>
						</tr>
						<tr>
							<th>Created By</th>
							<td>{{ ucfirst($peraturan->_created_by ?? '—') }}</td>
						</tr>
						<tr>
							<th>Updated At</th>
							<td>
								{{ Carbon\Carbon::parse($peraturan->updated_at)->translatedFormat('d F Y, H:i:s') }}
							</td>
						</tr>
						<tr>
							<th>Updated By</th>
							<td>{{ ucfirst($peraturan->_updated_by ?? '—') }}</td>
						</tr>
					</table>
				</div>
			</div>

			{{-- Tab data TEU --}}
			<div @class(['tab-pane', 'active' => session('tabActive') == 'dataTeu']) id="tab_2">
				<div class="box-header">
					<a class="btn btn-success btn-flat" href="{{ route('backend.form_teu.create', $peraturan->id) }}">
						<i class="fa fa-plus-circle"></i> Tambah TEU
					</a>
					<p></p>
					<div id="w1" class="grid-view is-bs3 hide-resize">
						<div id="w1-container" class="table-responsive kv-grid-container">
							<table class="kv-grid-table table table-bordered table-striped kv-table-wrap">
								<thead>
									<tr>
										<th class="text-center" style="width: 60px;">No</th>
										<th>Nama T.E.U</th>
										<th style="width: 170px;">Tipe T.E.U</th>
										<th style="width: 170px;">Jenis T.E.U</th>
										<th class="text-center" style="width: 150px;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($dataPengarang as $item)
										<tr>
											<td class="text-center">{{ $loop->iteration }}.</td>
											<td>{{ $item->nama_pengarang }}</td>
											<td>{{ $item->tipe_pengarang }}</td>
											<td>{{ $item->jenis_pengarang }}</td>
											<td class="text-center">
												<a href="{{ route('backend.form_teu.destroy', [$peraturan->id, $item->id]) }}"
													class="btn btn-sm btn-danger" data-confirm-delete="true">
													<b class="fa fa-trash"></b>
												</a>
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="5" class="text-center">No results found.</td>
										</tr>
									@endforelse
								</tbody>
							</table>
						</div>
						Ditampilkan 1 - 1 dari 1 Data
					</div>
				</div>
			</div>

			{{-- Tab data subjek --}}
			<div @class(['tab-pane', 'active' => session('tabActive') == 'dataSubjek']) id="tab_3">
				<div class="box-header">
					<a class="btn btn-success btn-flat" href="{{ route('backend.form_subjek.create', $peraturan->id) }}">
						<i class="fa fa-plus-circle"></i> Tambah Subjek
					</a>
					<p></p>
					<div id="w5" class="grid-view is-bs3 hide-resize">
						<div id="w5-container" class="table-responsive kv-grid-container">
							<table class="kv-grid-table table table-bordered table-striped kv-table-wrap">
								<thead>
									<tr>
										<th class="text-center" style="width: 60px;">No</th>
										<th>Nama Subjek</th>
										<th style="width: 150px;">Tipe Subjek</th>
										<th style="width: 150px;">Jenis Subjek</th>
										<th class="text-center" style="width: 150px;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($dataSubjek as $item)
										<tr>
											<td class="text-center">{{ $loop->iteration }}.</td>
											<td>{{ $item->subyek }}</td>
											<td>{{ $item->tipe_subyek }}</td>
											<td>{{ $item->jenis_subyek }}</td>
											<td class="text-center">
												<a href="{{ route('backend.form_subjek.edit', [$peraturan->id, $item->id]) }}"
													class="btn btn-sm btn-warning">
													<b class="fa fa-pencil"></b>
												</a>&nbsp;
												<a href="{{ route('backend.form_subjek.destroy', [$peraturan->id, $item->id]) }}"
													class="btn btn-sm btn-danger" data-confirm-delete="true">
													<b class="fa fa-trash"></b>
												</a>
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="5" class="text-center">No results found.</td>
										</tr>
									@endforelse
								</tbody>
							</table>
						</div>
						Ditampilkan 1 - 1 dari 1 Data
					</div>
				</div>
			</div>

			{{-- Tab data peraturan terkait --}}
			<div @class([
				'tab-pane',
				'active' => session('tabActive') == 'dataPeraturanTerkait',
			]) id="tab_5">
				<div class="box-header">
					<a class="btn btn-success btn-flat"
						href="{{ route('backend.form-peraturan-terkait.create', $peraturan->id) }}">
						<i class="fa fa-plus-circle"></i> Tambah Peraturan Terkait
					</a>
					<p></p>
					<div id="w9" class="grid-view is-bs3 hide-resize">
						<div id="w9-container" class="table-responsive kv-grid-container">
							<table class="kv-grid-table table table-bordered table-striped kv-table-wrap">
								<thead>
									<tr>
										<th class="text-center" style="width: 60px;">No</th>
										<th>Peraturan Terkait</th>
										<th style="width: 150px;">Status</th>
										<th style="min-width: 150px;">Catatan</th>
										<th class="text-center" style="width: 150px;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($dataPeraturanTerkait as $item)
										<tr>
											<td class="text-center">{{ $loop->iteration }}.</td>
											<td>
												<a
													href="{{ route('backend.peraturan.show', $item->peraturan_terkait) }}">{{ $item->judul_peraturan_terkait }}</a>
											</td>
											<td>{{ $item->status_perter }}</td>
											<td>{{ !empty($item->catatan_perter) ? $item->catatan_perter : '—' }}</td>
											<td class="text-center">
												<a href="{{ route('backend.form-peraturan-terkait.edit', [$peraturan->id, $item->id]) }}"
													class="btn btn-sm btn-warning">
													<b class="fa fa-pencil"></b>
												</a>&nbsp;
												<a href="{{ route('backend.form-peraturan-terkait.destroy', [$peraturan->id, $item->id]) }}"
													class="btn btn-sm btn-danger" data-confirm-delete="true">
													<b class="fa fa-trash"></b>
												</a>
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="5">
												<div class="empty text-center">No results found.</div>
											</td>
										</tr>
									@endforelse
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			{{-- Tab data hasil uji materi --}}
			<div @class([
				'tab-pane',
				'active' => session('tabActive') == 'dataHasilUjiMateri',
			]) id="tab_7">
				<div class="box-header">
					<a class="btn btn-success btn-flat"
						href="{{ route('backend.form-hasil-uji-materi.create', $peraturan->id) }}"><i
							class="fa fa-plus-circle"></i> Tambah Uji Materi</a>
					<p></p>
					<div id="w17" class="grid-view is-bs3 hide-resize">
						<div id="w17-container" class="table-responsive kv-grid-container">
							<table class="kv-grid-table table table-bordered table-striped kv-table-wrap">
								<thead>
									<tr>
										<th class="text-center" style="width: 60px;">No</th>
										<th>Hasil Uji Materi</th>
										<th style="min-width: 150px;">Status</th>
										<th style="min-width: 150px;">Catatan</th>
										<th class="text-center" style="width: 150px;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($dataHasilUjiMateri as $item)
										<tr>
											<td class="text-center">{{ $loop->iteration }}.</td>
											<td>
												@if (checkFilePath(config('app.doc_directory'), $item->hasil_uji_materi))
													<a
														href="{{ asset('storage/' . config('app.doc_directory') . $item->hasil_uji_materi) }}">
														{{ $item->hasil_uji_materi }}
													</a>
												@else
													—
												@endif
											</td>
											<td>{{ $item->status_hasum }}</td>
											<td>{{ !empty($item->catatan_hasum) ? $item->catatan_hasum : '—' }}</td>
											<td class="text-center">
												<a href="{{ route('backend.form-hasil-uji-materi.edit', [$peraturan->id, $item->id]) }}"
													class="btn btn-sm btn-warning">
													<b class="fa fa-pencil"></b>
												</a>&nbsp;
												<a href="{{ route('backend.form-hasil-uji-materi.destroy', [$peraturan->id, $item->id]) }}"
													class="btn btn-sm btn-danger" data-confirm-delete="true">
													<b class="fa fa-trash"></b>
												</a>
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="5">
												<div class="empty text-center">No results found.</div>
											</td>
										</tr>
									@endforelse
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			{{-- Tab data status --}}
			<div @class(['tab-pane', 'active' => session('tabActive') == 'dataStatus']) id="tab_8">
				<div class="box-header">
					<a class="btn btn-success btn-flat" href="{{ route('backend.form-status.create', $peraturan->id) }}">
						<i class="fa fa-plus-circle"></i> Tambah Status
					</a>
					<p></p>
					<div id="w21" class="grid-view is-bs3 hide-resize">
						<div id="w21-container" class="table-responsive kv-grid-container">
							<table class="kv-grid-table table table-bordered table-striped kv-table-wrap">
								<thead>
									<tr>
										<th class="text-center" style="width: 60px;">No</th>
										<th style="width: 150px;">Status</th>
										<th>Peraturan</th>
										<th style="min-width: 150px;">Catatan</th>
										<th style="width: 150px;">Tanggal Perubahan</th>
										<th class="text-center" style="width: 150px;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									@forelse ($dataStatus as $item)
										<tr>
											<td class="text-center">{{ $loop->iteration }}.</td>
											<td>{{ ucfirst($item->status_peraturan) }}</td>
											<td>
												<a href="{{ route('backend.redirect-view', ['backend.peraturan.show', $item->id_dokumen_target, 'dataStatus']) }}">
													{{ $item->judul_peraturan }}
												</a>
											</td>
											<td>{{ !empty($item->catatan_status_peraturan) ? $item->catatan_status_peraturan : '—' }}</td>
											<td>{{ Carbon\Carbon::parse($item->tanggal_perubahan)->translatedFormat('d F Y') }}</td>
											<td class="text-center">
												<a href="{{ route('backend.form-status.edit', [$peraturan->id, $item->id]) }}"
													class="btn btn-sm btn-warning">
													<b class="fa fa-pencil"></b>
												</a>&nbsp;
												<a href="{{ route('backend.form-status.destroy', [$peraturan->id, $item->id]) }}"
													class="btn btn-sm btn-danger" data-confirm-delete="true">
													<b class="fa fa-trash"></b>
												</a>
											</td>
										</tr>
									@empty
										<tr>
											<td colspan="6">
												<div class="empty text-center">No results found.</div>
											</td>
										</tr>
									@endforelse
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div>


</x-layouts.backend>
