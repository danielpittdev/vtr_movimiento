import { defineConfig } from "vite"
import laravel from "laravel-vite-plugin"
import tailwindcss from "@tailwindcss/vite"
import fs from "fs"

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/socket.js",
                "resources/js/form.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    define: {
        global: 'globalThis',
    },
    server: {
        host: "192.168.1.24",
        port: 5190,
        strictPort: true,
        hmr: {
            host: "192.168.1.24",
            protocol: "ws",
        },
    },
})