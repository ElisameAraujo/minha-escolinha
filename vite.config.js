import { defineConfig } from 'vite';
import path from "path";
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app-dashboard.css', 
                'resources/css/app-web.css', 
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@bootstrap-icons": path.resolve(__dirname, "./node_modules/bootstrap-icons/"),
            "@bootstrap": path.resolve(__dirname, "./node_modules/bootstrap/dist/"),
            "@fonts": path.resolve(__dirname, "./resources/css/fonts/woff2/"),
        },
    },
});
