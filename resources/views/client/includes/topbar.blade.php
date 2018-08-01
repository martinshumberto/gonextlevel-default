
<div class="top-bar color-scheme-transparent">
<!--------------------
START - Top Menu Controls
-------------------->
<div class="top-menu-controls">
	<div class="element-search autosuggest-search-activator">
		<input placeholder="Buscar..." type="text">
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

<!--------------------
START - User avatar and menu in secondary top menu
-------------------->
<div class="logged-user-w">
	<div class="logged-user-i">
		<div class="avatar-w"><img alt="" src="{!!url("/")!!}/public/img/{!!Auth::user()->image!!}"></div>
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
					<li><a href="{!!route('client-singatures')!!}"><i class="icon-feather-award"></i><span>Assinatura</span></a></li>
					<li><a href="{!!route('client-notifications')!!}"><i class="os-icon os-icon-others-43"></i><span>Notificações</span></a></li>
					<li><a href="{!!route('client-logout')!!}"><i class="os-icon os-icon-signs-11"></i><span>Sair</span></a></li>
			</ul>
		</div>
	</div>
</div>
<!--------------------
END - User avatar and menu in secondary top menu
-------------------->
</div>
<!--------------------
END - Top Menu Controls
-------------------->
</div>