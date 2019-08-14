const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js');
mix.styles([
    'public/frontend/css/responsive.css',
    'public/frontend/css/style.css'
], 'public/frontend/css/app.css');

mix.minify('public/frontend/css/app.css');
mix.sass('resources/sass/app.scss', 'public/css');
