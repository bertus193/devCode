<ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="{{route('course.all')}}">Cursos</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('tutorial.all')}}">Tutoriales</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('tv.all')}}">TV</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('plan.all')}}">Planes</a>
    </li>
    @if($signed_in && $user->rank == 2)
        <li class="nav-item active">
            <a class="nav-link" href="{{route('admin')}}">Admin</a>
        </li>  
    @endif
</ul>

<ul class="navbar-nav navbar-right">
    @if(!$signed_in)
    <li class="nav-item active">
        <a class="nav-link" style="line-height: 19px;" href="{{route('user.login.get')}}">Iniciar sesión</a>
    </li>
    <li class="nav-item">
        <form action="{{route('user.register.get')}}">
            <button class="btn btn-success" type="submit">Regístrate gratis</button>
        </form>
    </li>
    @else
    <li class="nav-item active">
        <a class="nav-link" style="line-height: 19px;" href="{{route('user.profile')}}">Perfil</a>
    </li>
    @if($user->rank != 1)
    <li class="nav-item">
        <form action="{{route('plan.all')}}">
          <button class="btn btn-warning" type="submit">¡Sé premium!</button>
        </form>
    </li>
    @endif
    @endif
</ul>
