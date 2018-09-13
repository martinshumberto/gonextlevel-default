<!--------------------
START - Modal - Register
-------------------->
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="modal-register" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-lg modal-centered" role="document">
		<div class="modal-content text-center">
			<form id="register-new-prospect">
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Fechar</span><span class="os-icon os-icon-close"></span></button>
				<div class="onboarding-slider-w">
					<div class="onboarding-slide">
						<div class="onboarding-side-by-side">
							<div class="onboarding-content with-gradient">
								<h4 class="onboarding-title">Novo prospecto</h4>
								<div class="onboarding-text">Para adicionar um novo prospecto, preencha as informações abaixo.</div>
								@csrf
								<input type="hidden" name="key" value="{!!criptBySystem( Auth::user()->client_id, 'e' );!!}">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="">Nome</label>
											<input class="form-control" placeholder="Nome do prospecto" type="text" value="" name="name">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="">Telefone</label>
											<input class="form-control MaskPhone" placeholder="(00) 00000-0000" type="tel" value="" name="phone">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="">E-mail</label>
											<input class="form-control" placeholder="Email do prospecto" type="email" value="" name="email">
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="onboarding-slide">
						<div class="onboarding-side-by-side">
							<div class="onboarding-content with-gradient">
								<h4 class="onboarding-title">Qualificar prospecto</h4>
								<div class="onboarding-text">Para qualificar o prospectado que está cadastrando, preencha as informações abaixo.</div>
								<form>
									<div class="form-group row">
										<label class="col-form-label col-sm-3" for=""> Network</label>
										<div class="col-sm-9">
											<select name="network" class="form-control">
												<option selected>Selecione</option>
												<option value="1">Muito baixo (1) </option>
												<option value="2">Baixo (2)</option>
												<option value="3">Médio (3)</option>
												<option value="4">Alto (4)</option>
												<option value="5">Muito alto (5)</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-sm-3" for=""> Credibilidade</label>
										<div class="col-sm-9">
											<select name="credibility" class="form-control">
												<option selected>Selecione</option>
												<option value="1">Muito baixo (1) </option>
												<option value="2">Baixo (2)</option>
												<option value="3">Médio (3)</option>
												<option value="4">Alto (4)</option>
												<option value="5">Muito alto (5)</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-sm-3" for=""> Empreendedor</label>
										<div class="col-sm-9">
											<select name="entrepreneur" class="form-control">
												<option selected>Selecione</option>
												<option value="1">Muito baixo (1) </option>
												<option value="2">Baixo (2)</option>
												<option value="3">Médio (3)</option>
												<option value="4">Alto (4)</option>
												<option value="5">Muito alto (5)</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-sm-3" for=""> Energia</label>
										<div class="col-sm-9">
											<select name="energy" class="form-control">
												<option selected>Selecione</option>
												<option value="1">Muito baixo (1) </option>
												<option value="2">Baixo (2)</option>
												<option value="3">Médio (3)</option>
												<option value="4">Alto (4)</option>
												<option value="5">Muito alto (5)</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-sm-3" for=""> Sonhador</label>
										<div class="col-sm-9">
											<select name="dreamer" class="form-control">
												<option selected>Selecione</option>
												<option value="1">Muito baixo (1) </option>
												<option value="2">Baixo (2)</option>
												<option value="3">Médio (3)</option>
												<option value="4">Alto (4)</option>
												<option value="5">Muito alto (5)</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-sm-3" for=""> Recurso</label>
										<div class="col-sm-9">
											<select name="resource" class="form-control">
												<option selected>Selecione</option>
												<option value="1">Muito baixo (1) </option>
												<option value="2">Baixo (2)</option>
												<option value="3">Médio (3)</option>
												<option value="4">Alto (4)</option>
												<option value="5">Muito alto (5)</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-sm-3" for=""> Tipo de contato</label>
										<div class="col-sm-9">
											<select name="contact" class="form-control">
												<option selected>Selecione</option>
												<option value="1">Frio</option>
												<option value="2">Quente</option>
											</select>
											<small class="form-text text-muted">
												"Frio" para contatos de terceiros. "Quente" para seus contatos próximos.
											</small>
										</div>
									</div>

								</form>
							</div>
							<button class="create-prospect slick-complete-r slick-arrow" aria-label="Concluir" type="button" aria-disabled="false">Concluir</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!--------------------
	END - Modal - Register
	-------------------->
</div>