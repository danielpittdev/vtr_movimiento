<div class="min-h-screen flex flex-col items-center justify-center text-center px-6 pt-24">

    {{-- Logo --}}
    <img src="/media/logo.png"
         class="w-40 md:w-56 mb-6">

    {{-- Frase --}}
    <p class="text-white text-lg md:text-2xl font-medium mb-8">
        Nos une España. Nos une Jesús.
    </p>

    {{-- Botón --}}
    <a href="/conferencia"
       class="px-8 py-3 rounded-full bg-white text-black font-semibold hover:scale-105 transition">
       Conferencia 2026
    </a>

</div>@extends('general.html.blank')

@section('contenido')

<div class="relative min-h-screen w-full text-white">

    {{-- IMAGEN FONDO --}}
    <img src="/media/home/home1.jpg"
     class="absolute inset-0 w-full h-full object-cover">


    {{-- OSCURECER --}}
    <div class="absolute inset-0 bg-black/60"></div>

    {{-- CONTENIDO CENTRO --}}
    <div class="relative z-10 min-h-screen flex items-center justify-center px-6">

    <div class="flex flex-col items-center text-center max-w-2xl">

        {{-- LOGO --}}
        <img src="/media/logo.png" style="width:240px;" class="mb-10 opacity-90">

        {{-- FRASE --}}
        <h1 class="text-3xl md:text-5xl font-semibold leading-tight">

            Nos une España.<br>
            Nos une Jesús.
        </h1>

        {{-- BOTÓN --}}
        <a href="/conferencia"
           class="mt-10 btn btn-lg bg-white text-black border-none rounded-full px-10 font-bold hover:scale-105 transition">
           Conferencia 2026
        </a>

    </div>

</div>

@endsection



