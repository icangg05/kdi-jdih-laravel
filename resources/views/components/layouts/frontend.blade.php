<!DOCTYPE html>
<html lang="en-US">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="google-site-verification" content="Gas7tAzgL-UWbYJgFzXaDPZF7p88n0drTsI0P2jGd2c" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title></title> -->
  <title>Situs Resmi JDIH Kota Kendari</title>
  <link href="{{ asset('assets/frontend/css/plugins.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/search/search.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/css/styles.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/css/main.css') }}" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- aos library -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- cart js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    .btn-custom {
      background: rgb(70, 109, 198) !important;
      color: #fff;
      font-size: 0.7rem;
      padding: 0px 16px;
      border-radius: 2px;
      text-transform: uppercase;
      font-weight: 600;
      letter-spacing: 0.5px;
      outline: none;
      border: none;
    }

    .btn-custom-2 {
      background: rgb(255, 129, 11) !important;
      color: #fff;
      font-size: 0.7rem;
      padding: 0px 16px;
      border-radius: 2px;
      text-transform: uppercase;
      font-weight: 600;
      letter-spacing: 0.5px;
      outline: none;
      border: none;
    }

    .btn-custom:hover,
    .btn-custom:focus,
    .btn-custom-2:hover,
    .btn-custom-2:focus {
      color: #fff;
    }

    .dokumen .card p a {
      font-size: 1rem !important;
    }
  </style>
  </style>
</head>

<body>
  <div class="main-wrapper">
    @include('frontend.partials.header')

    {{ $slot }}

    @include('frontend.partials.footer')
  </div>

  <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

  {{-- Load all assets script --}}
  {{-- <script src="/assets/3e5a9e6a/jquery.js"></script> --}}
  {{-- <script src="/assets/f07c8c94/yii.js"></script> --}}
  <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/modernizr.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/search/search.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/nav-menu.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/easy.responsive.tabs.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/owl.carousel.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/countdown.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/animated-headline.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/ion.rangeSlider.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/jquery.bootstrap.wizard.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/form-wizard.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/clipboard.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/prism.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
  <script>
    AOS.init();
  </script>

  @stack('script')
</body>

</html>
