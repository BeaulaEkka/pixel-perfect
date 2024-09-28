import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
            buildDirectory: 'build',
        }),

    ], build: {
        assetsInlineLimit: 0,  // ensures assets aren’t inlined
    },
});
