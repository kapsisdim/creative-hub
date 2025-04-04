import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/styles.css',
                'resources/css/carousel.css',
                'resources/css/project.css',
                'resources/css/studio.css',

                // 'resources/js/app.js',
                // 'resources/js/bootstrap.js',
                'resources/js/portfolio.js',
                'resources/js/script.js'
            ],
            refresh: true,
        }),
    ],
});
