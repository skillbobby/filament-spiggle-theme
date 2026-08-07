import { defineConfig } from 'vite'

export default defineConfig({
    build: {
        outDir: 'resources/dist',
        rollupOptions: {
            input: 'resources/css/theme.css',
            output: {
                assetFileNames: 'theme.[ext]',
            }
        }
    }
})