@extends('guest.layouts.default')


@section('content')

<div class="all-wrapper menu-side with-pattern">
	<div class="auth-box-w wider">
		<div class="logo-w">
			<a href="http://localhost/gonextlevel-web-laravel"><img alt="" src="img/logo-big.png"></a>
		</div>
		<h4 class="auth-header">{{ __('messages.create-header') }}</h4>
		<form action="{!!route('guest-register-create')!!}" method="post">
			@csrf
			<div class="form-group">
				<label for=""> {{ __('messages.create-name') }}</label>
				<input class="form-control" placeholder="Enter name" type="text" name="name" required="required">
				<div class="pre-icon os-icon os-icon-user-male-circle2"></div>
			</div>
			<div class="form-group">
				<label for=""> {{ __('messages.create-email') }}</label>
				<input class="form-control" placeholder="Enter e-mail" type="email" name="email" required="required">
				<div class="pre-icon os-icon os-icon-email-2-at2"></div>
			</div>
			<div class="form-group">
				<label for=""> {{ __('messages.create-idhinode') }}</label>
				<input class="form-control" placeholder="Enter ID" type="text" name="hinode_id" required="required">
				<div class="pre-icon os-icon os-icon-ui-02"></div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for=""> {{ __('messages.create-password') }}</label>
						<input class="form-control" placeholder="Password" type="password" name="password" required="required">
						<div class="pre-icon os-icon os-icon-fingerprint"></div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for=""> {{ __('messages.create-repassword') }}</label>
						<input class="form-control" placeholder="Password" type="password" name="re-password" required="required">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for=""> {{ __('messages.create-phone') }}</label>
				<input class="form-control MaskPhone" placeholder="Enter phone" type="text" name="phone">
				<div class="pre-icon icon-feather-phone"></div>
			</div>
			@if($errors->any())
			<div style="padding-top: 6px;padding-bottom: 6px;padding-left: 7px;padding-right: 7px;background: #dc0000;color:  white;border: solid 1px #f51111;border-radius:  5px; margin-bottom: 10px;" class="alert alert-{{$errors->first('type')}}" role="alert">{{$errors->first('msg')}}</div>
			@endif
			<div class="buttons-w">
				<button type="submit"  class="btn btn-primary">{{ __('messages.create-submit') }}</button>
			</div>
		</form>
	</div>
</div>

@endsection