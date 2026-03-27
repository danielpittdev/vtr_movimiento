@extends('general.html.blank')

@section('contenido')
<div class="bg-base-100">
      <main class="isolate">
         <!-- Hero section -->
         <div class="relative pt-14">
            <div aria-hidden="true"
               class="absolute inset-x-0 -z-10 transform-gpu overflow-hidden blur-3xl fixed top-0 h-full">
               <div
                  style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                  class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
               </div>

               <video src="/media/videos/back3.mp4" loop autoplay muted playsinline
                  webkit-playsinline x5-playsinline controlsList="nofullscreen noremoteplayback" disablepictureinpicture
                  controls
                  class="absolute scale-[4] top-0 w-full h-full"></video>
            </div>
<div class="min-h-screen px-6 pt-50 pb-28 text-white text-center">

    <h1 class="text-5xl font-bold mb-6 tracking-wide">
        Equipo
    </h1>
<div class="text-center mb-16">
    <h1 class="text-5xl font-bold mt-20 mb-6">Equipo</h1>
    </p>
</div>
    <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-10 max-w-6xl mx-auto">

        {{-- Persona --}}
        <div class="group transition transform hover:scale-105">
            <div class="text-center">
                <img src="/media/fotos/persona1.png" class="w-21 h-21 max-w-[80px] max-h-[80px] mx-auto rounded-full object-cover mb-4">
            </div>
            <h3 class="text-xl font-bold mt-4">Jorge Feliz</h3>
            <p class="text-sm opacity-70 mt-2">Coordinador y fundador</p>
        </div>

        <div class="group transition transform hover:scale-105">
            <div class="text-center">
                <img src="/media/fotos/persona2.png" class="w-21 h-21 max-w-[80px] max-h-[80px] mx-auto rounded-full object-cover mb-4">
            </div>
            <h3 class="text-xl font-bold mt-4">Celeste de la Torre</h3>
            <p class="text-sm opacity-70 mt-2">Asesora enfoque iglesia independiente</p>
        </div>

        <div class="group transition transform hover:scale-105">
            <div class="text-center">
                <img src="/media/fotos/persona3.png" class="w-21 h-21 max-w-[80px] max-h-[80px] mx-auto rounded-full object-cover mb-4">
            </div>
            <h3 class="text-xl font-bold mt-4">Samuel Pereira</h3>
            <p class="text-sm opacity-70 mt-2">Coordinador de Alabanza y Adoración</p>
        </div>

        <div class="group transition transform hover:scale-105">
            <div class="text-center">
                <img src="/media/fotos/persona4.png" class="w-21 h-21 max-w-[80px] max-h-[80px] mx-auto rounded-full object-cover mb-4">
            </div>
            <h3 class="text-xl font-bold mt-4">Bruno Padulo</h3>
            <p class="text-sm opacity-70 mt-2">Asesor de evangelismo, misiones y media</p>
        </div>

        <div class="group transition transform hover:scale-105">
            <div class="text-center">
                <img src="/media/fotos/persona5.png" class="w-21 h-21 max-w-[80px] max-h-[80px] mx-auto rounded-full object-cover mb-4">
            </div>
            <h3 class="text-xl font-bold mt-4">Josue Lauriño</h3>
            <p class="text-sm opacity-70 mt-2">Tesorero</p>
        </div>

        <div class="group transition transform hover:scale-105">
            <div class="text-center">
                <img src="/media/fotos/persona6.png" class="w-21 h-21 max-w-[80px] max-h-[80px] mx-auto rounded-full object-cover mb-4">
            </div>
            <h3 class="text-xl font-bold mt-4">Jose Lorite</h3>
            <p class="text-sm opacity-70 mt-2">Coordinador Staff</p>
        </div>

        <div class="group transition transform hover:scale-105">
            <div class="text-center">
                <img src="/media/fotos/persona7.png" class="w-21 h-21 max-w-[80px] max-h-[80px] mx-auto rounded-full object-cover mb-4">
            </div>
            <h3 class="text-xl font-bold mt-4">Samuel Castillejo</h3>
            <p class="text-sm opacity-70 mt-2">Asistente de Equipo</p>
        </div>

        <div class="group transition transform hover:scale-105">
            <div class="text-center">
                <img src="/media/fotos/persona8.png" class="w-21 h-21 max-w-[80px] max-h-[80px] mx-auto rounded-full object-cover mb-4">
            </div>
            <h3 class="text-xl font-bold mt-4">Cristina Carrascal</h3>
            <p class="text-sm opacity-70 mt-2">Asesora enfoque bautista</p>
        </div>

    </div>

</div>

@endsection