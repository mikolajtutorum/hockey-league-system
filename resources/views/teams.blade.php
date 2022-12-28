@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ __('Teams') }}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          @foreach ($teams as $team)
          <div class="col-md-3">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile" style="min-height:300px;">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="/uploads/teams/{{ $team->team_logo }}" alt="Team Logo">
                </div>
                <h3 class="profile-username text-center">{{ $team->team_name }}</h3>
                <p class="text-muted text-center">{{ __('Owner') }}: {{ $team->team_owner }}</p>
                <a href="{{ route('teamprofile', [app()->getLocale(), $team->team_id]) }}" class="btn btn-primary btn-block"><b>{{ __('Team Profile') }}</b></a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
