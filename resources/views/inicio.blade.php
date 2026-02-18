@extends('general.html.blank')

@section('contenido')

{{-- Fondo --}}
<div class="fixed inset-0 -z-10">
    <img src="/media/home/home1.jpg"
     class="absolute inset-0 w-full h-full object-cover">

         alt="Fondo">
</div>

{{-- Hero --}}
<section class="min-h-screen flex flex-col items-center justify-center text-center px-6">

    {{-- Logo --}}
    <img src="/media/logo.png"
         class="w-44 md:w-56 mb-6">

    {{-- Frase --}}
    <p class="text-white text-lg md:text-xl font-medium mb-8">
        Nos une España. Nos une Jesús.
    </p>

    {{-- Botón --}}
    <a href="/conferencia"
       class="px-8 py-3 rounded-full bg-white text-black font-semibold hover:scale-105 transition">
       Conferencia 2026
    </a>

</section>

@endsection