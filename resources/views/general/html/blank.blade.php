<!DOCTYPE html>
<html lang="en" data-theme="dark" class="h-full bg-base-100">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>VTR Venga Tu Reino - 2026 Córdoba</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">

      @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/socket.js', 'resources/js/form.js'])
   </head>

   <body class="caja">
      @include('general.fragmentos.header')
      @yield('contenido')
      @yield('scripts')
   </body>

</html>
