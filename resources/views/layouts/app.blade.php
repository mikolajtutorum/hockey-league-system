<script>
    var APP_URL = {!! json_encode(url('/')) !!}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/plugins/flag-icon-css/css/flag-icon.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">

  <!-- Preloader --> 
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="https://cdn.discordapp.com/attachments/418049865948463124/780904549506482196/PROTOTYP-1.png" alt="CC" height="200" width="200">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light bg-orange">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">{{ __('Home') }}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">{{ __('Contact') }}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">{{ __('Discord') }}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">{{ __('Linkedin') }}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">{{ __('Facebook') }}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">{{ __('YouTube') }}</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                @if (isset($available_locales))
                    @foreach($available_locales as $locale_name => $available_locale)
                        @if ($available_locale === $current_locale)
                            <img class="flag-icon" src="/uploads/locale/{{ $available_locale }}.svg" alt="{{ $available_locale }}">
                        @endif
                    @endforeach
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right p-0" style="left: inherit; right: 0px;">
                @if (isset($available_locales))
                    @foreach($available_locales as $locale_name => $available_locale)
                        @if ($available_locale === $current_locale)
                            <a href="/{{ $available_locale }}/{{ $routename }}" class="dropdown-item active">
                                <img class="flag-icon" src="/uploads/locale/{{ $available_locale }}.svg" alt="{{ $available_locale }}"> {{ $locale_name }}
                            </a>
                        @else
                            <a href="/{{ $available_locale }}/{{ $routename }}" class="dropdown-item">
                                <img class="flag-icon" src="/uploads/locale/{{ $available_locale }}.svg" alt="{{ $available_locale }}"> {{ $locale_name }}
                            </a>
                        @endif
                    @endforeach
                @endif
            </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link navbar-navy">
      <img src="https://cdn.discordapp.com/attachments/418049865948463124/780904549506482196/PROTOTYP-1.png" alt="CC" class="brand-image">
      <span class="brand-text font-weight-light">{{ __('HSHL.NET.PL') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    @if (Route::has('login'))
        @auth
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://cdn.discordapp.com/attachments/418049865948463124/780904549506482196/PROTOTYP-1.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ __('Admin User') }}</a>
            </div>
        </div>
        @else
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-compact" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('login', app()->getLocale()) }}" class="nav-link">
                        <p>{{ __('Login') }}</p>
                        </a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register', app()->getLocale()) }}" class="nav-link">
                        <p>{{ __('Register') }}</p>
                        </a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
        @endauth
    @endif

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-compact" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">{{ __('DASHBOARD') }}</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>{{ __('Schedule') }}</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>{{ __('Standings') }}</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>{{ __('Statistics') }}</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>{{ __('Players') }}</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>{{ __('Teams') }}</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>{{ __('Transfers') }}</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="#">Mik</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
</body>
</html>
