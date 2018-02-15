@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $serie['nom'] }}</div>

                <div class="panel-body">
                  <img src="{{ $serie['urlImage'] }}"></img>
                  {{ $serie['resume'] }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
