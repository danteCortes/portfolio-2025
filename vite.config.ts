import vue from '@vitejs/plugin-vue';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { defineConfig, loadEnv } from 'vite';

export default defineConfig(async ({mode}) => {
    const env = loadEnv(mode, process.cwd(), '');
    return {
        server: {
            host: env.VITE_HOST || 'localhost',
            port: parseInt(env.VITE_PORT) || 5173,
            strictPort: true,
            hmr: {
                host: env.VITE_HOST || 'localhost'
            }
        },
        plugins: [
            laravel({
                input: ['resources/js/app.ts'],
                ssr: 'resources/js/ssr.ts',
                refresh: true,
            }),
            tailwindcss(),
            vue({
                template: {
                    transformAssetUrls: {
                        base: null,
                        includeAbsolute: false,
                    },
                },
            }),
        ],
    }
});
