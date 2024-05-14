<!DOCTYPE html>
<html lang="en-nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') / KVV Heusden-Zolder</title>
    @yield('styles') <!-- Hier kunnen pagina-specifieke CSS-bestanden worden toegevoegd -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
</head>

<body>
    @include('layouts.includes.header')

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.includes.footer')
    @yield('scripts') <!-- Hier kunnen pagina-specifieke JavaScript-bestanden worden toegevoegd -->
</body>

</html>
