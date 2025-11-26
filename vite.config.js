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
<<<<<<< HEAD
=======
            
>>>>>>> 03502cf1699b95a79b3940cc6755d4debae76201
            refresh: true,
        }),
        tailwindcss(),
    ],
});
