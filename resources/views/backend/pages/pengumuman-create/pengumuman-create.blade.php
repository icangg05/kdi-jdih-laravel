@extends('backend.layouts.backend')
@section('content')
  <x-backend.breadcrumb title="Tambah Data Pengumuman" :listNav="[['label' => 'Pengumuman', 'route' => 'backend.pengumuman.index'], ['label' => 'Tambah Data Pengumuman']]" />

  <section class="content">
    <div class="box-body no-padding">
      <form id="w0" class="form-horizontal" action="/backend/pengumuman/create" method="post"
        enctype="multipart/form-data">
        <input type="hidden" name="_csrf-backend"
          value="TR5E4GkR-h1q1n72yTj3O2AeKaKuIpRwNxblbDMpspc_SR2QImiTThm1S5HwTKYKMSoewfYX7hgHd60KA27W1g==">
        <div class="box box-primary box-solid">
          <div class="box-header with-border">
            <b>Form Tambah Data Pengumuman</b>
          </div>
          <div class="box-body">
            <div class="form-group field-pengumuman-tanggal required">
              <label class="control-label col-sm-2" for="pengumuman-tanggal">Tanggal</label>
              <div class="col-sm-8">
                <div id="pengumuman-tanggal-disp-kvdate" class="input-group  date"><span
                    class="input-group-addon kv-date-picker" title="Select date"><i
                      class="glyphicon glyphicon-calendar kv-dp-icon"></i></span><span
                    class="input-group-addon kv-date-remove" title="Clear field"><i
                      class="glyphicon glyphicon-remove kv-dp-icon"></i></span><input type="text"
                    id="pengumuman-tanggal-disp" class="form-control krajee-datepicker"
                    name="tanggal-pengumuman-tanggal-disp" value="" placeholder="tulis tanggal Pengumuman"
                    data-krajee-datecontrol="datecontrol_3bd44a6c" data-datepicker-source="pengumuman-tanggal-disp-kvdate"
                    data-datepicker-type="2" data-krajee-kvDatepicker="kvDatepicker_d567b497"></div><input type="hidden"
                  id="pengumuman-tanggal" name="Pengumuman[tanggal]">
                <p class="help-block help-block-error "></p>
              </div>
            </div>
            <div class="form-group field-pengumuman-judul required">
              <label class="control-label col-sm-2" for="pengumuman-judul">Judul</label>
              <div class="col-sm-8">
                <input type="text" id="pengumuman-judul" class="form-control" name="Pengumuman[judul]" maxlength="255"
                  aria-required="true">
                <p class="help-block help-block-error "></p>
              </div>
            </div>
            <div class="form-group field-pengumuman-tag required">
              <label class="control-label col-sm-2" for="pengumuman-tag">Tag</label>
              <div class="col-sm-8">
                <input type="text" id="pengumuman-tag" class="form-control" name="Pengumuman[tag]"
                  aria-required="true">
                <p class="help-block help-block-error "></p>
              </div>
            </div>
            <div class="form-group field-pengumuman-isi required">
              <label class="control-label col-sm-2" for="pengumuman-isi">Isi</label>
              <div class="col-sm-8">
                <div id="pengumuman-isi-container" class="form-control kv-editor-container">
                  <textarea id="pengumuman-isi" class="form-control" name="Pengumuman[isi]" placeholder="masukkan isi Pengumuman..."
                    aria-required="true" data-krajee-summernote="summernote_d795d1b7"></textarea>
                </div>
                <p class="help-block help-block-error "></p>
              </div>
            </div>
            <div class="form-group field-pengumuman-image">
              <label class="control-label col-sm-2" for="pengumuman-image">Image</label>
              <div class="col-sm-8">
                <input type="hidden" name="Pengumuman[image]" value=""><input type="file" id="pengumuman-image"
                  class="form-control file-loading" name="Pengumuman[image]" data-krajee-fileinput="fileinput_4209968b">
                <p class="help-block help-block-error "></p>
              </div>
            </div>
            <div class="form-group field-pengumuman-dokumen">
              <label class="control-label col-sm-2" for="pengumuman-dokumen">Dokumen</label>
              <div class="col-sm-8">
                <input type="hidden" name="Pengumuman[dokumen]" value=""><input type="file"
                  id="pengumuman-dokumen" class="form-control file-loading" name="Pengumuman[dokumen]"
                  data-krajee-fileinput="fileinput_b32dbcd5">
                <p class="help-block help-block-error "></p>
              </div>
            </div>
            <div class="form-group field-pengumuman-status">
              <label class="control-label col-sm-2" for="pengumuman-status">Status</label>
              <div class="col-sm-8">
                <select id="pengumuman-status" class="form-control" name="Pengumuman[status]">
                  <option value="">Pilih Status...</option>
                  <option value="1">Publish</option>
                  <option value="0">Tidak Publish</option>
                </select>
                <p class="help-block help-block-error "></p>
              </div>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-success btn-flat" data-confirm="Yakin data sudah benar."
              data-method="post"><i class="fa fa-save"></i> Simpan</button> <a class="btn btn-danger btn-flat"><i
                class="fa fa-remove"></i> Batal</a>
          </div>
        </div>
      </form>
    </div>
  </section>
