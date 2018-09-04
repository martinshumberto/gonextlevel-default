@extends('client.layouts.default')


@section('content')

	<!--------------------

	START - Breadcrumbs
	-------------------->
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="#">Aplicativos</a></li>
		<li class="breadcrumb-item"><span>Chat</span></li>
	</ul>
	<!--------------------
	END - Breadcrumbs
	-------------------->

	<div class="content-i">
		<div class="content-box">
			<div class="full-chat-w">
				<div class="full-chat-i">
					<div class="full-chat-left">
						<div class="os-tabs-w">
							<ul class="nav nav-tabs upper centered">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tab_overview"><i class="os-icon os-icon-mail-14"></i><span>Chats</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab_sales"><i class="os-icon os-icon-ui-93"></i><span>Contacts</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab_sales"><i class="os-icon os-icon-ui-02"></i><span>Favorites</span></a>
								</li>
							</ul>
						</div>
						<div class="chat-search">
							<div class="element-search">
								<input placeholder="Search users by name..." type="text">
							</div>
						</div>
						<div class="user-list">
							<div class="user-w">
								<div class="avatar with-status status-green">
									<img alt="" src="img/avatar1.jpg">
								</div>
								<div class="user-info">
									<div class="user-date">
										12 min
									</div>
									<div class="user-name">
										John Mayers
									</div>
									<div class="last-message">
										What is going on, are we...
									</div>
								</div>
							</div>
							<div class="user-w">
								<div class="avatar with-status status-green">
									<img alt="" src="img/avatar2.jpg">
								</div>
								<div class="user-info">
									<div class="user-date">
										2 hours
									</div>
									<div class="user-name">
										Bill Railey
									</div>
									<div class="last-message">
										Yes, I&#39;ve sent you details...
									</div>
								</div>
							</div>
							<div class="user-w">
								<div class="avatar with-status status-green">
									<img alt="" src="img/avatar3.jpg">
								</div>
								<div class="user-info">
									<div class="user-date">
										24 min
									</div>
									<div class="user-name">
										Simon Backs
									</div>
									<div class="last-message">
										What is going on, are we...
									</div>
								</div>
							</div>
							<div class="user-w">
								<div class="avatar with-status status-green">
									<img alt="" src="img/avatar1.jpg">
								</div>
								<div class="user-info">
									<div class="user-date">
										7 min
									</div>
									<div class="user-name">
										Kelley Brooks
									</div>
									<div class="last-message">
										Can you send me this...
									</div>
								</div>
							</div>
							<div class="user-w">
								<div class="avatar with-status status-green">
									<img alt="" src="img/avatar7.jpg">
								</div>
								<div class="user-info">
									<div class="user-date">
										4 hours
									</div>
									<div class="user-name">
										Vinie Jones
									</div>
									<div class="last-message">
										What is going on, are we...
									</div>
								</div>
							</div>
							<div class="user-w">
								<div class="avatar with-status status-green">
									<img alt="" src="img/avatar1.jpg">
								</div>
								<div class="user-info">
									<div class="user-date">
										2 days
									</div>
									<div class="user-name">
										Brad Pitt
									</div>
									<div class="last-message">
										They have submitted users...
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="full-chat-middle">
						<div class="chat-head">
							<div class="user-info">
								<span>To:</span><a href="#">John Mayers</a>
							</div>
							<div class="user-actions">
								<a href="#"><i class="os-icon os-icon-mail-07"></i></a><a href="#"><i class="os-icon os-icon-phone-18"></i></a><a href="#"><i class="os-icon os-icon-phone-15"></i></a>
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
										<img alt="" src="img/avatar3.jpg">
									</div>
									<div class="chat-message-date">
										9:12am
									</div>
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
									<div class="chat-message-date">
										1:23pm
									</div>
									<div class="chat-message-avatar">
										<img alt="" src="img/avatar1.jpg">
									</div>
								</div>
								<div class="chat-message">
									<div class="chat-message-content-w">
										<div class="chat-message-content">
											Slept train nearby a its is design size agreeable. And check cons, but countries the was to such any founding company
										</div>
									</div>
									<div class="chat-message-avatar">
										<img alt="" src="img/avatar3.jpg">
									</div>
									<div class="chat-message-date">
										3:45am
									</div>
								</div>
							</div>
						</div>
						<div class="chat-controls">
							<div class="chat-input">
								<input placeholder="Type your message here..." type="text">
							</div>
							<div class="chat-input-extra">
								<div class="chat-extra-actions">
									<a href="#"><i class="os-icon os-icon-mail-07"></i></a><a href="#"><i class="os-icon os-icon-phone-18"></i></a><a href="#"><i class="os-icon os-icon-phone-15"></i></a>
								</div>
								<div class="chat-btn">
									<a class="btn btn-primary btn-sm" href="#">Reply</a>
								</div>
							</div>
						</div>
					</div>
					<div class="full-chat-right">
						<div class="user-intro">
							<div class="avatar">
								<img alt="" src="img/avatar1.jpg">
							</div>
							<div class="user-intro-info">
								<h5 class="user-name">
									John Mayers
								</h5>
								<div class="user-sub">
									San Francisco, CA
								</div>
								<div class="user-social">
									<a href="#"><i class="os-icon os-icon-twitter"></i></a><a href="#"><i class="os-icon os-icon-facebook"></i></a>
								</div>
							</div>
						</div>
						<div class="chat-info-section">
							<div class="ci-header">
								<i class="os-icon os-icon-documents-03"></i><span>Shared Files</span>
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
								<i class="os-icon os-icon-documents-07"></i><span>Shared Photos</span>
							</div>
							<div class="ci-content">
								<div class="ci-photos-list">
									<img alt="" src="img/portfolio9.jpg"><img alt="" src="img/portfolio2.jpg"><img alt="" src="img/portfolio12.jpg"><img alt="" src="img/portfolio14.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection