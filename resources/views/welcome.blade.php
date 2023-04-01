<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TimeTechSol</title>
        <link rel="stylesheet" href="{{ asset('css/nav-style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer-style.css') }}">
    </head>
    <body>
        <header>
            @include('component.nav')
        </header>
        <main>
            @include('component.main-slider')
            @include('component.our-services')
            @include('component.seo-score')
            @include('component.web-marketing')
            @include('component.portfolio')
            @include('component.our-team')
            @include('component.about-us')
            @include('component.our-packages')
            @include('component.client-feedback')
            @include('component.latest-blog')
            @include('component.project-logo-bar')
        </main>
        <footer>
            @include('component.footer')
        </footer>
    </body>
</html>
