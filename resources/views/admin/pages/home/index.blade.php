@extends('admin.layouts.default')


@section('content')


<div class="content-panel-toggler">
	<i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
</div>
<div class="content-i">
	<div class="content-box">
		<div class="os-tabs-w">
			<div class="os-tabs-controls os-tabs-complex">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a aria-expanded="false" class="nav-link active" data-toggle="tab" href="#tab_overview"><span class="tab-label">Your Portfolio</span><span class="badge badge-success"><i class="os-icon os-icon-arrow-up6"></i><span>22%</span></span></a>
					</li>
					<li class="nav-item">
						<a aria-expanded="false" class="nav-link" data-toggle="tab" href="#tab_sales"><span class="tab-label">Bitcoin</span><span class="tab-value">$7,839.23</span><span class="badge badge-success"><i class="os-icon os-icon-arrow-up6"></i><span>25%</span></span></a>
					</li>
					<li class="nav-item d-none d-xl-block">
						<a aria-expanded="false" class="nav-link" data-toggle="tab" href="#tab_sales"><span class="tab-label">Etherium</span><span class="tab-value">$839.11</span><span class="badge badge-danger"><i class="os-icon os-icon-arrow-down6"></i><span>5%</span></span></a>
					</li>
					<li class="nav-item d-none d-xxxl-block">
						<a aria-expanded="true" class="nav-link" data-toggle="tab" href="#tab_sales"><span class="tab-label">Litecoin</span><span class="tab-value">$1,434.12</span><span class="badge badge-success"><i class="os-icon os-icon-arrow-up6"></i><span>12%</span></span></a>
					</li>
					<li class="nav-item nav-actions d-none d-sm-block">
						<a class="btn btn-grey" href="#"><i class="os-icon os-icon-plus-circle"></i><span>Add Wallet</span></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-lg-8 col-xxl-6">
				<div class="element-balances justify-content-between mobile-full-width">
					<div class="balance balance-v2">
						<div class="balance-title">
							Your Portfolio Balance
						</div>
						<div class="balance-value">
							<span class="d-xxl-none">$72,245</span><span class="d-none d-xxl-inline-block">$171,473</span><span class="trending trending-down-basic"><span>%12</span><i class="os-icon os-icon-arrow-2-down"></i></span>
						</div>
					</div>
					<div class="balance-table pl-sm-2">
						<table class="table table-lightborder table-bordered table-v-compact mb-0">
							<tr>
								<td>
									<strong>2.34</strong>
									<div class="balance-label smaller lighter text-nowrap">
										Bitcoins BTC
									</div>
								</td>
								<td>
									<strong>1.74</strong>
									<div class="balance-label smaller lighter text-nowrap">
										Ripple RPX
									</div>
								</td>
								<td class="d-sm-none d-xxxxl-table-cell d-md-table-cell d-xxl-none">
									<strong>4.82</strong>
									<div class="balance-label smaller lighter text-nowrap">
										Newcoin NCN
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<strong>1.22</strong>
									<div class="balance-label smaller lighter text-nowrap">
										Litecoin LTC
									</div>
								</td>
								<td>
									<strong>1.87</strong>
									<div class="balance-label smaller lighter text-nowrap">
										Etherium ETH
									</div>
								</td>
								<td class="d-sm-none d-xxxxl-table-cell d-md-table-cell d-xxl-none">
									<strong>1.02</strong>
									<div class="balance-label smaller lighter text-nowrap">
										Dogecoin DGC
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="element-wrapper pb-4 mb-4 border-bottom">
					<div class="element-box-tp">
						<a class="btn btn-primary" href="#"><i class="os-icon os-icon-refresh-ccw"></i><span>Deposit Money</span></a><a class="btn btn-grey" href="#"><i class="os-icon os-icon-log-out"></i><span>Withdraw</span></a><a class="btn btn-grey d-none d-sm-inline-block" href="#"><i class="os-icon os-icon-plus-circle"></i><span>Add Wallet</span></a>
					</div>
				</div>
				<div class="element-wrapper compact">
					<div class="element-box-tp">
						<div class="element-actions d-none d-sm-block">
							<form class="form-inline justify-content-sm-end">
								<label class="smaller" for="">Show Period:</label><select class="form-control form-control-sm form-control-faded">
									<option selected="true">
										Last 30 days
									</option>
									<option>
										This Week
									</option>
									<option>
										This Month
									</option>
									<option>
										Today
									</option>
								</select>
							</form>
						</div>
						<h6 class="element-box-header">
							Balance History
						</h6>
						<div class="el-chart-w">
							<canvas data-chart-data="13,28,19,24,43,49,40,35,42,46,38,32,45" height="50" id="liteLineChartV3" width="300"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2 d-none d-xxl-block">
				<div class="element-box less-padding">
					<h6 class="element-box-header text-center">
						Portfolio Distribution
					</h6>
					<div class="el-chart-w">
						<canvas height="120" id="donutChart1" width="120"></canvas>
						<div class="inside-donut-chart-label">
							<strong>263</strong><span>Coins</span>
						</div>
					</div>
					<div class="el-legend condensed">
						<div class="row">
							<div class="col-auto col-xxxxl-6 ml-sm-auto mr-sm-auto">
								<div class="legend-value-w">
									<div class="legend-pin legend-pin-squared" style="background-color: #6896f9;"></div>
									<div class="legend-value">
										<span>Bitcoins</span>
										<div class="legend-sub-value">
											17%, 12 Coins
										</div>
									</div>
								</div>
								<div class="legend-value-w">
									<div class="legend-pin legend-pin-squared" style="background-color: #85c751;"></div>
									<div class="legend-value">
										<span>Litecoin</span>
										<div class="legend-sub-value">
											22%, 0.3 Coins
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 d-none d-xxxxl-block">
								<div class="legend-value-w">
									<div class="legend-pin legend-pin-squared" style="background-color: #806ef9;"></div>
									<div class="legend-value">
										<span>Etherium</span>
										<div class="legend-sub-value">
											3%, 7 Coins
										</div>
									</div>
								</div>
								<div class="legend-value-w">
									<div class="legend-pin legend-pin-squared" style="background-color: #d97b70;"></div>
									<div class="legend-value">
										<span>Ripple</span>
										<div class="legend-sub-value">
											15%, 4 Coins
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4 d-none d-lg-block">
				<div class="cta-w cta-with-media purple">
					<div class="cta-content">
						<div class="highlight-header">
							Example
						</div>
						<h3 class="cta-header">
							Download our app on Google Play Store
						</h3>
						<a class="store-google-btn" href="#"><img alt="" src="img/market-google-play.png"></a>
					</div>
					<div class="cta-media">
						<img alt="" src="img/phone1.png">
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-2">
			<div class="col-6 col-sm-3 col-xxl-2">
				<a class="element-box el-tablo centered trend-in-corner smaller" href="#">
					<div class="label">
						Bitcoin Price
					</div>
					<div class="value">
						$7.484
					</div>
					<div class="trending trending-up">
						<span>12%</span><i class="os-icon os-icon-arrow-up6"></i>
					</div>
				</a>
			</div>
			<div class="col-6 col-sm-3 col-xxl-2">
				<a class="element-box el-tablo centered trend-in-corner smaller" href="#">
					<div class="label">
						Last Month
					</div>
					<div class="value text-danger">
						-$3,248
					</div>
					<div class="trending trending-down">
						<span>12%</span><i class="os-icon os-icon-arrow-down6"></i>
					</div>
				</a>
			</div>
			<div class="col-6 col-sm-3 col-xxl-2">
				<a class="element-box el-tablo centered trend-in-corner smaller" href="#">
					<div class="label">
						Etherium Price
					</div>
					<div class="value">
						$784.12
					</div>
					<div class="trending trending-up">
						<span>12%</span><i class="os-icon os-icon-arrow-up6"></i>
					</div>
				</a>
			</div>
			<div class="col-6 col-sm-3 col-xxl-2">
				<a class="element-box el-tablo centered trend-in-corner smaller" href="#">
					<div class="label">
						Ripple Price
					</div>
					<div class="value">
						$1,284
					</div>
					<div class="trending trending-up">
						<span>12%</span><i class="os-icon os-icon-arrow-up6"></i>
					</div>
				</a>
			</div>
			<div class="col-6 col-xxl-2 d-sm-none d-xxl-block">
				<a class="element-box el-tablo centered trend-in-corner smaller" href="#">
					<div class="label">
						Litecoin Price
					</div>
					<div class="value">
						-$3,473
					</div>
					<div class="trending trending-down">
						<span>5%</span><i class="os-icon os-icon-arrow-down6"></i>
					</div>
				</a>
			</div>
			<div class="col-6 col-xxl-2 d-sm-none d-xxl-block">
				<a class="element-box el-tablo centered trend-in-corner smaller" href="#">
					<div class="label">
						Last Month
					</div>
					<div class="value">
						-$3,248
					</div>
					<div class="trending trending-down">
						<span>12%</span><i class="os-icon os-icon-arrow-down6"></i>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="element-wrapper compact pt-4">
					<div class="element-actions d-none d-sm-block">
						<a class="btn btn-primary btn-sm" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add Account</span></a><a class="btn btn-success btn-sm" href="#"><i class="os-icon os-icon-grid-10"></i><span>Make Payment</span></a>
					</div>
					<h6 class="element-header">
						Send Money To
					</h6>
					<div class="element-box-tp">
						<div class="inline-profile-tiles">
							<div class="row">
								<div class="col-4 col-sm-3 col-xxl-2">
									<div class="profile-tile profile-tile-inlined">
										<a class="profile-tile-box faded" href="users_profile_small.html">
											<div class="pt-new-icon">
												<i class="os-icon os-icon-plus"></i>
											</div>
											<div class="pt-user-name">
												New<br/> Account
											</div>
										</a>
									</div>
								</div>
								<div class="col-4 col-sm-3 col-xxl-2">
									<div class="profile-tile profile-tile-inlined">
										<a class="profile-tile-box" href="users_profile_small.html">
											<div class="pt-avatar-w">
												<img alt="" src="img/avatar1.jpg">
											</div>
											<div class="pt-user-name">
												Kelly<br/> Neymayers
											</div>
										</a>
									</div>
								</div>
								<div class="col-4 col-sm-3 col-xxl-2">
									<div class="profile-tile profile-tile-inlined">
										<a class="profile-tile-box" href="users_profile_small.html">
											<div class="pt-avatar-w">
												<img alt="" src="img/avatar3.jpg">
											</div>
											<div class="pt-user-name">
												Ben<br/> Gossman
											</div>
										</a>
									</div>
								</div>
								<div class="col-4 col-sm-3 col-xxl-2">
									<div class="profile-tile profile-tile-inlined">
										<a class="profile-tile-box" href="users_profile_small.html">
											<div class="pt-avatar-w">
												<img alt="" src="img/avatar1.jpg">
											</div>
											<div class="pt-user-name">
												Kimson<br/> Broker
											</div>
										</a>
									</div>
								</div>
								<div class="col-4 d-sm-none d-xxl-block col-xxl-2">
									<div class="profile-tile profile-tile-inlined">
										<a class="profile-tile-box" href="users_profile_small.html">
											<div class="pt-avatar-w">
												<img alt="" src="img/avatar2.jpg">
											</div>
											<div class="pt-user-name">
												Jake<br/> Gilbertson
											</div>
										</a>
									</div>
								</div>
								<div class="col-4 d-sm-none d-xxl-block col-xxl-2">
									<div class="profile-tile profile-tile-inlined">
										<a class="profile-tile-box" href="users_profile_small.html">
											<div class="pt-avatar-w">
												<img alt="" src="img/avatar7.jpg">
											</div>
											<div class="pt-user-name">
												Mary<br/> Clintons
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-xxl-8">
						<div class="element-wrapper compact pt-4">
							<div class="element-actions d-none d-sm-block">
								<form class="form-inline justify-content-sm-end">
									<label class="smaller" for="">News For</label><select class="form-control form-control-sm form-control-faded">
										<option value="Pending">
											Bitcoin
										</option>
										<option value="Active">
											Etherium 
										</option>
										<option value="Cancelled">
											Litecoin
										</option>
									</select>
								</form>
							</div>
							<h6 class="element-header">
								Crypto News
							</h6>
							<div class="element-box-tp">
								<div class="post-box">
									<div class="post-media" style="background-image: url(img/portfolio1.jpg)"></div>
									<div class="post-content">
										<h6 class="post-title">
											Is Crypto the Future of Film Funding?
										</h6>
										<div class="post-text">
											Curiously, view both tone emerged. There should which yards two and concepts amidst liabilities sitting of and, parents it wait 
										</div>
										<div class="post-foot">
											<div class="post-tags">
												<div class="badge badge-primary">
													BTC
												</div>
												<div class="badge badge-primary">
													Crypto
												</div>
											</div>
											<a class="post-link" href="#"><span>Read Full Story</span><i class="os-icon os-icon-arrow-right7"></i></a>
										</div>
									</div>
								</div>
								<div class="post-box">
									<div class="post-media" style="background-image: url(img/portfolio2.jpg)"></div>
									<div class="post-content">
										<h6 class="post-title">
											Is Crypto the Future of Film Funding?
										</h6>
										<div class="post-text">
											Curiously, view both tone emerged. There should which yards two and concepts amidst liabilities sitting of and, parents it wait 
										</div>
										<div class="post-foot">
											<div class="post-tags">
												<div class="badge badge-primary">
													BTC
												</div>
												<div class="badge badge-primary">
													Crypto
												</div>
											</div>
											<a class="post-link" href="#"><span>Read Full Story</span><i class="os-icon os-icon-arrow-right7"></i></a>
										</div>
									</div>
								</div>
								<a class="centered-load-more-link" href="#"><span>Read Our Blog</span></a>
							</div>
						</div>
					</div>
					<div class="col-12 d-sm-none d-xxl-block col-xxl-4">
						<div class="cta-w orange text-center">
							<div class="cta-content extra-padded">
								<div class="highlight-header">
									Bonus
								</div>
								<h5 class="cta-header">
									Invite your friends and make money with referrals
								</h5>
								<form action="">
									<div class="newsletter-field-w">
										<input placeholder="Email address..." type="text"><button class="btn btn-sm btn-primary">Send</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="element-wrapper compact pt-4">
					<div class="element-actions">
						<form class="form-inline justify-content-sm-end">
							<label class="smaller" for="">Order By</label><select class="form-control form-control-sm form-control-faded">
								<option value="Pending">
									Today
								</option>
								<option value="Active">
									Last Week 
								</option>
								<option value="Cancelled">
									Last 30 Days
								</option>
							</select>
						</form>
					</div>
					<h6 class="element-header">
						Transactions
					</h6>
					<div class="element-box-tp">
						<table class="table table-clean">
							<tr>
								<td>
									<div class="value">
										Amazon Store
									</div>
									<span class="sub-value">Books</span>
								</td>
								<td class="text-right">
									<div class="value">
										-$28.34
									</div>
									<span class="sub-value">12 Feb 2018</span>
								</td>
							</tr>
							<tr>
								<td>
									<div class="value">
										Dunkin Donuts
									</div>
									<span class="sub-value">Food & Restaurants</span>
								</td>
								<td class="text-right">
									<div class="value">
										-$7.15
									</div>
									<span class="sub-value">10 Feb 2018</span>
								</td>
							</tr>
							<tr>
								<td>
									<div class="value">
										Refund from Sephora
									</div>
									<span class="sub-value">Health & Beauty</span>
								</td>
								<td class="text-right">
									<div class="value text-success">
										$128.11
									</div>
									<span class="sub-value">10 Feb 2018</span>
								</td>
							</tr>
							<tr>
								<td>
									<div class="value">
										Amazon Store
									</div>
									<span class="sub-value">Books</span>
								</td>
								<td class="text-right">
									<div class="value">
										-$28.34
									</div>
									<span class="sub-value">12 Feb 2018</span>
								</td>
							</tr>
							<tr>
								<td>
									<div class="value">
										Dunkin Donuts
									</div>
									<span class="sub-value">Food & Restaurants</span>
								</td>
								<td class="text-right">
									<div class="value">
										-$7.15
									</div>
									<span class="sub-value">10 Feb 2018</span>
								</td>
							</tr>
							<tr>
								<td>
									<div class="value">
										Refund from Google Store
									</div>
									<span class="sub-value">Health & Beauty</span>
								</td>
								<td class="text-right">
									<div class="value text-success">
										$15.23
									</div>
									<span class="sub-value">9 Feb 2018</span>
								</td>
							</tr>
							<tr>
								<td>
									<div class="value">
										Amazon Store
									</div>
									<span class="sub-value">Books</span>
								</td>
								<td class="text-right">
									<div class="value">
										-$28.34
									</div>
									<span class="sub-value">8 Feb 2018</span>
								</td>
							</tr>
							<tr>
								<td>
									<div class="value">
										Dunkin Donuts
									</div>
									<span class="sub-value">Food & Restaurants</span>
								</td>
								<td class="text-right">
									<div class="value">
										-$7.15
									</div>
									<span class="sub-value">8 Feb 2018</span>
								</td>
							</tr>
						</table>
						<a class="centered-load-more-link" href="#"><span>Load More Messages</span></a>
					</div>
				</div>
			</div>
              </div><!--------------------
              START - Color Scheme Toggler
              -------------------->
              <div class="floated-colors-btn second-floated-btn">
              	<div class="os-toggler-w">
              		<div class="os-toggler-i">
              			<div class="os-toggler-pill"></div>
              		</div>
              	</div>
              	<span>Dark </span><span>Colors</span>
              </div>
              <!--------------------
              END - Color Scheme Toggler
              --------------------><!--------------------
              START - Demo Customizer
              -------------------->
              <div class="floated-customizer-btn third-floated-btn">
              	<div class="icon-w">
              		<i class="os-icon os-icon-ui-46"></i>
              	</div>
              	<span>Customizer</span>
              </div>
              <div class="floated-customizer-panel">
              	<div class="fcp-content">
              		<div class="close-customizer-btn">
              			<i class="os-icon os-icon-x"></i>
              		</div>
              		<div class="fcp-group">
              			<div class="fcp-group-header">
              				Menu Settings
              			</div>
              			<div class="fcp-group-contents">
              				<div class="fcp-field">
              					<label for="">Menu Position</label><select class="menu-position-selector">
              						<option value="left">
              							Left
              						</option>
              						<option value="right">
              							Right
              						</option>
              						<option value="top">
              							Top
              						</option>
              					</select>
              				</div>
              				<div class="fcp-field">
              					<label for="">Menu Style</label><select class="menu-layout-selector">
              						<option value="compact">
              							Compact
              						</option>
              						<option value="full">
              							Full
              						</option>
              						<option value="mini">
              							Mini
              						</option>
              					</select>
              				</div>
              				<div class="fcp-field with-image-selector-w">
              					<label for="">With Image</label><select class="with-image-selector">
              						<option value="yes">
              							Yes
              						</option>
              						<option value="no">
              							No
              						</option>
              					</select>
              				</div>
              				<div class="fcp-field">
              					<label for="">Menu Color</label>
              					<div class="fcp-colors menu-color-selector">
              						<div class="color-selector menu-color-selector color-bright selected"></div>
              						<div class="color-selector menu-color-selector color-dark"></div>
              						<div class="color-selector menu-color-selector color-light"></div>
              						<div class="color-selector menu-color-selector color-transparent"></div>
              					</div>
              				</div>
              			</div>
              		</div>
              		<div class="fcp-group">
              			<div class="fcp-group-header">
              				Sub Menu
              			</div>
              			<div class="fcp-group-contents">
              				<div class="fcp-field">
              					<label for="">Sub Menu Style</label><select class="sub-menu-style-selector">
              						<option value="flyout">
              							Flyout
              						</option>
              						<option value="inside">
              							Inside/Click
              						</option>
              						<option value="over">
              							Over
              						</option>
              					</select>
              				</div>
              				<div class="fcp-field">
              					<label for="">Sub Menu Color</label>
              					<div class="fcp-colors">
              						<div class="color-selector sub-menu-color-selector color-bright selected"></div>
              						<div class="color-selector sub-menu-color-selector color-dark"></div>
              						<div class="color-selector sub-menu-color-selector color-light"></div>
              					</div>
              				</div>
              			</div>
              		</div>
              		<div class="fcp-group">
              			<div class="fcp-group-header">
              				Other Settings
              			</div>
              			<div class="fcp-group-contents">
              				<div class="fcp-field">
              					<label for="">Full Screen?</label><select class="full-screen-selector">
              						<option value="yes">
              							Yes
              						</option>
              						<option value="no">
              							No
              						</option>
              					</select>
              				</div>
              				<div class="fcp-field">
              					<label for="">Show Top Bar</label><select class="top-bar-visibility-selector">
              						<option value="yes">
              							Yes
              						</option>
              						<option value="no">
              							No
              						</option>
              					</select>
              				</div>
              				<div class="fcp-field">
              					<label for="">Above Menu?</label><select class="top-bar-above-menu-selector">
              						<option value="yes">
              							Yes
              						</option>
              						<option value="no">
              							No
              						</option>
              					</select>
              				</div>
              				<div class="fcp-field">
              					<label for="">Top Bar Color</label>
              					<div class="fcp-colors">
              						<div class="color-selector top-bar-color-selector color-bright selected"></div>
              						<div class="color-selector top-bar-color-selector color-dark"></div>
              						<div class="color-selector top-bar-color-selector color-light"></div>
              						<div class="color-selector top-bar-color-selector color-transparent"></div>
              					</div>
              				</div>
              			</div>
              		</div>
              	</div>
              </div>
              <!--------------------
              END - Demo Customizer
              --------------------><!--------------------
              START - Chat Popup Box
              -------------------->
              <div class="floated-chat-btn">
              	<i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span>
              </div>
              <div class="floated-chat-w">
              	<div class="floated-chat-i">
              		<div class="chat-close">
              			<i class="os-icon os-icon-close"></i>
              		</div>
              		<div class="chat-head">
              			<div class="user-w with-status status-green">
              				<div class="user-avatar-w">
              					<div class="user-avatar">
              						<img alt="" src="img/avatar1.jpg">
              					</div>
              				</div>
              				<div class="user-name">
              					<h6 class="user-title">
              						John Mayers
              					</h6>
              					<div class="user-role">
              						Account Manager
              					</div>
              				</div>
              			</div>
              		</div>
              		<div class="chat-messages">
              			<div class="message">
              				<div class="message-content">
              					Hi, how can I help you?
              				</div>
              			</div>
              			<div class="date-break">
              				Mon 10:20am
              			</div>
              			<div class="message">
              				<div class="message-content">
              					Hi, my name is Mike, I will be happy to assist you
              				</div>
              			</div>
              			<div class="message self">
              				<div class="message-content">
              					Hi, I tried ordering this product and it keeps showing me error code.
              				</div>
              			</div>
              		</div>
              		<div class="chat-controls">
              			<input class="message-input" placeholder="Type your message here..." type="text">
              			<div class="chat-extra">
              				<a href="#"><span class="extra-tooltip">Attach Document</span><i class="os-icon os-icon-documents-07"></i></a><a href="#"><span class="extra-tooltip">Insert Photo</span><i class="os-icon os-icon-others-29"></i></a><a href="#"><span class="extra-tooltip">Upload Video</span><i class="os-icon os-icon-ui-51"></i></a>
              			</div>
              		</div>
              	</div>
              </div>
              <!--------------------
              END - Chat Popup Box
              -------------------->
          </div>
            <!--------------------
            START - Sidebar
            -------------------->
            <div class="content-panel compact color-scheme-dark">
            	<div class="content-panel-close">
            		<i class="os-icon os-icon-close"></i>
            	</div>
            	<div class="element-wrapper">
            		<div class="element-actions actions-only">
            			<a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a>
            		</div>
            		<h6 class="element-header">
            			Quick Conversion
            		</h6>
            		<div class="element-box-tp">
            			<form action="">
            				<div class="row">
            					<div class="col-6">
            						<div class="form-group">
            							<label for="">From</label><select class="form-control">
            								<option>
            									Bitcoins
            								</option>
            								<option>
            									Litecoins
            								</option>
            								<option>
            									Ripple
            								</option>
            								<option>
            									Dogecoin
            								</option>
            							</select>
            						</div>
            					</div>
            					<div class="col-6">
            						<div class="form-group">
            							<label for="">To</label><select class="form-control">
            								<option>
            									USD
            								</option>
            								<option>
            									Litecoins
            								</option>
            								<option>
            									Ripple
            								</option>
            								<option>
            									Dogecoin
            								</option>
            							</select>
            						</div>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-6">
            						<div class="form-group">
            							<label for="">Amount</label>
            							<div class="input-group">
            								<input class="form-control" placeholder="Amount..." type="text" value="1.37">
            								<div class="input-group-append">
            									<div class="input-group-text">
            										BTC
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            					<div class="col-6">
            						<div class="form-group">
            							<label for="">Price per BTC</label>
            							<div class="input-group">
            								<input class="form-control" type="text" value="8,284">
            								<div class="input-group-append">
            									<div class="input-group-text">
            										USD
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            				<button class="btn btn-primary btn-block btn-lg"><i class="os-icon os-icon-refresh-ccw"></i><span>Transfer Now</span></button>
            			</form>
            		</div>
            	</div>
            	<div class="element-wrapper compact">
            		<div class="element-actions actions-only">
            			<a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a>
            		</div>
            		<h6 class="element-header">
            			Order History
            		</h6>
            		<div class="element-box-tp">
            			<table class="table table-compact smaller text-faded mb-0">
            				<thead>
            					<tr>
            						<th>
            							Type
            						</th>
            						<th class="text-center">
            							Date
            						</th>
            						<th class="text-right">
            							Amount
            						</th>
            						<th class="text-right">
            							Fee
            						</th>
            					</tr>
            				</thead>
            				<tbody>
            					<tr>
            						<td>
            							<span>BTC</span><i class="os-icon os-icon-repeat icon-separator"></i><span>USD</span>
            						</td>
            						<td class="text-center">
            							01.08
            						</td>
            						<td class="text-right text-bright">
            							$25.38
            						</td>
            						<td class="text-right text-danger">
            							-$1.23
            						</td>
            					</tr>
            					<tr>
            						<td>
            							<span>RPX</span><i class="os-icon os-icon-repeat icon-separator"></i><span>ETH</span>
            						</td>
            						<td class="text-center">
            							01.07
            						</td>
            						<td class="text-right text-bright">
            							$15.21
            						</td>
            						<td class="text-right text-danger">
            							-$1.13
            						</td>
            					</tr>
            					<tr>
            						<td>
            							<span>LTC</span><i class="os-icon os-icon-repeat icon-separator"></i><span>BTC</span>
            						</td>
            						<td class="text-center">
            							01.05
            						</td>
            						<td class="text-right text-bright">
            							$17.43
            						</td>
            						<td class="text-right text-danger">
            							-$2.14
            						</td>
            					</tr>
            					<tr>
            						<td>
            							<span>PRX</span><i class="os-icon os-icon-repeat icon-separator"></i><span>LTC</span>
            						</td>
            						<td class="text-center">
            							01.05
            						</td>
            						<td class="text-right text-bright">
            							$23.18
            						</td>
            						<td class="text-right text-danger">
            							-$3.17
            						</td>
            					</tr>
            					<tr>
            						<td>
            							<span>ETH</span><i class="os-icon os-icon-repeat icon-separator"></i><span>USD</span>
            						</td>
            						<td class="text-center">
            							01.04
            						</td>
            						<td class="text-right text-bright">
            							$35.42
            						</td>
            						<td class="text-right text-danger">
            							-$3.12
            						</td>
            					</tr>
            					<tr>
            						<td>
            							<span>BTC</span><i class="os-icon os-icon-repeat icon-separator"></i><span>ETH</span>
            						</td>
            						<td class="text-center">
            							01.02
            						</td>
            						<td class="text-right text-bright">
            							$72.62
            						</td>
            						<td class="text-right text-danger">
            							-$4.15
            						</td>
            					</tr>
            					<tr>
            						<td>
            							<span>RPX</span><i class="os-icon os-icon-repeat icon-separator"></i><span>USD</span>
            						</td>
            						<td class="text-center">
            							12.29
            						</td>
            						<td class="text-right text-bright">
            							$25.38
            						</td>
            						<td class="text-right text-danger">
            							-$1.23
            						</td>
            					</tr>
            					<tr>
            						<td>
            							<span>ETH</span><i class="os-icon os-icon-repeat icon-separator"></i><span>BTC</span>
            						</td>
            						<td class="text-center">
            							12.28
            						</td>
            						<td class="text-right text-bright">
            							$52.11
            						</td>
            						<td class="text-right text-danger">
            							-$4.72
            						</td>
            					</tr>
            				</tbody>
            			</table>
            			<a class="centered-load-more-link smaller" href="#"><span>Load More Transactions</span></a>
            		</div>
            	</div>
            	<div class="element-wrapper compact">
            		<div class="element-actions actions-only">
            			<a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a>
            		</div>
            		<h6 class="element-header">
            			Profile Completion
            		</h6>
            		<div class="element-box-tp">
            			<div class="fancy-progress-with-label">
            				<div class="fpl-label">
            					65%
            				</div>
            				<div class="fpl-progress-w">
            					<div class="fpl-progress-i" style="width: 65%;"></div>
            				</div>
            			</div>
            			<div class="todo-list">
            				<a class="todo-item complete" href="#">
            					<div class="ti-info">
            						<div class="ti-header">
            							Connect Bank Account
            						</div>
            						<div class="ti-sub-header">
            							You have connected 2 accounts
            						</div>
            					</div>
            					<div class="ti-icon">
            						<i class="os-icon os-icon-check"></i>
            					</div>
            				</a><a class="todo-item complete" href="#">
            					<div class="ti-info">
            						<div class="ti-header">
            							Upload Tax Documents
            						</div>
            						<div class="ti-sub-header">
            							You uploaded W-2 and 1099
            						</div>
            					</div>
            					<div class="ti-icon">
            						<i class="os-icon os-icon-check"></i>
            					</div>
            				</a><a class="todo-item" href="#">
            					<div class="ti-info">
            						<div class="ti-header">
            							Deposit Money
            						</div>
            						<div class="ti-sub-header">
            							You can deposit from your bank
            						</div>
            					</div>
            					<div class="ti-icon">
            						<i class="os-icon os-icon-arrow-right7"></i>
            					</div>
            				</a>
            			</div>
            		</div>
            	</div>
            	<div class="d-xxl-none">
            		<div class="cta-w orange text-center">
            			<div class="cta-content extra-padded">
            				<div class="highlight-header">
            					Bonus
            				</div>
            				<h5 class="cta-header">
            					Invite your friends and make money with referrals
            				</h5>
            				<form action="">
            					<div class="newsletter-field-w">
            						<input placeholder="Email address..." type="text"><button class="btn btn-sm btn-primary">Send</button>
            					</div>
            				</form>
            			</div>
            		</div>
            	</div>
            </div>
            <!--------------------
            END - Sidebar
            -------------------->
        </div>
    </div>

    @endsection