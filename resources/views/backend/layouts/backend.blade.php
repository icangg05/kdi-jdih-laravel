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
  @stack('link')
</head>

<body class="hold-transition skin-red sidebar-mini">

  <div class="wrapper">
    @include('backend.partials.header')

    @include('backend.partials.sidebar')

    <div class="content-wrapper">
      @yield('content')
    </div>

    @include('backend.partials.footer')
  </div>

  <script src="{{ asset('assets') }}/backend/assets/3e5a9e6a/jquery.js"></script>
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
  @stack('script')
</body>

</html>
