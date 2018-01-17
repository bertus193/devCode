<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DevCode</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" href="{{ asset('/images/favicon.ico') }}" type="image/png">
        {{HTML::style('css/lib/bootstrap-min.css')}}
        {{HTML::style('css/devCode.css')}}
        {{HTML::style('css/menu/header.css')}}
        
        {{HTML::script('js/font-awesome.min.js')}}
        {{HTML::script('js/jquery.js')}}
        {{HTML::script('js/tether-min.js')}}
        {{HTML::script('js/bootstrap-min.js')}}
        {{HTML::script('js/devCode.js')}}
        
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