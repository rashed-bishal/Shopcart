var mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */



    mix.js([


        'resources/assets/js/jquery.bxslider.min.js',
        'resources/assets/js/jquery.js',
        'resources/assets/js/owl.carousel.min.js',
        'resources/assets/js/bootstrap.min.js',
        'resources/assets/js/in-line.js',

    ], './public/js/all.js')

    .styles([
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/font-awesome.min.css',
        'resources/assets/css/jquery.bxslider.css',
        'resources/assets/css/owl.carousel.min.css',
        'resources/assets/css/owl.theme.default.min.css',
        'resources/assets/css/style.css'

    ], './public/css/all.css');


