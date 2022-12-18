@extends('layouts.app')

@section('content')

    <div class="content-wrapper kanban" style="min-height: 1197px;">
<section class="content-header">
<div class="container-fluid">
<div class="row">
<div class="col-sm-6">
<h1>Website/Server Tasks</h1>
</div>
</div>
</div>
</section>
<section class="content pb-3">
<div class="container-fluid h-100">

<div class="card card-row card-default">
  <div class="card-header">
    <h3 class="card-title">
      Backlog
    </h3>
  </div>
  <div class="card-body">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title">Discord Notifications</h5>
      </div>
    </div>
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title">Create repo</h5>
      </div>
    </div>
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title">Create repo</h5>
      </div>
    </div>
  </div>
</div>
<div class="card card-row card-primary">
  <div class="card-header">
    <h3 class="card-title">
      In Progress
    </h3>
  </div>
  <div class="card-body">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title">Teams List & Profiles</h5>
      </div>
    </div>
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title">Players List & Profiles</h5>
      </div>
    </div>
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title">Fixtures List</h5>
      </div>
    </div>
  </div>
</div>

<div class="card card-row card-success">
  <div class="card-header">
    <h3 class="card-title">
      Done
    </h3>
  </div>
  <div class="card-body">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title">GitHub Repository</h5>
      </div>
    </div>
  </div>
</div>

</div>
</section>
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
