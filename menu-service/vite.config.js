import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.sass",
                "resources/css/layouts/footer.sass",
                "resources/css/components/faq-item.sass",
                "resources/css/components/menu-card.sass",
                "resources/js/app.js"
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                entryFileNames: `assets/[name].js`,
                assetFileNames: `assets/[name].[ext]`,
            }
        }
    }
});

