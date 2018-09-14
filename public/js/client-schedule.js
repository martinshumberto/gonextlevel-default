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

    function Schedule(){

      var _auth = $("#app_key").val();
      var _url = $("#app_url").val();

      if ($("#schedule").length) {
        var calendar, d, date, m, y;

        date = new Date();

        d = date.getDate();

        m = date.getMonth();

        y = date.getFullYear();

        calendar = $("#schedule").fullCalendar({
          header: {
            left: "prev,next today",
            center: "title",
            right: "month,agendaWeek,agendaDay"
          },
          selectable: true,
          selectHelper: true,
          select: function select(start, end, allDay) {
            var title;
            title = prompt("Event Title:");
            if (title) {
              calendar.fullCalendar("renderEvent", {
                title: title,
                start: start,
                end: end,
                allDay: allDay
              }, true);
            }
            return calendar.fullCalendar("unselect");
          },
          editable: true,
          events: {
            url:  _url + '/api/agenda/auth/show/' + _auth,
            type: 'POST', // Send post data
            error: function() {
              alert('There was an error while fetching events.');
            }
          }
        });
      }
    }

    new Schedule();

  }(jQuery));
//# sourceMappingURL=client-schedule.js.map
