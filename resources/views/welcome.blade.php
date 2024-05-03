<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MEDSYSPRO</title>
        <link rel="stylesheet" href="{{ asset('css/build.css') }}">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        @livewireStyles
    </head>
    <body class="antialiased">
        @livewire('register')

        @livewireScripts
        <script src="{{ asset('js/build.config.js') }}"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>
