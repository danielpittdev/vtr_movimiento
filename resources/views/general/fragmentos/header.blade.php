<header class="fixed top-0 left-0 w-full z-50">
    <div class="bg-black/40 backdrop-blur-md border-b border-white/10">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">

            {{-- Logo --}}
            <a href="/" class="text-white font-semibold tracking-widest">
                VTR MOVIMIENTO
            </a>

            {{-- Menu --}}
            <nav class="flex items-center space-x-10 text-white text-sm relative">

                <a href="#vtr" class="hover:opacity-70">¿Qué es VTR?</a>

                <a href="#equipo" class="hover:opacity-70">Equipo</a>

                <a href="/conferencia" class="hover:opacity-70">Conferencias</a>

                {{-- Dropdown Movimiento --}}
                <div class="relative group">

                    <button class="hover:opacity-70 flex items-center gap-1">
                        Movimiento
                        <span class="text-xs">▾</span>
                    </button>

                    <div class="absolute left-0 mt-4 w-48 bg-black/90 backdrop-blur-md rounded-xl opacity-0 group-hover:opacity-100 transition pointer-events-none group-hover:pointer-events-auto">

                        <a href="#street" class="block px-5 py-3 hover:bg-white/10">Street</a>
                        <a href="#lideres" class="block px-5 py-3 hover:bg-white/10">Red de líderes</a>
                        <a href="#misiones" class="block px-5 py-3 hover:bg-white/10">Misiones</a>
                        <a href="#podcast" class="block px-5 py-3 hover:bg-white/10">Podcast</a>
                        <a href="#devocional" class="block px-5 py-3 hover:bg-white/10">Devocional</a>

                    </div>

                </div>

                <a href="#contacto" class="hover:opacity-70">Contacto</a>

            </nav>

        </div>
    </div>
</header>
