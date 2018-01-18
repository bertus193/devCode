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
            <center>
                <h4>Panel de administración</h4>
                <div id="notificationMsg"></div>
            </center>
            <div style="margin-top: 40px;">
                @yield('adminPage')
            </div>
        </div>
    </div>
</div>
@endsection