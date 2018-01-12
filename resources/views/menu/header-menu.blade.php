<ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="{{route('course.all')}}">Cursos</a>
    </li>
</ul>

<ul class="navbar-nav navbar-right" style="display:table-row">
    @if(!$signed_in)
    <li class="nav-item active" style="display:table-cell">
        <a class="nav-link" href="{{route('user.login.get')}}">Iniciar sesión</a>
    </li>
    <li class="nav-item" style="display:table-cell">
        <form action="{{route('user.register.get')}}">
            <button class="btn btn-success" type="submit">Regístrate gratis</button>
        </form>
    </li>
    @else
    <li class="nav-item active" style="display:table-cell">
        <a class="nav-link" href="{{route('user.profile')}}">Perfil</a>
    </li>
    <li class="nav-item" style="display:table-cell">
        <button class="btn btn-warning" type="submit">¡Sé premium!</button>
    </li>
    @endif
</ul>