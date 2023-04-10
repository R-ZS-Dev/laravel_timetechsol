<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TimeTechSol</title>
        <link rel="stylesheet" href="{{ asset('css/nav-style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer-style.css') }}">
        @yield('cssLinks')
    </head>
    <body>
        <header>
            <x-nav></x-nav>
        </header>
        <main>
            @yield('mainContent')
        </main>
        <footer>
            <x-footer></x-footer>
        </footer>
        @yield('jsLinks')
    </body>
</html>
