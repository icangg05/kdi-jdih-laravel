<div id="p0">
	<div class="box-body table-responsive no-padding">
		<div id="w0" class="grid-view is-bs3 hide-resize">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="pull-right">
						Ditampilkan {{ $data->firstItem() }} - {{ $data->lastItem() }} dari {{ $data->total() }}
						Data</div>
					<h3 class="panel-title">
						<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> &nbsp;Data {{ $title }}</h3>
					</h3>
					<div class="clearfix"></div>
				</div>
				<div class="kv-panel-before">
					<div class="btn-toolbar kv-grid-toolbar toolbar-container pull-right">
						<div class="btn-group"><a class="btn btn-success" href="{{ route("backend.$prefixRoute.create") }}"><i
									class="fa fa-plus-circle"></i> Tambah Data</a></div>
						<div class="btn-group">
							<button id="w1" class="btn btn-default dropdown-toggle" title="Export" data-toggle="dropdown"><i
									class='glyphicon glyphicon-export'></i> <span class="caret"></span></button>
							<ul id="w2" class="dropdown-menu dropdown-menu-right">
								<li role="presentation" class="dropdown-header">Export Page Data</li>
								<li>
									<a class="export-html" href="#">
										<i class="text-info glyphicon glyphicon-save"></i> HTML
									</a>
								</li>
								<li>
									<a class="export-html" href="#">
										<i class="text-primary glyphicon glyphicon-floppy-open"></i> CSV
									</a>
								</li>
								<li>
									<a class="export-html" href="#">
										<i class="text-muted glyphicon glyphicon-floppy-save"></i> Text
									</a>
								</li>
								<li>
									<a class="export-html" href="#">
										<i class="text-success glyphicon glyphicon-floppy-remove"></i> Excel
									</a>
								</li>
								<li>
									<a class="export-html" href="#">
										<i class="text-danger glyphicon glyphicon-floppy-disk"></i> PDF
									</a>
								</li>
								<li>
									<a class="export-html" href="#">
										<i class="text-warning glyphicon glyphicon-floppy-open"></i> JSON
									</a>
								</li>
							</ul>
						</div>
						<div class="btn-group">
							<a id="w0-togdata-page" class="btn btn-default"
								href="#" title="Show all data">
								<i class='glyphicon glyphicon-resize-full'></i> All
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div id="w0-container" class="table-responsive kv-grid-container">
					<table class="kv-grid-table table table-bordered table-striped kv-table-wrap">
						<thead>
							<tr>
								<th class="text-center">No</th>
								@foreach ($columns as $item)
									<th class="text-nowrap">
										<a href="#">{{ $item['title'] }}</a>
									</th>
								@endforeach
								<th class="text-center" style="width: 150px;">Aksi</th>
							</tr>
							<tr id="w0-filters" class="filters skip-export">
								<td>&nbsp;</td>

								@foreach ($columns as $col)
									@if (!empty($col['type_search']) && $col['type_search'] === 'select')
										<td>
											<select id="{{ $col['key'] . '-select' }}" class="form-control {{ $col['key'] }}"
												name="name">
												<option value="">Pilih...</option>
												@foreach ($col['data_type_search'] as $item)
													<option value="{{ $item }}">{{ $item }}</option>
												@endforeach
											</select>
										</td>

										@push('script')
											<script>
												$(document).ready(function() {
													$(".{{ $col['key'] }}").select2();
												});
											</script>
										@endpush
									@else
										<td><input type="text" class="form-control" name="{{ $col['key'] }}" autocomplete="off">
										</td>
									@endif
								@endforeach

								<td>&nbsp;</td>
							</tr>
						</thead>
						<tbody>
							@forelse ($data as $item)
								@php $item = (array) $item; @endphp
								<tr class="w0">
									<td class="text-center" style="width: 50px;">
										{{ $loop->index + $data->firstItem() }}.
									</td>

									@foreach ($columns as $col)
										@php
											$value = !empty($item[$col['key']]) ? $item[$col['key']] : '—';
											// $value = $item[$col['key']] ?? '—';
											if (!empty($col['strip'])) {
											    $value = strip_tags($value);
											}
											if (!empty($col['limit'])) {
											    $value = Str::limit($value, $col['limit']);
											}
											if (!empty($col['format']) && $col['format'] === 'date') {
											    $value = \Carbon\Carbon::parse($value)->translatedFormat('d F Y');
											}
											if (!empty($col['format']) && $col['format'] === 'ucfirst') {
											    $value = ucfirst($value);
											}
										@endphp
										<td>
											@if (!empty($col['format']) && $col['format'] === 'href')
												<a href="{{ route("backend.$prefixRoute.show", $item['id']) }}">{!! $value !!}</a>
											@else
												{!! $value !!}
											@endif
										</td>
									@endforeach

									<td class="text-center">
										<a href="{{ route("backend.$prefixRoute.show", $item['id']) }}">
											<span class="btn btn-sm btn-success">
												<b class="fa fa-search-plus"></b></span>&nbsp;
										</a>
										<a href="{{ route("backend.$prefixRoute.edit", $item['id']) }}">
											<span class="btn btn-sm btn-warning">
												<b class="fa fa-pencil"></b></span>&nbsp;
										</a>
										<a href="{{ route("backend.$prefixRoute.destroy", $item['id']) }}" style="outline: none;"
											data-confirm-delete="true" type="submit"
											class="btn btn-sm btn-danger">
											<b class="fa fa-trash"></b>
											</button>
									</td>
								</tr>
							@empty
								<tr>
									<td class="text-center" colspan="{{ count($columns) + 2 }}">No results found.</td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>
				<div class="kv-panel-after"></div>
				<div class="panel-footer">
					<div class="kv-panel-pager">
						{{ $data->onEachSide(3)->links() }}
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>

@push('link')
	<link href="{{ asset('assets') }}/backend/assets/be3f94da/css/kv-grid.css" rel="stylesheet">
@endpush
