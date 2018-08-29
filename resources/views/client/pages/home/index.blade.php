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
						Seu cadastro não está <b>Completo</b>, por favor preencha todas as informações necessárias para concluir.
						<br>Acesse <a href="{!!route('client-info')!!}"><b><i class="os-icon os-icon-cv-2"></i> Minhas Informações</b></a> para completar.
					</div>
					@endif

					@if($client->status == 1)
						@if($plansClients->plan_id == 1)
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								
								<strong>Atenção! </strong>
								@php
								$data_inicial = date("Y-m-d"); 
								$data_final = $plansClients->validate; 
								$diferenca = strtotime($data_final) - strtotime($data_inicial);
								$prazo = floor($diferenca / (60 * 60 * 24));
								@endphp
								Faltam {!!$prazo!!} dias para o <b>Fim</b> do seu plano de GRATIS da nossa plataforma<br>
								Realize agora um <a href="{!!route('client-plans')!!}">Upgrade</a>, e nao perca seus dados!
							</div>
						@endif
					@endif

					<div class="alert alert-warning alert-dismissible fade show" role="alert" style="display: none;">
						<button aria-label="Close" class="close" data-dismiss="alert" type="button">
							<span aria-hidden="true"> ×</span>
						</button>
						<strong>Atenção! </strong>
						Seu plano está para vencer, não fique sem usar o <b>Sistema</b>.
						<br>Acesse <a href="{!!route('client-plans')!!}"><b>Planos</b></a> e ecolha.
					</div>

					<!-- ERROS DE SISTEMA -->
					@if($errors->any())
					<div style="padding-top: 6px;padding-bottom: 6px;padding-left: 7px;padding-right: 7px;background: #dc0000;color:  white;border: solid 1px #f51111;border-radius:  5px; margin-bottom: 10px;" class="alert alert-{{$errors->first('type')}}" role="alert">{{$errors->first('msg')}}</div>
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
						<h6 class="element-header">Desempenho Anual</h6>

						<div class="element-content">
							<div class="row">		
								<div class="col-md-12">								
									<div class="element-wrapper">								
										<div class="element-box">
											<h5 class="form-header">
												Apresentações e Cadastros
											</h5>
											<div class="form-desc">
												Para fazer 1 cadastro, você apresentou 14 APN(s) em média.
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
				<h6 class="element-header">Atividade Recente</h6>
				<div class="element-box-tp">
					<div class="activity-boxes-w">
						<div class="activity-box-w">
							<div class="activity-time">10 Min</div>
							<div class="activity-box">
								<div class="activity-info">
									<div class="activity-role">152.202.105.88</div><strong class="activity-title">Novo prospecto cadastrado</strong>
								</div>
							</div>
						</div>
						<div class="activity-box-w">
							<div class="activity-time">2 Horas</div>
							<div class="activity-box">
								<div class="activity-info">
									<div class="activity-role">152.202.105.88</div><strong class="activity-title">Nota adicionada a prospecto</strong>
								</div>
							</div>
						</div>
						<div class="activity-box-w">
							<div class="activity-time">5 Horas</div>
							<div class="activity-box">
								<div class="activity-info">
									<div class="activity-role">152.202.105.88</div><strong class="activity-title">Apresentação marcada</strong>
								</div>
							</div>
						</div>
						<div class="activity-box-w">
							<div class="activity-time">2 Dias</div>
							<div class="activity-box">
								<div class="activity-info">
									<div class="activity-role">152.202.105.88</div><strong class="activity-title">Nota adicionada a prospecto</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--------------------
			END - Recent Activity
			-------------------->
			<!--------------------
			START - Chat
			-------------------->
			<div class="element-wrapper">
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
								<div class="user-role">{{!!$client->stage()!!}}</div>
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