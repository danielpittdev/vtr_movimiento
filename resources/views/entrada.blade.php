@extends('general.html.blank')

@section('contenido')
   <div class="bg-base-100">

      <main class="isolate h-[100vh] flex items-center justify-center bg-base-200 p-3">
         <div aria-hidden="true" class="absolute inset-x-0 -z-10 transform-gpu overflow-hidden blur h-full">
            <div
               style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
               class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
            </div>
         </div>
         <div class="bg-base-100 shadow-lg rounded p-3 max-w-md w-full space-y-6 border border-base-content/20">

            <h1 class="font-medium">
               Estado de tus entradas
            </h1>

            <form class="space-y-7" id="comprobar_entrada" action="{{ route('post_entrada_cr') }}">

               <div class="campo">
                  <label for="email">Correo electrónico</label>
                  <input id="email" type="email" name="email"
                     class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
               </div>

               <div class="campo">
                  <button type="submit" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50">Comprobar</button>
               </div>
            </form>

         </div>
      </main>

   </div>
@endsection

@section('scripts')
   <script>
      const comprobar_entradas = document.querySelector('#comprobar_entrada');

      comprobar_entradas?.addEventListener('submit', (e) => {
         e.preventDefault();
         senderAjax(comprobar_entradas)
            .then(data => {
               if (data.url) {
                  window.location.href = data.url
               }
            })
      });
   </script>
@endsection
