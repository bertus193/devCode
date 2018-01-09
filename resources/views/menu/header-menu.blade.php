<ul class="navbar-nav mr-auto">
    <li class="nav-item active">
    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('cursos.all')}}">Cursos</a>
    </li>
</ul>

<ul class="navbar-nav navbar-right" style="display:table-row">
    <li class="nav-item" style="display:table-cell">
        <a class="nav-link" href="{{route('user.login.get')}}">Iniciar sesión</a>
    </li>
    <li class="nav-item" style="display:table-cell">
        <button class="btn btn-success" type="submit">Regístrate gratis</button>
    </li>
</ul>