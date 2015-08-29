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
    mix.copy('vendor/bower_components/select2/dist/js/select2.full.js', 'resources/assets/js/select2.js');
    mix.copy('vendor/bower_components/fullcalendar/dist/lang/es.js', 'resources/assets/js/fullcalendar-es.js');


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
        'moment.js',
        'es.js',
        'materialize.js',
        'init.js'
        ], 'public/js/app.js');

    mix.scripts([
        'jquery.js',
        'moment.js',
        'fullcalendar.js',
        'fullcalendar-es.js',
        'materialize.js',
        'jquery-ui.min.js',
        'jquery-ui-timepicker-addon.js',
        'jquery-ui-sliderAccess.js',
        'init.js',
    ], 'public/js/calendar.js');

    /** vue scripts **/
    mix.scripts(['vue.js', 'vue-resource.js', 'vue-permisos.js'], 'public/js/vue-permisos.js');
    mix.scripts(['vue.js', 'vue-resource.js', 'vue-roles.js'], 'public/js/vue-roles.js');
    mix.scripts(['vue.js', 'vue-resource.js', 'vue-users.js'], 'public/js/vue-users.js');
    mix.scripts(['vue.js', 'vue-resource.js', 'vue-clientes.js'], 'public/js/vue-clientes.js');
    mix.scripts(['vue.js', 'vue-resource.js', 'vue-contactos-clientes.js'], 'public/js/vue-contactos-clientes.js');
    mix.scripts(['vue.js', 'vue-resource.js', 'vue-contactos.js'], 'public/js/vue-contactos.js');
    mix.scripts(['vue.js', 'vue-resource.js', 'vue-casos.js'], 'public/js/vue-casos.js');
    mix.scripts(['vue.js', 'vue-resource.js', 'vue-casos-show.js'], 'public/js/vue-casos-show.js');
    mix.scripts(['vue.js', 'vue-resource.js', 'calendar/calendar-self.js'], 'public/js/vue-calendar.js');
    mix.scripts(['select2.js', 'casos-script.js', 'vue.js', 'vue-resource.js', 'vue-casos-create.js'], 'public/js/vue-casos-create.js');
    mix.scripts(['jquery.cleditor.min.js'], 'public/js/jquery.cleditor.min.js');

});

elixir(function(mix) {
    mix.sass('app.scss');
});