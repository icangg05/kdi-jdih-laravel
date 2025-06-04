<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - JDIH Kota Kendari</title>
  <link href="{{ asset('assets') }}/backend/assets/5bd7bfbf/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/63e477e8/css/bootstrap.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/687d7f9a/plugins/jvectormap/jquery-jvectormap-1.2.2.css"
    rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/687d7f9a/css/AdminLTE.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/687d7f9a/css/skins/_all-skins.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/687d7f9a/css/style.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/687d7f9a/summernote/dist/summernote.css" rel="stylesheet">

  {{-- Link href form input --}}
  @if (Str::contains(Request()->path(), ['/create', '/edit']))
    <link href="{{ asset('assets') }}/backend/assets/3ef8f6a7/css/kv-widgets.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/backend/assets/85185e69/css/bootstrap-datepicker3.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/backend/assets/85185e69/css/datepicker-kv.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.0/codemirror.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/backend/assets/6a009609/css/kv-codemirror.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/backend/assets/6a009609/css/kv-summernote.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/backend/assets/7fee4fda/css/fileinput.css" rel="stylesheet">
  @endif
  <script src="{{ asset('assets') }}/backend/assets/3e5a9e6a/jquery.js"></script>

  {{-- Select2 link and script --}}
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <style>
    .select2-selection.select2-selection--single {
      height: 34px !important;
      opacity: 0.9 !important;
    }

    .select2-results__option:hover {
      color: white !important;
    }

    .no-spinner::-webkit-inner-spin-button,
    .no-spinner::-webkit-outer-spin-button {
      -webkit-appearance: none !important;
      margin: 0 !important;
    }

    /* Firefox */
    .no-spinner {
      -moz-appearance: textfield !important;
    }
  </style>

  @stack('link')
</head>

<body class="hold-transition skin-red sidebar-mini">
  @include('sweetalert::alert')

  <div class="wrapper">
    @include('backend.partials.header')
    @include('backend.partials.sidebar')

    <div class="content-wrapper">
      <x-backend.breadcrumb :title="$title" :listNav="$listNav" />

      <section class="content">
        {{ $slot }}
      </section>
    </div>

    @include('backend.partials.footer')
  </div>

  <script src="{{ asset('assets') }}/backend/assets/f07c8c94/yii.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/63e477e8/js/bootstrap.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/687d7f9a/plugins/fastclick/fastclick.min.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/687d7f9a/js/app.min.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/687d7f9a/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/687d7f9a/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/687d7f9a/plugins/jvectormap/jquery-jvectormap-world-mill-en.js">
  </script>
  <script src="{{ asset('assets') }}/backend/assets/687d7f9a/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/687d7f9a/plugins/chartjs/Chart.min.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/687d7f9a/summernote/dist/summernote.js"></script>

  {{-- Script form input --}}
  @if (Str::contains(Request()->path(), ['/create', '/edit']))
    <script src="{{ asset('assets') }}/backend/assets/e83a12bb/js/php-date-formatter.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/8fbf74d4/js/datecontrol.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/3ef8f6a7/js/kv-widgets.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/85185e69/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/85185e69/js/datepicker-kv.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/f07c8c94/yii.validation.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.0/codemirror.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.0/mode/xml/xml.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/6a009609/js/kv-codemirror.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/6a009609/js/kv-summernote.js"></script>
    <script src="//cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/7fee4fda/js/plugins/piexif.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/7fee4fda/js/plugins/sortable.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/7fee4fda/js/plugins/purify.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/7fee4fda/js/fileinput.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/f07c8c94/yii.activeForm.js"></script>
    <script src="{{ asset('assets') }}/backend/assets/687d7f9a/js/app.min.js"></script>
  @endif

  @stack('script')
</body>

</html>
