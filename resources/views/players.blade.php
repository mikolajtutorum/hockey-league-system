@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ __('Players') }}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
          @foreach ($players as $player)
          <div class="col-md-3">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="/uploads/players/{{ $player->player_avatar }}" alt="Player Avatar">
                </div>
                <h3 class="profile-username text-center">{{ $player->player_name }}</h3>
                <a href="{{ route('playerprofile', [app()->getLocale(), $player->player_id]) }}" class="btn btn-primary btn-block"><b>{{ __('Player Profile') }}</b></a>
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
