;(function($){

	function AuthPirpeline() {

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

	    	$.ajax({
	    		url: $("#app_url").val() + "/api/prospectos/auth/pipeline",
	    		type: 'POST',
	    		data: { EleMentStrutude, cOntainerStrutude}});

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
new AuthPirpeline();
}(jQuery));