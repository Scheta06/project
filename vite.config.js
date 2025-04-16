import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/duplicate-elements.css',
                'resources/css/desktop/header-and-footer.css',
                'resources/css/desktop/login.css',
                'resources/css/desktop/without-config.css',
                'resources/css/desktop/profile.css',
                'resources/css/mobile/mobile-header-and-footer.css',
                'resources/css/mobile/mobile-login.css',
                'resources/css/mobile/mobile-without-config.css',
                'resources/css/mobile/mobile-profile.css',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
