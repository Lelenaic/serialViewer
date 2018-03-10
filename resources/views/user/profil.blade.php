@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="panel panel-default clearfix">
                <div class="panel-heading">
                  {{ $user['name'] }}
                  @if ($user['id'] != Auth::user()->id)
                  <button class="btn btn-primary btn-sm pull-right" onclick=""><b>Ajouter à mes amis</b></button>
                  @endif
                </div>
                <div class="panel-body text-center">
                  <div class="row">
                  <div class="col-md-3">
                    <i class="fa fa-video-camera fa-5x" aria-hidden="true"></i><b style="font-size: 40px;"> 12</b><br>
                    <span style="font-size:20px;">Séries suivies</span>
                  </div>
                  <div class="col-md-3">
                    <i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i><b style="font-size: 40px;"> 7</b><br>
                    <span style="font-size:20px;">Séries terminées</span>
                  </div>
                  <div class="col-md-3">
                    <i class="fa fa-play-circle fa-5x" aria-hidden="true"></i><b style="font-size: 40px;"> 7</b><br>
                    <span style="font-size:20px;">Episodes vus</span>
                  </div>
                  <div class="col-md-3">
                    <i class="fa fa-eye fa-5x" aria-hidden="true"></i><b style="font-size: 40px;"> 7</b><br>
                    <span style="font-size:20px;">Minutes de visionnage</span>
                  </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                  <div class="col-md-6">
                    <h3 class="text-uppercase">Série préférée</h3>
                    <a href="/series/3">
                      <img class="img-big" src="/images/stranger-things.jpg"></img>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <h3 class="text-uppercase">Série la moins aimée</h3>
                    <a href="/series/3">
                      <img class="img-big" src="/images/theendof.jpg"></img>
                    </a>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
