@extends('layout')
@section('page')
<script>
$(document).ready(function() {
    $('#btn-logout').click(function(event) {
        $.ajax({
            url: "{{ route('user.logout.post') }}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                window.location="{{route('home')}}";
            }
        });
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});
</script>
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin: auto;
    text-align: center;
    font-family: arial;
    padding: 20px;
}
</style>
<div class="inner-body">
    <div class="card">
        <h2>{{$user->name}}</h2>
        <p><b>Email: </b>{{$user->email}}</p>
        <p><b>Registrado el: </b><?php print date("d-m-Y", strtotime($user->created_at)); ?></p>

        @if ($user->rank == 0)
            <p><b>Rango: </b><span class="text-danger">Usuario gratuito</span></p>
        @elseif ($user->rank == 1)
            <p><b>Rango: </b><span class="text-success">Usuario Premium</span></p>
            <p><b>Tipo de plan: </b>{{$user->plan->type}}</p>
        @elseif ($user->rank == 2)
            <p><b>Rango: </b><span class="text-primary">Administrador</span></p>
        @endif
        
        <p><button id="btn-logout" class="btn btn-danger">Cerrar sesión</button></p>

        
        
    </div>

    @if ($user->courses->count() > 0)
        <h2 align="center" style="margin-top: 50px;">Mis Cursos</h2>
        <div class="row">
            @foreach($user->courses as $curso)
            <div class="col-sm-4" style="margin-bottom: 20px;">
            <div class="card" style="background-color: #e1e1e14d;">
                <div class="card-block">
                    <h5 class="card-title">{{$curso->name}}</h5>
                    <p class="card-text">{{$curso->description}}</p>
                    <a href='{{ route("course",["id"=>$curso->id]) }}' class="btn btn-primary">Ir al curso</a>
                </div>
            </div>
        </div>
            @endforeach
            </div>
    @endif
    

@stop