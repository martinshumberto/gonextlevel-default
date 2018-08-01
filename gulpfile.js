var elixir = require('laravel-elixir');

elixir(function(mix) {

	/*
		CSS & LESS
		*/
		mix.less([
			'library.less',
			]);

	/*
		JavaScript & jQuery
		*/
		mix.scripts([
			'libs/sweetalert2.all.min.js',
			'components/Auth-pirpeline.js',
			'components/Auth-profile.js',
			]);

	});