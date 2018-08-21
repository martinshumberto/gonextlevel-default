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
		<a href="{!!route('client-signature')!!}">Assinaturas</a>
	</li>
	<li class="breadcrumb-item">
		<span>Histórico de Faturas</span>
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
			<h5 class="form-header">Histórico de Faturas</h5>
			<div class="form-desc">Veja seu histórica do faturas referente a sua assinatura. </div>
				<!--------------------
				START - Controls Above Table
				-------------------->
				<div class="controls-above-table">
					<div class="row">
						<div class="col-sm-6">
							<a class="btn btn-sm btn-secondary" href="#">Arquivar</a>
							<a class="btn btn-sm btn-danger" href="#">Deletar</a></div>
							<div class="col-sm-6 form-inline justify-content-sm-end">
								<a class="btn btn-sm btn-secondary" href="#">Exportar para Excel</a>
							</div>
						</div>
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
								<th><input class="form-control" type="checkbox"></th>
								<th>ID</th>
								<th>Nome do Produto</th>
								<th>Vencimento</th>
								<th>Paga em</th>
								<th>Método de Pagamento</th>
								<th class="text-center">Status</th>
								<th class="text-right">Ações</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td><input class="form-control" type="checkbox"></td>
								<td>#GO-2</td>
								<td>Plano III (Avançado)</td>
								<td>21/08/2018</td>
								<td>-</td>
								<td>-</td>
								<td class="text-center">
									<span class="status-pill smaller orange"></span>
									<span>Em Aberto</span>
								</td>
								<td class="row-actions text-right">
									<a href="">
										<i class="os-icon os-icon-ui-37"></i>
									</a>
								</td>
							</tr>	
							<tr>
								<td><input class="form-control" type="checkbox"></td>
								<td>#GO-1</td>
								<td>Plano III (Avançado)</td>
								<td>21/07/2018</td>
								<td>20/07/2018</td>
								<td>Boleto</td>
								<td class="text-center">
									<span class="status-pill smaller green"></span>
									<span>Paga</span>
								</td>
								<td class="row-actions text-right">
									<a href="">
										<i class="os-icon os-icon-ui-37"></i>
									</a>
								</td>
							</tr>					
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