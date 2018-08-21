@extends('client.layouts.default')


@section('content')

<div class="content-w">
	
	<ul class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{!!route('client-dashboard')!!}">Dashboard</a>
		</li>
		<li class="breadcrumb-item">
			<a href="{!!route('client-prospect')!!}">Prospectos</a>
		</li>
		<li class="breadcrumb-item">
			<span>Informações do prospecto</span>
		</li>
	</ul>
	<div class="content-i">
		
		<div class="content-box">
			<div class="row">
				
				<div class="col-sm-8">

					<div class="element-wrapper">
						<div class="element-box">
							<form id="formValidate" method="post" action="">
								@csrf
								<div class="element-info">
									<div class="element-info-with-icon">
										<div class="element-info-icon">
											<div class="os-icon os-icon-cv-2"></div>
										</div>
										<div class="element-info-text">
											<h5 class="element-inner-header">
												Informações do prospecto
											</h5>
											<div class="element-inner-desc">
												Todas infomações relacionadas ao prospecto.
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for=""> Nome</label>
									<input name="name" class="form-control" data-error="Informe seu Nome" type="text" value="{!!$prospect->name!!}">
									<div class="help-block form-text with-errors form-control-feedback"></div>
								</div>	
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for=""> E-mail</label><input class=" form-control" type="text" value="{!!$prospect->email!!}" name="email">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for=""> Telefone</label>
											<div class="input-group">
												<input class="MaskPhone form-control" type="text" name="phone" value="{!!$prospect->phone!!}">
											</div>
										</div>
									</div>
								</div>		

								<div class="form-buttons-w">
									<button class="btn btn-primary" type="submit"> Salvar informações</button>
								</div>				
								<fieldset class="form-group">
									<legend><span>Qualificação do prospecto</span></legend>
									<div class="form-group">
										<div class="os-progress-bar blue">
											<div class="bar-labels">
												<div class="bar-label-left">
													<span>Network</span>
												</div>
												<div class="bar-label-right">
													<span class="info">{!!$prospect->network!!}/5</span>
												</div>

											</div>											
											<div class="bar-level-1" style="width: 100%">
												<div class="bar-level-3" style="width: {!!percentage($prospect->network, 5)!!}%"></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="os-progress-bar blue">
											<div class="bar-labels">
												<div class="bar-label-left">
													<span>Credibilidade</span>
												</div>
												<div class="bar-label-right">
													<span class="info">{!!$prospect->credibility!!}/5</span>
												</div>
											</div>											
											<div class="bar-level-1" style="width: 100%">
												<div class="bar-level-3" style="width: {!!percentage($prospect->credibility, 5)!!}%"></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="os-progress-bar blue">
											<div class="bar-labels">
												<div class="bar-label-left">
													<span>Empreendedor</span>
												</div>
												<div class="bar-label-right">
													<span class="info">{!!$prospect->entrepreneur!!}/5</span>
												</div>
											</div>											
											<div class="bar-level-1" style="width: 100%">
												<div class="bar-level-3" style="width: {!!percentage($prospect->entrepreneur, 5)!!}%"></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="os-progress-bar blue">
											<div class="bar-labels">
												<div class="bar-label-left">
													<span>Energia</span>
												</div>
												<div class="bar-label-right">
													<span class="info">{!!$prospect->energy!!}/5</span>
												</div>
											</div>											
											<div class="bar-level-1" style="width: 100%">
												<div class="bar-level-3" style="width: {!!percentage($prospect->energy, 5)!!}%"></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="os-progress-bar blue">
											<div class="bar-labels">
												<div class="bar-label-left">
													<span>Sonhador</span>
												</div>
												<div class="bar-label-right">
													<span class="info">{!!$prospect->dreamer!!}/5</span>
												</div>
											</div>											
											<div class="bar-level-1" style="width: 100%">
												<div class="bar-level-3" style="width: {!!percentage($prospect->dreamer, 5)!!}%"></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="os-progress-bar blue">
											<div class="bar-labels">
												<div class="bar-label-left">
													<span>Recurso</span>
												</div>
												<div class="bar-label-right">
													<span class="info">{!!$prospect->resource!!}/5</span>
												</div>
											</div>											
											<div class="bar-level-1" style="width: 100%">
												<div class="bar-level-3" style="width: {!!percentage($prospect->resource, 5)!!}%"></div>
											</div>
										</div>
									</div>
								</fieldset>
								<a class="btn btn-dark btn-sm" href="#"><i class="os-icon os-icon-delivery-box-2"></i><span>Requalificar prospecto</span></a>
							</form>
						</div>
					</div>
					<div >
						<div class="support-index">
							<div class="support-tickets">
								<div class="support-tickets-header">
									<div class="tickets-control">
										<h5>
											Historico de apresentações
										</h5>
									</div>								
								</div>
								@foreach($apresentations as $value)
								<div class="support-ticket @if($value->status == 1) active @endif">
									<div class="st-meta">
										<div class="badge badge-{!!$value->tag()!!}-inverted">
											{!!$value->status()!!}
										</div>
										<div class="status-pill {!!$value->color()!!}"></div>
									</div>
									<div class="st-body">
										<div class="ticket-content">
											<h6 class="ticket-title">
												<i class="fa fa-map-marker"></i> {!!$value->locate!!}
											</h6>
											<div class="ticket-description">
												<p>
													<i class="fa fa-calendar"></i> {!!dateGetExtencer($value->date)!!}
													às <i class="fa fa-clock-o"></i> {!!$value->hour!!}
												</p>
											</div>
										</div>
									</div>
									<div class="st-foot">
										<span class="label">Criado em:</span>										
										<span class="value">{!!$value->created_at!!}</span>
										<span class="label">Atualizado em:</span>
										<span class="value">{!!$value->updated_at!!}</span>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>



				</div>
				<div class="col-sm-4">
					<div class="content-panel">
						<div class="content-panel-close">
							<i class="os-icon os-icon-close"></i>
						</div>						
						<div class="element-wrapper">
							<h6 class="element-header">
								Equipe do {!!$prospect->name!!}
							</h6>
							<div class="element-box-tp">
								<div class="input-search-w">
									<input class="form-control rounded bright" placeholder="Procurar membro..." type="search">
								</div>
								<div class="users-list-w">
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
										<div class="user-action">
											<div class="os-icon os-icon-email-forward"></div>
										</div>
									</div>
									<div class="user-w with-status status-green">
										<div class="user-avatar-w">
											<div class="user-avatar">
												<img alt="" src="img/avatar2.jpg">
											</div>
										</div>
										<div class="user-name">
											<h6 class="user-title">
												Ben Gossman
											</h6>
											<div class="user-role">
												Administrator
											</div>
										</div>
										<div class="user-action">
											<div class="os-icon os-icon-email-forward"></div>
										</div>
									</div>
									<div class="user-w with-status status-red">
										<div class="user-avatar-w">
											<div class="user-avatar">
												<img alt="" src="img/avatar3.jpg">
											</div>
										</div>
										<div class="user-name">
											<h6 class="user-title">
												Phil Nokorin
											</h6>
											<div class="user-role">
												HR Manger
											</div>
										</div>
										<div class="user-action">
											<div class="os-icon os-icon-email-forward"></div>
										</div>
									</div>
									<div class="user-w with-status status-green">
										<div class="user-avatar-w">
											<div class="user-avatar">
												<img alt="" src="img/avatar4.jpg">
											</div>
										</div>
										<div class="user-name">
											<h6 class="user-title">
												Jenny Miksa
											</h6>
											<div class="user-role">
												Lead Developer
											</div>
										</div>
										<div class="user-action">
											<div class="os-icon os-icon-email-forward"></div>
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