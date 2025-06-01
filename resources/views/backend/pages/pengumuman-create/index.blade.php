<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | JDIH Kota Kendari</title>
  <link href="/backend/assets/e81e5096/css/bootstrap.css" rel="stylesheet">
  <link href="/backend/assets/9b400712/css/kv-widgets.css" rel="stylesheet">
  <link href="/backend/assets/5ae6aa8f/css/bootstrap-datepicker3.css" rel="stylesheet">
  <link href="/backend/assets/5ae6aa8f/css/datepicker-kv.css" rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.0/codemirror.css" rel="stylesheet">
  <link href="/backend/assets/df100375/css/kv-codemirror.css" rel="stylesheet">
  <link href="//cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.css" rel="stylesheet">
  <link href="/backend/assets/df100375/css/kv-summernote.css" rel="stylesheet">
  <link href="/backend/assets/d81ddffc/css/fileinput.css" rel="stylesheet">
  <link href="/backend/assets/218446a2/css/font-awesome.min.css" rel="stylesheet">
  <link href="/backend/assets/f82deaf3/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <link href="/backend/assets/f82deaf3/css/AdminLTE.min.css" rel="stylesheet">
  <link href="/backend/assets/f82deaf3/css/skins/_all-skins.min.css" rel="stylesheet">
  <link href="/backend/assets/f82deaf3/css/style.css" rel="stylesheet">
  <link href="/backend/assets/f82deaf3/summernote/dist/summernote.css" rel="stylesheet">
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
</head>

