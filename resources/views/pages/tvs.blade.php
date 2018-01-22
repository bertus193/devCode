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
<h3 align=center>TV</h1>
<div class="row" style="margin-top: 40px;">
    @foreach ($tvs as $tv)
    <div class="col-md-3">
        <a class="card_url" name="{{$tv->name}}" href="{{ route('tv',['id'=>$tv->id]) }}">
            <div class="card bg-light mb-3 card_url_div">
                <div class="card-header">
                {{ HTML::image($tv->image, $tv->name, array( 'width' => '100%', 'height' => '100%' )) }}
                </div>
                <div class="card-body">
                <!--<h4 class="card-title">Light card title</h4>-->
                <h4 align=center>{{$tv->name}}</h4>
                <p class="card-text" align=center>{{$tv->description}}</p>
                </div>
                <div class="card-body">
                {{ HTML::image($tv->author->photo, $tv->author->name, array( 'width' => '45px', 'height' => '45px' )) }} {{$tv->author->name}}
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

@stop
