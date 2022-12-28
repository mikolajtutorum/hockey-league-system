@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ __('Transfers') }}</h1>
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
              <h3 class="card-title">{{ __('Free Agency') }}</h3>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
              list of free agents
              </div>
            </div>
          </div>
        </div>







      @foreach ($transfers as $transfer)
      <div class="inline-block">
        <span>{{ $transfer->time->format('d-m-Y') }} | </span>
          @foreach ($players as $player)
            @if ($transfer->player_id == $player->player_id)
              <a href="{{ route('playerprofile', [app()->getLocale(), $player->player_id]) }}"><img src="/uploads/players/{{ $player->player_avatar }}" width="32" height="32"> {{ $player->player_name }}</a>
            @endif
          @endforeach
          <span>{{ __('has been signed by') }}</span>
          @foreach ($teams as $team)
            @if ($transfer->new_team_id == $team->team_id)
              <a href="{{ route('teamprofile', [app()->getLocale(), $team->team_id]) }}"><img src="/uploads/teams/{{ $team->team_logo }}" width="32" height="32"> {{ $team->team_name }}</a>
            @endif
          @endforeach
          <span>{{ __('from') }}</span>
          @foreach ($teams as $team)
            @if ($transfer->old_team_id == $team->team_id)
              <a href="{{ route('teamprofile', [app()->getLocale(), $team->team_id]) }}">{{ $team->team_name }} <img src="/uploads/teams/{{ $team->team_logo }}" width="32" height="32"></a>
            @endif
          @endforeach
      </div>
      @endforeach

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
