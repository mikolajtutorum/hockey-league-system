@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Error 404</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="error-page">
    <h2 class="headline text-warning"> 404</h2>
    <div class="error-content">
    <h3><i class="fas fa-exclamation-triangle text-warning"></i>{{ __('Oops! Page not found.') }}</h3>
    <p>
    {{ __('We could not find the page you were looking for.') }}
    {{ __('Meanwhile, you may') }} <a href="#">{{ __('return to dashboard') }}</a> {{ __('or try using the search form.') }}
    </p>
    </div>

    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
