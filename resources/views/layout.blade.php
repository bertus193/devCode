<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DevCode</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        {{HTML::style('css/lib/bootstrap.css')}}
        {{HTML::style('css/devCode.css')}}
        {{HTML::style('css/menu/header.css')}}

        {{HTML::script('js/jquery.js')}}
        {{HTML::script('js/bootstrap.js')}}
    </head>
    <body>
        <header>
            @include('menu/header')
        </header>
        <main>
            @yield('page')
        </main>
        <footer class="inner-body">
            &copy; 2017-<?php echo date("Y"); ?> Todas las imagenes pertenecen a <a href="https://devcode.la/">DevCode</a>.
        </footer>
    </body>

</html>