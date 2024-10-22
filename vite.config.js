import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // 'resources/sass/app.scss',
                'resources/js/pages/browsing-history/index.js',
                'resources/js/pages/favorites/index.js',
                'resources/js/pages/posts/event-near-you.js',
                'resources/js/pages/posts/index.js',
                'resources/js/pages/posts/show.js',
                'resources/js/pages/profiles/show.js',
            ],
            refresh: true,
        }),
    ],
});
