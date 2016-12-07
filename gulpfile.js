const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(mix => {
    mix.sass(['app.scss', 'admin.scss'])
       .webpack('app.js');

    mix.copy(
        'node_modules/materialize-css/dist/css/materialize.min.css',
        'public/css/materialize.css'
    );
    mix.copy(
        'node_modules/materialize-css/dist/js/materialize.min.js',
        'public/js/materialize.js'
    );

    mix.copy(
        'node_modules/jquery/dist/jquery.js',
        'public/js/jquery.js'
    );

    mix.copy(
        'node_modules/mdi',
        'public/mdi'
    );

});
