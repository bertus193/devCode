<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DevCode</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        {{HTML::style('css/lib/bootstrap.css')}}
        {{HTML::style('css/devCode.css')}}
        {{HTML::style('css/menu/header.css')}}

        {{HTML::script('js/jquery-3.2.1.js')}}
        {{HTML::script('js/bootstrap.min.js')}}
    </head>
    <body>
        <div>
            <div>
            <header>
                @include('menu/header')
            </header>

            <main>
                @yield('page')
            </main>
            <footer class="inner-body">
                &copy; 2017 DevCode
            </footer>
            </div>
        </div>
    </body>

</html>