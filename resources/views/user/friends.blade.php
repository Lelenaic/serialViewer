@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="panel panel-default clearfix">
              <div class="panel-heading" style="">Amis de {{ $user['name'] }}
                <div class="ui-widget pull-right" >
                  <input id="search-user" placeholder="Ajouter un ami...">
                </div>
              </div>
              <div class="panel-body">
                <ul class="list-group">
                 <li class="list-group-item">TestUser <span class="badge"><i class="fa fa-times" aria-hidden="true"></i></span></li>
                 <li class="list-group-item">FanSerie <span class="badge"><i class="fa fa-times" aria-hidden="true"></i></span></li>
                 <li class="list-group-item">FanFanDu85 <span class="badge"><i class="fa fa-times" aria-hidden="true"></i></span></li>
                 <li class="list-group-item">useruser <span class="badge"><i class="fa fa-times" aria-hidden="true"></i></span></li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
