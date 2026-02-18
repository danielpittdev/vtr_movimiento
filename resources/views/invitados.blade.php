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
                     <h2 class="md:text-7xl text-5xl font-semibold tracking-tight text-balance">Invitados</h2>
                     <p class="mt-6 md:text-lg/8 text-xl font-light">Conoce todos nuestros invitados para CONFERENCIA VTR 2026 -
                        Córdoba.</p>
                  </div>
                  <ul role="list"
                     class="mx-auto mt-20 grid max-w-5xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Angel.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">ITIEL ARROYO</h3>
                        <p class="text-sm/6">No viene a soltar un discurso más. Viene a hablar claro, profundo y directo al corazón. Predicador internacional, autor y mentor, tiene una manera única de comunicar a Jesús en nuestro idioma cultural, sin rebajar la verdad bíblica. Su mensaje es de esos que te confrontan, te inspiran y te empujan a vivir una fe real, sin postureo y sin medias tintas.</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Niel.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">GUSTAVO PAIVA</h3>
                        <p class="text-sm/6">Desde Brasil, fundador del movimiento juvenil Nova Geração. Con un fuerte enfoque en la identidad en Cristo, su ministerio está marcando a miles de jóvenes. Prepárate para una palabra que despierta y afirma quién eres en Jesús.</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Juanjo.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">IVÁN MARTÍNEZ</h3>
                        <p class="text-sm/6">Pasión, fuerza, entusiasmo y un amor genuino por Dios. Tiene esa manera de hablar que te despierta por dentro y te recuerda para qué estás aquí. Sirve como pastor en Lifeboat Church en Madrid, y no solo predica: enciende corazones y activa propósito en esta generación.</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Enoc.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">ENOC PARRA</h3>
                        <p class="text-sm/6">Una voz que impacta... pero un corazón aún más grande. Enoc no solo canta, sino que transmite pasión y verdad. Estamos convencidos de que Dios lo está levantando con fuerza en nuestra generación, y lo vas a sentir desde la primera nota.</p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Lucia.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">RUBÉN GIMENO</h3>
                        <p class="text-sm/6">Desde Cartagena llega Rubén Gimeno, líder del movimiento Legacy y evangelizador de corazón. Vive y respira el evangelio; lo transmite en cada palabra y en cada paso que da. Su carga por alcanzar a esta generación es absolutamente contagiosa.
                        </p>
                     </li>

                     <li class="rounded-2xl px-8 py-10">
                        <img src="/media/fotos/6 - Samuel.png" alt=""
                           class="mx-auto w-50 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                        <h3 class="mt-6 font-semibold tracking-tight mb-3">RAWLINSON RANGEL</h3>
                        <p class="text-sm/6">Sí, su nombre no es muy típico… pero tranquilo, cuando lo escuches no se te va a olvidar. Hace años llegó desde Brasil con una pasión clara: comunicar lo que dice la Biblia aplicado al día a día. Actualmente es pastor de la Iglesia Bautista de Sevilla, y su mensaje conecta la fe con la sociedad, retándonos a vivir el evangelio con coherencia y valentía.</p>
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
