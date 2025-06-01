<div id="p0">
  <div class="box-body table-responsive no-padding">
    <div id="w0" class="grid-view is-bs3 hide-resize">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="pull-right">
            Ditampilkan {{ $data->firstItem() }} - {{ $data->lastItem() }} dari {{ $data->total() }}
            Data</div>
          <h3 class="panel-title">
            <h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Data {{ $title }}</h3>
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
                      <select id="id" class="form-control" name="name">
                        <option value="">Filter Data</option>
                        @foreach ($col['data_type_search'] as $item)
                          <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                      </select>
                    </td>
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
                    {{ $loop->index + $data->firstItem() }}.</td>

                  @foreach ($columns as $col)
                    @php
                      $value = $item[$col['key']] ?? '—';
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
                    <td>{!! $value !!}</td>
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
                    <form action="{{ route("backend.$prefixRoute.destroy", $item['id']) }}" method="POST"
                      style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button style="outline: none;" data-confirm="Yakin akan menghapus data ini?" type="submit"
                        class="btn btn-sm btn-danger">
                        <b class="fa fa-trash"></b>
                      </button>
                    </form>
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
  <link href="{{ asset('assets') }}/backend/assets/dd0a08c6/css/bootstrap-dialog-bs3.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/be3f94da/css/jquery.resizableColumns.css" rel="stylesheet">
  <script src="{{ asset('assets') }}/backend/assets/dd0a08c6/js/dialog.js"></script>
  <script>
    var krajeeDialogDefaults_f77ffd0f = {
      "alert": {
        "type": "type-info",
        "title": "Information",
        "buttonLabel": "<span class=\"glyphicon glyphicon-ok\"></span> Ok"
      },
      "confirm": {
        "type": "type-warning",
        "title": "Confirmation",
        "btnOKClass": "btn-warning",
        "btnOKLabel": "<span class=\"glyphicon glyphicon-ok\"></span> Ok",
        "btnCancelLabel": "<span class=\"glyphicon glyphicon-ban-circle\"></span>  Cancel"
      },
      "prompt": {
        "draggable": false,
        "title": "Information",
        "buttons": [{
          "label": "Cancel",
          "icon": "glyphicon glyphicon-ban-circle",
          "cssClass": "btn-default"
        }, {
          "label": "Ok",
          "icon": "glyphicon glyphicon-ok",
          "cssClass": "btn-primary"
        }],
        "closable": false
      },
      "dialog": {
        "draggable": true,
        "title": "Information",
        "buttons": [{
          "label": "Cancel",
          "icon": "glyphicon glyphicon-ban-circle",
          "cssClass": "btn-default"
        }, {
          "label": "Ok",
          "icon": "glyphicon glyphicon-ok",
          "cssClass": "btn-primary"
        }]
      }
    };
    var krajeeDialog_ead3f524 = {
      "id": "w3"
    };
    var krajeeDialog = new KrajeeDialog(true, krajeeDialog_ead3f524, krajeeDialogDefaults_f77ffd0f);
  </script>
@endpush

