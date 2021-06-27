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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.styles([
    'resources/front/select2/select2/css/select2.css',
    'resources/front/select2/select2-bootstrap4-theme/select2-bootstrap4.css'
], 'public/assets/css/select2.css')

mix.scripts([
    'resources/front/jquery/jquery.min.js',
    'resources/front/select2/select2/js/select2.full.js'
], 'public/assets/js/scripts.js')

