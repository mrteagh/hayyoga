import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/stylecadastro.css',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/styleyoga.css',
                'resources/css/styleMain.css'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
