@extends('layout')



@section('contenido')
<h2>Listado de users</h2>

<ul>
@foreach ($lista as $p)
    <li>{{$p->name}}</li>
@endforeach
</ul>

@stop