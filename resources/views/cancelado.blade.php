@extends('general.html.blank')

@section('contenido')
   <div class="bg-base-100">
      <main class="isolate">
         <!-- Hero section -->
         <div class="relative pt-14">
            <div aria-hidden="true" class="absolute top-0 -z-10 transform-gpu overflow-hidden blur-3xl w-full">
               <div
                  style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                  class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
               </div>

               <video src="/media/videos/back3.mp4" autoplay muted class="absolute scale-[4] top-0 w-full h-full"></video>
            </div>

            <div class="py-24 sm:py-32 lg:pb-20">
               <div class="mx-auto max-w-7xl px-6 lg:px-8">
                  <div class="mx-auto max-w-2xl text-center">
                     <img src="/media/logo.png" class="text-center mx-auto w-50" alt="">
                     <h1 class="text-2xl font-semibold tracking-tight text-balance sm:text-xl">
                        Venga Tu Reino
                     </h1>
                     <p class="mt-8 text-lg font-medium text-pretty sm:text-xl/8">
                        El evento evangélico más grande en Andalucía abre sus puertas en ESTEPONA - Málaga
                     </p>
                     <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#" class="btn btn-success rounded-full text-sm/6 font-semibold">
                           Ver vídeo
                        </a>
                        <a href="{{ route('web_checkout') }}"
                           class="btn btn-primary rounded-full text-sm/6 font-semibold">Comprar
                           entradas <span aria-hidden="true">→</span></a>
                     </div>
                  </div>
                  <div class="mt-16 flow-root sm:mt-24">
                     <div
                        class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-gray-900/10 ring-inset lg:-m-4 lg:rounded-2xl lg:p-4">
                        <video width="2432" height="1442"
                           class="js-player w-304 rounded-md bg-gray-50 shadow-xl ring-1 ring-gray-900/10" playsinline
                           controls>
                           <source src="{{ asset('/media/videos/video.mp4') }}" type="video/mp4" />
                        </video>
                     </div>
                  </div>
               </div>
            </div>

            <div aria-hidden="true"
               class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
               <div
                  style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                  class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
               </div>

               <video src="/media/videos/back.mp4" autoplay muted class="absolute scale-[4] top-0 w-full h-full"></video>
            </div>
         </div>
      </main>

      <!-- Footer -->
      <footer class="relative mx-auto mt-0 max-w-7xl px-6 lg:px-8 space-y-7 pb-15">
         <div class="text-center pt-20">
            <ul class="flex justify-center space-x-8">
               <li><a href="#" class="text-sm font-semibold hover:underline">Evento</a></li>
               <li><a href="#" class="text-sm font-semibold hover:underline">Soporte</a></li>
               <li><a href="#" class="text-sm font-semibold hover:underline">Contacto</a></li>
            </ul>
         </div>

         <div class="capa text-center">
            <h6>VTR Venga tu Reino - Todos los derechos reservados {{ Carbon\Carbon::now()->translatedFormat('Y') }} ©</h6>
         </div>

         <div class="capa text-center">
            <small>Diseño Sara Orjuela - Desarrollo Daniel González</small>
         </div>
      </footer>
   </div>
@endsection
