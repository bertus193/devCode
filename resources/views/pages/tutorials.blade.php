@extends('layout')
@section('page')
<div class="inner-body">
<h3 align=center>Encuentra tutoriales en español de desarrollo web y móvil</h1>
<h4 align=center>Aprende paso a paso nuevas tecnologías</h2>
<div class="row" style="margin-top: 40px;">
    @foreach ($tutorials as $t)
    <div class="col-md-4">
        <div class="card bg-light mb-4">
            <div class="card-header">
              {{ HTML::image($t->image, $t->name, array( 'width' => '100%', 'height' => '100%' )) }}
            </div>
            <div class="card-body">
              <!--<h4 class="card-title">Light card title</h4>-->
              <h4 align=center>{{$t->name}}</h4>
              <p class="card-text" align=center>{{$t->description}}</p>
            </div>
            <div class="card-body">
              <p class="card-text">{{$t->author}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>

@stop
