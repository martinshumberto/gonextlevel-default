@extends('client.layouts.default')


@section('content')
<ul class="breadcrumb">
	<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="#">Aplicativos</a></li>
	<li class="breadcrumb-item"><span>Chat</span></li>
</ul>

<div class="content-i">
	<div class="content-box">
		<div class="element-wrapper">
			<h6 class="element-header">Chat</h6>
			<div class="">
				<div class="row">
					<div class="col-sm-3">
						<div class="chat-search">
							<div class="element-search">
								<input placeholder="Procure Membros da Equipe" type="text" class="search-member-chat">
							</div>
						</div>

						<div class="ae-list-w">
							<div class="ae-list ps ps--theme_default ps--active-y" data-ps-id="5ef97d66-73cd-0a62-566b-85efca893960">
								<div class="ae-item with-status  status-green">
									<div class="aei-image">
										<div class="user-avatar-w">
											<img alt="" src="{!!url("/")!!}/public/img/avatar1.jpg">
										</div>
									</div>
									<div class="aei-content">
										<div class="aei-timestamp">1:25pm</div>
										<h6 class="aei-title">Wallace Fontes</h6>
										<div class="aei-sub-title">Usuário</div>
										<div class="aei-text">
											Estou chegando em casa...
										</div>
									</div>
								</div>


								<div class="ae-item with-status  status-green">
									<div class="aei-image">
										<div class="user-avatar-w">
											<img alt="" src="{!!url("/")!!}/public/img/avatar2.jpg"></div>
										</div>
										<div class="aei-content">
											<div class="aei-timestamp">1 week ago</div>
											<h6 class="aei-title">Humberto Martins</h6>
											<div class="aei-sub-title">Usuário</div>
											<div class="aei-text">
												Hoje fechei 5 prospect...
											</div>
										</div>
									</div>
									<div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
										<div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
									</div>
									<div class="ps__scrollbar-y-rail" style="top: 0px; height: 1000px; right: 0px;">
										<div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 600px;"></div>
									</div>
								</div>
								<a class="ae-load-more" href="#"><span>Load More Messages</span></a>
							</div>
						</div>
						<div class="col-sm-7">


							<div class="full-chat-w">



								<div class="full-chat-middle">
									<div class="chat-head">
										<div class="user-info">
											<span>To:</span>
											<a href="#">John Mayers</a>
										</div>
										<div class="user-actions">
										</div>
									</div>
									<div class="chat-content-w">
										<div class="chat-content">
											<div class="chat-message">
												<div class="chat-message-content-w">
													<div class="chat-message-content">
														Hi, my name is Mike, I will be happy to assist you
													</div>
												</div>
												<div class="chat-message-avatar">
													<img alt="" src="{!!url("/")!!}/public/img/avatar3.jpg">
												</div>
												<div class="chat-message-date">9:12am</div>
											</div>
											<div class="chat-date-separator">
												<span>Yesterday</span>
											</div>
											<div class="chat-message self">
												<div class="chat-message-content-w">
													<div class="chat-message-content">
														That walls over which the drawers. Gone studies to titles have audiences of and concepts was motivator
													</div>
												</div>
												<div class="chat-message-date">1:23pm</div>
												<div class="chat-message-avatar">
													<img alt="" src="{!!url("/")!!}/public/img/avatar1.jpg">
												</div>
											</div>
											<div class="chat-message">
												<div class="chat-message-content-w">
													<div class="chat-message-content">Slept train nearby a its is design size agreeable. And check cons, but countries the was to such any founding company
													</div>
												</div>
												<div class="chat-message-avatar">
													<img alt="" src="{!!url("/")!!}/public/img/avatar3.jpg">
												</div><div class="chat-message-date">3:45am</div>
											</div>
										</div>
									</div>
									<div class="chat-controls">
										<div class="chat-input">
											<input placeholder="Type your message here..." type="text">
										</div>
										<div class="chat-input-extra">
											<div class="chat-extra-actions">
												<a href="#">
													<i class="os-icon os-icon-mail-07"></i>
												</a>
												<a href="#">
													<i class="os-icon os-icon-phone-18"></i>
												</a>
												<a href="#">
													<i class="os-icon os-icon-phone-15"></i>
												</a>
											</div>
											<div class="chat-btn">
												<a class="btn btn-primary btn-sm" href="#">Reply</a>
											</div>
										</div>
									</div>
								</div>



							</div>



						</div>
						<div class="col-sm-2">
							
							<div class="full-chat-w">
								
								<div class="full-chat-right">
									<div class="user-intro">
										<div class="avatar">
											<img alt="" src="{!!url("/")!!}/public/img/avatar1.jpg">
										</div>
										<div class="user-intro-info">
											<h5 class="user-name">Wallace Fontes</h5>
											<div class="user-sub">Usuário</div>
											<div class="user-social">
												<a href="#">
													<i class="os-icon os-icon-twitter"></i>
												</a>
												<a href="#">
													<i class="os-icon os-icon-facebook"></i>
												</a>
											</div>
										</div>
									</div>
									<div class="chat-info-section">
										<div class="ci-header">
											<i class="os-icon os-icon-documents-03"></i>
											<span>Shared Files</span>
										</div>
										<div class="ci-content">
											<div class="ci-file-list">
												<ul>
													<li>
														<a href="#">Annual Revenue.pdf</a>
													</li>
													<li>
														<a href="#">Expenses.xls</a>
													</li>
													<li>
														<a href="#">Business Plan.doc</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="chat-info-section">
										<div class="ci-header">
											<i class="os-icon os-icon-documents-07"></i>
											<span>Shared Photos</span>
										</div>
										<div class="ci-content">
											<div class="ci-photos-list">
												<img alt="" src="{!!url("/")!!}/public/{!!url("/")!!}/public/img/portfolio9.jpg">
												<img alt="" src="{!!url("/")!!}/public/img/portfolio2.jpg">
												<img alt="" src="{!!url("/")!!}/public/{!!url("/")!!}/public/img/portfolio12.jpg">
												<img alt="" src="{!!url("/")!!}/public/img/portfolio14.jpg">
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