@extends('layout')



@section('page')
<div class="inner-body">
    <ul>
    @foreach ($cursos as $p)
        <li>{{$p->name}}</li>
    @endforeach
    </ul>
</div>

@stop