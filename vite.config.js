import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/desktop/main-elements.css',
                'resources/css/mobile/mobile-main-elements.css',
                'resources/css/desktop/without-config.css',
                'resources/css/desktop/register.css',
                'resources/css/desktop/profile.css',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
