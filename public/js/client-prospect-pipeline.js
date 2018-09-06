;(function($){

	function Prospect(){

		$(document).on("click", ".create-prospect", function (event){
			event.preventDefault();
           //do something
           $(this).prop('disabled', true);

			
			var dados = $("#register-new-prospect").serialize();
			$.ajax({
				type: "POST",
				url: $("#app_url").val() + "/api/prospectos/auth/cadastro",
				data: dados,
				success: function( data )
				{
					swal({
						type: 'success',
						title: 'Legal...',
						text: 'Prospecto cadastrado com sucesso!'
					}).then((result) => {
						if (result.value) {						
							location.reload();
						}
					})
				},
				error: function()
				{
					swal({
						type: 'error',
						title: 'Ops...',
						text: 'Algo deu errado!'
					})
				}
			});
		});
	}
	new Prospect();

	function graph(){	

		var graphID = $('#analitycs-dashboard');
		var mesesGraph;
		var CadastroGraph;
		var ApresentacaoGraph;

		$.ajax({
			url: $("#app_url").val() + "/api/prospectos/auth/graph",
			method: "POST",
			dataType: 'json',
			success: function(dados){
				mesesGraph = dados.meses;
				CadastroGraph     = dados.cadastro;       
				ApresentacaoGraph = dados.apresentacao;			
				var graphDATA = {
					labels: mesesGraph,
					datasets: [{
						label: "Apresentações",
						backgroundColor: ["#5797FC", "#629FFF", "#6BA4FE", "#74AAFF", "#7AAEFF", '#85B4FF'],
						borderColor: ['rgba(255,99,132,0)', 'rgba(54, 162, 235, 0)', 'rgba(255, 206, 86, 0)', 'rgba(75, 192, 192, 0)', 'rgba(153, 102, 255, 0)', 'rgba(255, 159, 64, 0)'],
						borderWidth: 1,
						data: ApresentacaoGraph
					},
					{
						label: "Cadastros",
						backgroundColor: ["#2461c1", "#2461c1", "#2461c1", "#2461c1", "#2461c1", '#2461c1', "#2461c1", "#2461c1", "#2461c1", "#2461c1", "#2461c1", '#2461c1'],
						borderColor: ['rgba(255, 159, 64, 0)', 'rgba(153, 102, 255, 0)', 'rgba(75, 192, 192, 0)', 'rgba(255, 206, 86, 0)', 'rgba(54, 162, 235, 0)', 'rgba(255,99,132,0)', 'rgba(255, 159, 64, 0)', 'rgba(153, 102, 255, 0)', 'rgba(75, 192, 192, 0)', 'rgba(255, 206, 86, 0)', 'rgba(54, 162, 235, 0)', 'rgba(255,99,132,0)'],
						borderWidth: 1,
						data: CadastroGraph
					}]
				};
      // -----------------
      // init bar chart
      // -----------------
      new Chart(graphID, {
      	type: 'bar',
      	data: graphDATA,
      	options: {
      		scales: {
      			xAxes: [{
      				display: true,
      				ticks: {
      					fontSize: '11',
      					fontColor: '#969da5'
      				},
      				gridLines: {
      					color: 'rgba(0,0,0,0.05)',
      					zeroLineColor: 'rgba(0,0,0,0.05)'
      				}
      			}],
      			yAxes: [{
      				ticks: {
      					beginAtZero: true
      				},
      				gridLines: {
      					color: 'rgba(0,0,0,0.05)',
      					zeroLineColor: '#6896f9'
      				}
      			}]
      		},
      		legend: {
      			display: true
      		},
      		animation: {
      			animateScale: true
      		}
      	}
      });



  }
});

	}

	new graph();

}(jQuery));

;(function($){

	function AuthPipeline() {

		$('.accordion-body').hide();
		$('.toggle-accordion').each(function () {
			$(this).show(0).on('click', function (e) {
				/* segmenta elementos */
				e.preventDefault();
				/* procura proximo accordion-body e faz alteraÃ§Ãĩes (logo apÃģs, nÃĢo a necessidade de separar por id) */
				$(this).next('.accordion-body').slideToggle('slow', function () {
					$(this).prev().html($(this).is(':visible') ? '<i class="os-icon os-icon-arrow-right2"></i>' : '<i class="os-icon os-icon-arrow-down"></i>');
				});
			});
		});

		// MASK FUNCTIONS
		$('.MaskHour').mask('00:00');
		
  // #15. CRM PIPELINE
  if ($('.pipeline').length) {
	    // INIT DRAG AND DROP FOR PIPELINE ITEMS
	    var dragulaObj = dragula($('.pipeline-body').toArray(), {})
	    .on('drag', function (el, container) {


	    })
	    .on('drop', function(el, container ){
	    	// Elements Update for SQL/PHP
	    	var EleMentStrutude = $(el).attr('data-strutude');
	    	var cOntainerStrutude = $(container).attr('data-strutude');
	    	var auth = $("input[name='key-auth']").val();

	    	$.ajax({
	    		url: $("#app_url").val() + "/api/prospectos/auth/pipeline",
	    		type: 'POST',
	    		data: { EleMentStrutude, cOntainerStrutude, auth}});

	    }).on('over', function (el, container) {
	    	$(container).closest('.pipeline-body').addClass('over');
	    }).on('out', function (el, container, source) {

	    	var new_pipeline_body = $(container).closest('.pipeline-body');
	    	new_pipeline_body.removeClass('over');
	    	var old_pipeline_body = $(source).closest('.pipeline-body');
	    });
	}

	$(document).on("click", ".apn-create", function(){
		$('.datepicker ').css("z-index", "999999");
		var prospct_id = $(this).attr('data-reference');
		$("input[name='auth']").val(prospct_id);
		$('.create-apn-btn').click( function(){
			var dados = $(".form-apn").serialize();
			$.ajax({
				type: "POST",
				url: $("#app_url").val() + "/api/prospectos/auth/apn",
				data: dados,
				success: function( data )
				{
					if(data.result == "success"){
						swal({
							type: 'success',
							title: 'Legal...',
							text: 'Apresentacao marcada com sucesso!'
						}).then((result) => {
							if (result.value) {						
								location.reload();
							}
						})

					}else if(data.result == "error"){
						swal({
							type: 'error',
							title: 'Ops...',
							text: 'Algo deu errado!'
						})
					}
				},
				error: function()
				{
					swal({
						type: 'error',
						title: 'Ops...',
						text: 'Algo deu errado!'
					})
				}
			});
		});
	});
	$(document).on("click", ".apn-update", function(){
		$('.datepicker ').css("z-index", "999999");
		var prospct_id = $(this).attr('data-reference');
		$("input[name='auth']").val(prospct_id);
		$('.update-apn-btn').click( function(){
			var dados = $(".form-apn-update").serialize();
			$.ajax({
				type: "POST",
				url: $("#app_url").val() + "/api/prospectos/auth/apn",
				data: dados,
				success: function( data )
				{
					if(data.result == "success"){
						swal({
							type: 'success',
							title: 'Legal...',
							text: 'Apresentacao alterada com sucesso!'
						}).then((result) => {
							if (result.value) {						
								location.reload();
							}
						})

					}else if(data.result == "error"){
						swal({
							type: 'error',
							title: 'Ops...',
							text: 'Algo deu errado!'
						})
					}
				},
				error: function()
				{
					swal({
						type: 'error',
						title: 'Ops...',
						text: 'Algo deu errado!'
					})
				}
			});
		});
	});
}
new AuthPipeline();
}(jQuery));
//# sourceMappingURL=client-prospect-pipeline.js.map
