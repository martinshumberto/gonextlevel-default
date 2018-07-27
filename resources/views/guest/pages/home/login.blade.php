@extends('guest.layouts.default')


@section('content')

<div class="all-wrapper menu-side with-pattern">
	<div class="auth-box-w">
		<div class="logo-w">
			<a href="{!!route('guest-login')!!}"><img alt="" src="{!!url("/")!!}/public/img/logo-big.png"></a>
		</div>
		<h4 class="auth-header">
			{{ __('messages.welcome-login') }}
		</h4>
		<form action="">
			@csrf
			<div class="form-group">
				<label for="">{{ __('messages.login-login') }}</label><input class="form-control" placeholder="Enter your username" type="text">
				<div class="pre-icon os-icon os-icon-user-male-circle"></div>
			</div>
			<div class="form-group">
				<label for="">{{ __('messages.password-login') }}</label><input class="form-control" placeholder="Enter your password" type="password">
				<div class="pre-icon os-icon os-icon-fingerprint"></div>
			</div>
			@if($errors->any())
			<div style="padding-top: 6px;padding-bottom: 6px;padding-left: 7px;padding-right: 7px;background: #dc0000;color:  white;border: solid 1px #f51111;border-radius:  5px; margin-bottom: 10px;" class="alert alert-warning" role="alert">{{$errors->first()}}.</div>
			@endif
			<div class="buttons-w">
				<button class="btn btn-primary">{{ __('messages.enter-login') }}</button>
				<a href="#" class="btn btn-warning">{{ __('messages.register-login') }}</a>

			</div>
			<div class="form-group mt-10">
				<a href="">{{ __('messages.passwordreset-login') }}</a>
			</div>
		</form>
	</div>
</div>

@endsection