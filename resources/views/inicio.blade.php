@extends('general.html.blank')

@section('contenido')
   {{-- Fondo fijo --}}
   <div class="fixed inset-0 z-0">
      <img class="w-full h-full object-cover" src="/media/vtr2026/fondo_vtr.png" alt="Fondo VTR">
   </div>

   {{-- Contenido principal --}}
   <div class="relative z-10 min-h-screen flex flex-col items-center pt-24 sm:pt-28 pb-28 sm:pb-20 px-4 sm:px-6 overflow-x-hidden">

      {{-- Sección Hero --}}
      <div class="w-full max-w-5xl mx-auto flex flex-col items-center gap-4 sm:gap-6 lg:gap-8 pb-20">

         {{-- Bloque central: Cartel de invitados con elementos decorativos --}}
         <div class="relative w-full flex items-center justify-center">

            {{-- Cartel invitados (centro) --}}
            <div data-aos="zoom-in" data-aos-duration="1000" class="relative z-10">
               <img class="w-full max-w-[280px] sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl drop-shadow-2xl"
                  src="/media/vtr2026/invitados_TEMP.png" alt="Invitados">
            </div>

            {{-- Venga Tu Reino texto: lado derecho --}}
            <div data-aos="fade-left" data-aos-duration="900" data-aos-delay="500"
               class="hidden sm:block absolute -right-2 md:right-4 lg:right-8 top-1/2 -translate-y-1/2 z-20">
               <img class="w-14 md:w-22 lg:w-28 opacity-70"
                  src="/media/vtr2026/vengatureino.png" alt="Venga Tu Reino">
            </div>
         </div>

         {{-- Fecha y lugar --}}
         <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" class="mt-2 sm:mt-4">
            <img class="w-52 sm:w-60 md:w-72 lg:w-120 drop-shadow-xl"
               src="/media/vtr2026/fechalugar.png" alt="18 Abril - CEFC Córdoba">
         </div>

         {{-- Botón CTA --}}
         <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" class="mt-2 sm:mt-4">
            <a href="https://rezerva.es/e/dad32e5c-15ae-4b13-885b-75157c07f7e9"
               class="btn btn-lg bg-white hover:bg-gray-50 text-black border-none rounded-full px-8 sm:px-10 text-base sm:text-lg font-bold shadow-xl shadow-white/10 transition-transform hover:scale-105">
               Reserva tu plaza
            </a>
         </div>
      </div>

      {{-- Patrocinadores --}}
      <div class="fixed bottom-0 left-0 w-full z-50 pb-10 sm:pb-10 pt-10 bg-gradient-to-t from-black/50 to-transparent pointer-events-none">
         <div class="flex items-center justify-center gap-4 sm:gap-6 md:gap-8 opacity-90 pointer-events-auto">
            <img class="h-8 lg:h-12 drop-shadow-md" src="/media/vtr2026/logo_CEAA.png" alt="CEAA">
            <img class="h-8 lg:h-12 drop-shadow-md" src="/media/vtr2026/logo_IMEDEC.png" alt="IMEDEC">
            <img class="h-8 lg:h-12 drop-shadow-md" src="/media/vtr2026/logo_aytocordoba.png" alt="Ayto Córdoba">
         </div>
      </div>
   </div>
@endsection