@endsection

@push('link')
  <link href="{{ asset('asset') }}/backend/assets/e81e5096/css/bootstrap.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/9b400712/css/kv-widgets.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/5ae6aa8f/css/bootstrap-datepicker3.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/5ae6aa8f/css/datepicker-kv.css" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.0/codemirror.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/df100375/css/kv-codemirror.css" rel="stylesheet">
  <link href="//cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/df100375/css/kv-summernote.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/d81ddffc/css/fileinput.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/218446a2/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/f82deaf3/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/f82deaf3/css/AdminLTE.min.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/f82deaf3/css/skins/_all-skins.min.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/f82deaf3/css/style.css" rel="stylesheet">
  <link href="{{ asset('asset') }}/backend/assets/f82deaf3/summernote/dist/summernote.css" rel="stylesheet">
  <script>
    window.datecontrol_3bd44a6c = {
      "idSave": "pengumuman-tanggal",
      "url": "\/backend\/datecontrol\/parse\/convert",
      "type": "date",
      "saveFormat": "Y-m-d",
      "dispFormat": "d-F-Y",
      "saveTimezone": null,
      "dispTimezone": null,
      "asyncRequest": true,
      "language": "en"
    };

    window.kvDatepicker_d567b497 = {
      "autoclose": true,
      "format": "dd-MM-yyyy"
    };

    window.summernote_d795d1b7 = {
      "lang": "en-US",
      "placeholder": "masukkan isi Pengumuman...",
      "styleWithSpan": false,
      "height": 300,
      "dialogsFade": true,
      "toolbar": [
        ["style1", ["style"]],
        ["style2", ["bold", "italic", "underline", "strikethrough", "superscript", "subscript"]],
        ["font", ["fontname", "fontsize", "color", "clear"]],
        ["para", ["ul", "ol", "paragraph", "height"]],
        ["insert", ["link", "picture", "video", "table", "hr"]],
        ["view", ["help", "codeview", "fullscreen"]]
      ],
      "fontSizes": ["8", "9", "10", "11", "12", "13", "14", "16", "18", "20", "24", "36", "48"],
      "codemirror": {
        "theme": "default",
        "lineNumbers": true,
        "styleActiveLine": true,
        "matchBrackets": true,
        "smartIndent": true
      },
      "hint": [{
        "match": /:([\-+\w]+)$/,
        "search": function(keyword, callback) {
          callback($.grep(kvEmojis, function(item) {
            return item.indexOf(keyword) === 0;
          }));
        },
        "template": function(item) {
          var content = kvEmojiUrls[item];
          return '<img src="' + content + '" width="20" /> :' + item + ':'
        },
        "content": function(item) {
          var url = kvEmojiUrls[item];
          if (url) {
            return $("<img />").attr("src", url).css("width", 20)[0];
          }
          return "";
        }
      }]
    };

    window.fileinput_4209968b = {
      "allowedFileExtensions": ["jpg", "jpeg", "png", "bmp"],
      "showUpload": false,
      "language": "en",
      "resizeImage": false,
      "autoOrientImage": true,
      "purifyHtml": true
    };

    window.fileinput_b32dbcd5 = {
      "allowedFileExtensions": ["pdf"],
      "showUpload": false,
      "language": "en",
      "resizeImage": false,
      "autoOrientImage": true,
      "purifyHtml": true
    };
  </script>
@endpush

