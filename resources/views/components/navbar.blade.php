<header class="fixed top-0 left-0 w-full z-50">
    <div class="navbar px-6 md:px-12 bg-black/40 backdrop-blur-md text-white">

        {{-- Logo --}}
        <div class="flex-1">
            <a href="/" class="tracking-[0.25em] font-semibold text-sm">
                VTR
            </a>
        </div>

        {{-- Desktop --}}
        <nav class="hidden md:flex gap-10 text-sm tracking-wide">
            <a href="/" class="hover:opacity-70 transition">Inicio</a>
            <a href="/conferencia" class="hover:opacity-70 transition">Conferencia</a>
            <a href="/invitados" class="hover:opacity-70 transition">Invitados</a>
        </nav>

        {{-- Mobile --}}
        <div class="md:hidden">
            <details class="dropdown dropdown-end">
                <summary class="btn btn-ghost btn-sm text-white">
                    ☰
                </summary>
                <ul class="menu dropdown-content mt-3 z-[60] p-4 shadow bg-black/90 backdrop-blur-md rounded-box w-52">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/conferencia">Conferencia</a></li>
                    <li><a href="/invitados">Invitados</a></li>
                </ul>
            </details>
        </div>

    </div>
</header>
