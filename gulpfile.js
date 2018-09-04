var elixir = require('laravel-elixir');

elixir(function(mix) {

	/*
		CSS & LESS
		*/
		mix.less([
			'library.less',
			], 'public/css/library.css');
		mix.sass([
			'application.scss',
			]);


		/*	~~~~~~~~ JavaScript & jQuery ~~~~~~~~~~~~ */


	    //JAVASCRIPT  LIBS
	    mix.scripts([
	    	'libs/sweetalert2.all.min.js',
	    	'libs/jquery.mask.js',
	    	], 'public/js/app-libs.js');


	    //JAVASCRIPT  COMPONENTES

	    // DASHBOARD
	    mix.scripts([
	    	'components/Auth-default.js',
	    	], 'public/js/default.js');

	    // DASHBOARD
	    mix.scripts([
	    	'components/Auth-prospect.js',
	    	'components/Auth-mask.js',
	    	], 'public/js/client-dashboard.js');

	    // PROSPECT 
	    mix.scripts([
	    	'components/Auth-prospect.js',
	    	'components/Auth-mask.js',
	    	], 'public/js/client-prospect.js');

	    // PROSPECT PIPELINE 
	    mix.scripts([
	    	'components/Auth-prospect.js',
	    	'components/Auth-mask.js',
	    	'components/Auth-pipeline.js',
	    	], 'public/js/client-prospect-pipeline.js');

	    // PROSPECT VIEW 
	    mix.scripts([
	    	'components/Auth-prospect.js',
	    	'components/Auth-mask.js',
	    	], 'public/js/client-prospect-view.js');

	    // CREATE INOVICE 
	    mix.scripts([
	    	'components/Auth-mask.js',
	    	'components/Auth-invoice.js',
	    	'components/Auth-moip.js',
	    	'components/Auth-prospect.js',
	    	], 'public/js/client-create-invoice.js');

	    // CLIENT PROFILE 
	    mix.scripts([
	    	'components/Auth-prospect.js',
	    	'components/Auth-mask.js',
	    	'components/Auth-profile.js',
	    	], 'public/js/client-create-profile.js');


	    mix.scripts([
	    	'libs/sweetalert2.all.min.js',
	    	'libs/jquery.mask.js',
	    	'components/Auth-mask.js',
	    	], 'public/js/guest.js');

	});