@extends('layout')
@section('page')
<div class="inner-body">
    <div class="inner-box">
        @if($course != null)
            <h1>{{$course->name}}</h1>
            <p style="margin-top: 20px;">{{$course->description}}</p>

            <form action="{{route('user.register.get')}}">
                <button class="btn btn-success" type="submit">¡Quiero inscribirme!</button>
            </form>
        @else
            El curso indicado no existe.
        @endif
    </div>
</div>

@stop
