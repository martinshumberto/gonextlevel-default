@extends('client.layouts.default')


@section('content')

<div class="content-w">

	<ul class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{!!route('client-dashboard')!!}">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="{!!route('client-info')!!}">Meus Dados</a>
		</li>
		<li class="breadcrumb-item">
			<span>Informações Principais</span>
		</li>
	</ul>
	<div class="content-i">
		
		<div class="content-box">
			<div class="row">
				<div class="col-sm-12">

					@if($errors->any())
					<div class="alert alert-{{$errors->first('type')}}" role="alert">{{$errors->first('msg')}}</div>
					@endif

					<div class="element-wrapper">
						<div class="element-box">
							<form id="formValidate" method="post" action="{!!route('client-profile-update')!!}">
								@csrf
								<div class="element-info">
									<div class="element-info-with-icon">
										<div class="element-info-icon">
											<div class="os-icon os-icon-wallet-loaded"></div>
										</div>
										<div class="element-info-text">
											<h5 class="element-inner-header">
												Informações pessoais da sua conta.
											</h5>
											<div class="element-inner-desc">
												Suas informações serão gravadas e apenas você terá acessos.
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for=""> Nome Completo</label>
									<input name="name" class="form-control" data-error="Informe seu Nome" placeholder="Entre com seu Nome" required="required" type="text" value="{!!$client->name!!}">
									<div class="help-block form-text with-errors form-control-feedback"></div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for=""> CPF</label>
											<input name="cpf" class="form-control MaskCpf" data-error="Informe seu CPF" placeholder="Entre com seu CPF" required="required" type="text" value="{!!$client->cpf!!}">
											<div class="help-block form-text with-errors form-control-feedback"></div>
										</div>										
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for=""> E-mail</label><input class="form-control" data-error="Por favor coloque um email" placeholder="Informe seu email" required="required" value="{!!$client->email!!}" name="email" >
											<div class="help-block form-text with-errors form-control-feedback"></div>
										</div>											
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for=""> Data de Aniversário</label><input class="MaskDate form-control" placeholder="Date of birth" type="text" value="{!!$client->birthdate!!}" name="birthdate">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="">Telefone</label>
											<div class="input-group">													
												<input required="required" data-error="Informe um Telefone Valido" class="form-control MaskPhone" placeholder="65 9 9999 9999" type="text" name="phone" value="{!!$client->phone!!}">
											</div>
										</div>
									</div>
								</div>							
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<label for=""> Selecione o Estado</label>
											<select name="states_id" id="state_select"  class="form-control">
												<option selected="selected">--SELECIONE--</option>
												@foreach($states as $value)								
												<option value="{!!$value->states_id!!}" @if($client->states_id == $value->states_id) selected="selected" @endif >
													{!!$value->name!!}
												</option>
												@endforeach
											</select>
										</div>	
									</div>
									<div class="col-sm-4">
										<div id="select-cities" class="form-group">
											<label for=""> Selecione a Cidade</label>
											<select name="cities_id" id="cities_select"  class="form-control" >
												<option selected="selected">--CIDADES--</option>
											</select>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label for=""> Bairro</label>
											<input name="district" class="form-control " data-error="Informe seu Bairro" placeholder="Entre com seu Bairro" required="required" type="text" value="{!!$client->district!!}">
											<div class="help-block form-text with-errors form-control-feedback"></div>
										</div>	
									</div>
								</div>			
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for=""> Endereço</label>
											<input name="address" class="form-control" data-error="Informe seu endereço" placeholder="Entre com seu Endereço" required="required" type="text" value="{!!$client->address!!}">
											<div class="help-block form-text with-errors form-control-feedback"></div>
										</div>	
									</div>
									<div class="col-sm-1">
										<div class="form-group">
											<label for=""> Numero</label>
											<input name="number" class="form-control" data-error="Numero da Casa" placeholder="Numero da Casa" required="required" type="text" value="{!!$client->number!!}">
											<div class="help-block form-text with-errors form-control-feedback"></div>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group">
											<label for=""> CEP</label>
											<input name="zipcode" class="form-control MaskZipcode" data-error="Informe seu CEP" placeholder="Entre com seu CEP" required="required" type="text" value="{!!$client->zipcode!!}">
											<div class="help-block form-text with-errors form-control-feedback"></div>
										</div>
									</div>
								</div>

								
								

								<fieldset class="form-group">
									<legend><span>Informações de Acesso</span></legend>
									<div class="form-group">
										<label for="">Login de Acesso</label>
										<input class="form-control" data-error="Por favor, insira um Login" placeholder="Login de Usuário" required="required" type="text" value="{!!$client->login!!}" name="login">
										<div class="help-block form-text with-errors form-control-feedback">

										</div>
									</div>
								</fieldset>
								@if($client->status == "0")
								<div class="form-check">
									<label class="form-check-label"><input name="termofconditions" data-error="Digite uma senha para Alterar" class="form-check-input" type="checkbox" required="required"><a href="#"> Eu concordo com os termos e condições</a></label>
									<input type="hidden" name="complet_info" value="1">
								</div>
								@endif
								<div class="form-buttons-w">
									<button class="btn btn-primary" type="submit"> Salvar Informações</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection