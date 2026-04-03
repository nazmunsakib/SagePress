import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { wordpressPlugin } from '@roots/vite-plugin';

export default defineConfig({
  plugins: [
    tailwindcss(),
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
    wordpressPlugin(),
  ],
  resolve: {
    alias: {
      '@': '/resources/js',
    },
  },
});
