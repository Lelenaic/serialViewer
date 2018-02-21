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
<script src="{{ URL::asset('/js/series/series.js') }}"></script>
