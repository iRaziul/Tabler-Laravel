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
    /*.postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])*/
    // .js('resources/js/tabler.js', 'public/js')
    // .sass('resources/sass/tabler.scss', 'public/css')
    .disableNotifications()
    .browserSync({
        notify: false,
        ghostMode: false,

        proxy: 'http://localhost:8000',
        host: '192.168.0.113',
    });
