var elixir = require('laravel-elixir');

elixir(function(mix) {

	/*
		CSS & LESS
		*/
		mix.less([
			'library.less',
			]);
		mix.sass([
			'application.scss',
			]);

	/*
		JavaScript & jQuery
		*/
		mix.scripts([
			'libs/sweetalert2.all.min.js',
			'libs/jquery.mask.js',
			'components/Auth-pipeline.js',
			'components/Auth-profile.js',
			'components/Auth-prospect.js',
			'components/Auth-mask.js',
			'components/Auth-invoice.js',
			]);

		mix.scripts([
			'libs/sweetalert2.all.min.js',
			'libs/jquery.mask.js',
			'components/Auth-mask.js',
			], 'public/js/guest.js');

	});