'use strict';

const elixir = require('laravel-elixir');

require('laravel-elixir-bower');

elixir.config.sourcemaps = false;

 
elixir((mix) => {

    /***********************/
    /* Process Stylesheets */
    /***********************/	
	// For minification use gulp --production
	// Gentelella
	mix
	.sass(['./vendor/bower_components/gentelella/src/scss/custom.scss'], 'public/css/cats.min.css');
	
	 // Vendors css
	mix.styles(['./vendor/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css',
		'./vendor/bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css'
	], 'public/css/vendors.min.css');
    
    /*******************/
    /* Process Scripts */
    /*******************/	
	
	/************************/
    /* Copy HTML Components */
    /************************/	
	mix.copy('angular/components/*.html', 'public/components');
	
	/************************/
    /*    Copy Images       */
    /************************/	
	mix.copy('angular/images/**', 'public/images');
	
});
