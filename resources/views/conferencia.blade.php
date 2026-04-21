@extends('general.html.blank')

@section('contenido')

<div class="bg-base-100">
    <main class="isolate">
        <div class="relative pt-14">

            <!-- FONDO IGUAL QUE OTRAS PÁGINAS -->
            <div aria-hidden="true"
                class="absolute inset-x-0 -z-10 transform-gpu overflow-hidden blur-3xl fixed top-0 h-full">

                <div
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
                </div>

                <video src="/media/videos/back3.mp4" loop autoplay muted playsinline
                    class="absolute scale-[4] top-0 w-full h-full object-cover"></video>
            </div>

            <div class="py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">

                    <h1 class="text-4xl md:text-6xl font-semibold mb-8">
                        VTR Conferencia
                    </h1>

                    <p class="text-lg md:text-xl opacity-85 mb-16 max-w-3xl mx-auto">
                        <strong>18 de abril.</strong><br><br>

                        Más de 1500 jóvenes reunidos con un mismo latido.<br><br>

                        No fue solo una conferencia.<br>
                        Fue un encuentro real con Dios.<br><br>

                        Voces como Iván Martínez, Itiel Arroyo, Gustavo Paiva, Rubén Gimeno y Rawlinson nos recordaron algo claro:<br>
                        Dios sigue llamando a esta generación.<br><br>

                        Y lo que vivimos allí… no se queda en un día.<br>
                        Esto solo acaba de empezar.
                    </p>

                    <!-- IMÁGENES -->
                    <div class="grid md:grid-cols-2 gap-8 mb-16">
                        <img src="/media/fotos/conferencia1.jpeg" class="rounded-2xl w-full h-[350px] object-cover">
                        <img src="/media/fotos/conferencia2.jpeg" class="rounded-2xl w-full h-[350px] object-cover">
                    </div>

                    <!-- BOTONES -->
                    <div class="flex flex-col md:flex-row justify-center gap-4">

                        <a href="https://web.upyourshoot.com/es/g/269964-vtr-2026" target="_blank"
                           class="bg-white text-black px-8 py-4 rounded-full text-lg font-semibold hover:opacity-90 transition">
                            Ver fotos
                        </a>

                        <a href="https://www.instagram.com/vtrmovimiento/" target="_blank"
                           class="border border-white text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-white hover:text-black transition">
                            @vtrmovimiento
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </main>
</div>

@endsection