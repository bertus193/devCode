@extends('layout')



@section('contenido')

<ul>
@foreach ($cursos as $p)
    <li>{{$p->name}}</li>
@endforeach
</ul>

@stop