const mix = require('laravel-mix');

mix.js('resources/js/script.js', 'public/js')
    .css('resources/css/index.css', 'public/css');
