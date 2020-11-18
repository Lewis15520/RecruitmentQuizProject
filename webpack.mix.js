const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/common/app.scss', 'public/css/common.css')
    .sass('resources/sass/guest/app.scss', 'public/css/guest.css')
    .sass('resources/sass/auth/app.scss', 'public/css/auth.css');
