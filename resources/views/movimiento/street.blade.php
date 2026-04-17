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

               {{-- Título --}}
               <div class="mx-auto max-w-2xl text-center">
                  <h2 class="md:text-7xl text-5xl font-semibold tracking-tight text-balance">
                     VTR STREET: Almería
                  </h2>
                  <p class="mt-6 md:text-lg/8 text-xl font-light">
                     Del 2 al 4 de julio
                  </p>
               </div>

               {{-- Texto + Foto --}}
               <div class="mx-auto mt-20 grid max-w-6xl grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                  <div>
                     <h3 class="text-3xl font-semibold mb-6">Llevar el mensaje de Jesús a toda Almería</h3>
                     <p class="text-base/8 opacity-80">
                        Tres días en pleno verano, cientos de jovenes evangelizando la ciudad de Almería AL MISMO TIEMPO. Formación, adoración, evangelismo, comunión... Dios va a hacer grandes cosas esos dísa en esa ciudad. ¡ALMERÍA ES PARA CRISTO!
                        
                     </p>

                     <p class="text-base/8 opacity-80 mt-4">
                        Tendremos de invitados a Marta Durán y Eric Rey
                     </p>
                  </div>

                  <div>
                     <img src="/media/fotos/street.jpeg"
                        alt="street"
                        class="rounded-3xl shadow-2xl w-full object-cover">
                  </div>
               </div>

               {{-- CTA --}}
               <div class="text-center mt-20">
                  <h3 class="text-3xl font-semibold mb-6">
                    "Id por todo el mundo y predicad el evangelio a toda criatura" Marcos 16:15
                  </h3>

                  <a href="https://forms.gle/3JtY9VMjbDHseAdm9"
                     target="_blank"
                     rel="noopener noreferrer"
                     class="inline-block rounded-full bg-white px-10 py-4 text-lg font-semibold text-black hover:scale-105 transition">
                     INSCRIPCIÓN
                  </a>
               </div>

            </div>
         </div>
      </div>
   </main>

   {{-- Footer --}}
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