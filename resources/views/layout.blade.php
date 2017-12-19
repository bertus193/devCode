<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi flamante proyecto con Lrvl</title>
        @yield('head')
        
        {{HTML::style('css/bootstrap.css')}}
        {{HTML::style('css/app.css')}}
        @yield('css')
        
        {{HTML::script('js/jquery-3.2.1.js')}}
        {{HTML::script('js/bootstrap.min.js')}}
        {{HTML::script('js/app.js')}}
        
        <script type="text/javascript">
            @yield('js')
        </script>
    </head>
    <body>
        <header>
            <h1>Bienvenidos a la web del proyecto</h1>
        </header>
        @include('menu')
        <main>
            @yield('contenido')
        </main>
        <footer>
            &copy; 2017 iw.ua.es
        </footer>
    </body>
</html>