import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import purge from '@sakadda/vite-plugin-laravel-purgecss'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //'resources/css/app.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        [
            //purge(),
        ]
    ],
});
