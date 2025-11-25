import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/stylecadastro.css','resources/css/app.css', 'resources/js/app.js'],
=======
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/styleyoga.css'],
>>>>>>> c5a47ff590c7198c960d6faae50194bff84c4262
            refresh: true,
        }),
        tailwindcss(),
    ],
});
