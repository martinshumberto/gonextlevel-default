@extends('client.layouts.default')


@section('content')

<!--------------------
START - Breadcrumbs
-------------------->
<ul class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="{!!route('client-dashboard')!!}">Dashboard</a>
	</li>	
	<li class="breadcrumb-item">
		<span>Assinatura</span>
	</li>
	<li class="breadcrumb-item">
		<span>Histórico de faturas</span>
	</li>
</ul>
<!--------------------
END - Breadcrumbs
-------------------->
<div class="content-i">
	<div class="content-box">
		<div class="control-header">
			<div class="row align-items-center">
				<div class="col-8 col-lg-7">
					<form action="#" class="form-inline">
						<div class="form-group mr-4">
							<a class="btn btn-sm btn-secondary btn-upper" href="{!!route('client-plans')!!}">
								<i class="os-icon os-icon-grid-squares-22"></i><span>Planos</span>
							</a>
						</div>
						<div class="form-group d-none d-md-flex">
						</div>
					</form>
				</div>

				<div class="col-4 col-lg-5 text-right">
					
				</div>
			</div>
		</div>

		@if($errors->any())            
		<div style="padding-top: 15px; padding-bottom: 15px; margin-bottom:20px; font-size: 16px;" class="col-md-12  btn-{{$errors->first('type')}} " href="#">{{$errors->first('msg')}}</div>
		@endif

		<div class="element-box">
			<h5 class="form-header">Histórico de faturas</h5>
			<div class="form-desc">Veja seu histórica do faturas referente a sua assinatura. </div>
				<!--------------------
				START - Controls Above Table
				-------------------->
				<div class="controls-above-table">
					<div class="row">
						
					</div>
				<!--------------------
				END - Controls Above Table
				-------------------->

				<div class="table-responsive">
					<!--------------------
					START - Basic Table
					-------------------->
					<table class="table table-lightborder">					
						<thead>
							<tr>
								
								<th>ID</th>
								<th>Nome do produto</th>
								<th>Vencimento</th>
								<th>Paga em</th>
								<th>Método de pagamento</th>
								<th>Valor</th>
								<th class="text-center">Status</th>
								<th class="text-right">Ações</th>
							</tr>
						</thead>

						<tbody>
							@foreach($inovices as $value)
							<tr>
								
								<td>#GO-{!!$value->inovice_id!!}</td>
								<td>{!!$value->Plan->title!!}</td>
								<td>
									@php
									$data = $value->created_at; 
									echo date('d/m/Y', strtotime("+3 days",strtotime($data))); 
									@endphp
								</td>
								<td>
									@if($value->update != "")
									{!!extractDate($value->update)!!} às {!!extrateHour($value->update)!!}
									@else
									-
									@endif
								</td>
								<td>{!!$value->type()!!}</td>
								<td>{!!$value->price()!!}</td>
								<td class="text-center">
									<span class="status-pill smaller {!!$value->colorTarget()!!}"></span>
									<span>{!!$value->status()!!}</span>
								</td>
								<td class="row-actions text-right">
									@if($value->type == 2)
									<a href="{!!route('client-view-invoice', $value->inovice_id)!!}">
										<i class="os-icon os-icon-ui-37"></i>
									</a>
									@else
									@if($value->status == 1)
									<a  data-target="#in-{!!$value->inovice_id!!}" data-toggle="modal" href="javascript:void(0);" class="icon-hover-tooltip">
										<i class="fa fa-info-circle"></i>
										<span>Informações</span>
									</a>

									<div class="onboarding-modal modal fade animated" id="in-{!!$value->inovice_id!!}" role="dialog" tabindex="-1" aria-hidden="true" style="display: none;">
										<div class="modal-dialog modal-centered" role="document">
											<div class="modal-content text-center">
												<button aria-label="Close" class="close" data-dismiss="modal" type="button">
													<span class="close-label">Fechar</span>
													<span class="os-icon os-icon-close"></span>
												</button>
												<div class="onboarding-media">
													<img alt="" src="img/bigicon2.png" width="200px">
												</div>
												<div class="onboarding-content with-gradient">
													<h4 class="onboarding-title">Informações do Pagamento</h4>
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<label for="">Data do Pagamento</label>
																<input style="text-align: center;" class="form-control" type="text" value="{!!extractDate($value->update)!!} às {!!extrateHour($value->update)!!}" disabled="disabled">
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<label for="">Tipo</label>
																<input style="text-align: center;" class="form-control" type="text" value="{!!$value->type()!!}" disabled="disabled">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-12">
															<div class="form-group">
																<label for="">Valor</label>
																<input style="text-align: center;" class="form-control" type="text" value="{!!$value->price()!!}" disabled="disabled">
															</div>
														</div>														
													</div>													
												</div>
											</div>
										</div>
									</div>
									@endif
									@if($value->status == 2)
									<a href="#" class="icon-hover-tooltip">
										<i class="fa fa-refresh"></i>
										<span>Solicitar Atualização</span>
									</a>

									@endif
									@if($value->status == 3)

									<i class="fa fa-ban" aria-hidden="true"></i>

									@endif
									@if($value->status == 4)

									<i class="fa fa-window-close" aria-hidden="true"></i>

									@endif
									@if($value->status == 5)

									<i class="fa fa-reply" aria-hidden="true"></i>

									@endif
									@if($value->status == 6)

									<i class="fa fa-times" aria-hidden="true"></i>

									@endif
									@endif
								</td>
							</tr>	
							@endforeach			
						</tbody>
					</table>
					<!--------------------
					END - Basic Table
					-------------------->

					<!--------------------
					START - Controls Below Table
					-------------------->
					<div class="controls-below-table">

						<div style="display: block;" class="table-records-info">
						</div>

					</div>
					<!--------------------
					END - Controls Below Table
					-------------------->
				</div>
			</div>
		</div>
	</div>

	@endsection