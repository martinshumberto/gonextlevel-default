@extends('client.layouts.default')


@section('content')


{{--content here--}}

<?php

//	$dtToday = date("Y-m-d");
//	$dtPrev = date("Y-m-d", strtotime("-1 months"));
//
//	$query = "<<< SQL
//	SELECT COUNT(1), pipeline_id
//	FROM pipeline_status
//	WHERE active = 1
//		AND MONTH(created_at) = MONTH({$dtToday})
//		AND YEAR(created_at) = YEAR($dtToday())
//	GROUP BY pipeline_id
//";


$status = [
	'convidar' => [
		'quantidade' => 90,
		'percent' => 12,
	],
	'apresentar' => [
		'quantidade' => 5,
		'percent' => 12,
	],
	'acompanhar' => [
		'quantidade' => 2,
		'percent' => -9,
	],
	'fechamento' => [
		'quantidade' => 5,
		'percent' => -9,
	]
];
?>

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
						<div class="element-actions">
							<form class="form-inline justify-content-sm-end">
								<select class="form-control form-control-sm rounded">
									<option value="hoje">Hoje </option>
									<option value="semana" selected>Semana </option>
									<option value="mes">Mês </option>
								</select>
							</form>
						</div>
						<h6 class="element-header">Dashboard</h6>
						<div class="element-content">
							<div class="row">
								<div class="col-sm-3">
									<a class="element-box el-tablo" href="#">
										<div class="label">Convidar</div>
										<div class="value"><?php echo $status['convidar']['quantidade']; ?></div>
										<div class="trending <?php echo ($status['convidar']['percent'] > 0) ? 'trending-up-basic' : 'trending-down-basic'; ?>"><span><?php echo ($status['convidar']['percent'] > 0) ? $status['convidar']['percent'] : (-1*$status['convidar']['percent']); ?></span><i class="os-icon os-icon-arrow-up2"></i></div>
									</a>
								</div>
								<div class="col-sm-3">
									<a class="element-box el-tablo" href="#">
										<div class="label">Apresentar</div>
										<div class="value">5</div>
										<div class="trending <?php echo ($status['apresentar']['percent'] > 0) ? 'trending-up-basic' : 'trending-down-basic'; ?>"><span><?php echo ($status['apresentar']['percent'] > 0) ? $status['apresentar']['percent'] : (-1*$status['apresentar']['percent']); ?></span><i class="os-icon os-icon-arrow-down"></i></div>
									</a>
								</div>
								<div class="col-sm-3">
									<a class="element-box el-tablo" href="#">
										<div class="label">Acompanhar</div>
										<div class="value">2</div>
										<div class="trending trending-down-basic"><span>9%</span><i class="os-icon os-icon-arrow-down"></i></div>
									</a>
								</div>
								<div class="col-sm-3">
									<a class="element-box el-tablo" href="#">
										<div class="label">Fechamento</div>
										<div class="value">5</div>
										<div class="trending trending-down-basic"><span>9%</span><i class="os-icon os-icon-arrow-down"></i></div>
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
						<div class="element-box">
							<h5 class="form-header">Apresentações e Cadastros</h5>
							<div class="form-desc"><i class="fa fa-info-circle"></i> Para fazer <strong>1 cadastro</strong>, você apresentou <strong>14 APN(s)</strong> em média.</div>
							<div class="el-chart-w">
								<canvas height="145" id="barChart1" width="300"></canvas>
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