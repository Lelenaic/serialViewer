@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Thèmes</div>
              <div class="panel-body">

              </div>
          </div>
      </div>
  </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Toutes les séries</div>
                <div class="panel-body">
                  <ul>
                    @foreach ($series as $serie)
                      <li><a href="{{ url('series/'.$serie['id']) }}">{{ $serie['nom'] }}</a></li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
