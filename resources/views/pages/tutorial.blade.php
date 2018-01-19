@extends('layout')
@section('page')
<style>
.tutorial_creation_date{
    text-align:right;
    margin-top: 50px;
}

.tutorial_description{
    vertical-align: top;
    margin-left: 20px;
}
</style>
<div class="inner-body">

        @if($tutorial != null)
        <center>
            <h4 style="padding-top: 120px;">{{$tutorial->name}}</h4>
            <div style="margin-top: 25px;">
                Por {{ HTML::image($tutorial->author->photo, $tutorial->author->name, array( 'width' => '45px', 'height' => '45px' )) }} {{$tutorial->author->name}}
                </div>

            <div style="margin-top: 25px;overflow: auto;"  class="inner-box">
                <div style="float:left; width: 50%">
                <div>
                    {{ HTML::image($tutorial->image, $tutorial->name, array( 'width' => '100%', 'height' => '100%' )) }}
                </div>
                </div>
                <div style="float:right;width: 48%">
                    <div class="tutorial_description">
                        {{$tutorial->description}}
                        <br>
                        <div class="tutorial_creation_date">Fecha de creación: {{$tutorial->date}}</div>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
          </div>

        <div style="width:50%; display: inline-block;">
        <span style="float: left;">

        </span>


        </div>
        </center>

        @else
            <div class="inner-box">
            El tutorial indicado no existe.
            </div>
        @endif

</div>

@stop
