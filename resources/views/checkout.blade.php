@extends('general.html.checkout')

@section('contenido')
   <div class="flex items-center justify-center md:p-5 h-[100vh]">
      <div aria-hidden="true" class="fixed inset-x-0 -z-10 transform-gpu blur-3xl h-full scale-[2]">
         <div
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
            class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
         </div>

         <video src="/media/videos/back5.mp4" loop autoplay muted class="absolute top-0 w-full h-full" playsinline
            webkit-playsinline x5-playsinline controlsList="nofullscreen noremoteplayback" disablepictureinpicture
            controls></video>
      </div>

      <main class="bg-black/80 md:rounded-3xl md:p-7 p-5 w-4xl md:max-h-[90vh] max-h-[100vh] overflow-auto py-20">
         <div class="grid md:grid-cols-[1.2fr_1fr] gap-5">

            <div class=" sticky z-20 col-span-full top-0 left-0rounded-md alerta hidden bg-red-600 p-4">
               <div class="flex">
                  <div class="shrink-0">
                     <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                        class="size-5 text-red-400">
                        <path
                           d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z"
                           clip-rule="evenodd" fill-rule="evenodd" />
                     </svg>
                  </div>
                  <div class="ml-3">
                     <h3 class="text-sm font-medium">Comprueba todos los campos.</h3>
                  </div>
               </div>
            </div>

            <form action="{{ route('api_checkout') }}" id="comprar_entrada" method="post" class="w-full">

               <div class="relative space-y-12 overflow-auto md:max-h-[530px] w-full p-1">
                  <section>
                     <h2 class="text-base/7 font-semibold">Datos personales</h2>
                     <p class="mt-1 text-sm/6 text-base-content/50">Proporciona tus datos de contacto</p>

                     <div class="mt-5 grid grid-cols-2 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3 col-span-1">
                           <fieldset>
                              <div class="sm:col-span-4">
                                 <label for="nombre" class="block text-sm/6 font-medium">
                                    Nombre*
                                 </label>
                                 <div class="mt-2">
                                    <input autocomplete="off" type="text" name="nombre" id="nombre"
                                       autocomplete="given-name"
                                       class="block w-full rounded-md bg-base-content/2 px-3 py-1.5 text-base ring ring-base-content/15 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                 </div>
                              </div>
                           </fieldset>
                        </div>

                        <div class="sm:col-span-3 col-span-1">
                           <fieldset>
                              <div class="sm:col-span-4">
                                 <label for="apellido_1" class="block text-sm/6 font-medium">
                                    Apellido*
                                 </label>
                                 <div class="mt-2">
                                    <input autocomplete="off" type="text" name="apellido_1" id="apellido_1"
                                       autocomplete="given-name"
                                       class="block w-full rounded-md bg-base-content/2 px-3 py-1.5 text-base ring ring-base-content/15 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                 </div>
                              </div>
                           </fieldset>
                        </div>
                     </div>
                  </section>

                  <!-- BOX -->
                  <section>
                     <h2 class="text-base/7 font-semibold">Otros datos</h2>
                     <p class="mt-1 text-sm/6 text-base-content/50">Contesta este formulario antes de comprar tu entrada.
                     </p>

                     <div class="mt-5 grid grid-cols-2 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <!-- Fecha de nacimiento -->
                        <div class="sm:col-span-4 col-span-full">
                           <fieldset>
                              <div class="sm:col-span-4">
                                 <label for="fecha_nacimiento" class="block text-sm/6 font-medium">
                                    Fecha de nacimiento*
                                 </label>
                                 <div class="mt-2">
                                    <input autocomplete="off"
                                       type="date" name="fecha_nacimiento" id="fecha_nacimiento"
                                       autocomplete="given-name"
                                       class="input block w-full rounded-md bg-base-content/2 px-3 py-1.5 text-base ring ring-base-content/15 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                 </div>
                              </div>
                           </fieldset>
                        </div>

                        <!-- Ciudad -->
                        <div class="sm:col-span-6 col-span-2">
                           <fieldset>
                              <div class="w-full">
                                 <label for="ciudad" class="block text-sm/6 font-medium">
                                    ¿De dónde vienes?**
                                 </label>
                                 <div class="mt-2">
                                    <select class="select w-full" name="ciudad" id="ciudad"></select>
                                 </div>
                              </div>
                           </fieldset>
                        </div>

                        <script>
                           (async () => {
                              const URLS = {
                                 ccaa: 'https://raw.githubusercontent.com/frontid/ComunidadesProvinciasPoblaciones/master/ccaa.json',
                                 provincias: 'https://raw.githubusercontent.com/frontid/ComunidadesProvinciasPoblaciones/master/provincias.json',
                              };

                              const $prov = document.getElementById('ciudad');

                              const toStr = v => v == null ? '' : String(v);

                              try {
                                 const [ccaaRaw, provRaw] = await Promise.all([
                                    fetch(URLS.ccaa).then(r => r.json()),
                                    fetch(URLS.provincias).then(r => r.json()),
                                 ]);

                                 // Comunidades
                                 let htmlCcaa = '<option value="" disabled selected>Selecciona comunidad…</option>';
                                 for (const c of ccaaRaw) {
                                    htmlCcaa += `<option value="${toStr(c.id)}">${c.label}</option>`;
                                 }

                                 // Provincias
                                 let htmlProv = '<option value="" disabled selected>Selecciona una opción...</option>';
                                 provRaw.sort((a, b) => a.label.localeCompare(b.label, 'es'));
                                 for (const p of provRaw) {
                                    htmlProv += `<option value="${p.label}">${p.label}</option>`;
                                 }
                                 $prov.innerHTML = htmlProv;

                              } catch (e) {
                                 console.error("Error cargando listas:", e);
                                 $prov.innerHTML = '<option value="">Error cargando provincias</option>';
                              }
                           })();
                        </script>

                        <!-- Iglesia proveniente -->
                        <div class="sm:col-span-4 col-span-full">
                           <fieldset>
                              <div class="sm:col-span-4">
                                 <label for="iglesia" class="block text-sm/6 font-medium">
                                    Iglesia perteneciente*
                                 </label>
                                 <div class="mt-2">
                                    <input autocomplete="off" type="text" name="iglesia" id="iglesia"
                                       autocomplete="given-name"
                                       class="block w-full rounded-md bg-base-content/2 px-3 py-1.5 text-base ring ring-base-content/15 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                 </div>
                              </div>
                           </fieldset>
                        </div>
                        <div class="divider col-span-full"></div>
                        <!-- Eres pastor -->
                        <fieldset class="col-span-full">
                           <div class="sm:col-span-4">
                              <label for="pastor" class="block text-sm/6 font-medium">
                                 ¿Eres pastor?
                              </label>
                              <div class="mt-2">
                                 <input type="checkbox" name="pastor" class="checkbox checkbox-xl" />
                              </div>
                           </div>
                        </fieldset>
                        <!-- Eres líder de jóvenes -->
                        <fieldset class="col-span-full">
                           <div class="sm:col-span-4">
                              <label for="jovenes_lider" class="block text-sm/6 font-medium">
                                 ¿Eres líder de jóvenes?
                              </label>
                              <div class="mt-2">
                                 <input type="checkbox" name="jovenes_lider" class="checkbox checkbox-xl" />
                              </div>
                           </div>
                        </fieldset>
                     </div>
                  </section>

                  <div class="divider col-span-full"></div>

                  @if (Carbon\Carbon::now()->lt(Carbon\Carbon::createFromFormat('d-m-Y', '15-10-2025')))
                     <!-- BOX -->
                     <section class="">
                        <div class="alert bg-primary mb-3">
                           <img class="size-10" src="https://blog.trillian.im/hubfs/partying_face.gif" alt="">
                           <span>Oferta solo disponible hasta el <strong>15 de octubre</strong>.</span>
                        </div>
                        <h2 class="text-base/7 font-semibold">¿Quieres nuestra camiseta exclusiva?</h2>
                        <p class="mt-1 text-sm/6 text-base-content/50">Incluye en tu entrada tu camiseta y recógela en el
                           evento. Si la compras con tu entrada te ahorrarás 5€</p>

                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-1 sm:grid-cols-6 group">
                           <fieldset class="col-span-full">
                              <div class="sm:col-span-4">
                                 <label for="nombre" class="block text-sm/6 font-medium">
                                    Incluir en la entrada (+18€)
                                 </label>
                                 <div class="mt-2">
                                    <input type="checkbox" id="check_entrada" name="camiseta_entrada"
                                       class="checkbox checkbox-xl" />
                                 </div>
                              </div>
                           </fieldset>

                           <!-- Color picker -->
                           <div class="col-span-full mt-8 hidden group-has-[input[type=checkbox]:checked]:block">
                              <h2 class="text-sm font-medium">Color</h2>

                              <fieldset aria-label="Elige un color" class="mt-2">
                                 <legend class="sr-only">Colores</legend>

                                 <div class="grid grid-cols-[1fr_1fr] items-center gap-x-3">
                                    <!-- Opción con imagen (AZUL) -->
                                    <label class="flex-1 cursor-pointer text-center">
                                       <!-- input oculto actúa de “peer” para estilado del preview -->
                                       <input type="radio" name="color" value="camiseta-azul" class="hidden peer"
                                          aria-label="Camiseta Azul" />
                                       <!-- preview: imagen que reacciona a checked/focus del input -->
                                       <img src="/media/fotos/VTR - Azul.png" alt="Camiseta Azul"
                                          class="mx-auto text-center w-49 rounded-xl border-2 border-transparent transition
                           peer-checked:border-blue-500 peer-checked:ring-4 peer-checked:ring-blue-200 peer-checked:w-full transition-all duration-300
                           peer-focus-visible:outline-none peer-focus-visible:ring-5 peer-focus-visible:ring-offset-5 " />
                                       <div
                                          class="peer-checked:opacity-100 opacity-0 duration-300 transition-all text-blue-500 font-medium text-center mt-2 md:text-md text-lg">
                                          Camiseta azul</div>

                                    </label>

                                    <!-- Opción con swatch de color plano (GRIS) -->
                                    <label class="flex-1 cursor-pointer text-center">
                                       <input type="radio" name="color" value="camiseta-rosa" class="hidden peer"
                                          aria-label="Camiseta Rosa" />
                                       <!-- preview: imagen que reacciona a checked/focus del input -->
                                       <img src="/media/fotos/VTR - Rosa.png" alt="Camiseta Rosa"
                                          class="mx-auto text-center w-49 rounded-xl border-2 border-transparent transition
                           peer-checked:border-pink-500 peer-checked:ring-4 peer-checked:ring-pink-200 peer-checked:w-full transition-all duration-300
                           peer-focus-visible:outline-none peer-focus-visible:ring-5 peer-focus-visible:ring-offset-5 " />

                                       <div
                                          class="peer-checked:opacity-100 opacity-0 duration-300 transition-all text-pink-500 font-medium text-center mt-2 md:text-md text-lg">
                                          Camiseta rosa</div>
                                    </label>
                                 </div>
                              </fieldset>
                           </div>

                           <!-- Size picker -->
                           <div class="mt-8 col-span-full hidden group-has-[input[type=checkbox]:checked]:block">
                              <div class="flex items-center justify-between">
                                 <h2 class="text-sm font-medium">Selecciona una talla</h2>
                              </div>

                              <fieldset aria-label="Choose a size" class="mt-2">
                                 <div class="grid grid-cols-3 gap-3 sm:grid-cols-3">
                                    <label aria-label="S"
                                       class="group relative flex items-center justify-center rounded-md border border-base-content/10 bg-base-200 p-3 has-checked:border-indigo-600 has-checked:bg-indigo-600 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-indigo-600 has-disabled:border-gray-400 has-disabled:bg-gray-200 has-disabled:opacity-25">
                                       <input type="radio" name="size" value="s"
                                          class="cursor-pointer absolute inset-0 appearance-none focus:outline-none disabled:cursor-not-allowed" />
                                       <span class="text-sm font-medium uppercase group-has-checked:text-white">S</span>
                                    </label>
                                    <label aria-label="M"
                                       class="group relative flex items-center justify-center rounded-md border border-base-content/10 bg-base-200 p-3 has-checked:border-indigo-600 has-checked:bg-indigo-600 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-indigo-600 has-disabled:border-gray-400 has-disabled:bg-gray-200 has-disabled:opacity-25">
                                       <input type="radio" name="size" value="m"
                                          class="cursor-pointer absolute inset-0 appearance-none focus:outline-none disabled:cursor-not-allowed" />
                                       <span class="text-sm font-medium uppercase group-has-checked:text-white">M</span>
                                    </label>
                                    <label aria-label="L"
                                       class="group relative flex items-center justify-center rounded-md border border-base-content/10 bg-base-200 p-3 has-checked:border-indigo-600 has-checked:bg-indigo-600 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-indigo-600 has-disabled:border-gray-400 has-disabled:bg-gray-200 has-disabled:opacity-25">
                                       <input type="radio" name="size" value="l"
                                          class="cursor-pointer absolute inset-0 appearance-none focus:outline-none disabled:cursor-not-allowed" />
                                       <span class="text-sm font-medium uppercase group-has-checked:text-white">L</span>
                                    </label>
                                    <label aria-label="XL"
                                       class="group relative flex items-center justify-center rounded-md border border-base-content/10 bg-base-200 p-3 has-checked:border-indigo-600 has-checked:bg-indigo-600 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-indigo-600 has-disabled:border-gray-400 has-disabled:bg-gray-200 has-disabled:opacity-25">
                                       <input type="radio" name="size" value="xl"
                                          class="cursor-pointer absolute inset-0 appearance-none focus:outline-none disabled:cursor-not-allowed" />
                                       <span class="text-sm font-medium uppercase group-has-checked:text-white">XL</span>
                                    </label>
                                    <label aria-label="2XL"
                                       class="group relative flex items-center justify-center rounded-md border border-base-content/10 bg-base-200 p-3 has-checked:border-indigo-600 has-checked:bg-indigo-600 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-indigo-600 has-disabled:border-gray-400 has-disabled:bg-gray-200 has-disabled:opacity-25">
                                       <input type="radio" name="size" value="2xl"
                                          class="cursor-pointer absolute inset-0 appearance-none focus:outline-none disabled:cursor-not-allowed" />
                                       <span class="text-sm font-medium uppercase group-has-checked:text-white">2XL</span>
                                    </label>
                                    <label aria-label="3XL"
                                       class="group relative flex items-center justify-center rounded-md border border-base-content/10 bg-base-200 p-3 has-checked:border-indigo-600 has-checked:bg-indigo-600 has-focus-visible:outline-2 has-focus-visible:outline-offset-2 has-focus-visible:outline-indigo-600 has-disabled:border-gray-400 has-disabled:bg-gray-200 has-disabled:opacity-25">
                                       <input type="radio" name="size" value="3xl"
                                          class="cursor-pointer absolute inset-0 appearance-none focus:outline-none disabled:cursor-not-allowed" />
                                       <span class="text-sm font-medium uppercase group-has-checked:text-white">3XL</span>
                                    </label>
                                 </div>
                              </fieldset>
                           </div>
                        </div>
                     </section>

                     <div class="divider"></div>
                  @endif

                  <section>
                     <h2 class="text-base/7 font-semibold">Envío de entradas</h2>
                     <p class="mt-1 text-sm/6 text-base-content/50">Proporciona tu email para que podamos enviarte tu
                        entrada.</p>

                     <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                           <fieldset>
                              <div class="sm:col-span-4">
                                 <label for="email" class="block text-sm/6 font-medium">
                                    Correo electrónico
                                 </label>
                                 <div class="mt-2">
                                    <input autocomplete="off" type="text" name="email" id="email"
                                       autocomplete="given-name"
                                       class="block w-full rounded-md bg-base-content/2 px-3 py-1.5 text-base ring ring-base-content/15 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                                 </div>
                              </div>
                           </fieldset>
                        </div>
                     </div>
                  </section>

                  <!-- Check obligatorio ley protección de datos y derechos de imagen -->
                  <fieldset class="md:col-span-full">
                     <div class="sm:col-span-4">
                        <label for="check_proteccion" class="block text-sm/6 font-medium">
                           Acepto la ley de protección de Datos y Derechos de Imagen (Dando la posibilidad de ser
                           fotografíado/a)
                        </label>
                        <div class="mt-2">
                           <input required type="checkbox" name="check_proteccion" class="checkbox checkbox-xl" />
                        </div>
                     </div>
                  </fieldset>
               </div>

               <div class="mt-5 flex items-center justify-start gap-x-6">
                  <button type="submit" class="md:w-auto w-full btn btn-primary rounded-lg">Hacer donativo</button>
               </div>
            </form>

            <div class="caja bg-yellow2-500 h-full flex-col flex items-center justify-start p-1 space-y-6">
               <div class="md:hidden block relative md:text-start text-start w-full mt-auto">
                  <div class="font-light text-md">
                     Donación:
                  </div>
                  <div class="price_total font-medium text-xl">
                     12,00€
                  </div>
               </div>

               <div class="w-full caja text-start space-y-3">
                  <img class="w-25" src="/media/logo.png" alt="">
                  <h1 class="font-medium">Venga Tu Reino - 2025 Estepona</h1>

                  <div class="divider"></div>

                  <p class="text-base-content/50 text-xs/4">Aviso importante para asistentes: Tu plaza queda reservada al
                     comprar la
                     entrada, estas no son
                     reembolsables una vez adquiridas. Respete los turnos de entrada y tenga a mano su código
                     QR para acceder al evento.</p>

                  <ul class="text-base-content/50 text-sm">
                     <li>INSCRIPCIONES: 10:00h.</li>
                     <li>APERTURA DE PUERTAS: 10:30h.</li>
                  </ul>

                  <p class="text-base-content/50 text-xs/4">
                     Destacamos la importancia de llegar a tiempo al evento para una correcta organización de las personas.
                  </p>

                  <div class="divider"></div>

                  <h6>Recogida de camisetas</h6>
                  <p class="text-base-content/50 text-xs/4">
                     Para recoger tu camiseta podrás dirigirte a uno de los puntos de recogida de camisetas, debes de
                     mostrar tu código QR de entrada para poder recogerla. También puedes comprarla allí diréctamente por
                     23€. [PAGO EN EFECTIVO]
                  </p>
               </div>

               <div class="md:block hidden relative md:text-start text-center w-full mt-auto">
                  <div class="font-light text-md">
                     Precio de entrada
                  </div>
                  <div class="price_total font-medium text-xl">
                     12,00€
                  </div>
               </div>
            </div>
         </div>
      </main>

   </div>
@endsection

@section('scripts')
   <script>
      const check = document.querySelector('#check_entrada');

      check?.addEventListener('change', function() {
         if (check.checked) {
            $('.price_total').text('30,00€')
         } else {
            $('.price_total').text('12,00€')
         }
      });
   </script>
   <script>
      const form = document.querySelector('#comprar_entrada');

      form?.addEventListener('submit', (e) => {
         e.preventDefault();
         senderAjax(form)
            .then(data => {
               console.log(data)
               if (data.url) {
                  window.location.href = data.url
               }

            })
      });
   </script>
@endsection
