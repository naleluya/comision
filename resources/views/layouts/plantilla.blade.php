<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

        @include("layouts.navbar")
        @yield("cabecera")

        @include("layouts.card")
        @yield("infogeneral")

        @yield("pie")
        Aqui iria el texto del pie

<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.slim.min.js') }}" async></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}" async></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" async></script>
</body>
</html>