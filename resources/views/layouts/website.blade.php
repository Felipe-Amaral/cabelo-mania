<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body id="grad" class="animate__animated animate__fadeIn">
        <div class="container-fluid">
            <div class="row">
                @include('layouts.website.navbar-social-media')
                @include('layouts.website.navbar')
                @include('layouts.website.banner')
            </div>
        </div>

        @yield('content')

        @include('layouts.website.footer')
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
