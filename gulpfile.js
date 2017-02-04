'use strict';

const elixir = require('laravel-elixir');

require('laravel-elixir-replace');

elixir.config.sourcemaps = false;

elixir((mix) => {

    /***********************/
    /* Process Stylesheets */
    /***********************/
    // For minification use gulp --production
    // Gentelella
    mix.sass(['./vendor/bower_components/gentelella/src/scss/custom.scss'],
                'public/css/cats.min.css');
    // Vendors css
    mix.styles(['./vendor/bower_components/font-awesome/css/font-awesome.css',
                './vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
                './vendor/bower_components/iCheck/skins/flat/green.css',
                './vendor/bower_components/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
                './vendor/bower_components/gentelella/build/css/custom.min.css' // Gentelella
	], 'public/css/vendors.min.css');
    // Vendors css
    mix.styles(['./vendor/bower_components/font-awesome/css/font-awesome.css',
                './vendor/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css'
    ], 'public/css/vendors.login.min.css');

    //mix.version('public/css/vendors.min.css');


    /*******************/
    /* Process Scripts */
    /*******************/
    //CATS
	mix.scripts(['./public/js/custom.js',
              './public/js/app.js',
              './public/js/routes.js',
              './public/js/ui.views.js',
              './public/js/services/**/*.js',
              './public/js/controllers/**/*.js'],
              'public/js/cats.app.js')
    //Vendors
	.scripts([
            //JQuery
            './vendor/bower_components/jquery/dist/jquery.min.js',
            //Bootstrap
            './vendor/bower_components/bootstrap/dist/js/bootstrap.min.js',
            //Other...
            './vendor/bower_components/Chart.js/dist/Chart.min.js',
            './vendor/bower_components/bootstrap-progressbar/bootstrap-progressbar.min.js',
            './vendor/bower_components/iCheck/icheck.min.js',

            './vendor/bower_components/Flot/jquery.flot.js',
            './vendor/bower_components/Flot/jquery.flot.pie.js',
            './vendor/bower_components/Flot/jquery.flot.time.js',
            './vendor/bower_components/Flot/jquery.flot.stack.js',
            './vendor/bower_components/Flot/jquery.flot.resize.js',
            './vendor/bower_components/flot.orderbars/js/jquery.flot.orderBars.js',
            './vendor/bower_components/flot-spline/js/jquery.flot.spline.min.js',
            './vendor/bower_components/flot.curvedlines/curvedLines.js',

            './vendor/bower_components/gentelella/production/js/datepicker/daterangepicker.js',
            './vendor/bower_components/gentelella/production/js/moment/moment.min.js'],
            'public/js/vendors/vendors.all.min.js')
        //Angular
	.scripts(['./vendor/bower_components/angular/angular.min.js',
			  './vendor/bower_components/angular-ui-router/release/angular-ui-router.min.js'],
			  'public/js/vendors/angular.all.min.js');


    /*******************/
    /* Copy Resources  */
    /*******************/
    mix.copy([
        './vendor/bower_components/font-awesome/fonts/fontawesome-webfont.woff',
        './vendor/bower_components/font-awesome/fonts/fontawesome-webfont.woff2',
        './vendor/bower_components/font-awesome/fonts/fontawesome-webfont.ttf'
        ], 'public/css/fonts');

    /*******************/
    /* Replace         */
    /*******************/    
    mix.replace('public/css/vendors.min.css', [['../fonts/','fonts/']]);
    mix.replace('public/css/vendors.login.min.css', [['../fonts/','fonts/']]);


});
