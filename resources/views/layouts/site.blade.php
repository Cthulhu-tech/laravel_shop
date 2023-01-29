<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.navigation')
    <main>@yield('content')</main>
    @include('layouts.footer')
</body>
    @yield('js')
    @if(Auth::user())
        <script src="js/cart.js"></script>
    @endif
</html>
