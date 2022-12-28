@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ __('Dashboard') }}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-header border-0">
<div class="d-flex justify-content-between">
<h3 class="card-title">{{ __('Standings') }}</h3>
<a href="#">{{ __('Full Standings') }}</a>
</div>
</div>
<div class="card-body">
<div class="d-flex">
data here
</div>

</div>
</div>


</div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
