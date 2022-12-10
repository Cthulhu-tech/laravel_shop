<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ ('css/global.css') }}">
    <link rel="stylesheet" href="{{ ('css/color.css') }}">
    <link rel="stylesheet" href=@yield('css')>
</head>

    <body>
        <header class="header"></header>

        <x-slider.slider />

        <main class="main">
            @yield('content')
        </main>
        
    </body>

    <footer class="footer"></footer>

    @hasSection('js')
        <script src=@yield('js') defer></script>
    @endif

</html>