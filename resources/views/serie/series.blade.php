@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-2">
          <div class="panel panel-default">
              <div class="panel-heading">Genres</div>
              <div id="genre-block" class="panel-body">
                  <button id="genreAll" class="btn btn-primary" onclick="getAllSeries()">Tous les genres</button>
                  @foreach ($genres as $genre)
                    <button id="genre{{ $genre['id'] }}" class="btn btn-default" onclick="getSeriesByGenre({{ $genre['id'] }})">{{ $genre['label'] }}</button>
                  @endforeach
              </div>
          </div>
      </div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Toutes les séries</div>
                <div class="panel-body" id="displaySeries">
                  @foreach ($series as $serie)
                    <div class="col-md-3">
                      <a href="{{ url('series/'.$serie['id']) }}">
                        <img class="img" src="{{ asset($serie['urlImage']) }}"></img>
                      </a>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{ URL::asset('/js/series/series.js') }}"></script>
