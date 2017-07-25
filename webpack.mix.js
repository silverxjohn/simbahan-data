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
   .js('resources/assets/js/modules/churches/index.js', 'public/js/church_index.js')
   .js('resources/assets/js/modules/churches/create.js', 'public/js/church_create.js')
   .js('resources/assets/js/modules/churches/announcement.js', 'public/js/church_announcement.js')
   .js('resources/assets/js/modules/churches/mass_schedule.js', 'public/js/church_mass_schedule.js')
   .js('resources/assets/js/modules/churches/confession_schedule.js', 'public/js/church_confession_schedule.js')
   .js('resources/assets/js/modules/organizations/announcement.js', 'public/js/organization_announcement.js')
   .js('resources/assets/js/modules/organizations/mass_schedule.js', 'public/js/organization_mass_schedule.js')
   .js('resources/assets/js/modules/organizations/worship_schedule.js', 'public/js/organization_worship_schedule.js')
   .js('resources/assets/js/modules/organizations/bible_schedule.js', 'public/js/organization_bible_schedule.js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .less('resources/assets/less/app.less', 'public/css/admin.css')
   .styles([
        'node_modules/animate.css/animate.css',
        'node_modules/sweetalert2/dist/sweetalert2.css',
        'node_modules/admin-lte/plugins/iCheck/flat/green.css'
    ], 'public/css/plugin.css')
    .scripts([
        'node_modules/admin-lte/dist/js/app.js',
        'node_modules/admin-lte/plugins/iCheck/icheck.js',
    ], 'public/js/plugins.js');
