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
								<li title="Hyper Text Markup Language"><a class="export-html" href="#" data-mime="text/plain"
										data-hash="1450bf5556aa938b8dd8b5c9414327979429f393e8d46f685972916ebe5244e8gridviewgrid-exporttext/plainutf-811{&quot;cssFile&quot;:[&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css&quot;]}"
										data-hash-export-config="1"
										data-css-styles='{".kv-group-even":{"background-color":"#f0f1ff"},".kv-group-odd":{"background-color":"#f9fcff"},".kv-grouped-row":{"background-color":"#fff0f5","font-size":"1.3em","padding":"10px"},".kv-table-caption":{"border":"1px solid #ddd","border-bottom":"none","font-size":"1.5em","padding":"8px"},".kv-table-footer":{"border-top":"4px double #ddd","font-weight":"bold"},".kv-page-summary td":{"background-color":"#ffeeba","border-top":"4px double #ddd","font-weight":"bold"},".kv-align-center":{"text-align":"center"},".kv-align-left":{"text-align":"left"},".kv-align-right":{"text-align":"right"},".kv-align-top":{"vertical-align":"top"},".kv-align-bottom":{"vertical-align":"bottom"},".kv-align-middle":{"vertical-align":"middle"},".kv-editable-link":{"color":"#428bca","text-decoration":"none","background":"none","border":"none","border-bottom":"1px dashed","margin":"0","padding":"2px 1px"}}'
										tabindex="-1"><i class="text-info glyphicon glyphicon-save"></i> HTML</a></li>
								<li title="Comma Separated Values"><a class="export-csv" href="#" data-mime="application/csv"
										data-hash="f40cf76ebbd65719690faacd2c724db9af52765aa2474aafa0d1212711ac1cb9gridviewgrid-exportapplication/csvutf-811{&quot;colDelimiter&quot;:&quot;,&quot;,&quot;rowDelimiter&quot;:&quot;\r\n&quot;}"
										data-hash-export-config="1" data-css-styles='[]' tabindex="-1"><i
											class="text-primary glyphicon glyphicon-floppy-open"></i> CSV</a></li>
								<li title="Tab Delimited Text"><a class="export-txt" href="#" data-mime="text/plain"
										data-hash="69526c215e2a70bc3fdb4cb8aa84ccfbaf4c878f8ec50acaa5eecd9171c543efgridviewgrid-exporttext/plainutf-811{&quot;colDelimiter&quot;:&quot;\t&quot;,&quot;rowDelimiter&quot;:&quot;\r\n&quot;}"
										data-hash-export-config="1" data-css-styles='[]' tabindex="-1"><i
											class="text-muted glyphicon glyphicon-floppy-save"></i> Text</a></li>
								<li title="Microsoft Excel 95+"><a class="export-xls" href="#"
										data-mime="application/vnd.ms-excel"
										data-hash="43c49a7468fcfe1b4281f34e63210177fa444efe723310c81bcf250b1dd35b67gridviewgrid-exportapplication/vnd.ms-excelutf-811{&quot;worksheet&quot;:&quot;ExportWorksheet&quot;,&quot;cssFile&quot;:&quot;&quot;}"
										data-hash-export-config="1"
										data-css-styles='{".kv-group-even":{"background-color":"#f0f1ff"},".kv-group-odd":{"background-color":"#f9fcff"},".kv-grouped-row":{"background-color":"#fff0f5","font-size":"1.3em","padding":"10px"},".kv-table-caption":{"border":"1px solid #ddd","border-bottom":"none","font-size":"1.5em","padding":"8px"},".kv-table-footer":{"border-top":"4px double #ddd","font-weight":"bold"},".kv-page-summary td":{"background-color":"#ffeeba","border-top":"4px double #ddd","font-weight":"bold"},".kv-align-center":{"text-align":"center"},".kv-align-left":{"text-align":"left"},".kv-align-right":{"text-align":"right"},".kv-align-top":{"vertical-align":"top"},".kv-align-bottom":{"vertical-align":"bottom"},".kv-align-middle":{"vertical-align":"middle"},".kv-editable-link":{"color":"#428bca","text-decoration":"none","background":"none","border":"none","border-bottom":"1px dashed","margin":"0","padding":"2px 1px"}}'
										tabindex="-1"><i class="text-success glyphicon glyphicon-floppy-remove"></i> Excel</a>
								</li>
								<li title="Portable Document Format"><a class="export-pdf" href="#" data-mime="application/pdf"
										data-hash="bf24eca471f0dddfb8bff1368f45ad55629e254ae57364fb4c26e42c994db64cgridviewgrid-exportapplication/pdfutf-811{&quot;mode&quot;:&quot;UTF-8&quot;,&quot;format&quot;:&quot;A4-L&quot;,&quot;destination&quot;:&quot;D&quot;,&quot;marginTop&quot;:20,&quot;marginBottom&quot;:20,&quot;cssInline&quot;:&quot;.kv-wrap{padding:20px}&quot;,&quot;methods&quot;:{&quot;SetHeader&quot;:[{&quot;odd&quot;:{&quot;L&quot;:{&quot;content&quot;:&quot;Yii2 Grid Export (PDF)&quot;,&quot;font-size&quot;:8,&quot;color&quot;:&quot;#333333&quot;},&quot;C&quot;:{&quot;content&quot;:&quot;Grid Export&quot;,&quot;font-size&quot;:16,&quot;color&quot;:&quot;#333333&quot;},&quot;R&quot;:{&quot;content&quot;:&quot;Generated: Sun, 01-Jun-2025&quot;,&quot;font-size&quot;:8,&quot;color&quot;:&quot;#333333&quot;}},&quot;even&quot;:{&quot;L&quot;:{&quot;content&quot;:&quot;Yii2 Grid Export (PDF)&quot;,&quot;font-size&quot;:8,&quot;color&quot;:&quot;#333333&quot;},&quot;C&quot;:{&quot;content&quot;:&quot;Grid Export&quot;,&quot;font-size&quot;:16,&quot;color&quot;:&quot;#333333&quot;},&quot;R&quot;:{&quot;content&quot;:&quot;Generated: Sun, 01-Jun-2025&quot;,&quot;font-size&quot;:8,&quot;color&quot;:&quot;#333333&quot;}}}],&quot;SetFooter&quot;:[{&quot;odd&quot;:{&quot;L&quot;:{&quot;content&quot;:&quot;© Krajee Yii2 Extensions&quot;,&quot;font-size&quot;:8,&quot;font-style&quot;:&quot;B&quot;,&quot;color&quot;:&quot;#999999&quot;},&quot;R&quot;:{&quot;content&quot;:&quot;[ {PAGENO} ]&quot;,&quot;font-size&quot;:10,&quot;font-style&quot;:&quot;B&quot;,&quot;font-family&quot;:&quot;serif&quot;,&quot;color&quot;:&quot;#333333&quot;},&quot;line&quot;:true},&quot;even&quot;:{&quot;L&quot;:{&quot;content&quot;:&quot;© Krajee Yii2 Extensions&quot;,&quot;font-size&quot;:8,&quot;font-style&quot;:&quot;B&quot;,&quot;color&quot;:&quot;#999999&quot;},&quot;R&quot;:{&quot;content&quot;:&quot;[ {PAGENO} ]&quot;,&quot;font-size&quot;:10,&quot;font-style&quot;:&quot;B&quot;,&quot;font-family&quot;:&quot;serif&quot;,&quot;color&quot;:&quot;#333333&quot;},&quot;line&quot;:true}}]},&quot;options&quot;:{&quot;title&quot;:&quot;Grid Export&quot;,&quot;subject&quot;:&quot;PDF export generated by kartik-v/yii2-grid extension&quot;,&quot;keywords&quot;:&quot;krajee, grid, export, yii2-grid, pdf&quot;},&quot;contentBefore&quot;:&quot;&quot;,&quot;contentAfter&quot;:&quot;&quot;}"
										data-hash-export-config="1"
										data-css-styles='{".kv-group-even":{"background-color":"#f0f1ff"},".kv-group-odd":{"background-color":"#f9fcff"},".kv-grouped-row":{"background-color":"#fff0f5","font-size":"1.3em","padding":"10px"},".kv-table-caption":{"border":"1px solid #ddd","border-bottom":"none","font-size":"1.5em","padding":"8px"},".kv-table-footer":{"border-top":"4px double #ddd","font-weight":"bold"},".kv-page-summary td":{"background-color":"#ffeeba","border-top":"4px double #ddd","font-weight":"bold"},".kv-align-center":{"text-align":"center"},".kv-align-left":{"text-align":"left"},".kv-align-right":{"text-align":"right"},".kv-align-top":{"vertical-align":"top"},".kv-align-bottom":{"vertical-align":"bottom"},".kv-align-middle":{"vertical-align":"middle"},".kv-editable-link":{"color":"#428bca","text-decoration":"none","background":"none","border":"none","border-bottom":"1px dashed","margin":"0","padding":"2px 1px"}}'
										tabindex="-1"><i class="text-danger glyphicon glyphicon-floppy-disk"></i> PDF</a></li>
								<li title="JavaScript Object Notation"><a class="export-json" href="#"
										data-mime="application/json"
										data-hash="559fd8e010ca5a34b0fde5b33f1dfdbcd660434167fb38e862aa01ea09da2f14gridviewgrid-exportapplication/jsonutf-811{&quot;colHeads&quot;:[],&quot;slugColHeads&quot;:false,&quot;indentSpace&quot;:4}"
										data-hash-export-config="1" data-css-styles='[]' tabindex="-1"><i
											class="text-warning glyphicon glyphicon-floppy-open"></i> JSON</a></li>
							</ul>
						</div>
						<div class="btn-group"><a id="w0-togdata-page" class="btn btn-default"
								href="/backend/pengumuman/index?_tog1149016d=all" title="Show all data"><i
									class='glyphicon glyphicon-resize-full'></i> All</a></div>
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
