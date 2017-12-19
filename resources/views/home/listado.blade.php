@extends('layout')



@section('contenido')

<ul>
@foreach ($lista as $p)
    <li>{{$p->name}}</li>
@endforeach
</ul>

@stop