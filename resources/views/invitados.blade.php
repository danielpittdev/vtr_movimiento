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

               <video src="/media/videos/back3.mp4" loop autoplay muted
                  class="absolute scale-[4] top-0 w-full h-full"></video>
            </div>

            <div class="py-24 sm:py-32">
               <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
                  <div class="mx-auto max-w-2xl">
                     <h2 class="md:text-7xl text-5xl font-semibold tracking-tight text-balance">Invitados</h2>
                     <p class="mt-6 md:text-lg/8 text-xl font-light">Conoce todos nuestros invitados para VTR 2025 -
                        Estepona.</p>
                  </div>
                  <ul role="list"
                     class="mx-auto mt-20 grid max-w-5xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Angel.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">ÁNGEL RODRÍGUEZ</h3>
                        <p class="text-sm/6">Seguramente hayas visto algún video suyo. Su pasión es que cada día más
                           personas conozcan a Jesús. Le encanta demostrar una fe razonada y viva en universidades y
                           calles. </p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Niel.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">NIEL GONZÁLEZ</h3>
                        <p class="text-sm/6">Un loco por Jesús con canciones que te harán sudar y con letras que te harán
                           pensar más de lo que imaginas. Su anhelo es mostrar un evangelio correcto, pero lleno de
                           diversión, alegría y alcanzando las almas de otra manera.</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Juanjo.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">JUANJO CHAPARRO</h3>
                        <p class="text-sm/6">Pastor principal de las iglesias Oleum. Un poco más mayorcito, pero por dentro
                           más joven que muchos de los que estaremos ahí. Cree en la próxima generación y es un privilegio
                           poder contar con él.</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Enoc.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">ENOC PARRA</h3>
                        <p class="text-sm/6">Es nuestro primo hermano, ya que viene de ¡tierras murcianicas! Con una gran
                           voz, pero nada en comparación al gran corazón que tiene. Una persona joven que Dios está
                           levantando en nuestra generación.</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Lucia.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">LUCÍA ACUÑA</h3>
                        <p class="text-sm/6">Graduada en teología; forma parte del equipo de liderazgo de su iglesia local sembrando vida, en Lorca, Murcia. Su corazón arde por esta generación.
                        </p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Samuel.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">SAMUEL JUSTO Jr</h3>
                        <p class="text-sm/6">Definición de pasión. Forma parte del cuerpo pastoral de su iglesia local y su
                           transparencia es un instrumento que Dios usa para alcanzar a las almas. Está loco.</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Miriam.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">MIRIAM ARAUJO</h3>
                        <p class="text-sm/6">PdH en ciencia de la salud. Docente e investigadora en la Facultad de
                           enfermería de la universidad de Huelva y experta en «identidad y género». Diplomada en teología.
                        </p>
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
