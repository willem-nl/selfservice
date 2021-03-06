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
    mix.less(['selfservice.less', 'webstart.less' ])
        .copy('bower_components/fontawesome/css/font-awesome.min.css',
             'public/css/font-awesome.css')
        .copy('bower_components/fontawesome/fonts',
              'public/fonts')
        .copy('bower_components/Metro-UI-CSS/less',
            'resources/assets/less/metro-ui-css')
        .copy('bower_components/Metro-UI-CSS/min/metro.min.js',
            'public/js/metro.min.js')
        .copy('bower_components/angular-bootstrap/ui-bootstrap.min.js',
            'public/js/ui-bootstrap.min.js')
        .copy('bower_components/bootstrap/dist/js/bootstrap.min.js',
            'public/js/bootstrap.min.js')
        .copy('bower_components/jquery/dist',
              'public/js')
        .copy('bower_components/metisMenu/dist/metisMenu.min.js',
              'public/js/metismenu.js')
        .copy('bower_components/pace/pace.min.js',
              'public/js/pace.js')
        .copy('bower_components/angular/angular.js',
            'public/js/angular.js')
        .copy('bower_components/angular-tree-control/angular-tree-control.js',
            'public/js/angular-tree-control.js')
        .copy('bower_components/angular-utils-pagination/dirPagination.js',
            'public/js/angular-utils-pagination.js')
        .copy('bower_components/angular-utils-pagination/dirPagination.tpl.html',
            'public/app/resources/paginationTemplate.tpl.html')
        .copy('bower_components/angular-modal-service/dst/angular-modal-service.js',
            'public/js/angular-modal-service.js')
        .copy('bower_components/angular-animate/angular-animate.js',
            'public/js/angular-animate.js')
        .copy('bower_components/animate-css/animate.css',
            'public/css/animate.css')
        .copy('bower_components/angular-selection-model/dist/selection-model.min.js',
            'public/js/angular-selection-model.min.js')
        .copy('bower_components/angular-editable-text/dist/angular-editable-text.min.js',
            'public/js/angular-editable-text.min.js');
});
