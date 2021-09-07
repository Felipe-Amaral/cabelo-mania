<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Cabelo Mania') }}</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        @include('layouts.app.navbar')
        @include('layouts.app.status')
        @yield('content')
        <script src="{{ mix('js/app.js') }}" defer></script>
        @include('layouts.app.footer')
    </body>
</html>
