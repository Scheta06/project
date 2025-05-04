import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/duplicate-elements.css',
                'resources/css/mobile-duplicate-elements.css',
                'resources/css/desktop/header-and-footer.css',
                'resources/css/desktop/login.css',
                'resources/css/desktop/index.css',
                'resources/css/mobile/mobile-index.css',
                'resources/css/desktop/profile.css',
                'resources/css/desktop/catalog.css',
                'resources/css/mobile/mobile-header-and-footer.css',
                'resources/css/mobile/mobile-login.css',
                'resources/css/mobile/mobile-profile.css',
                'resources/css/mobile/mobile-catalog.css',
                'resources/css/desktop/all-producs.css',
                'resources/css/mobile/mobile-all-products.css',
                'resources/css/desktop/admin.css',
                'resources/css/desktop/new-product.css',
                'resources/css/desktop/card.css'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
