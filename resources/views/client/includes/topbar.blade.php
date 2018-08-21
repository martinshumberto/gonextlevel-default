<!--------------------
START - Mobile Menu
-------------------->

<div class="menu-mobile menu-activated-on-click color-scheme-dark">
	<div class="mm-logo-buttons-w">
		<a class="mm-logo" href="{!!route('client-dashboard')!!}"><img src="{{ asset('public/img/logo.png') }}"><span>Go Next Level</span></a>
		<div class="mm-buttons">
			<div class="content-panel-open">
				<div class="os-icon os-icon-grid-circles"></div>
			</div>
			<div class="mobile-menu-trigger">
				<div class="os-icon os-icon-hamburger-menu-1"></div>
			</div>
		</div>
	</div>
	<div class="menu-and-user">
		<div class="logged-user-w">
			<div class="avatar-w"><img alt="" src="{{ asset('public/img/avatar1.jpg') }}"></div>
			<div class="logged-user-info-w">
				<div class="logged-user-name">{!!Auth::user()->name!!}</div>
				<div class="logged-user-role">{!!Auth::user()->stage()!!}</div>
			</div>
		</div>
		<!--------------------
		START - Mobile Menu List
		-------------------->
		<ul class="main-menu">
			<li>
				<a href="{!!route('client-dashboard')!!}">
					<div class="icon-w">
						<div class="os-icon os-icon-layout"></div>
					</div>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="selected has-sub-menu">
				<a href="{!!route('client-dashboard')!!}">
					<div class="icon-w">
						<div class="os-icon os-icon-layout"></div>
					</div>
					<span>Dashboard</span>
				</a>					
				</li>
				<li class="has-sub-menu">
					<a href="">
						<div class="icon-w">
							<div class="icon-feather-trending-up"></div>
						</div>
						<span>Prospectos</span>
					</a>
					<ul class="sub-menu">
						<li><a href="{!!route('client-prospect-create')!!}" data-target="#modal-register" data-toggle="modal">Adicionar</a></li>
						<li><a href="{!!route('client-prospect-pipeline')!!}">Pipeline de Prospectos</a></li>
						<li><a href="{!!route('client-prospect')!!}">Visão Geral</a></li>
						<li><a href="{!!route('client-prospect-reports')!!}">Relatório <strong class="badge badge-danger">Novidade</strong></a></li>
					</ul>
				</li>
				<li class="has-sub-menu">
					<a href="">
						<div class="icon-w">
							<div class="icon-feather-play-circle"></div>
						</div>
						<span>Treinamentos</span>
					</a>
					<ul class="sub-menu">
						<li><a href="/treinamentos/convidar">Convidar</a></li>
						<li><a href="/treinamentos/apresentar">Apresentar</a></li>
						<li><a href="/treinamentos/acompanhar">Acompanhar</a></li>
						<li><a href="/treinamentos/fechamento">Fechamento</a></li>
						<li><a href="/treinamentos/seta">SETA</a></li>
						<li><a href="/treinamentos/materiais-de-apoio">Materiais de Apoio <strong class="badge badge-danger">Novo</strong></a></li>
					</ul>
				</li>
				<li class="sub-header"><span>Apps</span></li>
				<li class="has-sub-menu">
					<a href="">
						<div class="icon-w">
							<div class="icon-feather-zap"></div>
						</div>
						<span>Aplicativos</span>
					</a>
					<ul class="sub-menu">
						<li><a href="/aplicativos/chat">Chat <strong class="badge badge-danger">Novo</strong></a></li>
						<li><a href="{!!route('client-schedule')!!}">Agenda</a></li>
						<li><a href="/aplicativos/equipe">Gestor de Equipe <strong class="badge badge-danger">Novo</strong></a></li>
					</ul>
				</li>
				<li class="sub-header"><span>Config</span></li>
				<li class="has-sub-menu">
					<a href="">
						<div class="icon-w">
							<div class="icon-feather-settings"></div>
						</div>
						<span>Configurações</span>
					</a>
					<ul class="sub-menu">
						<li><a href="/config/grupos">Grupos</a></li>
						<li><a href="/config/modelos-de-email">Modelos de E-mail</a></li>
					</ul>
				</li>

			</ul>
		<!--------------------
		END - Mobile Menu List
		-------------------->

		<div class="mobile-menu-magic">
			<h4>GO NEXT LEVEL</h4>
			<p>Tenha experiência máxima em nossa plataforma pelo PC/Notebook.</p>
		</div>
	</div>
