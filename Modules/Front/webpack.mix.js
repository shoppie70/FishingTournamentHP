const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js('Resources/assets/js/app.js', 'public/assets/front/js')
    .sass('Resources/assets/sass/app.scss', 'public/assets/front/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    })
    .browserSync({
        files: [
            'Resources/**/*',
            'App/**/*',
            'Config/**/*',
            'Routes/**/*',
        ],
        proxy: 'http://localhost',
    });
