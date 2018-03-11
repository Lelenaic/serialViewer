@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="panel panel-default clearfix">
              <div class="panel-heading" style="">Amis de {{ $user['name'] }}
                <div class="ui-widget pull-right" >
                  <input id="search-user" placeholder="Rechercher dans mes séries...">
                </div>
              </div>
              <div id="genre-block" class="panel-body">
                <ul class="list-group">
                 <li class="list-group-item">
                   <b>Stranger things</b>
                   <i class="fa fa-times fa-2x pull-right" aria-hidden="true"></i>
                   <i class="fa fa-chevron-down fa-2x pull-right" aria-hidden="true" onclick="downSerie(1)"></i>
                   <i id="openModal" class="fa fa-step-forward fa-2x pull-right" aria-hidden="true" data-toggle="modal" data-target="#ModalViews" onclick=""></i>
                 </li>
                 <div id="seasons-block-1" style="display: none;">
                   <div id="season1">
                     <li class="list-group-item season-item">
                       <i class="fa fa-level-down" aria-hidden="true"></i>
                       Saison 1
                       <i class="fa fa-chevron-down fa-2x pull-right" aria-hidden="true" onclick="downSeason(1,1)"></i>
                     </li>
                     <div id="episodes-block" style="display: none;">
                       <li class="list-group-item episode-item">
                         <i class="fa fa-play" aria-hidden="true"></i>
                         Episode 1
                         <i class="fa fa-eye fa-2x pull-right" aria-hidden="true"></i>
                       </li>
                       <li class="list-group-item episode-item">
                         <i class="fa fa-play" aria-hidden="true"></i>
                         Episode 2
                         <i class="fa fa-eye fa-2x pull-right" aria-hidden="true"></i>
                       </li>
                     </div>
                   </div>
                   <div id="season2">
                     <li class="list-group-item season-item">
                       <i class="fa fa-level-down" aria-hidden="true"></i>
                       Saison 2
                       <i class="fa fa-chevron-down fa-2x pull-right" aria-hidden="true" onclick="downSeason(1,2)"></i>
                     </li>
                     <div id="episodes-block" style="display: none;">
                       <li class="list-group-item episode-item">
                         <i class="fa fa-play" aria-hidden="true"></i>
                         Episode 1
                         <i class="fa fa-eye fa-2x pull-right" aria-hidden="true"></i>
                       </li>
                     </div>
                   </div>
                </div>
                 <li class="list-group-item">
                   <b>The end of the fucking world</b>
                   <i class="fa fa-times fa-2x pull-right" aria-hidden="true"></i>
                   <i class="fa fa-chevron-down fa-2x pull-right" aria-hidden="true" onclick="downSerie(2)"></i>
                   <i class="fa fa-step-forward fa-2x pull-right" aria-hidden="true"></i>
                 </li>
                 <div id="seasons-block-2" style="display: none;">
                   <div id="season1">
                     <li class="list-group-item season-item">
                       <i class="fa fa-level-down" aria-hidden="true"></i>
                       Saison 1
                       <i class="fa fa-chevron-down fa-2x pull-right" aria-hidden="true" onclick="downSeason(2,1)"></i>
                     </li>
                     <div id="episodes-block" style="display: none;">
                       <li class="list-group-item episode-item">
                         <i class="fa fa-play" aria-hidden="true"></i>
                         Episode 1
                         <i class="fa fa-eye fa-2x pull-right" aria-hidden="true"></i>
                       </li>
                     </div>
                   </div>
                 </div>
                </ul>
                <!-- MODAL ADD RATE -->
                <div id="ModalViews" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="views" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
                        <h4 class="modal-title" id="views">Ajouter des épisodes vus à Stranger things</h4>
                      </div>
                      <div class="modal-body text-center" >
                        <input type="hidden" id="serieId" value="1"/><input type="hidden" id="serieId" value="1"/>
                        <div class="radio">
                          <label><input type="radio" id="toutvu1" name="optradio">Tout vu</label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" id="toutvu2" name="optradio">Tout vu jusqu'à...</label>
                        </div>
                        <div id="jusqua" style="display:none;">
                          <label>Indiquez le numéro (SxxExx) du dernier épisode que vous avez vu :</label>
                          <input type="text" value=""/>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button id="closeModal" type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary" onclick="">Ajouter</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::asset('/js/series/mySeries.js') }}"></script>
@endsection
