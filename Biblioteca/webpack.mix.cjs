const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .browserSync({
        proxy: '192.168.72.65:8000',
        port: 3000
    });
