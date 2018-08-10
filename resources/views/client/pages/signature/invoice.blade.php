@extends('client.layouts.default')


@section('content')

	<!--------------------
	START - Breadcrumbs
	-------------------->
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="/assinatura">Assinatura</a></li>
		<li class="breadcrumb-item"><a href="/assinatura/planos">Planos</a></li>
		<li class="breadcrumb-item"><span>Fatura #000000</span></li>
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
		                        <div class="company-name">Wallace Correa Fontes</div>
		                        <div class="company-address">Rua Setenta, Qd. 12, Lt. 07
		                            <br>Varzea Grande - MT</div>
		                    </div>
		                </div>
		                <div class="invoice-heading">
		                    <h3>Criada em</h3>
		                    <div class="invoice-date">10 de Agosto de 2018</div>
		                </div>
		                <div class="invoice-body">
		                    <div class="invoice-desc">
		                        <div class="desc-label">Fatura</div>
		                        <div class="desc-value">#00000000</div>
		                    </div>
		                    <div class="invoice-table">
		                        <table class="table">
		                            <thead>
		                                <tr>
		                                    <th>Plano</th>
		                                    <th class="text-right">Preço</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr>
		                                    <td>Plano Avançado</td>
		                                    <td class="text-right">R$ 52,90</td>
		                                </tr>
		                                <tr>
		                                    <td>Cupom de Desconto (CG54SFM000)</td>
		                                    <td class="text-right">- R$ 10,00</td>
		                                </tr>
		                            </tbody>
		                            <tfoot>
		                                <tr>
		                                    <td>Total</td>
		                                    <td class="text-right" colspan="2">R$ 42,90</td>
		                                </tr>
		                            </tfoot>
		                        </table>
		                        <div class="terms">
		                            <div class="terms-header">Termos e Condições</div>
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

                    <div class="element-box">
                        <form>
                            <h5 class="element-box-header">Informações adicionais para pagamento</h5>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                    	<label for=""> Cupom de desconto</label>
                                    	<input class="form-control" placeholder="XXXXXXXXXXX" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label for="">Ciclo de pagamento</label>
                                        <select class="form-control">
                                            <option value="">Mensal</option>
                                            <option value="">Trimestral (-5%)</option>
                                            <option value="">Anual (-15%)</option>
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
                                            <option value="method-1">Cartão de Crédito</option>
                                            <option value="method-2">Boleto</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="method method-2 form-buttons-w text-right compact" style="display: none;">
                            	<a class="btn btn-primary" href="#"><span>Gerar Boleto</span><i class="os-icon os-icon-grid-18"></i></a>
                            </div>
                            
                        </form>
                    </div>

                    <div id="select-method-payments" class="select-method-payments">

	                    <div class="method method-1 element-box" style="display:none;">
	                    	<div class="cardpayment">
		                    	<form method="POST" action="">
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
				                            <div class="form-buttons-w text-right compact">
				                            	<a class="btn btn-primary" href="#"><span>Enviar</span> <i class="icon-feather-check"></i></a>
				                            </div>
			                            </div>
			                        </div>
			                    </form>
			                </div>
	                    </div>

	                    <div class="method method-3 element-box" style="display:none;">
	                        <h5 class="element-box-header">Boleto</h5>
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