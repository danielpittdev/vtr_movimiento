<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'VTR - Venga Tu Reino')</title>

    <meta property="og:title" content="@yield('og_title', 'VTR - Venga Tu Reino')">
    <meta property="og:description" content="@yield('og_description', 'Soñemos con lo que Dios quiere hacer en España con nuestra generación')">
    <meta property="og:image" content="https://vtrmovimiento.com/media/fotos/portada2.jpg">>

<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white">

    <x-navbar />

    <main>
        @yield('content')
    </main>

</body>
</html>