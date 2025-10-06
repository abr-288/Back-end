import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/css/meanmenu.css',
                'resources/css/bootstrap-datetimepicker.min.css',
                'resources/css/components/loader.css',
                'resources/css/components/image-fallback.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        // Copier les fichiers statiques
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/img/**/*',
                    dest: 'build/img'
                },
                {
                    src: 'resources/plugins/**/*',
                    dest: 'build/plugins'
                },
                {
                    src: 'resources/fonts/**/*',
                    dest: 'build/fonts'
                },
                {
                    src: 'node_modules/bootstrap/dist/css/bootstrap.min.css',
                    dest: 'build/css'
                },
                {
                    src: 'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
                    dest: 'build/js'
                },
                {
                    src: 'node_modules/jquery/dist/jquery.min.js',
                    dest: 'build/js'
                },
                {
                    src: 'node_modules/owl.carousel/dist/**/*',
                    dest: 'build/plugins/owl.carousel'
                },
                {
                    src: 'node_modules/@fortawesome/fontawesome-free/css/all.min.css',
                    dest: 'build/css'
                },
                {
                    src: 'node_modules/@fortawesome/fontawesome-free/webfonts/*',
                    dest: 'build/webfonts'
                },
                {
                    src: 'node_modules/select2/dist/css/select2.min.css',
                    dest: 'build/css'
                },
                {
                    src: 'node_modules/select2/dist/js/select2.min.js',
                    dest: 'build/js'
                },
                {
                    src: 'node_modules/moment/min/moment.min.js',
                    dest: 'build/js'
                },
                {
                    src: 'node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css',
                    dest: 'build/css'
                },
                {
                    src: 'node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js',
                    dest: 'build/js'
                }
            ]
        })
    ],
    resolve: {
        alias: {
            '$': 'jquery',
            'jquery': 'jquery/src/jquery',
        }
    },
    optimizeDeps: {
        include: ['jquery'],
        exclude: ['jquery']
    }
});
