<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MEDSYSPRO</title>
        <link rel="stylesheet" href="{{ asset('css/build.css') }}">
        @livewireStyles
    </head>
    <body class="antialiased">
        @livewire('login')

        @livewireScripts
        <script src="{{ asset('js/build.config.js') }}"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>
