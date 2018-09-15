@extends('client.layouts.default')


@section('content')

<div class="content-w">
	
	<ul class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{!!route('client-dashboard')!!}">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="{!!route('client-profile')!!}">Meu perfil</a>
		</li>
		<li class="breadcrumb-item">
			<span>Informações públicas</span>
		</li>
	</ul>
	<div class="content-i">
		
		<div class="content-box">
			<div class="row">
				<div class="col-sm-4">
					<div class="user-profile compact">
						<div class="up-head-w" style="background-image:url({!!url("/")!!}/public/storage/{!!$client->image!!})">
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
												{!!$cadastros!!}
											</div>
											<div class="label">
												Cadastros
											</div>
										</div>
									</div>
									<div class="col-sm-6 b-b">
										<div class="el-tablo centered padded-v">
											<div class="value">
												{!!$captados!!}
											</div>
											<div class="label">
												Prospecto captados
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
									Atividades recentes
								</h6>
								<div class="element-box-tp">
									@php
									$count_activ = count($activits);
									@endphp
									@if($count_activ > 0)
									<div class="activity-boxes-w">
										@foreach($activits as $value)
										<div class="activity-box-w">
											<div class="activity-time">{!!getTimeLast($value->created_at)!!}</div>
											<div class="activity-box">
												<div class="activity-info">
													<div class="activity-role">{!!$value->ip!!}</div><strong class="activity-title">{!!$value->action()!!}</strong>
												</div>
											</div>
										</div>
										@endforeach						
									</div>
									@else
									<div class="alert alert-warning alert-dismissible fade show" role="alert" style="display: block; font-size: 12px; opacity: 0.5">
										Nenhuma atividade recente
									</div>
									@endif
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
							@if($errors->any())
					<div class="alert alert-{{$errors->first('type')}}" role="alert">{{$errors->first('msg')}}</div>
					@endif
							<div class="element-box">
								<form id="formValidate" method="post" action="{!!route('client-profile-update')!!}">
									@csrf
									<div class="element-info">
										<div class="element-info-with-icon">
											<div class="element-info-icon">
												<div class="os-icon os-icon-edit-3"></div>
											</div>
											<div class="element-info-text">
												<h5 class="element-inner-header">
													Seu perfil público 
												</h5>
												<div class="element-inner-desc">
													Suas informações serão gravadas e membros da sua equipe poderão ver
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for=""> Biografia</label>
										<textarea name="biography" class="form-control" rows="3">{!!$client->biography!!}</textarea>
										<div class="help-block form-text with-errors form-control-feedback"></div>
									</div>
									<div class="form-group">
										<label for=""> Seu Facebook</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fa fa-facebook" aria-hidden="true"></i></div>
											</div>
											<input value="{!!$client->facebook!!}" name="facebook" class="form-control" placeholder="facebook.com/Usuario" type="text">
										</div>
										<div class="help-block form-text with-errors form-control-feedback"></div>
									</div>
									<div class="form-group">
										<label for=""> Seu Instagram</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fa fa-instagram" aria-hidden="true"></i></div>
											</div>
											<input value="{!!$client->instagram!!}" name="instagram" class="form-control" placeholder="@usuário" type="text">
										</div>
										<div class="help-block form-text with-errors form-control-feedback"></div>
									</div>	
									<div class="form-group">
										<label for=""> Seu Twitter</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fa fa-twitter" aria-hidden="true"></i></div>
											</div>
											<input value="{!!$client->twitter!!}" name="twitter" class="form-control" placeholder="@usuário" type="text">
										</div>
										<div class="help-block form-text with-errors form-control-feedback"></div>
									</div>	
									<div class="form-group">
										<label for=""> Seu Whatsapp</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
											</div>
											<input value="{!!$client->whatsapp!!}" name="whatsapp" class="form-control MaskPhone" placeholder="(99) 9 9999-9999" type="text">
										</div>
										<div class="help-block form-text with-errors form-control-feedback"></div>
									</div>	
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
									Membros da sua equipe
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