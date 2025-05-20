<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/tugas-tutorial-css/style.css') }}" />

        <title>Tutorial CSS - Pertemuan 2</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <nav>
            <div class="logo">
                <img src="{{ asset('img/tugas-tutorial-css/css.png') }}" alt="Logo CSS" height="50px"/>
                <h1 class="judul">CSS TUTOR</h1>
            </div>
            <div>
                <ul class="navbar-link">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="https://github.com/muhammdsahril">Github</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </body>
</html>
