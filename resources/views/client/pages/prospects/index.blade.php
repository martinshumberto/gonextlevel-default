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
							<a class="btn btn-sm btn-secondary btn-upper" href="{!!route('client-prospect-pirpeline')!!}">
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

		@if($errors->any())            
		<div style="padding-top: 15px; padding-bottom: 15px; margin-bottom:20px; font-size: 16px;" class="col-md-12  btn-{{$errors->first('type')}} " href="#">{{$errors->first('msg')}}</div>
		@endif

		<div class="element-box">
			<form method="get" action="{!!route('client-prospect')!!}">
				
				<h5 class="form-header">Faça sua Busca</h5>
				<div class="form-desc">Consulte todos os seus prospectos já cadastrados na plataforma, também podendo ser consultado aqueles concluidos e arquivos.</div>

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for=""> Nome do Prospecto</label>
							<input name="name" class="form-control" placeholder="Nome completo prospecto ou parte dele" type="text">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for=""> Etapa</label>
							<select name="stage" class="form-control">
								<option selected=""></option>
								<option value="1">Convite</option>
								<option value="2">Apresentar</option>
								<option value="3">Acompanhar</option>
								<option value="4">Fechamento</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for=""> Status</label>
							<select name="status" class="form-control">
								<option selected=""></option>
								<option value="0">Inativo</option>
								<option value="1">Ativo</option>
								<option value="2">Arquivado</option>
								<option value="3">Concluido</option>
								<option value="4">Perdido</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for=""> Escolha o Período</label>
							<div class="date-input">
								<input name='date-interval'  autocomplete='off' data-range='true' data-multiple-dates-separator=" - " type='text' class='datepicker-here form-control' data-language='pt-BR' />
							</div>
						</div>
					</div>
				</div>
				<button class="btn  btn-secondary" type="submit">Buscar</button>
			</form>
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
							@foreach ($prospects as $key => $value)
							<tr>
								<td><input class="form-control" type="checkbox"></td>
								<td>{!! $value->prospect_id !!}</td>
								<td>{!! $value->name !!}</td>
								<td>{!! $value->stage() !!}</td>
								<td class="text-center">
									<span class="status-pill smaller {!!$value->color()!!}"></span>
									<span>{!! $value->status() !!}</span>
								</td>
								<td class="row-actions text-right">
									<a href="{!!route('client-prospect-view',$value->prospect_id)!!}">
										<i class="os-icon os-icon-user-male-circle2"></i>
									</a>
									<a href="{!!route('client-prospect-archivament',$value->prospect_id)!!}">
										<i class="os-icon os-icon-ui-44"></i>
									</a>
									<a class="danger" href="{!!route('client-prospect-trash',$value->prospect_id)!!}">
										<i class="os-icon os-icon-ui-15"></i>
									</a>
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

						{!!$prospects->appends(Request::input())->render()!!}      
					</div>
					<!--------------------
					END - Controls Below Table
					-------------------->
				</div>
			</div>
		</div>
	</div>
	

	@endsection