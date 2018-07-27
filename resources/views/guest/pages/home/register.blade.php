@extends('guest.layouts.default')


@section('content')

<div class="all-wrapper menu-side with-pattern">
	<div class="auth-box-w wider">
		<div class="logo-w">
			<a href="http://localhost/gonextlevel-web-laravel"><img alt="" src="img/logo-big.png"></a>
		</div>
		<h4 class="auth-header">{{ __('messages.create-header') }}</h4>
		<form action="#">
			<div class="form-group">
				<label for=""> {{ __('messages.create-name') }}</label>
				<input class="form-control" placeholder="Enter name" type="text">
				<div class="pre-icon os-icon os-icon-user-male-circle2"></div>
			</div>
			<div class="form-group">
				<label for=""> {{ __('messages.create-email') }}</label>
				<input class="form-control" placeholder="Enter e-mail" type="email">
				<div class="pre-icon os-icon os-icon-email-2-at2"></div>
			</div>
			<div class="form-group">
				<label for=""> {{ __('messages.create-idhinode') }}</label>
				<input class="form-control" placeholder="Enter ID" type="text">
				<div class="pre-icon os-icon os-icon-ui-02"></div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for=""> {{ __('messages.create-password') }}</label>
						<input class="form-control" placeholder="Password" type="password">
						<div class="pre-icon os-icon os-icon-fingerprint"></div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for=""> {{ __('messages.create-repassword') }}</label>
						<input class="form-control" placeholder="Password" type="password">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for=""> {{ __('messages.create-phone') }}</label>
				<input class="form-control" placeholder="Enter phone" type="text">
				<div class="pre-icon icon-feather-phone"></div>
			</div>
			<div class="buttons-w">
				<button type="submit"  class="btn btn-primary">{{ __('messages.create-submit') }}</button>
			</div>
		</form>
	</div>
</div>

@endsection