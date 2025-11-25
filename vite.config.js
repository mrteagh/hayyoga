import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/stylecadastro.css',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/styleyoga.css',
                'resources/css/styleMain.css'],
=======
            input: ['resources/css/stylecadastro.css','resources/css/app.css', 'resources/js/app.js','resources/css/styleyoga.css'],
>>>>>>> 32254f0ae4fd7d527a782652cf2b0014fa1ad7d8
            refresh: true,
        }),
        tailwindcss(),
    ],
});
