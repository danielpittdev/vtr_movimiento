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

            <div class="py-24 sm:py-32">
               <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
                  <div class="mx-auto max-w-2xl">
                     <h2 class="md:text-7xl text-5xl font-semibold tracking-tight text-balance">EQUIPO VTR</h2>
                  </div>
                  <ul role="list"
                     class="mx-auto mt-20 grid max-w-5xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/jorge.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">JORGE FELIZ</h3>
                        <p class="text-sm/6">Coordinador y fundador</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/celeste.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">CELESTE DE LA TORRE</h3>
                        <p class="text-sm/6">Asesora enfoque iglesia independiente</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/josue.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">JOSUÉ LAURIÑO</h3>
                        <p class="text-sm/6">Tesorero</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/samuel.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">SAMUEL PEREIRA</h3>
                        <p class="text-sm/6">Coordinador de Alabanza y Adoración</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/bruno.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">BRUNO PADULO</h3>
                        <p class="text-sm/6">Asesor de evangelismo, misiones y media</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/jose.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">JOSE LORITE</h3>
                        <p class="text-sm/6">Coordinador Staff.</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/cristina.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">CRISTINA CARRASCAL</h3>
                        <p class="text-sm/6">Asesora enfoque bautista</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/samu.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">SAMUEL CASTILLEJO</h3>
                        <p class="text-sm/6">Asistente de Equipo</p>
                     </li>



                  </ul>
               </div>
            </div>
         </div>
      </main>

      <!-- Footer -->
      <footer class="relative mx-auto mt-0 max-w-7xl px-6 lg:px-8 space-y-7 pb-15">
         <div class="capa text-center">
            <h6>VTR Venga tu Reino - Todos los derechos reservados {{ Carbon\Carbon::now()->translatedFormat('Y') }} ©</h6>
         </div>

         <div class="capa text-center">
            <small>Diseño Sara Orjuela - Desarrollo Daniel González</small>
         </div>
      </footer>
   </div>
@endsection
