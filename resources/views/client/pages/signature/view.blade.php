@extends('client.layouts.default')


@section('content')

	<!--------------------
	START - Breadcrumbs
	-------------------->
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="/assinatura">Assinatura</a></li>
		<li class="breadcrumb-item"><a href="/assinatura/planos">Planos</a></li>
		<li class="breadcrumb-item"><span>GO-#{!!$inovice->inovice_id!!}</span></li>
	</ul>
	<!--------------------
	END - Breadcrumbs
	-------------------->
	<div class="content-i">
		<div class="col-12 col-sm-12 col-lg-6">
			<div class="content-box">
				<div class="element-wrapper">
					<div class="invoice-w">
						<div class="infos">
							<div class="info-1">
								<div class="invoice-logo-w"><img alt="" src="{{ asset('public/img/logo.png') }}"></div>
								<div class="company-name">Go Next Level</div>
								<div class="company-address">Serviços de Internet LTDA</div>
								<div class="company-extra">00.000.000/0000-00</div>
							</div>
							<div class="info-2">
								<div class="company-name">{!!$client->name!!}</div>
								<div class="company-extra">{!!$client->email!!}</div>
								<div class="company-address">{!!$client->cpf!!}</div>
							</div>
						</div>
						<div class="invoice-heading">
							<h3>Criada em</h3>
							<div class="invoice-date">{!!$inovice->created_at!!}</div>
						</div>
						<div class="invoice-body">
							<div class="invoice-desc">
								<div class="desc-label">Fatura #</div>
								<div class="desc-value">GO-{!!$inovice->inovice_id!!}</div>
							</div>
							<div class="invoice-table">
								
								<table class="table">
									<thead>
										<tr>
											<th>Plano</th>
											<th class="text-right">Preço</th>
										</tr>
									</thead>
									<tbody class="t_body" >
										<tr>
											<td>{!!$plan->title!!}</td>
											<td class="text-right">R${!!$plan->price()!!}</td>
										</tr>
										@if($plan_client->type_cicle != 1)
										<td class="descount_attr">Desconto {!!$plan_client->typleCicle()!!} </td>
										<td class="text-right descount_attr"> {!!$plan_client->percentage()!!}</td>
										@endif
										@if(!is_null($discounts_client))
										<tr class="discount" style="">											
											<td>Cupom de Desconto ({!!$discounts_client->discount->discount_code!!})</td>
											<td class="text-right">{!!$discounts_client->discount->resultValue()!!}</td>
										</tr>
										@endif
									</tbody>
									<tfoot>										
										<tr class="total-tr">
											<td>Total</td>
											<td id="total-inovice" class="text-right" colspan="2">R$
												@php
												switch ($plan_client->type_cicle) {
													case 1:
													$precoAtual = $plan->price;
													break;	
													case 2:
													$price = ($plan->price * 3);
													$desconto = ($price * 0.05);
													$precoAtual = ($price - $desconto);

													break;	
													case 3:
													$price = ($plan->price * 12);
													$desconto = ($price * 0.15);
													$precoAtual = ($price - $desconto);
													break;	
												}
												if(!is_null($discounts_client)){

													switch ($discounts_client->discount->type) {
														case 2:
														$precoAtual = ($precoAtual - $discounts_client->discount->value);
														break;	
														case 1:
														$descount_value = ($precoAtual*$discounts_client->discount->value/100);
														$precoAtual = ($precoAtual - $descount_value);
														break;	
													}
												}

												echo $precoAtual;

												@endphp
											</td>
										</tr>
									</tfoot>
								</table>
								<div class="terms">
									<div class="terms-header">Assinando você estará concordando com os <a href="#">Termos e Condições</a></div>
									<div class="terms-content">Daremos automaticamente continuidade à sua assinatura e cobraremos ${!!$plan->price()!!} até você cancelar ou alterar.</div>
									<div class="terms-content">Não haverá reembolsos ou créditos por meses parciais.</div>
									<div class="terms-content">Após vencimento da fatura, será cobrado uma multa no valor de R$ 2,00.</div>
								</div>
							</div>
						</div>
						<div class="invoice-footer">
							<div class="invoice-logo"><img alt="" src="{{ asset('public/img/logo.png') }}"><span>Go Next Level</span></div>
							<div class="invoice-info"><span>financeiro@gonextlevel.com.br</span><span>www.gonextlevel.com.br</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-lg-6">
			<div class="content-box">
				<div class="element-wrapper">
					<!--MESSAGE ALERT-->
					@if($inovice->status == 1)
					<div class="alert alert-warning borderless" style="display: block;">
						<h5 class="alert-heading">Fatura Pendente</h5>
						<p>Efetue o pagamento ainda hoje e evite o bloqueio de acesso!</p>
					</div>
					@endif
					@if($inovice->status == 2)
					<div class="alert alert-success borderless" style="display: block;">
						<h5 class="alert-heading">Fatura Paga</h5>
						<p>Abaixo Informações de Fatura ja <b>Paga</b>!</p>
					</div>
					@endif
					@if($inovice->status == 3)
					<div class="alert alert-danger borderless" style="display: block;">
						<h5 class="alert-heading">Fatura Expirada</h5>
						<p>Fatura Expirada, consulte o <b>suporte</b> para mais informações!</p>
					</div>
					@endif
					@if($inovice->status == 4)
					<div class="alert alert-danger borderless" style="display: block;">
						<h5 class="alert-heading">Fatura Cancelada</h5>
						<p>Fatura Cancelada, consulte o <b>suporte</b> para mais informações!</p>
					</div>
					@endif
					<!--MESSAGE ALERT-->


					<div id="select-method-payments" class="select-method-payments">

						
						<div class="method method-3 element-box" style="display:block;">
							<h5 class="element-box-header">Boleto báncario</h5>
							<div class="row">
								<div class="col-sm-12">
									<iframe style=" width:  100%; height:  500px; border:  none; " src="{!!$inovice->gateway_response!!}"></iframe>
								</object>
							</div>
							<div class="row" style="margin-top: 15px;">
								<div class="col-sm-6">
									<button data-target=".bd-example-modal-lg" data-toggle="modal" class="mr-2 mb-2 btn btn-secondary" type="button"> 
										<i class="os-icon os-icon-search"></i> Expandir Boleto
									</button>
									<div class="modal fade bd-example-modal-lg"tabindex="-1" style="display: none;" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Boleto</h5>
													<button aria-label="Close" class="close" data-dismiss="modal" type="button">
														<span aria-hidden="true"> ×</span>
													</button>
												</div>
												<div class="modal-body">
													<iframe style=" width:  100%; height:  700px; border:  none; " src="{!!$inovice->gateway_response!!}"></iframe>
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
	</div>
</div>


@endsection