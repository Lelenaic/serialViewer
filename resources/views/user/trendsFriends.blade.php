@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" >
            <div class="panel panel-default clearfix">
              <div class="panel-heading" style="">Intérêts de vos amis</div>
              <div class="panel-body text-center">
                <div class="col-md-6">
                  <h2>N°1 : Narcos</h2>
                  <a href="{{ url('series/1') }}">
                    <img class="img-big" src="{{ asset('/images/narcos-allo.jpg') }}"></img>
                  </a><br>
                  <span style="font-size: 25px; font-weight: bold;">11</span><span style="font-size: 18px;"> : Followers</span><br>
                  <span style="font-size: 25px; font-weight: bold;">4.5/5</span><span style="font-size: 18px;"> : Note moyenne</span>
                </div>
                <div class="col-md-6">
                  <h2>N°2 : Stranger things</h2>
                  <a href="{{ url('series/3') }}">
                    <img class="img-big" src="{{ asset('/images/stranger-things.jpg') }}"></img>
                  </a><br>
                  <span style="font-size: 25px; font-weight: bold;">10</span><span style="font-size: 18px;"> : Followers</span><br>
                  <span style="font-size: 25px; font-weight: bold;">4.3/5</span><span style="font-size: 18px;"> : Note moyenne</span>
                </div>
                <div class="col-md-6">
                  <h2>N°3 : The end of the fucking world</h2>
                  <a href="{{ url('series/2') }}">
                    <img class="img-big" src="{{ asset('/images/theendof.jpg') }}"></img>
                  </a><br>
                  <span style="font-size: 25px; font-weight: bold;">6</span><span style="font-size: 18px;"> : Followers</span><br>
                  <span style="font-size: 25px; font-weight: bold;">3.75/5</span><span style="font-size: 18px;"> : Note moyenne</span>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
