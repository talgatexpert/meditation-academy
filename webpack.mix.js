const mix = require('laravel-mix');

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
let productionSourceMaps = true;
mix.styles('resources/assets/css/main.css', 'public/assets/css/main.min.css')
    .sourceMaps(productionSourceMaps, 'source-map')
    .version();
mix.scripts([
    'resources/assets/js/main.js',
], 'public/assets/js/main.min.js')
    .sourceMaps(productionSourceMaps, 'source-map')
    .version();
mix.scripts([
    'resources/assets/js/libs.js',
], 'public/assets/js/libs.min.js')
    .sourceMaps(productionSourceMaps, 'source-map')
    .version();
