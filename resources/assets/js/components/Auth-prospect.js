;(function($){

	function Prospect(){

		$(document).on("click", ".create-prospect", function(){
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

}(jQuery));
