@extends('layout')
@section('page')
<style>
.card_url:hover{
    text-decoration: none;
}
.card_url_div:hover{
    border: 1px solid #121212;
}
</style>
<div class="inner-body">
<h4 align=center>Encuentra tutoriales en español de desarrollo web y móvil</h1>
<h5 align=center>Aprende paso a paso nuevas tecnologías</h2>
<div class="row" style="margin-top: 40px;">
    @foreach ($tutorials as $t)
    <div class="col-md-4">
    <a class="card_url" name="{{$t->name}}" href="{{ route('tutorial',['id'=>$t->id]) }}">
    <div class="card bg-light mb-4 card_url_div">
                <div class="card-header">
                {{ HTML::image($t->image, $t->name, array( 'width' => '100%', 'height' => '100%' )) }}
                </div>
                <div class="card-body">
                <h4 align=center>{{$t->name}}</h4>
                <p class="card-text" align=center>{{$t->description}}</p>
                </div>
                <div class="card-body">
                {{ HTML::image($t->author->photo, $t->author->name, array( 'width' => '45px', 'height' => '45px' )) }} {{$t->author->name}}
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
</div>

@stop
