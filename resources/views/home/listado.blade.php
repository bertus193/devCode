@extends('layout')



@section('contenido')
<h2>Listado de personas</h2>

<ul>
@foreach ($lista as $p)
    <li>{{$p->nombre}}</li>
@endforeach
</ul>

@stop