<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link href="{{ asset("css/bootstrap.css") }}" rel="stylesheet">
        <link href="{{ asset("css/bootstrap-grid.css") }}" rel="stylesheet">
        <link href="{{ asset("css/bootstrap-reboot.css") }}" rel="stylesheet">
        <link href="{{ asset("custom/css/base.css") }}" rel="stylesheet">
        <link href="{{ asset("fontawesome-free-6.3.0-web/css/all.css") }}" rel="stylesheet">
    </head>

    <body>
        @yield("content")
    </body>

    @stack("before-script")

        <script src="{{ asset("js.bootstrap.js") }}"></script>
        <script src="{{ asset("js/jquery-3.6.0.js") }}"></script>
        <script src="{{ asset("fontawesome-free-6.3.0-web/js/all.js") }}"></script>

    @stack("after-script")
</html>
