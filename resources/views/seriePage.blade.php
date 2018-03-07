@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-3">
          <div class="panel panel-default">
              <input id="serieId" type="hidden" value="{{ $serie['id'] }}" />
              <div class="panel-heading">Informations</div>
              <div id="genre-block" class="panel-body">
                <label>Nom : </label> {{ $serie['nom'] }}<br>
                <label>Date :</label><br>
                <label>Nationalité :</label><br>
                <label>Note :</label> <span id="finalRate"></span>/5<br>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalAddRate" onclick="getRateSerie({{ $serie['id'] }}, {{ Auth::user()->id }})"><b>Donner une note</b></button><br>

                <!-- MODAL ADD RATE -->
                <div id="ModalAddRate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="AjoutNote" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
                        <h4 class="modal-title" id="AjoutNote">Ajouter une note</h4>
                      </div>
                      <div class="modal-body text-center" >
                        <input id="noteInput" style="width:30px;" type="text" />/5
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary" onclick="addRateSerie({{ $serie['id'] }}, {{ Auth::user()->id }})">Ajouter</button>
                      </div>
                    </div>
                  </div>
                </div>
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
<script src="{{ URL::asset('/js/series/seriePage.js') }}"></script>
@endsection
