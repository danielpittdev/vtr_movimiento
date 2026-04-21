@extends('layouts.app')

@section('title', 'Conferencia - VTR')

@section('og_image', 'https://vtrmovimiento.com/media/fotos/conferencia1.jpeg')

@section('content')

<div class="max-w-5xl mx-auto px-4 py-16 text-center">

    <h1 class="text-3xl md:text-5xl font-bold mb-6">
        VTR Conferencia
    </h1>

    <p class="text-lg md:text-xl text-gray-600 mb-10">
        <strong>18 de abril.</strong><br><br>

        Más de 1500 jóvenes reunidos con un mismo latido.<br><br>

        No fue solo una conferencia.<br>
        Fue un encuentro real con Dios.<br><br>

        Voces como Iván Martínez, Itiel Arroyo, Gustavo Paiva, Rubén Gimeno y Rawlinson nos recordaron algo claro:<br>
        Dios sigue llamando a esta generación.<br><br>

        Y lo que vivimos allí… no se queda en un día.<br>
        Esto solo acaba de empezar.
    </p>

    <!-- IMÁGENES -->
    <div class="grid md:grid-cols-2 gap-6 mb-12">
        <img src="/media/fotos/conferencia1.jpeg" class="rounded-2xl shadow-lg w-full h-[300px] object-cover">
        <img src="/media/fotos/conferencia2.jpeg" class="rounded-2xl shadow-lg w-full h-[300px] object-cover">
    </div>

    <!-- BOTONES -->
    <div class="flex flex-col md:flex-row justify-center gap-4">

        <!-- BOTÓN FOTOS -->
        <a href="https://web.upyourshoot.com/es/g/269964-vtr-2026" target="_blank"
           class="inline-block bg-black text-white px-8 py-4 rounded-full text-lg font-semibold hover:opacity-90 transition">
            Ver fotos
        </a>

        <!-- BOTÓN INSTAGRAM -->
        <a href="https://www.instagram.com/vtrmovimiento/" target="_blank"
           class="inline-block border border-black text-black px-8 py-4 rounded-full text-lg font-semibold hover:bg-black hover:text-white transition">
            @vtrmovimiento
        </a>

    </div>

</div>

@endsection