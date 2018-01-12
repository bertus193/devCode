@extends('layout')
@section('page')
<div class="inner-body">
    <ul>
    @foreach ($courses as $p)
        <li>{{$p->name}}</li>
    @endforeach
    </ul>
</div>

@stop