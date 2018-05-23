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

mix.js('resources/assets/js/bootstrap.js', 'public/js/bootstrap/app.js')
    .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap/')
    .copy('node_modules/popper.js/dist/popper.min.js', 'public/js/popper/')
    .copy('node_modules/axios/dist/axios.min.js', 'public/js/axios')
    .copy('node_modules/lodash/lodash.min.js', 'public/js/lodash')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery')
    .copy('node_modules/vue/dist/vue.min.js', 'public/js/vue')
    .copy('node_modules/jquery-validation/dist/jquery.validate.min.js', 'public/js/jquery-validation/')
    .copy('node_modules/air-datepicker/dist/css/datepicker.min.css', 'public/css/air-datepicker/')
    .copy('node_modules/air-datepicker/dist/js/datepicker.min.js', 'public/js/air-datepicker/')
    .copy('node_modules/air-datepicker/dist/js/i18n/datepicker.en.js', 'public/js/air-datepicker/')
    .sass('resources/assets/sass/app.scss', 'public/css/bootstrap/');
