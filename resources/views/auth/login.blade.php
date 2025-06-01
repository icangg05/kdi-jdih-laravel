<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Situs Resmi JDIH Kota Kendari</title>
  <link href="{{ asset('assets') }}/backend/assets/5bd7bfbf/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/63e477e8/css/bootstrap.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/687d7f9a/plugins/jvectormap/jquery-jvectormap-1.2.2.css"
    rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/687d7f9a/css/AdminLTE.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/687d7f9a/css/skins/_all-skins.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/687d7f9a/css/style.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/backend/assets/687d7f9a/summernote/dist/summernote.css" rel="stylesheet">
</head>

<body class="login-page">
  <div class="login-box">
    <div class="login-logo">
      <center>
        <a href="{{ route('frontend.beranda') }}">
          <img class="img-responsive" src="{{ asset('assets') }}/backend/assets_b/img/jdul.png" alt="User Image">
        </a>
      </center>
    </div>
    <div class="box box-warning direct-chat direct-chat-warning">
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan Login</p>
        <form id="login-form" action="{{ route('authenticate') }}" method="POST">
          @csrf
          <div class="form-group has-feedback field-loginform-username required">
            <input type="text" id="loginform-username" class="form-control" name="username" placeholder="Username"
              aria-required="true" value="{{ old('username') }}" required autofocus>
            @error('username')
              <div class="text-danger text-sm mt-1">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group has-feedback field-loginform-password required">
            <input type="password" id="loginform-password" class="form-control" name="password" placeholder="Password"
              aria-required="true" required>
            @error('password')
              <div class="text-danger text-sm mt-1">{{ $message }}</div>
            @enderror
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="form-group field-loginform-rememberme">
                <div class="checkbox">
                  <label for="loginform-rememberme">
                    <input type="hidden" name="rememberMe" value="0">
                    <input type="checkbox" id="loginform-rememberme" name="rememberMe">
                    Remember Me
                  </label>
                  <p class="help-block help-block-error"></p>
                </div>
              </div>
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="{{ asset('assets') }}/backend/assets/3e5a9e6a/jquery.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/f07c8c94/yii.js"></script>
  <script src="{{ asset('assets') }}/backend/assets/f07c8c94/yii.activeForm.js"></script>
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
  <script>
    jQuery(function($) {
      jQuery('#login-form').yiiActiveForm([], []);
    });
  </script>
</body>

</html>
