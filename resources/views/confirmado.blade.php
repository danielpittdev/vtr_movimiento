@extends('general.html.blank')

@section('contenido')
   <div class="bg-base-100">

      <main class="isolate h-[100vh] flex items-center justify-center bg-base-200 p-6">
         <div aria-hidden="true" class="absolute inset-x-0 -z-10 transform-gpu overflow-hidden blur h-full">
            <div
               style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
               class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
            </div>

            <video playsinline
               webkit-playsinline x5-playsinline controlsList="nofullscreen noremoteplayback" disablepictureinpicture
               controls src="/media/videos/back2.mp4" loop autoplay muted class="absolute scale-[4] top-0 w-full h-full"></video>
         </div>
         <div class="bg-base-100 shadow-xl rounded-3xl p-10 text-center max-w-md w-full space-y-6">
            <!-- Check animado -->
            <div class="flex justify-center">
               <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center animate-bounce">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                  </svg>
               </div>
            </div>

            <!-- Mensaje -->
            <h1 class="text-2xl font-bold text-base-content">¡Pago completado!</h1>
            <p class="text-base text-base-content/70">
               Tu entrada ha sido confirmada correctamente.<br>
               Enviaremos un correo de confirmación de la reserva de tu entrada y enviaremos tu entrada 3 días antes del
               evento.
            </p>

            <div class="w-full flex items-center justify-center">
               {{ $qrSvg }}
            </div>

            <!-- Botón -->
            <div class="pt-4 gap-4 flex justify-center">
               <a href="{{ url('/') }}" class="btn btn-success rounded-full px-6">
                  Vídeo concierto
               </a>

               <a href="{{ url('/') }}" class="btn btn-primary rounded-full px-6">
                  Volver al inicio
               </a>
            </div>
         </div>
      </main>

   </div>
@endsection
