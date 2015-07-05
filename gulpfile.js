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
    mix.copy('vendor/bower_components/jquery/dist/jquery.js', 'resources/assets/js/jquery.js');
    mix.copy('vendor/bower_components/materialize/dist/js/materialize.js', 'resources/assets/js/materialize.js');
    mix.copy('vendor/bower_components/moment/min/moment.min.js', 'resources/assets/js/moment.js');
    mix.copy('vendor/bower_components/fullcalendar/dist/fullcalendar.js', 'resources/assets/js/fullcalendar.js');

    mix.copy('vendor/bower_components/angularjs/angular.js', 'resources/assets/js/angular.js');
    mix.copy('vendor/bower_components/angular-materialize/src/angular-materialize.js', 'resources/assets/js/angular-materialize.js');
    mix.copy('vendor/bower_components/angular-morph/dist/angular-morph.js', 'resources/assets/js/angular-morph.js');

    mix.copy('vendor/bower_components/fullcalendar/dist/fullcalendar.css', 'resources/assets/sass/fullcalendar.scss');

});

elixir(function(mix) {
    mix.scripts(['jquery.js', 'materialize.js', 'moment.js', 'fullcalendar.js', 'init.js'], 'public/js/app.js');
    mix.scripts([
        'angular.js',
        'angular-materialize.js',
        'angular-morph.js',
        'angularapp.js',
        'angularapp/indexController.js',
        'angularapp/partials/navController.js'

    ], 'public/js/angular.js');
});

elixir(function(mix) {
    mix.sass('app.scss');
});