@extends('layout')
@section('page')
<style>

.tv_description{
    vertical-align: top;
    margin-left: 20px;
}
</style>
<div class="inner-body">

        @if($tv != null)
        <center>
            <h4 style="padding-top: 20px;">{{$tv->name}}</h4>
            <div style="margin-top: 25px;">
                Por {{ HTML::image($tv->author->photo, $tv->author->name, array( 'width' => '45px', 'height' => '45px' )) }} {{$tv->author->name}}
            </div>

            <div style="margin-top: 25px;overflow: auto;"  class="inner-box">
                <div class="tv_video">
                    <iframe width="560" height="315" src="{{$tv->url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div style="margin-top: 20px;">{{$tv->description}}</div>
            </div>
        </center>

        @else
            <div class="inner-box">
            El video indicado no existe.
            </div>
        @endif

</div>

@stop