@push('script')
  <script src="{{ asset('assets') }}/backend/assets/f07c8c94/yii.gridView.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/dd0a08c6/js/bootstrap-dialog.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/dd0a08c6/js/dialog-yii.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/be3f94da/js/kv-grid-export.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/be3f94da/js/jquery.resizableColumns.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/e70edb63/jquery.pjax.js"></script>
  <script>
    jQuery(function($) {
      jQuery('#w1').dropdown();
      krajeeYiiConfirm('krajeeDialog');
      var kvGridExp_683746e3 = {
        "gridId": "w0",
        "action": "/backend/gridview/export/download",
        "module": "gridview",
        "encoding": "utf-8",
        "bom": 1,
        "target": "_blank",
        "messages": {
          "allowPopups": "Disable any popup blockers in your browser to ensure proper download.",
          "confirmDownload": "Ok to proceed?",
          "downloadProgress": "Generating the export file. Please wait...",
          "downloadComplete": "Request submitted! You may safely close this dialog after saving your downloaded file."
        },
        "exportConversions": [{
          "from": "<span class=\"glyphicon glyphicon-ok text-success\"></span>",
          "to": "Active"
        }, {
          "from": "<span class=\"glyphicon glyphicon-remove text-danger\"></span>",
          "to": "Inactive"
        }],
        "skipExportElements": [".sr-only", ".hide"],
        "showConfirmAlert": true
      };
      var kvGridExp_12735912 = {
        "filename": "grid-export",
        "showHeader": true,
        "showPageSummary": true,
        "showFooter": true
      };
      var kvGridExp_8e65d47a = {
        "dialogLib": "krajeeDialog",
        "gridOpts": kvGridExp_683746e3,
        "genOpts": kvGridExp_12735912,
        "alertMsg": "The HTML export file will be generated for download.",
        "config": {
          "cssFile": ["https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"]
        }
      };
      var kvGridExp_492e2365 = {
        "dialogLib": "krajeeDialog",
        "gridOpts": kvGridExp_683746e3,
        "genOpts": kvGridExp_12735912,
        "alertMsg": "The CSV export file will be generated for download.",
        "config": {
          "colDelimiter": ",",
          "rowDelimiter": "\r\n"
        }
      };
      var kvGridExp_51e9fb5c = {
        "dialogLib": "krajeeDialog",
        "gridOpts": kvGridExp_683746e3,
        "genOpts": kvGridExp_12735912,
        "alertMsg": "The TEXT export file will be generated for download.",
        "config": {
          "colDelimiter": "\t",
          "rowDelimiter": "\r\n"
        }
      };
      var kvGridExp_9f27f1e3 = {
        "dialogLib": "krajeeDialog",
        "gridOpts": kvGridExp_683746e3,
        "genOpts": kvGridExp_12735912,
        "alertMsg": "The EXCEL export file will be generated for download.",
        "config": {
          "worksheet": "ExportWorksheet",
          "cssFile": ""
        }
      };
      var kvGridExp_312b2896 = {
        "dialogLib": "krajeeDialog",
        "gridOpts": kvGridExp_683746e3,
        "genOpts": kvGridExp_12735912,
        "alertMsg": "The PDF export file will be generated for download.",
        "config": {
          "mode": "UTF-8",
          "format": "A4-L",
          "destination": "D",
          "marginTop": 20,
          "marginBottom": 20,
          "cssInline": ".kv-wrap{padding:20px}",
          "methods": {
            "SetHeader": [{
              "odd": {
                "L": {
                  "content": "Yii2 Grid Export (PDF)",
                  "font-size": 8,
                  "color": "#333333"
                },
                "C": {
                  "content": "Grid Export",
                  "font-size": 16,
                  "color": "#333333"
                },
                "R": {
                  "content": "Generated: Sun, 01-Jun-2025",
                  "font-size": 8,
                  "color": "#333333"
                }
              },
              "even": {
                "L": {
                  "content": "Yii2 Grid Export (PDF)",
                  "font-size": 8,
                  "color": "#333333"
                },
                "C": {
                  "content": "Grid Export",
                  "font-size": 16,
                  "color": "#333333"
                },
                "R": {
                  "content": "Generated: Sun, 01-Jun-2025",
                  "font-size": 8,
                  "color": "#333333"
                }
              }
            }],
            "SetFooter": [{
              "odd": {
                "L": {
                  "content": "© Krajee Yii2 Extensions",
                  "font-size": 8,
                  "font-style": "B",
                  "color": "#999999"
                },
                "R": {
                  "content": "[ {PAGENO} ]",
                  "font-size": 10,
                  "font-style": "B",
                  "font-family": "serif",
                  "color": "#333333"
                },
                "line": true
              },
              "even": {
                "L": {
                  "content": "© Krajee Yii2 Extensions",
                  "font-size": 8,
                  "font-style": "B",
                  "color": "#999999"
                },
                "R": {
                  "content": "[ {PAGENO} ]",
                  "font-size": 10,
                  "font-style": "B",
                  "font-family": "serif",
                  "color": "#333333"
                },
                "line": true
              }
            }]
          },
          "options": {
            "title": "Grid Export",
            "subject": "PDF export generated by kartik-v/yii2-grid extension",
            "keywords": "krajee, grid, export, yii2-grid, pdf"
          },
          "contentBefore": "",
          "contentAfter": ""
        }
      };
      var kvGridExp_e24672cf = {
        "dialogLib": "krajeeDialog",
        "gridOpts": kvGridExp_683746e3,
        "genOpts": kvGridExp_12735912,
        "alertMsg": "The JSON export file will be generated for download.",
        "config": {
          "colHeads": [],
          "slugColHeads": false,
          "jsonReplacer": function(k, v) {
            return typeof(v) === 'string' ? $.trim(v) : v
          },
          "indentSpace": 4
        }
      };
      var kvGridInit_ecd34b83 = function() {
        jQuery('#w0 .export-html').gridexport(kvGridExp_8e65d47a);
        jQuery('#w0 .export-csv').gridexport(kvGridExp_492e2365);
        jQuery('#w0 .export-txt').gridexport(kvGridExp_51e9fb5c);
        jQuery('#w0 .export-xls').gridexport(kvGridExp_9f27f1e3);
        jQuery('#w0 .export-pdf').gridexport(kvGridExp_312b2896);
        jQuery('#w0 .export-json').gridexport(kvGridExp_e24672cf);
        jQuery('#w0-container').resizableColumns('destroy').resizableColumns({
          "store": null,
          "resizeFromBody": false
        });
      };
      kvGridInit_ecd34b83();
      jQuery('#w0').yiiGridView({
        "filterUrl": "\/backend\/pengumuman\/index",
        "filterSelector": "#w0-filters input, #w0-filters select",
        "filterOnFocusOut": true
      });
      jQuery(document).pjax("#p0 a", {
        "push": false,
        "replace": false,
        "timeout": 1000,
        "scrollTo": false,
        "container": "#p0"
      });
      jQuery(document).off("submit", "#p0 form[data-pjax]").on("submit", "#p0 form[data-pjax]", function(event) {
        jQuery.pjax.submit(event, {
          "push": false,
          "replace": false,
          "timeout": 1000,
          "scrollTo": false,
          "container": "#p0"
        });
      });
    });
  </script>
@endpush
