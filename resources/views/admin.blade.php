@extends('layout')

<style>
#notificationMsg{
    width: 320px;
    position: absolute;
    left: 37.5%;
    height: 65px;
}
</style>

@section('page')
<div class="inner-body">
    <div class="inner-box ">
        <div class="inner-body">
        @if($user->rank == 1)
            <center>
                <h4>Panel de administración</h4>
                <div id="notificationMsg"></div>
            </center>
            <div style="margin-top: 40px;">
            
                @yield('adminPage')
            </div>
        </div>
        @else
            <center>No tienes permisos para ver esta página</center>
        @endif
    </div>
</div>

    
@endsection