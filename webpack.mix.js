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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/gallery/grid-gallery.min.js', 'public/js')
    .js('resources/js/admin.js', 'public/admin-template/js')
    .copy('node_modules/tinymce/themes/', 'public/admin-template/js/themes')
    .copy('node_modules/tinymce/skins/', 'public/admin-template/js/skins')
    .copy('node_modules/tinymce/icons/', 'public/admin-template/js/icons')
    .copy('node_modules/tinymce/plugins/', 'public/admin-template/js/plugins')
    .sass('resources/sass/admin.scss', 'public/admin-template/css')
    .css('resources/js/gallery/grid-gallery.min.css', 'public/css')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
