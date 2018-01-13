@extends('layout')
@section('page')
<h1 align=center>DevCodeTv</h1>
<div class="row inner-body">
    @foreach ($tvs as $tv)
    <div class="col-md-3">
        <div class="card bg-light mb-3">
            <div class="card-header">
              <img src="{{$tv->image}}" style="width: 100%; height: 100%;">
            </div>
            <div class="card-body">
              <!--<h4 class="card-title">Light card title</h4>-->
              <h4 align=center>{{$tv->name}}</h4>
              <p class="card-text" align=center>{{$tv->description}}</p>
            </div>
            <div class="card-body">
              <p class="card-text">{{$tv->author}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@stop