<body class="hold-transition skin-red sidebar-mini">

  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="index" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>JDIH</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>JDIH</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- Notifications: style can be found in dropdown.less -->
            <!-- <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>

              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-users text-red"></i> 5 new members joined
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user text-red"></i> You changed your username
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul>
        </li> -->


            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                <img class="user-image" src="http://jdih.test/backend/img/default-user.png" width="160"
                  height="auto" alt="myImage">
                <span class="hidden-xs">bobo</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img class="img-circle" src="http://jdih.test/backend/img/default-user.png" alt="User Image">
                  <p>
                    bobo </p>
                  <p>
                    kiebo@gmail.com </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">

                    <a class="btn btn-default btn-flat" href="/backend/admin/user/profile?id=62">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="/backend/site/logout" data-method="post">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">

            <img class="img-circle" src="http://jdih.test/backend/img/default-user.png" width="160"
              height="auto" alt="myImage">
          </div>
          <div class="pull-left info">
            <p>bobo</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
       search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu">
          <li class="header"><span>MAIN NAVIGATION</span></li>
        </ul>
        <ul class="sidebar-menu">
          <li><a href="/backend/site/index"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
          <li><a href="/backend/pengumuman/create"><i class="fa fa-bank"></i> <span>Dokumen Hukum</span> <i
                class="fa fa-angle-left pull-right"></i></a>
            <ul class='treeview-menu'>
              <li><a href="/backend/peraturan/index"><i class="fa fa-pencil-square-o"></i> <span>Peraturan</span></a>
              </li>
              <li><a href="/backend/monografi/index"><i class="fa fa-pencil-square-o"></i> <span>Monografi
                    Hukum</span></a></li>
              <li><a href="/backend/artikel/index"><i class="fa fa-pencil-square-o"></i> <span>Artikel
                    Hukum</span></a></li>
              <li><a href="/backend/putusan/index"><i class="fa fa-balance-scale"></i> <span>Putusan</span></a></li>
            </ul>
          </li>
          <li><a href="/backend/pengumuman/create"><i class="fa fa-recycle"></i> <span>Sirkulasi</span> <i
                class="fa fa-angle-left pull-right"></i></a>
            <ul class='treeview-menu'>
              <li><a href="/backend/sirkulasi/peminjaman"><i class="fa fa-circle-o"></i> <span>Peminjaman</span></a>
              </li>
              <li><a href="/backend/sirkulasi/pengembalian"><i class="fa fa-circle-o"></i>
                  <span>Pengembalian</span></a></li>
              <li><a href="/backend/sirkulasi/index"><i class="fa fa-circle-o"></i> <span>Sejarah
                    Peminjaman</span></a></li>
            </ul>
          </li>
          <li><a href="/backend/berita/index"><i class="fa fa-image"></i> <span>Berita</span></a></li>
          <li><a href="/backend/narasi/update?id=1"><i class="fa fa-pencil-square-o"></i> <span>Narasi &amp;
                Quotes</span></a></li>
          <li><a href="/backend/informasi-hukum/index"><i class="fa fa-pencil-square-o"></i> <span>Informasi
                Hukum</span></a></li>
          <li><a href="/backend/pengumuman/index"><i class="fa fa-image"></i> <span>Pengumuman</span></a></li>
          <li><a href="/backend/video/index"><i class="fa fa-video-camera"></i> <span>Video</span></a></li>
          <li><a href="/backend/pengumuman/create"><i class="fa fa-database"></i> <span>Master Data</span> <i
                class="fa fa-angle-left pull-right"></i></a>
            <ul class='treeview-menu'>
              <li><a href="/backend/gmd/index"><i class="fa fa-circle-o"></i> <span>GMD</span></a></li>
              <li><a href="/backend/jenis-informasi-hukum/index"><i class="fa fa-circle-o"></i> <span>Jenis Informasi
                    Hukum</span></a></li>
              <li><a href="/backend/jenis-pengarang/index"><i class="fa fa-circle-o"></i> <span>Jenis
                    Pengarang</span></a></li>
              <li><a href="/backend/kala-terbit/index"><i class="fa fa-circle-o"></i> <span>Kala Terbit</span></a>
              </li>
              <li><a href="/backend/penerbit/index"><i class="fa fa-circle-o"></i> <span>Penerbit</span></a></li>
              <li><a href="/backend/pengarang/index"><i class="fa fa-circle-o"></i> <span>Pengarang</span></a></li>
              <li><a href="/backend/pola-eksemplar/index"><i class="fa fa-circle-o"></i> <span>Pola
                    Eksemplar</span></a></li>
              <li><a href="/backend/daerah/index"><i class="fa fa-circle-o"></i> <span>Tempat Penetapan</span></a>
              </li>
              <li><a href="/backend/tipe-koleksi/index"><i class="fa fa-circle-o"></i> <span>Tipe Koleksi</span></a>
              </li>
              <li><a href="/backend/tipe-pengarang/index"><i class="fa fa-circle-o"></i> <span>Tipe
                    Pengarang</span></a></li>
              <li><a href="/backend/tipe-dokumen/index"><i class="fa fa-circle-o"></i> <span>Tipe Dokumen</span></a>
              </li>
              <li><a href="/backend/tipe-kata-kunci/index"><i class="fa fa-circle-o"></i> <span>Tipe Kata
                    Kunci</span></a></li>
              <li><a href="/backend/klasifikasi/index"><i class="fa fa-circle-o"></i> <span>Klasifikasi</span></a>
              </li>
              <li><a href="/backend/bidang-hukum/index"><i class="fa fa-circle-o"></i> <span>Bidang Hukum</span></a>
              </li>
              <li><a href="/backend/bahasa/index"><i class="fa fa-circle-o"></i> <span>Bahasa</span></a></li>
              <li><a href="/backend/urusan-pemerintahan/index"><i class="fa fa-circle-o"></i> <span>Urusan
                    Pemerintahan</span></a></li>
            </ul>
          </li>
          <li><a href="/backend/pengumuman/create"><i class="fa fa-unlock"></i> <span>Akses Kontrol</span> <i
                class="fa fa-angle-left pull-right"></i></a>
            <ul class='treeview-menu'>
              <li><a href="/backend/admin/user/index"><i class="fa fa-users"></i> <span>User</span></a></li>
              <li><a href="/backend/member/index"><i class="fa fa-users"></i> <span>Member</span></a></li>
              <li><a href="/backend/admin/route/index"><i class="fa fa-gears"></i> <span>Route</span></a></li>
              <li><a href="/backend/admin/role/index"><i class="fa fa-cog"></i> <span>Role</span></a></li>
              <li><a href="/backend/admin/menu/index"><i class="fa fa-map"></i> <span>Menu</span></a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tambah Data Pengumuman </h1>
        <ul class="breadcrumb">
          <li><a href="/backend/">Home</a></li>
          <li><a href="/backend/pengumuman/index">Pengumuman</a></li>
          <li class="active">Tambah Data Pengumuman</li>
        </ul>
      </section>

      <!-- Main content -->
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
                        data-krajee-datecontrol="datecontrol_3bd44a6c"
                        data-datepicker-source="pengumuman-tanggal-disp-kvdate" data-datepicker-type="2"
                        data-krajee-kvDatepicker="kvDatepicker_d567b497"></div><input type="hidden"
                      id="pengumuman-tanggal" name="Pengumuman[tanggal]">
                    <p class="help-block help-block-error "></p>
                  </div>
                </div>
                <div class="form-group field-pengumuman-judul required">
                  <label class="control-label col-sm-2" for="pengumuman-judul">Judul</label>
                  <div class="col-sm-8">
                    <input type="text" id="pengumuman-judul" class="form-control" name="Pengumuman[judul]"
                      maxlength="255" aria-required="true">
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
                    <input type="hidden" name="Pengumuman[image]" value=""><input type="file"
                      id="pengumuman-image" class="form-control file-loading" name="Pengumuman[image]"
                      data-krajee-fileinput="fileinput_4209968b">
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
    </div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <strong>Copyright &copy; 2025 <a href="https://bphn.go.id">Badan Pembinaan Hukum Nasional</a>.</strong> All
        rights reserved.
      </div>
      User : <span class="label label-default label-md">bobo</span> | Hak Akses :
      <span class="label label-warning label-md">peraturan</span>&nbsp;<span
        class="label label-warning label-md">superadmin</span>&nbsp;<span
        class="label label-warning label-md">pustakawan</span>&nbsp;<span
        class="label label-warning label-md">koordinator pustakawan</span>&nbsp;
    </footer>
  </div>


  <script src="/backend/assets/9e024d5/jquery.js"></script>
  <script src="/backend/assets/2e7252f6/yii.js"></script>
  <script src="/backend/assets/711a21af/js/php-date-formatter.js"></script>
  <script src="/backend/assets/b1a2c90e/js/datecontrol.js"></script>
  <script src="/backend/assets/9b400712/js/kv-widgets.js"></script>
  <script src="/backend/assets/5ae6aa8f/js/bootstrap-datepicker.js"></script>
  <script src="/backend/assets/5ae6aa8f/js/datepicker-kv.js"></script>
  <script src="/backend/assets/2e7252f6/yii.validation.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.0/codemirror.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.0/mode/xml/xml.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
  <script src="/backend/assets/df100375/js/kv-codemirror.js"></script>
  <script src="/backend/assets/df100375/js/kv-summernote.js"></script>
  <script src="//cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.js"></script>
  <script src="/backend/assets/d81ddffc/js/plugins/piexif.js"></script>
  <script src="/backend/assets/d81ddffc/js/plugins/sortable.js"></script>
  <script src="/backend/assets/d81ddffc/js/plugins/purify.js"></script>
  <script src="/backend/assets/d81ddffc/js/fileinput.js"></script>
  <script src="/backend/assets/2e7252f6/yii.activeForm.js"></script>
  <script src="/backend/assets/e81e5096/js/bootstrap.js"></script>
  <script src="/backend/assets/f82deaf3/plugins/fastclick/fastclick.min.js"></script>
  <script src="/backend/assets/f82deaf3/js/app.min.js"></script>
  <script src="/backend/assets/f82deaf3/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="/backend/assets/f82deaf3/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="/backend/assets/f82deaf3/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="/backend/assets/f82deaf3/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="/backend/assets/f82deaf3/plugins/chartjs/Chart.min.js"></script>
  <script src="/backend/assets/f82deaf3/summernote/dist/summernote.js"></script>
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
</body>

</html>
