import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    // ESSENCIAL: Define a base para caminhos relativos, 
    // o que força o modo de Produção correto e corrige o carregamento de assets.
    base: './', 
    
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    
    // Opcional, mas útil para o Heroku:
    server: {
        // Garante que o HMR funciona localmente, se necessário
        hmr: {
            host: 'localhost',
        },
    },
});