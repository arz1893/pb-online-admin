let mix = require('laravel-mix');

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

mix.copy('node_modules/materialize-css/dist/js/materialize.min.js', 'public/js/materialize/')
    .copy('node_modules/axios/dist/axios.min.js', 'public/js/axios')
    .copy('node_modules/lodash/lodash.min.js', 'public/js/lodash')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery')
    .copy('node_modules/vue/dist/vue.min.js', 'public/js/vue')
    .copy('node_modules/jquery-validation/dist/jquery.validate.min.js', 'public/js/jquery-validation/')
    .sass('resources/assets/sass/app.scss', 'public/css/materialize/');
