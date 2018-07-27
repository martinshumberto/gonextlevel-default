<!--------------------
START - Mobile Menu
-------------------->
<div class="menu-mobile menu-activated-on-click color-scheme-dark">
	<div class="mm-logo-buttons-w">
		<a class="mm-logo" href="/"><img src="{{ asset('public/img/logo.png') }}"><span>Go Next Level</span></a>
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
				<div class="logged-user-name">Humberto Martins</div>
				<div class="logged-user-role">Consultor</div>
			</div>
		</div>
		<!--------------------
		START - Mobile Menu List
		-------------------->
		<ul class="main-menu">
			<li>
				<a href="/">
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
					<li><a href="/prospectos" data-target="#modal-register" data-toggle="modal">Adicionar</a></li>
					<li><a href="/prospectos/pipeline">Pipeline de Prospectos</a></li>
					<li><a href="/prospectos/visao-geral">Visão Geral</a></li>
					<li><a href="/prospectos/relatorio">Relatório <strong class="badge badge-danger">Novidade</strong></a></li>
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
				</ul>
			</li>
			<li>
				<a href="/material-de-apoio">
					<div class="icon-w">
						<div class="icon-feather-folder"></div>
					</div>
					<span>Material de Apoio</span>
				</a>
			</li>
			<li class="sub-header"><span>Apps</span></li>
			<li>
				<a href="/chat">
					<div class="icon-w">
						<div class="icon-feather-message-square"></div>
					</div>
					<span>Chat</span>
				</a>
			</li>
			<li>
				<a href="/equipe">
					<div class="icon-w">
						<div class="icon-feather-users"></div>
					</div>
					<span>Equipe</span>
				</a>
			</li>
			<li class="sub-header"><span>Config</span></li>
			<li>
				<a href="/configuracoes/grupos">
					<div class="icon-w">
						<div class="icon-feather-list"></div>
					</div>
					<span>Grupos</span>
				</a>
			</li>
			<li>
				<a href="/configuracoes/modelos-de-email">
					<div class="icon-w">
						<div class="icon-feather-mail"></div>
					</div>
					<span>Modelos de E-mail</span>
				</a>
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
<div class="menu-w selected-menu-color-light menu-has-selected-link menu-activated-on-click color-scheme-light color-style-transparent sub-menu-color-light menu-position-side menu-side-left menu-layout-compact sub-menu-style-inside">
	<div class="logo-w">
		<a class="logo" href="/">
			<div class="logo-element"></div>
			<div class="logo-label">Go Next Level</div>
		</a>
	</div>
	<div class="logged-user-w avatar-inline">
		<div class="logged-user-i">
			<div class="avatar-w"><img alt="" src="{{ asset('public/img/avatar1.jpg') }}"></div>
			<div class="logged-user-info-w">
				<div class="logged-user-name">Humberto Martins</div>
				<div class="logged-user-role">Consultor</div>
			</div>
			<div class="logged-user-toggler-arrow">
				<div class="os-icon os-icon-chevron-down"></div>
			</div>
			<div class="logged-user-menu color-style-bright">
				<div class="logged-user-avatar-info">
					<div class="avatar-w"><img alt="" src="{{ asset('public/img/avatar1.jpg') }}"></div>
					<div class="logged-user-info-w">
						<div class="logged-user-name">Humberto Martins</div>
						<div class="logged-user-role">Consultor</div>
					</div>
				</div>
				<div class="bg-icon"><i class="icon-feather-user"></i></div>
				<ul>
					<li><a href="#"><i class="os-icon os-icon-ui-46"></i><span>Meus dados</span></a></li>
					<li><a href="/perfil"><i class="os-icon os-icon-user-male-circle2"></i><span>Perfil</span></a></li>
					<li><a href="/assinatura"><i class="icon-feather-award"></i><span>Assinatura</span></a></li>
					<li><a href="/notificacoes"><i class="os-icon os-icon-others-43"></i><span>Notificações</span></a></li>
					<li><a href="/sair"><i class="os-icon os-icon-signs-11"></i><span>Sair</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="element-search autosuggest-search-activator">
		<input placeholder="Buscar..." type="text">
	</div>
	<h1 class="menu-page-header">Menu</h1>
	<ul class="main-menu">
		<li class="sub-header"><span>Navegação</span></li>
		<li class="selected">
			<a href="/index">
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
						<li><a href="/prospectos" data-target="#modal-register" data-toggle="modal">Adicionar</a></li>
						<li><a href="/prospectos/pipeline">Pipeline de Prospectos</a></li>
						<li><a href="/prospectos/visao-geral">Visão Geral</a></li>
						<li><a href="/prospectos/relatorio">Relatório <strong class="badge badge-danger">Novidade</strong></a></li>
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
					</ul>
				</div>
			</div>
		</li>
		<li class="">
			<a href="/materiais-de-apoio">
				<div class="icon-w">
					<div class="icon-feather-folder"></div>
				</div><span>Materiais de apoio</span>
			</a>
		</li>

		<li class="sub-header"><span>Apps</span></li>
		<li class="">
			<a href="/chat">
				<div class="icon-w">
					<div class="icon-feather-message-square"></div>
				</div><span>Chat</span>
			</a>
		</li>
		<li class="">
			<a href="/equipe">
				<div class="icon-w">
					<div class="icon-feather-users"></div>
				</div><span>Equipe</span>
			</a>
		</li>

		<li class="sub-header"><span>Configurações</span></li>
		<li class="">
			<a href="/configuracoes/grupos">
				<div class="icon-w">
					<div class="icon-feather-list"></div>
				</div><span>Grupos</span>
			</a>
		</li>
		<li class="">
			<a href="/configuracoes/modelos-de-email">
				<div class="icon-w">
					<div class="icon-feather-mail"></div>
				</div><span>Modelos de E-mail</span>
			</a>
		</li>
	</ul>
</div>
<!--------------------
END - Main Menu
-------------------->