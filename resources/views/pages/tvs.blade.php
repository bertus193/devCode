@extends('layout')
@section('page')
<div class="inner-body">
<h3 align=center>DevCode TV</h1>
<div class="row" style="margin-top: 40px;">
    @foreach ($tvs as $tv)
    <div class="col-md-3">
        <div class="card bg-light mb-3">
            <div class="card-header">
            {{ HTML::image($tv->image, $tv->name, array( 'width' => '100%', 'height' => '100%' )) }}
            </div>
            <div class="card-body">
              <!--<h4 class="card-title">Light card title</h4>-->
              <h4 align=center>{{$tv->name}}</h4>
              <p class="card-text" align=center>{{$tv->description}}</p>
            </div>
            <div class="card-body">
              {{ HTML::image($tv->author->photo, $tv->author->name, array( 'width' => '25px', 'height' => '25px' )) }} {{$tv->author->name}}
            </div>
        </div>
    </div>
    @endforeach
</div>

@stop
