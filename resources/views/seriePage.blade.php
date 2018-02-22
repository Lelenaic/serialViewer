@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-3">
          <div class="panel panel-default">
              <div class="panel-heading">Informations</div>
              <div id="genre-block" class="panel-body">
                <label>Nom : </label> {{ $serie['nom'] }}<br>
                <label>Date :</label><br>
                <label>Nationalité :</label><br>
                <label>Note :</label><br>
              </div>
          </div>
      </div>
        <div class="col-md-9" >
            <div class="panel panel-default clearfix">
                <div class="panel-heading">
                  {{ $serie['nom'] }}
                  <button class="btn btn-primary btn-sm pull-right" onclick="addFollowSerie({{ $serie['id'] }}, {{ Auth::user()->id }})"><b>Ajouter à "Mes séries"</b></button>
                </div>
                <div class="panel-body">
                  <img src="{{ $serie['urlImage'] }}"></img>
                  {{ $serie['resume'] }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script src="{{ URL::asset('/js/series/seriePage.js') }}"></script>
