import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import purge from '@erbelion/vite-plugin-laravel-purgecss'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        purge({
            templates: ['blade'],
            paths: ['resources/views/**/**/*.blade.php'],
            safelist: {
                    deep: [
                    // Bootstrap
                    /data-bs-.*/, // data attributes used by bootstrap for js plugins
                    /bs-.*/, // classes used by bootstrap for JS components
                    /fade$/,
                    /show$/,
                    /modal-backdrop$/,
                    /modal-open$/,
                    /collapse$/,
                    /collapsing$/,
                    /tooltip.*/,
                    /popover.*/,
                    /aria-.*/,
                    /role$/,
                    /style$/,
                    /class$/,
                    /ul$/,
                    /li$/,
                    /page-.*/,
                    /rel$/,
                    /d-.*/,
                    /align-.*/,
                    /justify-.*/,
                    /flex-.*/,
                    /page-.*/,
                    /pagination/,
                    /datepicker/,
                    /flatpickr-.*/,

                ],
            }
        }),
    ],
});
