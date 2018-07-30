@extends('client.layouts.default')


@section('content')

<!--------------------
START - Breadcrumbs
-------------------->
<ul class="breadcrumb">
	<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
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
							<a class="btn btn-sm btn-secondary btn-upper" href="/prospectos">
								<i class="os-icon os-icon-grid-squares-22"></i><span>Pipeline de Prospectos</span>
							</a>
						</div>
						<div class="form-group d-none d-md-flex">
						</div>
					</form>
				</div>

				<div class="col-4 col-lg-5 text-right">
					<a class="btn btn-sm btn-primary btn-upper" href="#" data-target="#modal-register" data-toggle="modal">
						<i class="os-icon os-icon-ui-22"></i><span>Cadastrar</span>
					</a>
				</div>
			</div>
		</div>

		<div class="element-box">
			<h5 class="form-header">Faça sua Busca</h5>
			<div class="form-desc">Consulte todos os seus prospectos já cadastrados na plataforma, também podendo ser consultado aqueles concluidos e arquivos.</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for=""> Nome do Prospecto</label>
						<input class="form-control" placeholder="Nome completo prospecto ou parte dele" type="text">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for=""> Etapa</label>
						<select class="form-control">
							<option selected></option>
							<option>Convite</option>
							<option>Apresentar</option>
							<option>Acompanhar</option>
							<option>Fechamento</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for=""> Status</label>
						<select class="form-control">
							<option selected></option>
							<option>Ativo</option>
							<option>Perdido</option>
							<option>Arquivado</option>
							<option>Concluido</option>
						</select>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for=""> Escolha o Período</label>
						<div class="date-input">
							<input class="multi-daterange form-control" value="01/01/2018 - 01/12/2018" type="text">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="element-box">
			<h5 class="form-header">Resultado da Busca</h5>
			<div class="form-desc">Listagem do resultado da sua consulta referente ao formulário acima.</div>
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
								<th>Nome do Prospecto</th>
								<th>Etapa</th>
								<th class="text-center">Status</th>
								<th class="text-right">Ações</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td><input class="form-control" type="checkbox"></td>
								<td>1</td>
								<td>Simone Soares</td>
								<td>Convite</td>
								<td class="text-center"><span class="status-pill smaller green"></span><span>Ativo</span></td>
								<td class="row-actions text-right"><a href="#"><i class="os-icon os-icon-user-male-circle2"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
							</tr>
							<tr>
								<td><input class="form-control" type="checkbox"></td>
								<td>2</td>
								<td>Thiago Silva</td>
								<td>Fechamento</td>
								<td class="text-center"><span class="status-pill smaller green"></span><span>Ativo</span></td>
								<td class="row-actions text-right"><a href="#"><i class="os-icon os-icon-user-male-circle2"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
							</tr>
							<tr>
								<td><input class="form-control" type="checkbox"></td>
								<td>3</td>
								<td>Felipe Souza</td>
								<td>Convite</td>
								<td class="text-center"><span class="status-pill smaller green"></span><span>Ativo</span></td>
								<td class="row-actions text-right"><a href="#"><i class="os-icon os-icon-user-male-circle2"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
							</tr>
							<tr>
								<td><input class="form-control" type="checkbox"></td>
								<td>4</td>
								<td>Hugo Ferreira</td>
								<td>Convite</td>
								<td class="text-center"><span class="status-pill smaller green"></span><span>Ativo</span></td>
								<td class="row-actions text-right"><a href="#"><i class="os-icon os-icon-user-male-circle2"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
							</tr>
							<tr>
								<td><input class="form-control" type="checkbox"></td>
								<td>5</td>
								<td>Barbara Silva</td>
								<td>Acompanhar</td>
								<td class="text-center"><span class="status-pill smaller green"></span><span>Ativo</span></td>
								<td class="row-actions text-right"><a href="#"><i class="os-icon os-icon-user-male-circle2"></i></a><a href="#"><i class="os-icon os-icon-ui-44"></i></a><a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></td>
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
						<div class="table-records-info">Mostrando registros 1 - 5 de 30 registros</div>
						<div class="table-records-pages">
							<ul>
								<li>
									<a href="#">Anterior</a>
								</li>
								<li>
									<a class="current" href="#">1</a>
								</li>
								<li>
									<a href="#">2</a>
								</li>
								<li>
									<a href="#">3</a>
								</li>
								<li>
									<a href="#">4</a>
								</li>
								<li>
									<a href="#">Próximo</a>
								</li>
							</ul>
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