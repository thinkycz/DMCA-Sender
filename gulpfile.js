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
    mix.sass('app.scss');
    mix.coffee('app.coffee');

    mix.styles(['bootstrap.css'], 'public/css/bootstrap.css', 'vendor/twitter/bootstrap/dist/css/');
    mix.scripts(['bootstrap.js'], 'public/js/bootstrap.js', 'vendor/twitter/bootstrap/dist/js/');

    mix.styles(['app.css', 'bootstrap.css'], null, 'public/css/');
    mix.scripts(['app.js', 'bootstrap.js'], null, 'public/js');

    mix.version(['css/all.css', 'js/all.js']);
});