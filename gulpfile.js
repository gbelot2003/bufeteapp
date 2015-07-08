var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    /** JavaScript jquery dependensie **/
    mix.copy('vendor/bower_components/jquery/dist/jquery.js', 'resources/assets/js/jquery.js');
    mix.copy('vendor/bower_components/materialize/dist/js/materialize.js', 'resources/assets/js/materialize.js');
    mix.copy('vendor/bower_components/datatables/media/js/jquery.dataTables.js', 'resources/assets/js/dataTable.js');
    mix.copy('vendor/bower_components/moment/min/moment.min.js', 'resources/assets/js/moment.js');
    mix.copy('vendor/bower_components/fullcalendar/dist/fullcalendar.js', 'resources/assets/js/fullcalendar.js');

    /** vue dependensies **/
    mix.copy('vendor/bower_components/vue/dist/vue.js', 'resources/assets/js/vue.js');
    mix.copy('vendor/bower_components/vue-resource/dist/vue-resource.js', 'resources/assets/js/vue-resource.js');

    /** sass dependensies **/
    mix.copy('vendor/bower_components/fullcalendar/dist/fullcalendar.css', 'resources/assets/sass/fullcalendar.scss');
    mix.copy('vendor/bower_components/datatables/media/css/jquery.dataTables.css', 'resources/assets/sass/dataTable.scss');

});

elixir(function(mix) {
    /** jquery and libraries **/
    mix.scripts([
        'jquery.js',
        'materialize.js',
        'moment.js',
        'fullcalendar.js',
        'dataTable.js',
        'init.js'
        ], 'public/js/app.js');

    /** vue scripts **/
    mix.scripts(['vue.js', 'vue-resource.js', 'vue-permisos.js'], 'public/js/vue-permisos.js')
    mix.scripts(['vue.js', 'vue-resource.js', 'vue-roles.js'], 'public/js/vue-roles.js')

});

elixir(function(mix) {
    mix.sass('app.scss');
});