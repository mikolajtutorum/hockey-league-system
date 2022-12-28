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
          <div class="col-sm-12">
            <div class="card" style="margin-top:15px">
              <h5 class="card-header text-center" id="round_20"><b>{{ __('Fixture Details') }}</b></h5>
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
                      <div class="col-md-2 text-center score">Score</div>
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

          <div class="col-sm-6">
            <div class="card" style="margin-top:15px">
              <h5 class="card-header text-center"><b>Team Red</b></h5>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                      <th>Player</th>
                      <th class="text-center">AC</th>
                      <th class="text-center">G</th>
                      <th class="text-center">A</th>
                      <th class="text-center">CP</th>
                      <th class="text-center">MIN</th>
                      <th class="text-center">YC</th>
                      <th class="text-center">RC</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>najwiekszy debil</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                    </tr>
                    <tr>
                      <td>najwiekszy debil</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card" style="margin-top:15px">
              <h5 class="card-header text-center"><b>Team Blue</b></h5>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Player</th>
                      <th class="text-center">AC</th>
                      <th class="text-center">G</th>
                      <th class="text-center">A</th>
                      <th class="text-center">CP</th>
                      <th class="text-center">MIN</th>
                      <th class="text-center">YC</th>
                      <th class="text-center">RC</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>najwiekszy debil</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                    </tr>
                    <tr>
                      <td>najwiekszy debil</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                      <td class="text-center">0</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div>Admin Sections</div>
          <div class="col-sm-12">
            <div class="card" style="margin-top:15px">
              <h5 class="card-header text-center"><b>Team Red</b></h5>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                      <th>Player</th>
                      <th class="text-center">AC</th>
                      <th class="text-center">G</th>
                      <th class="text-center">A</th>
                      <th class="text-center">CP</th>
                      <th class="text-center">MIN</th>
                      <th class="text-center">YC</th>
                      <th class="text-center">RC</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>najwiekszy debil</td>
                      <td class="text-center">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <input type="checkbox" id="player played">
                          </span>
                        </div>
                      </td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player goals"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player assists"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player cp"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player secondsplayed"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player yellowcards"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player redcards"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card" style="margin-top:15px">
              <h5 class="card-header text-center"><b>Team Blue</b></h5>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Player</th>
                      <th class="text-center">AC</th>
                      <th class="text-center">G</th>
                      <th class="text-center">A</th>
                      <th class="text-center">CP</th>
                      <th class="text-center">MIN</th>
                      <th class="text-center">YC</th>
                      <th class="text-center">RC</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>najwiekszy debil</td>
                      <td class="text-center">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <input type="checkbox">
                          </span>
                        </div>
                      </td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player1b"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player1c"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player1d"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player1e"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player1f"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player1g"></td>
                    </tr>
                    <tr>
                      <td>najwiekszy debil</td>
                      <td class="text-center">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <input type="checkbox">
                          </span>
                        </div>
                      </td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player2b"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player2c"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player2d"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player2e"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player2f"></td>
                      <td class="text-center"><input type="text" class="form-control text-center" id="player2g"></td>
                    </tr>
                  </tbody>
                </table>
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
