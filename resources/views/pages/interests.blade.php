@extends('layout')
@section('page')
<div class="inner-body">
    <ul>
    @foreach ($interests as $p)
        <li>{{$p->interest}}</li>
    @endforeach
    </ul>
</div>

@stop
