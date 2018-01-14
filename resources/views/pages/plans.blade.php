@extends('layout')
@section('page')
<div class="row inner-body">
    <ul>
    @foreach ($plans as $pl)
        <li>{{$pl->type}}</li>
    @endforeach
    </ul>
</div>

@stop
