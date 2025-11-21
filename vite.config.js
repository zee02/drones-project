import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    base: '/',
    
    server: {
        hmr: process.env.LARAVEL_APP_ENV === 'production' ? false : {
            host: 'localhost',
            port: 5173,
        },
    },
});