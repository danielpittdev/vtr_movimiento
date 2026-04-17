<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VTR</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white">

    <x-navbar />

    <main>
        @yield('content')
    </main>
<meta property="og:title" content="VTR - Venga Tu Reino">
<meta property="og:description" content="Soñemos con lo que Dios quiere hacer en España con nuestra generación">
<meta property="og:image" content="https://vtrmovimiento.com/media/fotos/portada.jpg">
<meta property="og:url" content="https://vtrmovimiento.com">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">

</body>
</html>
