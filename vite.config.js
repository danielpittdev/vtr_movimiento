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
    server: {
        host: "127.0.0.1",
        port: 5180,
        strictPort: true,
        https: {
            key: fs.readFileSync("/Users/danielpitt16/rezerva.local+5-key.pem"),
            cert: fs.readFileSync("/Users/danielpitt16/rezerva.local+5.pem"),
        },
        hmr: {
            host: "vtr.local",
            protocol: "wss",
            port: 5180,
        },
    },
})