</div>
<!--------------------
END - Mobile Menu
-------------------->

<!--------------------
START - Main Menu
-------------------->
<div class="menu-w color-scheme-light color-style-default menu-position-top menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-bright menu-activated-on-hover menu-has-selected-link">
	<div class="logo-w">
		<a class="logo" href="{!!route('client-dashboard')!!}">
			<div class="logo-element"></div>
			<div class="logo-label">Go Next Level</div>
		</a>
	</div>
	<!--------------------
	START - Messages Link in secondary top menu
	-------------------->
	<div class="messages-notifications os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-mail-14"></i>
	<div class="new-messages-count">12</div>
	<div class="os-dropdown light message-list">
		<ul>
			<li>
			<a href="#">
				<div class="user-avatar-w"><img alt="" src="http://gonextlevel.consilio.com.br/public/img/avatar1.jpg"></div>
				<div class="message-content">
					<h6 class="message-from">John Mayers</h6>
					<h6 class="message-title">Account Update</h6></div>
				</a>
			</li>
			<li>
			<a href="#">
				<div class="user-avatar-w"><img alt="" src="http://gonextlevel.consilio.com.br/public/img/avatar2.jpg"></div>
				<div class="message-content">
					<h6 class="message-from">Phil Jones</h6>
					<h6 class="message-title">Secutiry Updates</h6></div>
				</a>
			</li>
			<li>
			<a href="#">
				<div class="user-avatar-w"><img alt="" src="http://gonextlevel.consilio.com.br/public/img/avatar3.jpg"></div>
				<div class="message-content">
					<h6 class="message-from">Bekky Simpson</h6>
					<h6 class="message-title">Vacation Rentals</h6></div>
				</a>
			</li>
			<li>
			<a href="#">
				<div class="user-avatar-w"><img alt="" src="http://gonextlevel.consilio.com.br/public/img/avatar4.jpg"></div>
				<div class="message-content">
					<h6 class="message-from">Alice Priskon</h6>
					<h6 class="message-title">Payment Confirmation</h6></div>
				</a>
			</li>
			</ul>
		</div>
	</div>
	<!--------------------
	END - Messages Link in secondary top menu
	-------------------->
	<div class="logged-user-w avatar-inline">
		<div class="logged-user-i">
			<div class="avatar-w"><img alt="" src="{!!url("/")!!}/public/img/{!!Auth::user()->image!!}"></div>
			<div class="logged-user-info-w">
				<div class="logged-user-name">{!!Auth::user()->name!!}</div>
				<div class="logged-user-role">{!!Auth::user()->stage()!!}</div>
			</div>
			<div class="logged-user-toggler-arrow">
				<div class="os-icon os-icon-chevron-down"></div>
			</div>
			<div class="logged-user-menu color-style-bright">
				<div class="logged-user-avatar-info">
					<div class="avatar-w"><img alt="" src="{!!url("/")!!}/public/img/{!!Auth::user()->image!!}"></div>
					<div class="logged-user-info-w">
						<div class="logged-user-name">{!!Auth::user()->name!!}</div>
						<div class="logged-user-role">{!!Auth::user()->stage()!!}</div>
					</div>
				</div>
				<div class="bg-icon"><i class="icon-feather-user"></i></div>
				<ul>
					<li><a href="{!!route('client-info')!!}"><i class="os-icon os-icon-ui-46"></i><span>Meus dados</span></a></li>
					<li><a href="{!!route('client-profile')!!}"><i class="os-icon os-icon-user-male-circle2"></i><span>Perfil</span></a></li>
					<li><a href="{!!route('client-signature')!!}"><i class="icon-feather-award"></i><span>Assinatura</span></a></li>
					<li><a href="{!!route('client-notifications')!!}"><i class="os-icon os-icon-others-43"></i><span>Notificações</span></a></li>
					<li><a href="{!!route('client-logout')!!}"><i class="os-icon os-icon-signs-11"></i><span>Sair</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<h1 class="menu-page-header">Menu</h1>
	<ul class="main-menu">
		<li class="sub-header"><span>Navegação</span></li>
		<li class="selected">
			<a href="{!!route('client-dashboard')!!}">
				<div class="icon-w">
					<div class="os-icon os-icon-layout"></div>
				</div>
				<span>Dashboard</span>
			</a>
		</li>
		<li class=" has-sub-menu">
			<a href="#">
				<div class="icon-w">
					<div class="icon-feather-trending-up"></div>
				</div>
				<span>Prospectos</span>
			</a>
			<div class="sub-menu-w">
				<div class="sub-menu-header">Prospectos</div>
				<div class="sub-menu-icon"><i class="icon-feather-trending-up"></i></div>
				<div class="sub-menu-i">
					<ul class="sub-menu">
						<li><a href="" data-target="#modal-register" data-toggle="modal">Adicionar</a></li>
						<li><a href="{!!route('client-prospect-pipeline')!!}">Pipeline de Prospectos</a></li>
						<li><a href="{!!route('client-prospect')!!}">Visão Geral</a></li>
						<li><a href="{!!route('client-prospect-reports')!!}">Relatório <strong class="badge badge-warning">Em breve</strong></a></li>
					</ul>
				</div>
			</div>
		</li>
		<li class=" has-sub-menu">
			<a href="#">
				<div class="icon-w">
					<div class="icon-feather-play-circle"></div>
				</div>
				<span>Treinamentos</span>
			</a>
			<div class="sub-menu-w">
				<div class="sub-menu-header">Treinamentos</div>
				<div class="sub-menu-icon"><i class="icon-feather-play-circle"></i></div>
				<div class="sub-menu-i">
					<ul class="sub-menu">
						<li><a href="/treinamentos/convidar">Convidar</a></li>
						<li><a href="/treinamentos/apresentar">Apresentar</a></li>
						<li><a href="/treinamentos/acompanhar">Acompanhar</a></li>
						<li><a href="/treinamentos/fechamento">Fechamento</a></li>
						<li><a href="/treinamentos/seta">SETA</a></li>
						<li><a href="/treinamentos/materiais-de-apoio">Materiais de Apoio <strong class="badge badge-danger">Novo</strong></a></li>
					</ul>
				</div>
			</div>
		</li>

		<li class="sub-header"><span>Apps</span></li>
		<li class="has-sub-menu">
			<a href="#">
				<div class="icon-w">
					<div class="icon-feather-zap"></div>
				</div>
				<span>Aplicativos</span>
			</a>
			<div class="sub-menu-w">
				<div class="sub-menu-header">Aplicativos</div>
				<div class="sub-menu-icon"><i class="icon-feather-zap"></i></div>
				<div class="sub-menu-i">
					<ul class="sub-menu">
						<li><a href="/aplicativos/chat">Chat <strong class="badge badge-warning">Em breve</strong></a></li>
						<li><a href="{!!route('client-schedule')!!}">Agenda</a></li>
						<li><a href="/aplicativos/gestor-de-equipe">Gestor de Equipe <strong class="badge badge-warning">Em breve</strong></a></li>
					</ul>
				</div>
			</div>
		</li>

		<li class="sub-header"><span>Config</span></li>
		<li class="has-sub-menu">
			<a href="#">
				<div class="icon-w">
					<div class="icon-feather-settings"></div>
				</div>
				<span>Configurações</span>
			</a>
			<div class="sub-menu-w">
				<div class="sub-menu-header">Configurações</div>
				<div class="sub-menu-icon"><i class="icon-feather-settings"></i></div>
				<div class="sub-menu-i">
					<ul class="sub-menu">
						<li><a href="/config/grupos">Grupos</a></li>
						<li><a href="/config/modelos-de-email">Modelos de E-mail</a></li>
					</ul>
				</div>
			</div>
		</li>

	</ul>
</div>
<!--------------------
END - Main Menu
-------------------->