@extends('general.html.blank')

@section('contenido')
<div class="bg-base-100">
   <main class="isolate">
      <div class="relative pt-14">
         <div aria-hidden="true"
            class="absolute inset-x-0 -z-10 transform-gpu overflow-hidden blur-3xl fixed top-0 h-full">
            <div
               style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
               class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
            </div>

            <video src="/media/videos/back3.mp4" loop autoplay muted playsinline
               webkit-playsinline x5-playsinline controlsList="nofullscreen noremoteplayback"
               disablepictureinpicture controls
               class="absolute scale-[4] top-0 w-full h-full"></video>
         </div>

         <div class="py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">

               {{-- Hero --}}
               <div class="mx-auto max-w-4xl text-center">
                  <img src="/media/logo.png" alt="Logo VTR" class="mx-auto w-28 mb-10">
                  
                  <h1 class="md:text-6xl text-4xl font-semibold tracking-tight text-balance">
                     Soñemos con lo que Dios quiere hacer en España con nuestra generación
                  </h1>
               </div>

               {{-- Texto principal --}}
               <div class="mx-auto mt-16 max-w-4xl text-lg/8 opacity-85 space-y-8 text-center">
                  <p>
                     Venga Tu Reino (VTR) es un movimiento interdenominacional que nace del corazón de Dios con el propósito de instaurar la cultura del Reino en la tierra, uniendo a la Iglesia más allá de las barreras denominacionales.
                  </p>

                  <p>
                     Busca equipar y conectar a líderes, e impulsar a los jóvenes a amar a Jesús, la Palabra y al Espíritu Santo, siempre en honra y sujeción a sus pastores e iglesia local. Con un enfoque cristocéntrico y contemporáneo, VTR quiere acercar el evangelio a una generación que vive en medio de la soledad, la relatividad de la verdad y la falta de identidad, mostrando que la fe no es anticuada, sino transformadora y viva.
                  </p>

                  <p>
                     Este movimiento anhela fortalecer la iglesia local, fomentar la unidad y ser un canal por el cual Jesús transforme la sociedad a través de los jóvenes. Para ello, desarrollará encuentros, proyectos y plataformas que conecten ministerios locales e internacionales, provocando decisiones genuinas que se reflejen en iglesias llenas de jóvenes comprometidos.
                  </p>

                  <p>
                     En definitiva, VTR quiere ser instrumento del Espíritu Santo para que en España surja una generación unida en un solo propósito: que Jesús brille cada vez con más fuerza.
                  </p>
               </div>

               {{-- Aval / Referencias --}}
               <div class="mx-auto mt-28 max-w-5xl">
                  <h2 class="text-4xl font-semibold text-center mb-12">
                     Ministerios de referencia y apoyo
                  </h2>

                  <div class="grid gap-6 md:grid-cols-2">
                     <div class="rounded-2xl bg-white/5 p-6 backdrop-blur-sm">
                        <p><strong>Esteban Muñoz:</strong> Pastor principal de la Iglesia Comunidad de Amor Cristiano, Córdoba. Presidente de FEREDE.</p>
                     </div>

                     <div class="rounded-2xl bg-white/5 p-6 backdrop-blur-sm">
                        <p><strong>Armando Santana:</strong> Pastor de la Iglesia Evangélica Bautista de Granada.</p>
                     </div>

                     <div class="rounded-2xl bg-white/5 p-6 backdrop-blur-sm md:col-span-2">
                        <p><strong>Jesús Caramés:</strong> Decano del máster de la facultad de teología de La Carlota, coordinador del comité de investigación teológica de las Asambleas de Dios de España, docente del máster de la ERE y miembro del claustro.</p>
                     </div>
                  </div>

                  <div class="mt-12 text-center space-y-3 opacity-80">
                     <p>CEAA. Consejo Evangélico Autonómico de Andalucía</p>
                     <p>FEREDE Jóvenes</p>
                     <p>Iglesias Bautistas de Andalucía, Extremadura y Norte de África</p>
                     <p>FRAPAM (Fraternidad de Pastores de Málaga)</p>
                  </div>

                  <div class="mt-12 text-center">
                     <p class="text-2xl font-semibold">
                        Más de 120 pastores son aval de VTR
                     </p>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </main>

   <footer class="relative mx-auto mt-0 max-w-7xl px-6 lg:px-8 space-y-7 pb-15">
      <div class="capa text-center">
         <h6>VTR Venga tu Reino - Todos los derechos reservados {{ Carbon\Carbon::now()->translatedFormat('Y') }} ©</h6>
      </div>

      <div class="capa text-center">
         <small>Diseño Jose Lorite - Desarrollo Daniel González</small>
      </div>
   </footer>
</div>
@endsection
