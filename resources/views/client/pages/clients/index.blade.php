@extends('client.layouts.default')


@section('content')

<div class="content-w">
	
	<ul class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{!!route('client-dashboard')!!}">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="{!!route('client-profile')!!}">Meu Perfil</a>
		</li>
		<li class="breadcrumb-item">
			<span>Informações Gerais</span>
		</li>
	</ul>
	<div class="content-i">
		
		<div class="content-box">
			<div class="row">
				<div class="col-sm-4">
					<div class="user-profile compact">
						<div class="up-head-w" style="background-image:url({!!url("/")!!}/public/img/{!!$client->image!!})">
							<div class="up-social">
								<a id="open-search-file" href="#">
									<i class="os-icon os-icon-ui-65"></i>
								</a>
							</div>
							<div class="up-main-info">
								<h2 class="up-header">
									{!!$client->name!!}									
								</h2>
								<h6 class="up-sub-header">
									{!!$client->stage()!!}
								</h6>
							</div>
							<svg class="decor" width="842px" height="219px" viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF"><path class="decor-path" d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z"></path></g></svg>
						</div>
						<div class="up-controls">
							<div class="row">
								<div class="col-sm-12">
									<div class="value-pair">
										<div class="label">
											Status:
										</div>
										<div class="value badge badge-pill badge-{!!$client->statusColor()!!}">
											{!!$client->status()!!}
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="up-contents">
							<div class="m-b">
								<div class="row m-b">
									<div class="col-sm-6 b-r b-b">
										<div class="el-tablo centered padded-v">
											<div class="value">
												315
											</div>
											<div class="label">
												Prospecto Captados
											</div>
										</div>
									</div>
									<div class="col-sm-6 b-b">
										<div class="el-tablo centered padded-v">
											<div class="value">
												690
											</div>
											<div class="label">
												Cadastros
											</div>
										</div>
									</div>
								</div>
								<div class="padded">
									<div class="os-progress-bar blue">
										<div class="bar-labels">
											<div class="bar-label-left">
												<span>Diamante</span>
											</div>
											<div class="bar-label-right">
												<span class="info">72/5000</span>
											</div>
										</div>
										<div class="bar-level-1" style="width: 100%">
											<div class="bar-level-2" style="width: 80%">
												<div class="bar-level-3" style="width: 30%"></div>
											</div>
										</div>
									</div>
									<div class="os-progress-bar blue">
										<div class="bar-labels">
											<div class="bar-label-left">
												<span>Platina </span>											</div>
												<div class="bar-label-right">
													<span class="info">72/50000</span>
												</div>
											</div>
											<div class="bar-level-1" style="width: 100%">
												<div class="bar-level-2" style="width: 30%">
													<div class="bar-level-3" style="width: 10%"></div>
												</div>
											</div>
										</div>
										<div class="os-progress-bar blue">
											<div class="bar-labels">
												<div class="bar-label-left">
													<span>Super Ouro</span>
												</div>
												<div class="bar-label-right">
													<span class="info">72/500000</span>
												</div>
											</div>
											<div class="bar-level-1" style="width: 100%">
												<div class="bar-level-2" style="width: 80%">
													<div class="bar-level-3" style="width: 60%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="element-wrapper">
							<div class="element-box">
								<h6 class="element-header">
									Atividades Recentes
								</h6>
								<div class="timed-activities compact">
									<div class="timed-activity">
										<div class="ta-date">
											<span>22 de Jan, 2018</span>
										</div>
										<div class="ta-record-w">
											<div class="ta-record">
												<div class="ta-timestamp">
													<strong>11:55</strong> am
												</div>
												<div class="ta-activity">
													Adicionou novo Prospecto										
												</div>
											</div>
											<div class="ta-record">
												<div class="ta-timestamp">
													<strong>2:34</strong> pm
												</div>
												<div class="ta-activity">
													Editou um Prospecto	
												</div>
											</div>
											<div class="ta-record">
												<div class="ta-timestamp">
													<strong>7:12</strong> pm
												</div>
												<div class="ta-activity">
													Excluiu um Prospecto	
												</div>
											</div>
										</div>
									</div>
									<div class="timed-activity">
										<div class="ta-date">
											<span>20 de Jan, 2018</span>
										</div>
										<div class="ta-record-w">
											<div class="ta-record">
												<div class="ta-timestamp">
													<strong>9:32</strong> pm
												</div>
												<div class="ta-activity">
													Excluiu um Prospecto	
												</div>
											</div>
											<div class="ta-record">
												<div class="ta-timestamp">
													<strong>5:14</strong> pm
												</div>
												<div class="ta-activity">
													Adicionou novo Prospecto		
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-5">
						<div id="selet-file" class="element-wrapper" style="padding-bottom: 0; display: none;">
							<div style="display: none;" class="loading"><h1><i id="loading-animate" class="os-icon os-icon-grid-18"></i> Carregando ...</h1></div>
							<div class="element-box">
								<div class="element-info">
									<div class="element-info-with-icon">
										<div class="element-info-icon">
											<div class="os-icon os-icon-ui-65"></div>
										</div>
										<div class="element-info-text">
											<h5 class="element-inner-header">
												Atualizar foto de Perfil
											</h5>
										</div>
									</div>
								</div>
								<div class="form-group">
									<input id="sortpicture" type="file" name="sortpic" />
									<input id="key_input" type="hidden" name="key" value="{!!$client_id!!}">
									<button id="upload_select" style="margin-top: 12px;" class="btn btn-success"> Carregar</button>
									<div class="help-block form-text with-errors form-control-feedback"></div>
								</div>							
							</div>
						</div>
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
													Configurações de perfil
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
									<div class="form-group">
										<label for=""> E-mail</label><input class="form-control" data-error="Por favor coloque um email" placeholder="Informe seu email" required="required" value="{!!$client->email!!}" name="email" >
										<div class="help-block form-text with-errors form-control-feedback"></div>
									</div>								
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
									<div id="select-cities" class="form-group">
										<label for=""> Selecione a Cidade</label>
										<select name="cities_id" id="cities_select"  class="form-control" >
											<option selected="selected">--CIDADES--</option>
										</select>
									</div>	

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for=""> Data de Aniversário</label><input class=" form-control" placeholder="Date of birth" type="text" value="{!!$client->birthdate!!}" name="birthdate">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="">Telefone</label>
												<div class="input-group">
													<div class="input-group-addon">
														+55
													</div>
													<input required="required" data-error="Informe um Telefone Valido" class="form-control" placeholder="65 9 9999 9999" type="text" name="phone" value="{!!$client->phone!!}">
												</div>
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
									@if(Auth::user()->complet_info == "0")
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
					<div class="col-sm-3">
						<div class="content-panel">
							<div class="content-panel-close">
								<i class="os-icon os-icon-close"></i>
							</div>						
							<div class="element-wrapper">
								<h6 class="element-header">
									Membros da Sua Equipe
								</h6>
								<div class="element-box-tp">
									<div class="input-search-w">
										<input class="form-control rounded bright" placeholder="Search team members..." type="search">
									</div>
									<div class="users-list-w">
										<div class="user-w with-status status-green">
											<div class="user-avatar-w">
												<div class="user-avatar">
													<img alt="" src="img/avatar1.jpg">
												</div>
											</div>
											<div class="user-name">
												<h6 class="user-title">
													John Mayers
												</h6>
												<div class="user-role">
													Account Manager
												</div>
											</div>
											<div class="user-action">
												<div class="os-icon os-icon-email-forward"></div>
											</div>
										</div>
										<div class="user-w with-status status-green">
											<div class="user-avatar-w">
												<div class="user-avatar">
													<img alt="" src="img/avatar2.jpg">
												</div>
											</div>
											<div class="user-name">
												<h6 class="user-title">
													Ben Gossman
												</h6>
												<div class="user-role">
													Administrator
												</div>
											</div>
											<div class="user-action">
												<div class="os-icon os-icon-email-forward"></div>
											</div>
										</div>
										<div class="user-w with-status status-red">
											<div class="user-avatar-w">
												<div class="user-avatar">
													<img alt="" src="img/avatar3.jpg">
												</div>
											</div>
											<div class="user-name">
												<h6 class="user-title">
													Phil Nokorin
												</h6>
												<div class="user-role">
													HR Manger
												</div>
											</div>
											<div class="user-action">
												<div class="os-icon os-icon-email-forward"></div>
											</div>
										</div>
										<div class="user-w with-status status-green">
											<div class="user-avatar-w">
												<div class="user-avatar">
													<img alt="" src="img/avatar4.jpg">
												</div>
											</div>
											<div class="user-name">
												<h6 class="user-title">
													Jenny Miksa
												</h6>
												<div class="user-role">
													Lead Developer
												</div>
											</div>
											<div class="user-action">
												<div class="os-icon os-icon-email-forward"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</div>
@endsection