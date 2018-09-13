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
		var app_key = $("#app_key").val();
		var mesesGraph;
		var CadastroGraph;
		var ApresentacaoGraph;

		$.ajax({
			url: $("#app_url").val() + "/api/prospectos/auth/graph/"+app_key,
			method: "POST",
			dataType: 'json',
			success: function(dados){
				$("#media_apns").append(dados.medias);
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

	function Profile(){	

		var state_ = $("#cities_select").attr('data-state');
		var citie_ = $("#cities_select").attr('data-citie');


		function updateCitie(state) {
			$.ajax({
				url: $("#app_url").val() + "/api/states/"+ state,
				type: "POST",
				states_id: code,
				dataType: 'json',
			})
		}

		$('#state_select').change(function(){

			var code = $(this).val();
			if( code ) {

				$.ajax({
					url: $("#app_url").val() + "/api/states/"+ code,
					method: "POST",
					states_id: code,
					dataType: 'json',
					success: function(response){


						$('#cities_select').removeClass(' disabled ');
						
						var options = '<option value=""></option>';
						for (var i = 0; i < response.length; i++) {

							options += '<option value="' +
							response[i].cities_id + '">' +
							response[i].name + '</option>';
						}
						$('#cities_select').html(options);

					}
				});
			}

		});

		$("#open-search-file").on("click", function(){
			$("#selet-file").slideToggle('slow');

		});


		$("#upload_select").on("click", function(event) {
			
			event.preventDefault();
           //do something
           $(this).prop('disabled', true);

           $("#selet-file").css("opacity", "0.5");
           $(".loading").show();

           var key = $('#key_input').val();
           var file_data = $('#sortpicture').prop('files')[0];   
           var form_data = new FormData();                  
           form_data.append('file', file_data);


           $.ajax({
           	url: $("#app_url").val() + "/api/update/photo/" + key,
           	type: 'post',
           	cache: false,
           	contentType: false,
           	processData: false,
           	data: form_data,
           	success: function(result)
           	{
           		location.reload();
           	},
           	error: function(data)
           	{
           		console.log(data);
           	}
           }); 

       });

	} 
	new Profile();	


}(jQuery));
//# sourceMappingURL=client-trainings-invite.js.map
