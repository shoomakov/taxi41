const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('resources/assets/js/offerta.js', 'public/js');

const cssdir = 'resources/assets/css';

// home
mix.styles(
  [
    `${cssdir}/font-awesome.min.css`,
    `${cssdir}/ui.css`,
    `${cssdir}/bootstrap.custom.css`,
    `${cssdir}/home.b.main.css`,
    `${cssdir}/custom.all.css`,
    `${cssdir}/modal.css`,
    `${cssdir}/markdown.css`,
    `node_modules/tippy.js/dist/tippy.css`,
    `${cssdir}/tooltips.css`
  ], 'public/css/all.css'
)

// contacts
mix.styles(
  [
    `${cssdir}/font-awesome.min.css`,
    `${cssdir}/ui.css`,
    `${cssdir}/bootstrap.custom.css`,
    `${cssdir}/home.b.main.css`,
    `${cssdir}/custom.all.css`,
    `${cssdir}/modal.css`,
    `${cssdir}/markdown.css`,
    `node_modules/tippy.js/dist/tippy.css`,
    `${cssdir}/tooltips.css`,
    `${cssdir}/contacts.css`
  ], 'public/css/contacts.css'
)

// driver
mix.styles(
  [
    `${cssdir}/font-awesome.min.css`,
    `${cssdir}/ui.css`,
    `${cssdir}/bootstrap.custom.css`,
    `${cssdir}/driver.b.main.css`,
    `${cssdir}/custom.all.css`,
    `${cssdir}/modal.css`,
    `${cssdir}/markdown.css`,
    `node_modules/tippy.js/dist/tippy.css`,
    `${cssdir}/tooltips.css`
  ], 'public/css/driver.css'
)

mix.scripts(
  [
    'node_modules/tippy.js/dist/tippy.min.js'
  ], 'public/js/plugins.js'
);

// offerta

// driver
// mix.styles(
//   [
//     `${cssdir}/font-awesome.min.css`,
//     `${cssdir}/ui.css`,
//     `${cssdir}/bootstrap.custom.css`,
//     `${cssdir}/custom.all.css`,
//   ], 'public/css/all.css'
// )
