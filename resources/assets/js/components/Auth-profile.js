;(function($){

	function Profile(){	

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


		$("#upload_select").on("click", function() {

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