import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/final.css',
                'resources/js/script.js',
                'resources/css/output.css',
                'resources/css/real.css',
            ],
            refresh: true,
        }),
    ],
});
