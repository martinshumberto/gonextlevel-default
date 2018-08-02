@extends('client.layouts.default')


@section('content')
	<!--------------------
	START - Breadcrumbs
	-------------------->
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="/prospectos">Prospectos</a></li>
		<li class="breadcrumb-item"><span>Pipeline de Prospectos</span></li>
	</ul>
	<!--------------------
	END - Breadcrumbs
	-------------------->
	<div class="content-i">
		<div class="content-box">
			<div class="control-header">
				<div class="row align-items-center">
					<div class="col-6 col-lg-7">
						<form action="#" class="form-inline">
							<div class="form-group mr-4">
								<a class="btn btn-sm btn-secondary btn-upper" href="/prospectos/visao-geral">
									<i class="os-icon os-icon-phone-21"></i><span> Visão Geral</span>
								</a>
							</div>
							<div class="form-group d-none d-md-flex">
							</div>
						</form>
					</div>
					<div class="col-6 col-lg-5 text-right">
						<a class="btn btn-sm btn-primary btn-upper" href="#" data-target="#modal-register" data-toggle="modal">
							<i class="os-icon os-icon-ui-22"></i><span>Cadastrar</span>
						</a>
					</div>
				</div>
			</div>
			<div class="pipelines-w">
				<div class="row">
					<div class="col-lg-3 col-xxl-3">
						<!--------------------
						START - Pipeline
						-------------------->
						<div class="pipeline white lined-primary">
							<div class="pipeline-header">
								<h5 class="pipeline-name">CONVIDAR</h5>
								<div class="pipeline-header-numbers">
									<div class="pipeline-count">{!!count($prospect_convit)!!} prospecto(s)</div>
									<div class="pipeline-settings os-dropdown-trigger" data-target="#modal-invite" data-toggle="modal">
										<i class="icon-feather-help-circle fa-2x"></i>
									</div>
								</div>
							</div>
							<div data-count-rows="1:{!!count($prospect_convit)!!}" data-strutude="1:A" class="pipeline-body">
								@if(count($prospect_convit) != 0)
								@foreach($prospect_convit as $convit)
								<div data-strutude="1:{!!$convit->prospect_id!!}" class="pipeline-item">
									<div class="pi-controls">
										<div class="pi-settings os-dropdown-trigger">
											<i class="os-icon os-icon-ui-92" data-placement="top" data-toggle="tooltip" title="Convide seu prospecto para uma APN."></i>
										</div>
										<div class="pi-settings os-dropdown-trigger"><i class="os-icon os-icon-ui-46"></i>
											<div class="os-dropdown">
												<div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
												<ul>
													<li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Ver Prospecto</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remover</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Arquivar</span></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="pi-body">
										<div class="pi-info">
											<div class="h6 pi-name">{!!$convit->name!!}</div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="tel:{!!$convit->phone!!}">{!!$convit->phone!!}</a></div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="mailto:{!!$convit->email!!}">{!!$convit->email!!}</a></div>
										</div>
									</div>
									<div class="pi-controls-second pi-settings os-dropdown-trigger toggle-accordion" data-placement="top" data-toggle="tooltip" title="Mais informações">
										<i class="os-icon os-icon-arrow-down"></i>
									</div>
									<div class="pi-body accordion-body">
										<div class="pi-info">
											<hr>
											<div class="el-infos pi-sub">
												<div class="infos-value-w">
													<div class="infos-pin"><i class="os-icon os-icon-ui-02"></i></div>
													<div class="infos-value">16 Pontos</div>
												</div>
											</div>
										</div>
									</div>
									<div class="pi-foot">
										<div class="tags">
											<a class="tag" href="#" data-target="#modal-new-apn" data-toggle="modal">Marcar APN</a>
										</div>
										<a class="extra-info" href="#">
											<i class="os-icon os-icon-mail-12" data-placement="top" data-toggle="tooltip" title="3 Nota(s)"></i>
										</a>
									</div>
								</div>
								@endforeach
								@else
								@endif								
							</div>
						</div>
						<!--------------------
						END - Pipeline
						-------------------->
					</div>
					<div class="col-lg-3 col-xxl-3">
						<!--------------------
						START - Pipeline
						-------------------->
						<div class="pipeline white lined-primary">
							<div class="pipeline-header">
								<h5 class="pipeline-name">APRESENTAR</h5>
								<div class="pipeline-header-numbers">
									<div class="pipeline-count">{!!count($prospect_show)!!}  prospecto(s)</div>
									<div class="pipeline-settings os-dropdown-trigger" data-target="#modal-present" data-toggle="modal">
										<i class="icon-feather-help-circle fa-2x"></i>
									</div>
								</div>
							</div>

							<div data-count-rows="2:{!!count($prospect_show)!!}" data-strutude="2:A"  class="pipeline-body">
								@if(count($prospect_show) != 0)
								@foreach($prospect_show as $show)
								<div data-strutude="2:{!!$show->prospect_id!!}" class="pipeline-item">
									<div class="pi-controls">
										<div class="pi-settings os-dropdown-trigger">
											<i class="os-icon os-icon-ui-92" data-placement="top" data-toggle="tooltip" title="Não se esqueça de chegar 30 minutos antes do horário marcado!"></i>
										</div>
										<div class="pi-settings os-dropdown-trigger"><i class="os-icon os-icon-ui-46"></i>
											<div class="os-dropdown">
												<div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
												<ul>
													<li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Ver Prospecto</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remover</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Arquivar</span></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="pi-body">
										<div class="pi-info">
											<div class="h6 pi-name">{!!$show->name!!}</div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="tel:{!!$show->phone!!}">{!!$show->phone!!}</a></div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="mailto:{!!$show->email!!}">{!!$show->email!!}</a></div>
										</div>
									</div>
									<div class="pi-controls-second pi-settings os-dropdown-trigger toggle-accordion" data-placement="top" data-toggle="tooltip" title="Mais informações">
										<i class="os-icon os-icon-arrow-down"></i>
									</div>
									<div class="pi-body accordion-body">
										<div class="pi-info">
											<hr>
											<div class="el-infos pi-sub">
												<div class="infos-value-w">
													<div class="infos-pin"><i class="fa fa-calendar"></i></div>
													<div class="infos-value">06 de Junho às 12h30</div>
												</div>
												<div class="infos-value-w">
													<div class="infos-pin"><i class="fa fa-map-marker"></i></div>
													<div class="infos-value"><small>Casa do Sergio - Rua Palmeiras Qd. 30 Lt. 05 - Setor dos Afonsos</small></div>
												</div>
											</div>
										</div>
									</div>
									<div class="pi-foot">
										<div class="tags">
											<a class="tag" href="#" data-target="#modal-change-apn" data-toggle="modal">Alterar</a>
										</div>
										<a class="extra-info" href="#">
											<i class="os-icon os-icon-mail-12" data-placement="top" data-toggle="tooltip" title="3 Nota(s)"></i>
										</a>
									</div>
								</div>
								@endforeach
								@else
								@endif
								<div style="display: none;" class="pipeline-item border-l-warning">
									<div class="pi-controls">
										<div class="pi-settings os-dropdown-trigger">
											<i class="os-icon os-icon-ui-92" data-placement="top" data-toggle="tooltip" title="Acompanhe seu prospecto após atualiza-lo."></i>
										</div>
										<div class="pi-settings os-dropdown-trigger"><i class="os-icon os-icon-ui-46"></i>
											<div class="os-dropdown">
												<div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
												<ul>
													<li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Ver Prospecto</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remover</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Arquivar</span></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="pi-body">
										<div class="pi-info">
											<div class="h6 pi-name">Patricia Cristina</div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="tel:(62) 99999-9999">(62) 99999-9999</a></div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="mailto:patriciacristina@gmail.com">patriciacristina@gmail.com</a></div>
										</div>
									</div>
									<div class="pi-controls-second pi-settings os-dropdown-trigger toggle-accordion" data-placement="top" data-toggle="tooltip" title="Mais informações">
										<i class="os-icon os-icon-arrow-down"></i>
									</div>
									<div class="pi-body accordion-body">
										<div class="pi-info">
											<hr>
											<div class="el-infos pi-sub">
												<div class="infos-value-w">
													<div class="infos-pin"><i class="fa fa-calendar"></i></div>
													<div class="infos-value">30 de Março às 12h30</div>
												</div>
												<div class="infos-value-w">
													<div class="infos-pin"><i class="fa fa-map-marker"></i></div>
													<div class="infos-value"><small>Casa da Patricia - Rua 12, Qd. 14 Lt. 06 - Vila Maria Dilce</small></div>
												</div>
											</div>
										</div>
									</div>
									<div class="pi-foot">
										<a class="extra-info" href="#">
											<span>Foi feita APN?</span>
										</a>
										<div class="btn-group">
											<a class="mr-2 btn btn-outline-success btn-sm" href="#">Sim</a>
											<a class="mr-2 btn btn-outline-danger btn-sm" href="#">Não</a>
										</div>
										<a class="extra-info" href="#">
											<i class="os-icon os-icon-mail-12" data-placement="top" data-toggle="tooltip" title="1 Nota(s)"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!--------------------
						END - Pipeline
						-------------------->
					</div>
					<div class="col-lg-3 col-xxl-3">
						<!--------------------
						START - Pipeline
						-------------------->
						<div class="pipeline white lined-primary">
							<div class="pipeline-header">
								<h5 class="pipeline-name">ACOMPANHAR</h5>
								<div class="pipeline-header-numbers">
									<div class="pipeline-count">{!!count($prospect_mananger)!!} prospecto(s)</div>
									<div class="pipeline-settings os-dropdown-trigger" data-target="#modal-follow" data-toggle="modal">
										<i class="icon-feather-help-circle fa-2x"></i>
									</div>
								</div>
							</div>
							<div data-count-rows="3:{!!count($prospect_mananger)!!}" data-strutude="3:A"  class="pipeline-body">
								@if(count($prospect_mananger) != 0)
								@foreach($prospect_mananger as $mananger)
								<div data-strutude="3:{!!$mananger->prospect_id!!}" class="pipeline-item">
									<div class="pi-controls">
										<div class="pi-settings os-dropdown-trigger">
											<i class="os-icon os-icon-ui-92" data-placement="top" data-toggle="tooltip" title="Faça o máximo de etapas do acompanhamento."></i>
										</div>
										<div class="pi-settings os-dropdown-trigger"><i class="os-icon os-icon-ui-46"></i>
											<div class="os-dropdown">
												<div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
												<ul>
													<li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Ver Prospecto</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remover</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Arquivar</span></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="pi-body">
										<div class="pi-info">
											<div class="h6 pi-name">Rosa Campos</div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="tel:(62) 99999-9999">(62) 99999-9999</a></div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="mailto:rosacampos@hotmail.com">rosacampos@hotmail.com</a></div>
										</div>
									</div>
									<div class="pi-controls-second pi-settings os-dropdown-trigger toggle-accordion" data-placement="top" data-toggle="tooltip" title="Mais informações">
										<i class="os-icon os-icon-arrow-down"></i>
									</div>
									<div class="pi-body accordion-body">
										<div class="pi-info">
											<div class="pi-sub">
												<div class="progress" data-placement="bottom" data-toggle="tooltip" title="Você concluiu 2 das 4 etapas do acompanhamento.">
													<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
												</div>
											</div>
											<hr>
											<div class="el-infos pi-sub">
												<div class="infos-value-w">
													<div class="infos-pin"><i class="fa fa-list-ul"></i></div>
													<div class="infos-value">Visita ao CDH</div>
												</div>
												<div class="infos-value-w">
													<div class="infos-pin"><i class="fa fa-calendar"></i></div>
													<div class="infos-value">25 de Abril às 13h00</div>
												</div>
												<div class="infos-value-w">
													<div class="infos-pin"><i class="fa fa-map-marker"></i></div>
													<div class="infos-value"><small>CDH Bueno</small></div>
												</div>
											</div>
										</div>
									</div>
									<div class="pi-foot">
										<div class="tags">
											<a class="tag" href="#">Etapas</a>
										</div>
										<a class="extra-info" href="#">
											<i class="os-icon os-icon-mail-12" data-placement="top" data-toggle="tooltip" title="3 Nota(s)"></i>
										</a>
									</div>
								</div>
								@endforeach
								@else
								@endif
								<div style="display: none;" class="pipeline-item border-l-warning">
									<div class="pi-controls">
										<div class="pi-settings os-dropdown-trigger">
											<i class="os-icon os-icon-ui-92" data-placement="top" data-toggle="tooltip" title="Faça o máximo de etapas do acompanhamento."></i>
										</div>
										<div class="pi-settings os-dropdown-trigger"><i class="os-icon os-icon-ui-46"></i>
											<div class="os-dropdown">
												<div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
												<ul>
													<li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Ver Prospecto</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remover</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Arquivar</span></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="pi-body">
										<div class="pi-info">
											<div class="h6 pi-name">Pedro Nunes</div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="tel:(62) 99999-9999">(62) 99999-9999</a></div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="mailto:nunespedro@gmail.com">nunespedro@gmail.com</a></div>
										</div>
									</div>
									<div class="pi-controls-second pi-settings os-dropdown-trigger toggle-accordion" data-placement="top" data-toggle="tooltip" title="Mais informações">
										<i class="os-icon os-icon-arrow-down"></i>
									</div>
									<div class="pi-body accordion-body">
										<div class="pi-info">
											<div class="pi-sub">
												<div class="progress" data-placement="bottom" data-toggle="tooltip" title="Você concluiu 3 das 4 etapas do acompanhamento.">
													<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
												</div>
											</div>
											<hr>
											<div class="el-infos pi-sub">
												<div class="infos-value-w">
													<div class="infos-pin"><i class="fa fa-list-ul"></i></div>
													<div class="infos-value">Visita ao CDH</div>
												</div>
												<div class="infos-value-w">
													<div class="infos-pin"><i class="fa fa-calendar"></i></div>
													<div class="infos-value">01 de Abril às 14h00</div>
												</div>
												<div class="infos-value-w">
													<div class="infos-pin"><i class="fa fa-map-marker"></i></div>
													<div class="infos-value"><small>CDH Aparecida de Goiânia</small></div>
												</div>
											</div>
										</div>
									</div>
									<div class="pi-foot">
										<a class="extra-info" href="#">
											<span>Visita feita?</span>
										</a>
										<div class="btn-group">
											<a class="mr-2 btn btn-outline-success btn-sm" href="#">Sim</a>
											<a class="mr-2 btn btn-outline-danger btn-sm" href="#">Não</a>
										</div>
										<a class="extra-info" href="#">
											<i class="os-icon os-icon-mail-12" data-placement="top" data-toggle="tooltip" title="4 Nota(s)"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!--------------------
						END - Pipeline
						-------------------->
					</div>
					<div class="col-lg-3 col-xxl-3">
						<!--------------------
						START - Pipeline
						-------------------->
						<div class="pipeline white lined-primary">
							<div class="pipeline-header">
								<h5 class="pipeline-name">FECHAMENTO</h5>
								<div class="pipeline-header-numbers">
									<div class="pipeline-count">{!!count($prospect_close)!!} prospecto(s)</div>
									<div class="pipeline-settings os-dropdown-trigger" data-target="#modal-closing" data-toggle="modal">
										<i class="icon-feather-help-circle fa-2x"></i>
									</div>
								</div>
							</div>
							<div data-count-rows="4:{!!count($prospect_close)!!}" data-strutude="4:A"  class="pipeline-body">
								@if(count($prospect_close) != 0)
								@foreach($prospect_close as $close)
								<div data-strutude="4:{!!$close->prospect_id!!}" class="pipeline-item">
									<div class="pi-controls">
										<div class="pi-settings os-dropdown-trigger">
											<i class="os-icon os-icon-ui-92" data-placement="top" data-toggle="tooltip" title="Faça o fechamento ou reacomponhe seu prospecto."></i>
										</div>
										<div class="pi-settings os-dropdown-trigger"><i class="os-icon os-icon-ui-46"></i>
											<div class="os-dropdown">
												<div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
												<ul>
													<li><a href="#"><i class="os-icon os-icon-ui-49"></i><span>Ver Prospecto</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-15"></i><span>Remover</span></a></li>
													<li><a href="#"><i class="os-icon os-icon-ui-44"></i><span>Arquivar</span></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="pi-body">
										<div class="pi-info">
											<div class="h6 pi-name">{!!$close->name!!}</div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="tel:{!!$close->phone!!}">{!!$close->phone!!}</a></div>
											<div class="pi-sub"><a class="btn-link btn-upper mr-4 d-none d-lg-inline-block" href="mailto:{!!$close->email!!}">{!!$close->email!!}</a></div>
										</div>
									</div>
									<div class="pi-foot">
										<div class="tags">
											<a class="tag" href="#">Adquirir KIT</a>
											<a class="tag" href="#">Remarcar</a>
										</div>
										<a class="extra-info" href="#">
											<i class="os-icon os-icon-mail-12" data-placement="top" data-toggle="tooltip" title="5 Nota(s)"></i>
										</a>
									</div>
								</div>
								@endforeach
								@else
								@endif
							</div>
						</div>
						<!--------------------
						END - Pipeline
						-------------------->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-----------------------
	START - Modal - Invite
	------------------------>
	<div aria-hidden="true" class="onboarding-modal modal fade animated" id="modal-invite" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-lg modal-centered" role="document">
			<div class="modal-content text-center">
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Fechar</span><span class="os-icon os-icon-close"></span></button>
				<div class="onboarding-slide">
					<div class="onboarding-side-by-side">
						<div class="onboarding-content with-gradient">
							<h4 class="onboarding-title">Qualificar e Convidar</h4>
							<div class="onboarding-text">
								<p>
									Qualificar o prospecto dentro das habilidades é o primeiro passo do sucesso, a plataforma irá ordernar automáticamente os prospectos que você precisa dar atenção, de acordo com cada perfil cadastrado.
									Importantíssimo para melhor leitura da plataforma que você atualize com frequência os prospectos, deixando sua lista sempre ativa.
								</p>
								<p>
									<strong>Network:</strong> perfil com muitos contatos, que conhece muitas pessoas e tem a possibilidade de indicar muitas pessoas para o negócio.
								</p>
								<p>
									<strong>Empreendedor:</strong> vontade de criar seu próprio negócio, inovador, pró-ativo e um perfil totalmente voltado para criar e realizar grandes negócios.
								</p>
								<p>
									<strong>Energia:</strong> perfil com muita vontade de realizar, obstinado e dedicado ao seu sucesso.
								</p>
								<p>
									<strong>Sonhador:</strong> perfil que tem visão de onde quer chegar e almeja grande conquistas pessoais e profissionais.
								</p>
								<p>
									<strong>Recurso:</strong> perfil com recursos financeiros disponíveis para entrar no negócio.
								</p>
								<p>
									<strong>Contato Frio ou Quente:</strong> quente é prospecto que tem um relacionamento próximo a você ou frio para aqueles contatos que conheceu recentemente.
								</p>
								<p>
									Qualificando seus prospectos você terá uma percepção maior de quem falar primeiro, quem tem maior possibilidade de entrar no negócio, e qual a forma de abordagem devo ter de acordo com cada perfil e pontução que o sistema irá gerar.
									<strong>Com todas essas informações você estará pronto para convidar.</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-----------------------
	END - Modal - Invite
	------------------------>
	<!-----------------------
	START - Modal - Present
	------------------------>
	<div aria-hidden="true" class="onboarding-modal modal fade animated" id="modal-present" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-lg modal-centered" role="document">
			<div class="modal-content text-center">
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Fechar</span><span class="os-icon os-icon-close"></span></button>
				<div class="onboarding-slide">
					<div class="onboarding-side-by-side">
						<div class="onboarding-content with-gradient">
							<h4 class="onboarding-title">Apresentar</h4>
							<div class="onboarding-text">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a nulla rutrum, viverra erat ut, ultricies purus. In mi quam, accumsan at gravida ac, dapibus non erat. Morbi lobortis tincidunt tristique. Pellentesque facilisis vehicula sollicitudin. Curabitur rutrum tellus non efficitur tempor. Sed pulvinar leo libero, sed vehicula dolor consectetur id. Duis elit lorem, eleifend sit amet turpis et, tincidunt tincidunt dui. Maecenas tincidunt arcu ut mi porttitor lacinia.
									Donec luctus tincidunt purus id lobortis. Curabitur nec venenatis neque. Donec ac tristique nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus varius aliquet ipsum a bibendum. Maecenas laoreet sem at lacus bibendum efficitur. Vivamus eget tincidunt nulla. Vestibulum pellentesque tempor facilisis. Suspendisse a purus ac sem placerat ullamcorper.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-----------------------
	END - Modal - Present
	------------------------>
	<!-----------------------
	START - Modal - Follow
	------------------------>
	<div aria-hidden="true" class="onboarding-modal modal fade animated" id="modal-follow" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-lg modal-centered" role="document">
			<div class="modal-content text-center">
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Fechar</span><span class="os-icon os-icon-close"></span></button>
				<div class="onboarding-slide">
					<div class="onboarding-side-by-side">
						<div class="onboarding-content with-gradient">
							<h4 class="onboarding-title">Acompanhar</h4>
							<div class="onboarding-text">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a nulla rutrum, viverra erat ut, ultricies purus. In mi quam, accumsan at gravida ac, dapibus non erat. Morbi lobortis tincidunt tristique. Pellentesque facilisis vehicula sollicitudin. Curabitur rutrum tellus non efficitur tempor. Sed pulvinar leo libero, sed vehicula dolor consectetur id. Duis elit lorem, eleifend sit amet turpis et, tincidunt tincidunt dui. Maecenas tincidunt arcu ut mi porttitor lacinia.
									Donec luctus tincidunt purus id lobortis. Curabitur nec venenatis neque. Donec ac tristique nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus varius aliquet ipsum a bibendum. Maecenas laoreet sem at lacus bibendum efficitur. Vivamus eget tincidunt nulla. Vestibulum pellentesque tempor facilisis. Suspendisse a purus ac sem placerat ullamcorper.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-----------------------
	END - Modal - Follow
	------------------------>
	<!-----------------------
	START - Modal - Closing
	------------------------>
	<div aria-hidden="true" class="onboarding-modal modal fade animated" id="modal-closing" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-lg modal-centered" role="document">
			<div class="modal-content text-center">
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Fechar</span><span class="os-icon os-icon-close"></span></button>
				<div class="onboarding-slide">
					<div class="onboarding-side-by-side">
						<div class="onboarding-content with-gradient">
							<h4 class="onboarding-title">Fechamento</h4>
							<div class="onboarding-text">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a nulla rutrum, viverra erat ut, ultricies purus. In mi quam, accumsan at gravida ac, dapibus non erat. Morbi lobortis tincidunt tristique. Pellentesque facilisis vehicula sollicitudin. Curabitur rutrum tellus non efficitur tempor. Sed pulvinar leo libero, sed vehicula dolor consectetur id. Duis elit lorem, eleifend sit amet turpis et, tincidunt tincidunt dui. Maecenas tincidunt arcu ut mi porttitor lacinia.
									Donec luctus tincidunt purus id lobortis. Curabitur nec venenatis neque. Donec ac tristique nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus varius aliquet ipsum a bibendum. Maecenas laoreet sem at lacus bibendum efficitur. Vivamus eget tincidunt nulla. Vestibulum pellentesque tempor facilisis. Suspendisse a purus ac sem placerat ullamcorper.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-----------------------
	END - Modal - Closing
	------------------------>
	<!-----------------------
	START - Modal - New APN
	------------------------>
	<div aria-hidden="true" class="onboarding-modal modal fade animated" id="modal-new-apn" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-lg modal-centered" role="document">
			<div class="modal-content text-center">
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Fechar</span><span class="os-icon os-icon-close"></span></button>
				<div class="onboarding-slide">
					<div class="onboarding-side-by-side">
						<div class="onboarding-content with-gradient">
							<h4 class="onboarding-title">Marcar Apresentação</h4>
							<div class="onboarding-text">Parar marcar apresentação com o respectivo prospecto preencha as informações abaixo</div>
							<form>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="">Data</label>
											<div class="date-input">
												<input class="single-daterange form-control" placeholder="Data" value="01/01/2018" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="">Horario</label>
											<div class="date-input">
												<input class="timepicker timepicker-without-dropdown form-control" placeholder="00:00" value="00:00" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="">Local</label>
											<textarea class="form-control" placeholder="Onde acontecerá a apresentação?" value=""></textarea>
										</div>
									</div>
								</div>
							</form>
						</div>
						<button class="slick-complete-r slick-arrow mt-15" aria-label="Gravar" type="button" aria-disabled="false">Gravar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-----------------------
	END - Modal - New APN
	------------------------>
	<!-----------------------
	START - Modal - Change APN
	------------------------>
	<div aria-hidden="true" class="onboarding-modal modal fade animated" id="modal-change-apn" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-lg modal-centered" role="document">
			<div class="modal-content text-center">
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Fechar</span><span class="os-icon os-icon-close"></span></button>
				<div class="onboarding-slide">
					<div class="onboarding-side-by-side">
						<div class="onboarding-content with-gradient">
							<h4 class="onboarding-title">Alterar Apresentação</h4>
							<div class="onboarding-text">Parar alterar dia e local da apresentação corrija as informações abaixo</div>
							<form>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="">Data</label>
											<div class="date-input">
												<input class="single-daterange form-control" value="06/06/2018" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="">Horario</label>
											<div class="date-input">
												<input class="timepicker timepicker-without-dropdown form-control" value="12:30" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="">Local</label>
											<textarea class="form-control" placeholder="Onde acontecerá a apresentação?">Casa do Sergio - Rua Palmeiras Qd. 30 Lt. 05 - Setor dos Afonsos</textarea>
										</div>
									</div>
								</div>
							</form>
						</div>
						<button class="slick-complete-r slick-arrow mt-15" aria-label="Gravar" type="button" aria-disabled="false">Gravar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-----------------------
	END - Modal - Change APN
	------------------------>
	<!-----------------------
	START - Modal - Qualify
	------------------------>
	<div aria-hidden="true" class="onboarding-modal modal fade animated" id="modal-qualify" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-lg modal-centered" role="document">
			<div class="modal-content text-center">
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Fechar</span><span class="os-icon os-icon-close"></span></button>
				<div class="onboarding-slide">
					<div class="onboarding-side-by-side">
						<div class="onboarding-content with-gradient">
							<h4 class="onboarding-title">Qualificar Prospecto</h4>
							<div class="onboarding-text">Para qualificar o prospectado que está cadastrando, preencha as informações abaixo.</div>
							<form>
								<div class="form-group row">
									<label class="col-form-label col-sm-3" for=""> Network</label>
									<div class="col-sm-9">
										<select class="form-control">
											<option selected>Selecione</option>
											<option>Muito Baixo (1) </option>
											<option>Baixo (2)</option>
											<option>Médio (3)</option>
											<option>Alto (4)</option>
											<option>Muito Alto (5)</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-sm-3" for=""> Credibilidade</label>
									<div class="col-sm-9">
										<select class="form-control">
											<option selected>Selecione</option>
											<option>Muito Baixo (1) </option>
											<option>Baixo (2)</option>
											<option>Médio (3)</option>
											<option>Alto (4)</option>
											<option>Muito Alto (5)</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-sm-3" for=""> Empreendedor</label>
									<div class="col-sm-9">
										<select class="form-control">
											<option selected>Selecione</option>
											<option>Muito Baixo (1) </option>
											<option>Baixo (2)</option>
											<option>Médio (3)</option>
											<option>Alto (4)</option>
											<option>Muito Alto (5)</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-sm-3" for=""> Energia</label>
									<div class="col-sm-9">
										<select class="form-control">
											<option selected>Selecione</option>
											<option>Muito Baixo (1) </option>
											<option>Baixo (2)</option>
											<option>Médio (3)</option>
											<option>Alto (4)</option>
											<option>Muito Alto (5)</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-sm-3" for=""> Sonhador</label>
									<div class="col-sm-9">
										<select class="form-control">
											<option selected>Selecione</option>
											<option>Muito Baixo (1) </option>
											<option>Baixo (2)</option>
											<option>Médio (3)</option>
											<option>Alto (4)</option>
											<option>Muito Alto (5)</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-sm-3" for=""> Recurso</label>
									<div class="col-sm-9">
										<select class="form-control">
											<option selected>Selecione</option>
											<option>Muito Baixo (1) </option>
											<option>Baixo (2)</option>
											<option>Médio (3)</option>
											<option>Alto (4)</option>
											<option>Muito Alto (5)</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-form-label col-sm-3" for=""> Tipo de Contato</label>
									<div class="col-sm-9">
										<select class="form-control">
											<option selected>Selecione</option>
											<option>Frio</option>
											<option>Quente</option>
										</select>
										<small class="form-text text-muted">
											"Frio" para contatos de terceiros. "Quente" para seus contatos próximos.
										</small>
									</div>
								</div>
							</form>
						</div>
						<button class="slick-complete-r slick-arrow" aria-label="Concluir" type="button" aria-disabled="false">Concluir</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-----------------------
	END - Modal - Qualify
	------------------------>

	<script>
		window.onload = function () {
			changeBody();
		}
	</script>
	

	@endsection