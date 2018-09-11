@extends('guest.layouts.default')


@section('content')

<div class="all-wrapper menu-side with-pattern">
	<div class="auth-box-w">
		<div class="logo-w">
			<a href="{!!route('guest-login')!!}"><img alt="" src="{!!url("/")!!}/public/img/logo-big.png"></a>
		</div>
		<h4 class="auth-header">
			Recuperar Senha
		</h4>
		<form action="{!!route('guest-revoverpw')!!}" method="post">
			@csrf
			<div style="background: #8fd4e9; border-color: #68c5e1; color: white;" class="alert alert-{{$errors->first('type')}}" role="alert">
				Digite seu e-mail e instruções serão enviadas para você!
			</div>
			<div class="form-group">
				<label for="">Seu E-mail</label><input class="form-control" placeholder="E-mail" type="text" required="required" name="user-email">
				<div class="pre-icon os-icon os-icon-user-male-circle"></div>
			</div>	

			@if($errors->any())
			<div style="padding-top: 6px;padding-bottom: 6px;padding-left: 7px;padding-right: 7px;background: #dc0000;color:  white;border: solid 1px #f51111;border-radius:  5px; margin-bottom: 10px;" class="alert alert-{{$errors->first('type')}}" role="alert">{{$errors->first('msg')}}</div>
			@endif
			<div class="buttons-w">
				<button class="btn btn-primary">Recuperar</button>
			</div>
			<div class="form-group mt-10">
				<a href="{!!route('guest-login')!!}">Voltar ao Login</a>
			</div>
		</form>
	</div>
</div>

@endsection