@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $team[0]->team_name }}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

          <div class="row">
<div class="col-md-3">

<div class="card card-primary card-outline">
<div class="card-body box-profile">
<div class="text-center">
<img class="profile-user-img img-fluid img-circle" src="/uploads/teams/{{ $team[0]->teamlogo }}" alt="User profile picture">
</div>
<h3 class="profile-username text-center">{{ $team[0]->team_name }}</h3>
<p class="text-muted text-center">Owned by {{ $team[0]->team_owner }}</p>
<ul class="list-group list-group-unbordered mb-3">
<li class="list-group-item">
<b>A</b> <a class="float-right">-</a>
</li>
<li class="list-group-item">
<b>B</b> <a class="float-right">-</a>
</li>
<li class="list-group-item">
<b>C</b> <a class="float-right">-</a>
</li>
</ul>
<a href="#" class="btn btn-primary btn-block"><b>Button</b></a>
</div>

</div>


<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">About</h3>
</div>

<div class="card-body">
<strong><i class="fas fa-book mr-1"></i> A</strong>
<p class="text-muted">
1
</p>
<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> B</strong>
<p class="text-muted">2</p>
<hr>
<strong><i class="fas fa-pencil-alt mr-1"></i> C</strong>
<p class="text-muted">
<span class="tag tag-danger">3</span>
</p>
<hr>
<strong><i class="far fa-file-alt mr-1"></i> D</strong>
<p class="text-muted">4</p>
</div>

</div>

</div>

<div class="col-md-9">
<div class="card">
<div class="card-header p-2">
<ul class="nav nav-pills">
<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Players</a></li>
<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Something</a></li>
<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Something</a></li>
</ul>
</div>
<div class="card-body">
<div class="tab-content">
<div class="active tab-pane" id="activity">
one
</div>

<div class="tab-pane" id="timeline">
  two
</div>

<div class="tab-pane" id="settings">
  three
</div>

</div>
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
