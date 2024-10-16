import { defineConfig } from 'vite';
import path from "path";
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app-dashboard.css', 
                'resources/css/app-web.css', 
                'resources/css/app.css', 
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@fontawesome-icons": path.resolve(__dirname, "./node_modules/@fortawesome/"),
            "@bootstrap": path.resolve(__dirname, "./node_modules/bootstrap/dist/"),
            "@fonts": path.resolve(__dirname, "./resources/css/fonts/"),
        },
    },
});
