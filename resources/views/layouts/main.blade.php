<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/Bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    @yield('custom_css')
    <title>@yield('title')</title>
</head>
<body>
@include('components.header')
@yield('content')
@include('components.footer')

<script></script>
@yield('custom_js')
</body>
</html>