@push('script')
  <script src="{{ asset('asset') }}/backend/assets/9e024d5/jquery.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/2e7252f6/yii.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/711a21af/js/php-date-formatter.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/b1a2c90e/js/datecontrol.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/9b400712/js/kv-widgets.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/5ae6aa8f/js/bootstrap-datepicker.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/5ae6aa8f/js/datepicker-kv.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/2e7252f6/yii.validation.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.0/codemirror.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.0/mode/xml/xml.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/df100375/js/kv-codemirror.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/df100375/js/kv-summernote.js"></script>
  <script src="//cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/d81ddffc/js/plugins/piexif.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/d81ddffc/js/plugins/sortable.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/d81ddffc/js/plugins/purify.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/d81ddffc/js/fileinput.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/2e7252f6/yii.activeForm.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/e81e5096/js/bootstrap.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/f82deaf3/plugins/fastclick/fastclick.min.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/f82deaf3/js/app.min.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/f82deaf3/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/f82deaf3/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/f82deaf3/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/f82deaf3/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/f82deaf3/plugins/chartjs/Chart.min.js"></script>
  <script src="{{ asset('asset') }}/backend/assets/f82deaf3/summernote/dist/summernote.js"></script>
  <script>
    jQuery(function($) {
      jQuery && jQuery.pjax && (jQuery.pjax.defaults.maxCacheLength = 0);
      if (jQuery('#pengumuman-tanggal').data('datecontrol')) {
        jQuery('#pengumuman-tanggal').datecontrol('destroy');
      }
      jQuery('#pengumuman-tanggal-disp').datecontrol(datecontrol_3bd44a6c);

      jQuery.fn.kvDatepicker.dates = {};
      if (jQuery('#pengumuman-tanggal-disp').data('kvDatepicker')) {
        jQuery('#pengumuman-tanggal-disp').kvDatepicker('destroy');
      }
      jQuery('#pengumuman-tanggal-disp-kvdate').kvDatepicker(kvDatepicker_d567b497);

      initDPRemove('pengumuman-tanggal-disp');
      initDPAddon('pengumuman-tanggal-disp');
      $("#pengumuman-isi").kvSummernote({
        "enableHintEmojis": true,
        "autoFormatCode": true
      });
      if (jQuery('#pengumuman-isi').data('summernote')) {
        jQuery('#pengumuman-isi').summernote('destroy');
      }
      jQuery('#pengumuman-isi').summernote(summernote_d795d1b7);

      if (jQuery('#pengumuman-image').data('fileinput')) {
        jQuery('#pengumuman-image').fileinput('destroy');
      }
      jQuery('#pengumuman-image').fileinput(fileinput_4209968b);

      if (jQuery('#pengumuman-dokumen').data('fileinput')) {
        jQuery('#pengumuman-dokumen').fileinput('destroy');
      }
      jQuery('#pengumuman-dokumen').fileinput(fileinput_b32dbcd5);

      jQuery('#w0').yiiActiveForm([{
        "id": "pengumuman-tanggal",
        "name": "tanggal",
        "container": ".field-pengumuman-tanggal",
        "input": "#pengumuman-tanggal",
        "error": ".help-block.help-block-error",
        "validate": function(attribute, value, messages, deferred, $form) {
          yii.validation.required(value, messages, {
            "message": "Tanggal cannot be blank."
          });
        }
      }, {
        "id": "pengumuman-judul",
        "name": "judul",
        "container": ".field-pengumuman-judul",
        "input": "#pengumuman-judul",
        "error": ".help-block.help-block-error",
        "validate": function(attribute, value, messages, deferred, $form) {
          yii.validation.required(value, messages, {
            "message": "Judul cannot be blank."
          });
          yii.validation.string(value, messages, {
            "message": "Judul must be a string.",
            "max": 255,
            "tooLong": "Judul should contain at most 255 characters.",
            "skipOnEmpty": 1
          });
        }
      }, {
        "id": "pengumuman-tag",
        "name": "tag",
        "container": ".field-pengumuman-tag",
        "input": "#pengumuman-tag",
        "error": ".help-block.help-block-error",
        "validate": function(attribute, value, messages, deferred, $form) {
          yii.validation.required(value, messages, {
            "message": "Tag cannot be blank."
          });
          yii.validation.string(value, messages, {
            "message": "Tag must be a string.",
            "skipOnEmpty": 1
          });
        }
      }, {
        "id": "pengumuman-isi",
        "name": "isi",
        "container": ".field-pengumuman-isi",
        "input": "#pengumuman-isi",
        "error": ".help-block.help-block-error",
        "validate": function(attribute, value, messages, deferred, $form) {
          yii.validation.required(value, messages, {
            "message": "Isi cannot be blank."
          });
          yii.validation.string(value, messages, {
            "message": "Isi must be a string.",
            "skipOnEmpty": 1
          });
        }
      }, {
        "id": "pengumuman-image",
        "name": "image",
        "container": ".field-pengumuman-image",
        "input": "#pengumuman-image",
        "error": ".help-block.help-block-error",
        "validate": function(attribute, value, messages, deferred, $form) {
          yii.validation.string(value, messages, {
            "message": "Image must be a string.",
            "skipOnEmpty": 1
          });
        }
      }, {
        "id": "pengumuman-dokumen",
        "name": "dokumen",
        "container": ".field-pengumuman-dokumen",
        "input": "#pengumuman-dokumen",
        "error": ".help-block.help-block-error",
        "validate": function(attribute, value, messages, deferred, $form) {
          yii.validation.string(value, messages, {
            "message": "Dokumen must be a string.",
            "skipOnEmpty": 1
          });
        }
      }, {
        "id": "pengumuman-status",
        "name": "status",
        "container": ".field-pengumuman-status",
        "input": "#pengumuman-status",
        "error": ".help-block.help-block-error",
        "validate": function(attribute, value, messages, deferred, $form) {
          yii.validation.number(value, messages, {
            "pattern": /^\s*[+-]?\d+\s*$/,
            "message": "Status must be an integer.",
            "skipOnEmpty": 1
          });
        }
      }], []);
    });
  </script>
@endpush
