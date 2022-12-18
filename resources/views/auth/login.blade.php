@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Login</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <body class="login-page" style="min-height: 496.781px;">
<div class="login-box">

<div class="card">
<div class="card-body login-card-body">
<form action="{{ route('login', app()->getLocale()) }}" method="post">
<div class="input-group mb-3">
<input id="username" name="username" type="text" class="form-control" placeholder="Username">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input id="password" name="password" type="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
</div>
</div>

<div class="col-4"> 
<button type="submit" class="btn btn-primary btn-block">Sign In</button>
</div>

</div>
</form>

</div>

</div>
</div>

<div id="__vcbe" data-live="true"></div></body>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
