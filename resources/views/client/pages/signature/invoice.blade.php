@extends('client.layouts.default')


@section('content')

	<!--------------------
	START - Breadcrumbs
	-------------------->
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="{!!route('client-historic-invoice')!!}">Assinatura</a></li>
		<li class="breadcrumb-item"><a href="{!!route('client-plans')!!}">Planos</a></li>
		<li class="breadcrumb-item"><span>Nova fatura</span></li>
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
							<div class="invoice-date">{!!strftime('%A, %d de %B de %Y', strtotime('today'))!!}</div>
						</div>
						<div class="invoice-body">
							<div class="invoice-desc">
								<div class="desc-label">Fatura #</div>
								<div class="desc-value"></div>
							</div>
							<div class="invoice-table">
								<input type="hidden" id="key_auth" name="key_auth" value="{!!$key_auth!!}">
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
										<tr class="discount" style="display: none;">
											
										</tr>
									</tbody>
									<tfoot>
										<input type="hidden" name="price_refresh" id="price_refresh" value="">
										<input type="hidden" name="price_now" id="price_now" value="{!!$plan->price!!}">
										<tr class="total-tr">
											<td>Total</td>
											<td id="total-inovice" class="text-right" colspan="2">R${!!$plan->price()!!}</td>
										</tr>
									</tfoot>
								</table>
								<div class="terms">
									<div class="terms-header">Assinando você estará concordando com os <a href="#">termos e condições</a></div></div>
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
					<div class="alert alert-warning borderless" style="display: none;">
						<h5 class="alert-heading">Fatura em atraso</h5>
						<p>Efetue o pagamento ainda hoje e evite o bloqueio de acesso!</p>
					</div>
					<!--MESSAGE ALERT-->
					@if($errors->any())
					<div style="padding-top: 6px;padding-bottom: 6px;padding-left: 7px;padding-right: 7px;background: #dc0000;color:  white;border: solid 1px #f51111;border-radius:  5px; margin-bottom: 10px;" class="alert alert-{{$errors->first('type')}}" role="alert">{{$errors->first('msg')}}</div>
					@endif

					<div class="element-box">
						<form method="POST" id="form_one_settings" action="{!!route('client-generate-inovice')!!}">
							{{ csrf_field() }}
							{{ method_field('PUT') }}

							<h5 class="element-box-header">Informações adicionais para pagamento</h5>
							<div class="row">
								<input type="hidden" name="security_key" value="{!!$key_auth!!}">
								<div class="col-sm-5">
									<div class="form-group">
										<label for=""> Cupom de desconto</label>
										<input name="discount" id="discount" class="form-control" placeholder="XXXXXXXXXXX" type="text">
									</div>
								</div>
								<div class="col-sm-7">
									<div class="form-group">
										<label for="">Ciclo de pagamento</label>
										<select id="cicle-payament" name="cicle-payament" class="form-control">
											<option value="1">Mensal</option>
											<option value="2">Trimestral (-5%)</option>
											<option value="3">Anual (-15%)</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="">Forma de pagamento</label>
										<select id="method-payments" name="method-payments" class="form-control">
											<option selected value="">Selecione</option>
											<option value="method-1">Cartão de crédito</option>
											<option value="method-2">Boleto bancário</option>
										</select>
									</div>
								</div>
							</div>
							<div class="method method-2 form-buttons-w text-right compact" style="display: none;">
								<button type="submit" class="btn btn-primary btn-generate-bolet" ><span>Gerar boleto</span><i class="os-icon os-icon-grid-18"></i></button>
							</div>

						</form>
					</div>

					<div id="select-method-payments" class="select-method-payments">

						<div class="method method-1 element-box" style="display:none;">
							<div class="cardpayment">
								<form id="form-card" method="POST" action="{!!route('client-view-credcard')!!}">
									@csrf
									<input type="hidden" name="discount" id="f_discount" value="">
									<input type="hidden" name="cicle-payament" id="f_cicle" value="">
									<input type="hidden" name="method-payments" id="f_method" value="">
									<input type="hidden" name="security_key" value="{!!$key_auth!!}">
									<h5 class="element-box-header">Cartão de crédito</h5>
									<div class="row">
										<div class="col-sm-12">
											<div class="card-wrapper"></div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label for=""> Número do cartão</label>
														<input class="form-control" id="number" name="number" type="text">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for=""> Nome completo (conforme impresso no cartão)</label>
														<input class="form-control" id="name" name="name" type="text">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label for=""> Válidade do cartão</label>
														<input class="form-control" id="expiry" name="expiry" type="text">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for=""> CVC</label>
														<input class="form-control" id="cvc" name="cvc" type="text">
													</div>
												</div>
											</div>

											<textarea id="public_key" style="display:none;">
												-----BEGIN PUBLIC KEY-----
												MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1AXO/PnINwBQdY1KLIZr
												2dUHag2AMCMliE1TcnaYckucHKo+a/P4YeoA1p5f1T3HIgkMiMj29uR+PxRNZUmt
												vj+9+EHAzAHZP7yeoGtdRbQhY3Xrv79oQY43BNJ5P0YwZIy/+jV8Ybq+fuUFZGN0
												PWcwDP0A2CfIlaoZpHTHq1IdUDQnpOPb9BrgoWkLiCZTQ7S5buC0nEi1ZXEZIPdy
												gosuxvtBAIYvP5dRczsZ9vby6A0yLfeXzzw++A/5Cr4YdXZfMKN+HvYrxmcxNhaB
												tL/k6ZvwrBYZn7LqIjJAfX3aL4U41NifQoWBCHZlPEEsvl8g5CjuoRhlItExt2wS
												SQIDAQAB
												-----END PUBLIC KEY-----
											</textarea>

											<input type="hidden" name="encrypted_value" id="encrypted_value">
											<div class="form-buttons-w text-right compact">
												<a class="btn btn-primary btn-send-card" href="#">
													<span>Enviar</span> 
													<i class="icon-feather-check"></i></a>													
												</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="method method-3 element-box" style="display:none;">
							<h5 class="element-box-header">Boleto bancário</h5>
							<div class="row">
								<div class="col-sm-12">
									<object data="https://www.boletobancario.com/boletofacil/img/boleto-facil-exemplo.pdf" 
									type="application/pdf" width="100%" height="600px">
									<iframe src="https://docs.google.com/viewer?url=www.boletobancario.com/boletofacil/img/boleto-facil-exemplo.pdf&embedded=true"></iframe>
								</object>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>


@endsection