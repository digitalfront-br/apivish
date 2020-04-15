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

mix.copy(
    [
        'node_modules/uikit/dist/js/uikit.js',
        'node_modules/uikit/dist/js/uikit-icons.js',
        'node_modules/feather-icons/dist/feather.js'
    ],
    'public/assets/js'
);
mix.copyDirectory(
    'resources/img',
    'public/assets/img'
);
mix.react(
    'resources/js/app.js',
    'public/assets/js'
).sass(
    'resources/sass/app.scss',
    'public/assets/css'
);
