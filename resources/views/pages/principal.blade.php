@extends('layout')
@section('page')

<div class="home-header">
    <div class="home-header__image">
    </div>
    <div class="home-header__background"></div>
        <div class="home-header-content">
            <h1 class="home-header-content__title">Aprende nuevas tecnologías web y móvil</h1>
            <p class="home-header-content__slogan">A través de cursos prácticos, concisos y actualizados, dictados por profesionales con experiencia.</p>
            @if($signed_in)
            <form action="{{route('course.all')}}">
                <button class="btn btn-success" type="submit">¡Buscar cursos!</button>
            </form>
            @else
            <form action="{{route('user.register.get')}}">
                <button class="btn btn-success" type="submit">¡Empieza ahora!</button>
            </form>
            @endif
        </div>
    </div>
</div>
<div class="row inner-body">
    @for ($i = 0; $i < count($courses) && $i < 3; $i++)

    <div class="col-md-4">
        <div class="card bg-light mb-4">
            <div class="card-header">{{$courses[$i]->name}}</div>
                <div class="card-body">
                    <!--<h4 class="card-title">Light card title</h4>-->
                    <p class="card-text">{{$courses[$i]->description}}</p>
                </div>
            </div>
        </div>
    @endfor
    </div>
</div>
@stop
