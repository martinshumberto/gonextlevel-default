@extends('client.layouts.default')


@section('content')

	<!--------------------
	START - Breadcrumbs
	-------------------->
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="/assinatura">Assinatura</a></li>
		<li class="breadcrumb-item"><span>Planos</span></li>
	</ul>
	<!--------------------
	END - Breadcrumbs
	-------------------->


	<div class="content-i">
		<div class="content-box">
			<div class="section-heading centered">
				<h1>Nossos Planos</h1>
				<p>Para te trazer o maior resultado e te ajudar a prospectar com qualidade e eficiência. Trazemos a vocês uma variedade de planos para você escolher de acordo com seu bolso no momento.</p>
			</div>
			<div class="pricing-plans row no-gutters">
				<div class="pricing-plan col-sm-4">
					<div class="plan-head">
						<div class="plan-image"><img alt="" src="img/plan1.png"></div>
						<div class="plan-name">Plano I</div>
					</div>
					<div class="plan-body">
						<div class="plan-price-w">
							<div class="price-value">GRATUITO</div>
							<div class="price-label">15 dias</div>
						</div>
						<div class="plan-btn-w"><a class="btn btn-secondary btn-rounded" href="#">Assinado</a></div>
					</div>
					<div class="plan-description">
						<h6>Plano Gratuito</h6>
						<p>Teste nossa plataforma por 15 dias gratuitamente, assim, você pode usufruir de algumas de nossas funcionalidades de forma limitada para te ajudar a decidir em contratar um de nossos planos.</p>
						<h6>Funcionalidades</h6>
						<ul>
							<li>Gestor de prospectos</li>
							<li>Captação de prospectos</li>
							<li>Acompanhamento de prospectos</li>
						</ul>
					</div>
				</div>
				<div class="pricing-plan col-sm-4 highlight">
					<div class="plan-head">
						<div class="plan-image"><img alt="" src="img/plan2.png"></div>
						<div class="plan-name">Plano II</div>
					</div>
					<div class="plan-body">
						<div class="plan-price-w">
							<div class="price-value">R$ 39,90</div>
							<div class="price-label">por mês</div>
						</div>
						<div class="plan-btn-w"><a class="btn btn-primary btn-rounded" href="#">Assinar</a></div>
					</div>
					<div class="plan-description">
						<h6>Plano Intermediário</h6>
						<p>Com esse plano você tem acesso as principais funcionalidades de nossa plataforma, para gerenciar seus prospectos e acesso a nossa central de treinamentos e outros.</p>
						<h6>Funcionalidades</h6>
						<ul>
							<li>Gestor de prospectos</li>
							<li>Captação de prospectos</li>
							<li>Acompanhamento de prospectos</li>
							<li>Relatórios de prospecções</li>
							<li>Central de treinamentos</li>
							<li>Materiais de apoio</li>
							<li>Gestor de agenda</li>
						</ul>
					</div>
				</div>
				<div class="pricing-plan col-sm-4">
					<div class="plan-head">
						<div class="plan-image"><img alt="" src="img/plan4.png"></div>
						<div class="plan-name">Plano III</div>
					</div>
					<div class="plan-body">
						<div class="plan-price-w">
							<div class="price-value">R$ 52,90</div>
							<div class="price-label">por mês</div>
						</div>
						<div class="plan-btn-w"><a class="btn btn-primary btn-rounded" href="#">Assinar</a></div>
					</div>
					<div class="plan-description">
						<h6>Plano Avançado</h6>
						<p>Indicamos esse plano para o consultor que deseja aumentar sua excelência nas ações de prospecção. Com funcionalidades extras como chat com sua equipe, personalização de e-mail, relatórios personalizados e outros.</p>
						<h6>Funcionalidades</h6>
						<ul>
							<li>Gestor de prospectos</li>
							<li>Captação de prospectos</li>
							<li>Acompanhamento de prospectos</li>
							<li>Relatórios de prospecções</li>
							<li>Central de treinamentos</li>
							<li>Materiais de apoio</li>
							<li>Chat com sua equipe</li>
							<li>Gestor de agenda</li>
							<li>Gestor de equipe</li>
							<li>Grupos de equipe</li>
							<li>Personalização de e-mail marketing</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection