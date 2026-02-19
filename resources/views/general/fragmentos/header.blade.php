<header class="bg-base-100">
   <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
      <div class="flex lg:flex-1">
         <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">VTR Movimiento</span>
            <img src="/media/logo.png" alt="" class="h-8 w-auto" />
         </a>
      </div>
      <div class="flex lg:hidden">
         <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-base-content/70">
            <span class="sr-only">Abrir menú</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
               <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
         </button>
      </div>
      <el-popover-group class="hidden lg:flex lg:gap-x-12">
         <a href="#vtr" class="text-sm/6 font-semibold text-base-content">¿Qué es VTR?</a>
         <a href="#equipo" class="text-sm/6 font-semibold text-base-content">Equipo</a>
         <a href="/conferencia" class="text-sm/6 font-semibold text-base-content">Conferencias</a>

         {{-- Dropdown Movimiento --}}
         <div class="relative">
            <button popovertarget="desktop-menu-movimiento" class="flex items-center gap-x-1 text-sm/6 font-semibold text-base-content">
               Movimiento
               <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-base-content/50">
                  <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
               </svg>
            </button>

            <el-popover id="desktop-menu-movimiento" anchor="bottom" popover
               class="w-48 overflow-hidden rounded-xl bg-base-100 shadow-lg outline-1 outline-gray-900/5 transition transition-discrete [--anchor-gap:--spacing(3)] backdrop:bg-transparent open:block data-closed:translate-y-1 data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-150 data-leave:ease-in">
               <div class="py-2">
                  <a href="#street" class="block px-5 py-3 text-sm/6 font-semibold text-base-content hover:bg-white/5">Street</a>
                  <a href="#lideres" class="block px-5 py-3 text-sm/6 font-semibold text-base-content hover:bg-white/5">Red de líderes</a>
                  <a href="#misiones" class="block px-5 py-3 text-sm/6 font-semibold text-base-content hover:bg-white/5">Misiones</a>
                  <a href="#podcast" class="block px-5 py-3 text-sm/6 font-semibold text-base-content hover:bg-white/5">Podcast</a>
                  <a href="#devocional" class="block px-5 py-3 text-sm/6 font-semibold text-base-content hover:bg-white/5">Devocional</a>
               </div>
            </el-popover>
         </div>

         <a href="#contacto" class="text-sm/6 font-semibold text-base-content">Contacto</a>
      </el-popover-group>
   </nav>
   <el-dialog>
      <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
         <div tabindex="0" class="fixed inset-0 focus:outline-none">
            <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-base-100 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
               <div class="flex items-center justify-between">
                  <a href="#" class="-m-1.5 p-1.5">
                     <span class="sr-only">VTR Movimiento</span>
                     <img src="/media/logo.png" alt="" class="h-8 w-auto" />
                  </a>
                  <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                     <span class="sr-only">Cerrar menú</span>
                     <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                  </button>
               </div>
               <div class="mt-6 flow-root">
                  <div class="-my-6 divide-y divide-gray-500/10">
                     <div class="space-y-2 py-6">
                        <a href="#vtr" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-base-content hover:bg-white/5">¿Qué es VTR?</a>
                        <a href="#equipo" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-base-content hover:bg-white/5">Equipo</a>
                        <a href="/conferencia" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-base-content hover:bg-white/5">Conferencias</a>

                        {{-- Dropdown Movimiento móvil --}}
                        <div class="-mx-3">
                           <button type="button" command="--toggle" commandfor="movimiento-mobile" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-base-content hover:bg-white/5">
                              Movimiento
                              <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none in-aria-expanded:rotate-180">
                                 <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                              </svg>
                           </button>
                           <el-disclosure id="movimiento-mobile" hidden class="mt-2 block space-y-2">
                              <a href="#street" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-base-content hover:bg-white/5">Street</a>
                              <a href="#lideres" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-base-content hover:bg-white/5">Red de líderes</a>
                              <a href="#misiones" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-base-content hover:bg-white/5">Misiones</a>
                              <a href="#podcast" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-base-content hover:bg-white/5">Podcast</a>
                              <a href="#devocional" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-base-content hover:bg-white/5">Devocional</a>
                           </el-disclosure>
                        </div>

                        <a href="#contacto" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-base-content hover:bg-white/5">Contacto</a>
                     </div>
                  </div>
               </div>
            </el-dialog-panel>
         </div>
      </dialog>
   </el-dialog>
</header>
