@extends('client.layouts.default')


@section('content')


	<!--------------------
	START - Breadcrumbs
	-------------------->
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
	</ul>
	<!--------------------
	END - Breadcrumbs
	-------------------->
	<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
	<div class="content-i">
		<div class="content-box">
			<div class="row">
				<div class="col-sm-12">
					<!-- Alerts -->

					@if($client->status == 0)
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<button aria-label="Close" class="close" data-dismiss="alert" type="button">
							<span aria-hidden="true"> ×</span>
						</button>
						<strong>Atenção! </strong>
						Seu cadastro não está <b>completo</b>, por favor preencha todas as informações necessárias para concluir.
						<br>Acesse <a href="{!!route('client-info')!!}"><b><i class="os-icon os-icon-cv-2"></i> "minhas informações"</b></a> para completar.
					</div>
					@endif

					@if($client->status == 1)
						@if($plansClients->plan_id == "1")
							@if($plansClients->status == "1")
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								
								<strong>Atenção! </strong>
								@php
								$data_inicial = date("Y-m-d"); 
								$data_final = $plansClients->validate; 
								$diferenca = strtotime($data_final) - strtotime($data_inicial);
								$prazo = floor($diferenca / (60 * 60 * 24));
								@endphp
								Faltam {!!$prazo!!} dias para o <b>fim</b> do seu <b>plano gratuito</b> da nossa plataforma<br>
								Realize agora um <a href="{!!route('client-plans')!!}">upgrade</a>, e não perca seus dados!
							</div>
							@endif
							@if($plansClients->status == "3")
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								
								<strong>Atenção! </strong>
								@php
								$data_inicial = date("Y-m-d"); 
								$data_final = $plansClients->date_block; 
								$diferenca = strtotime($data_final) - strtotime($data_inicial);
								$prazo = floor($diferenca / (60 * 60 * 24));
								@endphp
								Você tem {!!$prazo!!} dias para o <b>Atualizar</b> seu plano <br>
								Realize agora um <a href="{!!route('client-plans')!!}">Upgrade</a>, e nao perca seus dados!
							</div>
							@endif
						@endif
						@if($plansClients->status == "2")
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								
								<strong>Atenção! </strong>								
								Sua fatura ainda não foi confirmada o pagamento. Está como <b>Pendente!</b><br>
								Verifique agora <a href="{!!route('client-historic-invoice')!!}">suas faturas</a>!
							</div>
						@endif
					@endif

					<div class="alert alert-warning alert-dismissible fade show" role="alert" style="display: none;">
						<button aria-label="Close" class="close" data-dismiss="alert" type="button">
							<span aria-hidden="true"> ×</span>
						</button>
						<strong>Atenção! </strong>
						Seu plano está para vencer, não fique sem usar o <b>sistema</b>.
						<br>Acesse <a href="{!!route('client-plans')!!}"><b>planos</b></a> e escolha.
					</div>

					<!-- ERROS DE SISTEMA -->
					@if($errors->any())            
					<div style="padding-top: 15px; padding-bottom: 15px; margin-bottom:20px; font-size: 16px;" class="col-md-12  btn-{{$errors->first('type')}} " href="#">{{$errors->first('msg')}}</div>
					@endif

					<!-- Close Alerts -->


					<div class="element-wrapper">
						
						<h6 class="element-header">Dashboard</h6>
						<div class="element-content">
							<div class="row">
								<div class="col-sm-3">
									<a class="element-box el-tablo" href="#">
										<div class="label">Convidar</div>
										<div class="value"><?php echo $grafico['convidar']['quantidade']; ?></div>
										
									</a>
								</div>
								<div class="col-sm-3">
									<a class="element-box el-tablo" href="#">
										<div class="label">Apresentar</div>
										<div class="value"><?php echo $grafico['apresentar']['quantidade']; ?></div>
										
									</a>
								</div>
								<div class="col-sm-3">
									<a class="element-box el-tablo" href="#">
										<div class="label">Acompanhar</div>
										<div class="value"><?php echo $grafico['acompanhar']['quantidade']; ?></div>
										
									</a>
								</div>
								<div class="col-sm-3">
									<a class="element-box el-tablo" href="#">
										<div class="label">Fechamento</div>
										<div class="value"><?php echo $grafico['fechamento']['quantidade']; ?></div>
										
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="element-wrapper">
						<h6 class="element-header">Desempenho anual</h6>

						<div class="element-content">
							<div class="row">		
								<div class="col-md-12">								
									<div class="element-wrapper">								
										<div class="element-box">
											<h5 class="form-header">
												Apresentações e cadastros
											</h5>
											<div class="form-desc">
												Para fazer 1 cadastro, você apresentou <span id="media_apns"></span> APN(s) em média.
											</div>
											<div class="el-chart-w">
												<canvas height="145" id="analitycs-dashboard" width="300"></canvas>
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

		<!--------------------
		START - Sidebar
		-------------------->
		<div class="content-panel">
			<!--------------------
			START - Recent Activity
			-------------------->
			<div class="element-wrapper">
				<h6 class="element-header">Atividade recente</h6>
				<div class="element-box-tp" >
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
			<!--------------------
			END - Recent Activity
			-------------------->
			<!--------------------
			START - Chat
			-------------------->
			<div class="element-wrapper" style="display: none;">
				<h6 class="element-header">Chat</h6>
				<div class="element-box-tp">
					<div class="input-search-w">
						<input class="form-control rounded bright" placeholder="Procurar membro da equipe..." type="search">
					</div>
					<div class="users-list-w">
						<div class="user-w with-status status-green">
							<div class="user-avatar-w">
								{{--<div class="user-avatar"><img alt="" src="{{ asset('img/avatar1.jpg') }}"></div>--}}
							</div>
							<div class="user-name">
								<h6 class="user-title">{!!$client->name!!}</h6>
								<div class="user-role">{!!$client->stage()!!}</div>
							</div>
							<a class="user-action" href="#">
								<div class="os-icon os-icon-mail-07"></div>
							</a>
						</div>
						<div class="user-w with-status status-green">
							<div class="user-avatar-w">
								<div class="user-avatar"><img alt="" src="{{ asset('img/avatar2.jpg') }}"></div>
							</div>
							<div class="user-name">
								<h6 class="user-title">Guilherme Sampaio</h6>
								<div class="user-role">Ouro</div>
							</div>
							<a class="user-action" href="#">
								<div class="os-icon os-icon-mail-07"></div>
							</a>
						</div>
						<div class="user-w with-status status-red">
							<div class="user-avatar-w">
								<div class="user-avatar"><img alt="" src="{{ asset('img/avatar3.jpg') }}"></div>
							</div>
							<div class="user-name">
								<h6 class="user-title">João Almeida</h6>
								<div class="user-role">Safira</div>
							</div>
							<a class="user-action" href="#">
								<div class="os-icon os-icon-mail-07"></div>
							</a>
						</div>
						<div class="user-w with-status status-green">
							<div class="user-avatar-w">
								<div class="user-avatar"><img alt="" src="{{ asset('img/avatar4.jpg') }}"></div>
							</div>
							<div class="user-name">
								<h6 class="user-title">Simone Menezes</h6>
								<div class="user-role">Prata</div>
							</div>
							<a class="user-action" href="#">
								<div class="os-icon os-icon-mail-07"></div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--------------------
			END - Chat
			-------------------->
		</div>
		<!--------------------
		END - Sidebar
		-------------------->
	</div>

	@endsection