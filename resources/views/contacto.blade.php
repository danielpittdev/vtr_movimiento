
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
<div class="min-h-screen flex items-center justify-center px-6 py-32 text-white text-center">

    <div class="max-w-xl">

        <h1 class="text-5xl font-bold mb-8">
            Contacto
        </h1>

        <p class="text-lg mb-8">
            Si quieres contactar con el movimiento VTR o tienes alguna pregunta
            sobre la conferencia, puedes escribirnos.
        </p>

        <a href="mailto:info@vtrmovimiento.com"
           class="btn btn-lg bg-white text-black border-none rounded-full px-10 font-bold hover:scale-105 transition">

            info@vtrmovimiento.com

        </a>

    </div>

</div>

@endsection