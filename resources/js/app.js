import "./bootstrap";
//
import $ from "jquery";
window.$ = window.jQuery = $;

import Plyr from "plyr";
import "plyr/dist/plyr.css";

document.addEventListener("DOMContentLoaded", () => {
    const players = Plyr.setup(".js-player");
});

import "cally";
import "@tailwindplus/elements";

function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie =
        name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
}

// Función principal que se ejecuta al hacer clic en el botón
function toggleSidebar() {
    // 1. Alterna la clase en el body. El CSS y Tailwind se encargan del resto.
    document.body.classList.toggle("sidebar-plegado");

    // 2. Comprueba el estado actual y guarda la cookie.
    if (document.body.classList.contains("sidebar-plegado")) {
        setCookie("sidebar_estado", "plegado", 365);
    } else {
        setCookie("sidebar_estado", "expandido", 365);
    }
}

// Asigna el evento cuando el DOM esté listo.
document.addEventListener("DOMContentLoaded", () => {
    const toggleButton = document.getElementById("sidebar-toggle-btn");
    if (toggleButton) {
        toggleButton.addEventListener("click", toggleSidebar);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // 1. Seleccionar los elementos del DOM
    const mobileMenuContainer = document.getElementById(
        "mobile-menu-container"
    );
    const mobileMenuBackdrop = document.getElementById("mobile-menu-backdrop");
    const mobileMenuPanel = document.getElementById("mobile-menu-panel");
    const closeMobileMenuButton = document.getElementById("close-mobile-menu");
    const openMobileMenuButton = document.getElementById("open-mobile-menu");

    // 2. Función para abrir el menú
    function openMobileMenu() {
        mobileMenuContainer.classList.remove("hidden"); // Hace visible el contenedor
        // Forzar un "reflow" para que las transiciones funcionen correctamente
        mobileMenuContainer.offsetWidth; // Truco para asegurar que el navegador recalcule el diseño antes de añadir las clases de transición.

        // Añadir clases para la transición de apertura
        mobileMenuBackdrop.classList.remove("opacity-0");
        mobileMenuBackdrop.classList.add("opacity-100");

        mobileMenuPanel.classList.remove("-translate-x-full");
        mobileMenuPanel.classList.add("translate-x-0");

        // Para accesibilidad (ARIA)
        mobileMenuContainer.setAttribute("aria-modal", "true");
        mobileMenuContainer.setAttribute("role", "dialog");
    }

    // 3. Función para cerrar el menú
    function closeMobileMenu() {
        // Añadir clases para la transición de cierre
        mobileMenuBackdrop.classList.remove("opacity-100");
        mobileMenuBackdrop.classList.add("opacity-0");

        mobileMenuPanel.classList.remove("translate-x-0");
        mobileMenuPanel.classList.add("-translate-x-full");

        // Para accesibilidad (ARIA)
        mobileMenuContainer.setAttribute("aria-modal", "false");
        mobileMenuContainer.setAttribute("role", ""); // O quitar el atributo

        // Esperar a que la transición termine antes de ocultar el contenedor
        // La transición de tu panel es 'duration-300' (300ms)
        setTimeout(() => {
            mobileMenuContainer.classList.add("hidden");
        }, 300); // Coincide con la duración de la transición CSS
    }

    // 4. Asignar los Event Listeners
    if (openMobileMenuButton) {
        openMobileMenuButton.addEventListener("click", openMobileMenu);
    }

    if (closeMobileMenuButton) {
        closeMobileMenuButton.addEventListener("click", closeMobileMenu);
    }

    // Opcional: Cerrar el menú haciendo clic en el telón de fondo
    if (mobileMenuBackdrop) {
        mobileMenuBackdrop.addEventListener("click", closeMobileMenu);
    }

    // Para cambiar los inputs de fotos
    $('input[type="file"].hidden').on("change", function () {
        const file = this.files[0];
        let element = $(this).parents()[0];
        let icono = $(element).find(".preview");

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                $(icono).attr("src", e.target.result);
            };

            // Leemos el archivo como una URL de datos (Base64).
            reader.readAsDataURL(file);
        }
    });
});
