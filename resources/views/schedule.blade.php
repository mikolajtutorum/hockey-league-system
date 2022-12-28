@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ __('Schedule') }}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="card" style="margin-top:15px">
              <h5 class="card-header text-center" id="round_20"><b>Matchday 0</b></h5>
              <div class="card-body">
                @foreach ($fixtures as $fixture)
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 text-center"><small>{{ $fixture->scheduled_time->format('d-m-Y') }}</small></div>
                    </div>
                    <div class="row">
                      @foreach ($teams as $team)
                      @if ($fixture->team_home == $team->team_id)
                      <div class="col-md-5 team" style="text-align:right"><a href="{{ route('teamprofile', [app()->getLocale(), $team->team_id]) }}">{{ $team->team_name }} <img src="/uploads/teams/{{ $team->team_logo }}" width="32" height="32"></a></div>
                      @endif
                      @endforeach
                      <div class="col-md-2 text-center score"><a href="{{ route('fixture', [app()->getLocale(), $fixture->fixture_id]) }}">{{ $fixture->scheduled_time->format('H:i') }}</a></div>
                      @foreach ($teams as $team)
                      @if ($fixture->team_away == $team->team_id)
                      <div class="col-md-5 text-left team"><a href="{{ route('teamprofile', [app()->getLocale(), $team->team_id]) }}"><img src="/uploads/teams/{{ $team->team_logo }}" width="32" height="32"> {{ $team->team_name }}</a></div>
                      @endif
                      @endforeach
                    </div>
                  </div>
                </div>
                @endforeach

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
