;(function($){

	var SPMaskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	spOptions = {
		onKeyPress: function(val, e, field, options) {
			field.mask(SPMaskBehavior.apply({}, arguments), options);
		}
	};
	function AuthMask() {
		$('.MaskHour').mask('00:00');
		$('.MaskDate').mask('00/00/0000');
		$('.MaskPhone').mask(SPMaskBehavior, spOptions);
		$('.MaskCpf').mask('000.000.000-00');
		$('.MaskZipcode').mask('00.000-000');
		$('.MasMoney').mask('000.000.000.000.000,00', {reverse: true});
	}

	new AuthMask();
}(jQuery));

;(function($){

    function Invoice() {
        var card = new Card({
            // a selector or DOM element for the form where users will
            // be entering their information
            form: '.cardpayment form', // required
            // a selector or DOM element for the container
            // where you want the card to appear
            container: '.card-wrapper', // required

            formSelectors: {
                numberInput: 'input#number', // optional — default input[name="number"]
                expiryInput: 'input#expiry', // optional — default input[name="expiry"]
                cvcInput: 'input#cvc', // optional — default input[name="cvc"]
                nameInput: 'input#name' // optional - defaults input[name="name"]
            },

            width: 350, // optional — default 350px
            formatting: true, // optional - default true

            // Strings for translation - optional
            messages: {
                validDate: 'valid\ndate', // optional - default 'valid\nthru'
                monthYear: 'mm/yyyy', // optional - default 'month/year'
            },

            // Default placeholders for rendered fields - optional
            placeholders: {
                number: '•••• •••• •••• ••••',
                name: 'Nome Completo',
                expiry: '••/••',
                cvc: '•••'
            },

            masks: {
                cardNumber: '•' // optional - mask card number
            },

            // if true, will log helpful messages for setting up Card
            debug: true // optional - default false
        });

    }
    new Invoice();

    function ChangeMethod()	{

        $("#method-payments").on('change', function(){
            $(".method").hide();
            $('.' + this.value).show();
        });
        $("#discount").focusout(function(){
            var key_auth = $("#key_auth").val();
            var cupom = $(this).val();

            $.ajax({
                url: $("#app_url").val() + "/api/inovices/auth/discount",
                method: "POST",
                data: {key: key_auth, code: cupom},
                dataType: 'json',
                beforeSend: function(){
                    swal({
                      title: 'Aguarde, Verificando Cupom!',
                      timer: 2000,
                      onOpen: () => {
                        swal.showLoading()
                        timerInterval = setInterval(() => {
                          swal.getContent().querySelector('strong')
                          .textContent = swal.getTimerLeft()
                      }, 5000)
                    },
                    onClose: () => {
                        clearInterval(timerInterval)
                    }
                })
                },
                success: function( data )
                {
                    if(data.result == "invalid"){
                        swal({
                            type: 'error',
                            title: 'Ops...',
                            text: 'Codigo Invalido!'
                        });
                        $("#discount").val();
                    }else if(data.result == "expired"){
                        swal({
                            type: 'error',
                            title: 'Ops...',
                            text: 'Cupom Vencido!'
                        });
                        $("#discount").val();

                    }else if(data.result == "registered"){
                        swal({
                            type: 'error',
                            title: 'Ops...',
                            text: 'Cupom ja registrado em seu Cadastro!'
                        });
                        $("#discount").val();
                    }else if(data.result == "success"){
                        swal({
                            type: 'success',
                            title: 'Legal...',
                            text: 'Cupom Validado com sucesso!'
                        }),
                        //$("#discount").attr('disabled', 'disabled');    
                        $(".discount").show();
                        $(".discount").append("<td>Cupom de Desconto ("+cupom+")</td>");
                        if(data.discount_type == 1){
                            var typeDescount = "%";
                            var percentagem = parseFloat(data.discount_price);
                            var price = data.price;
                            //var total = price * (percentagem/100);
                            var desconto = price * (percentagem/100);
                            var total_ = price - desconto;
                            var total = total_.toFixed(2);

                            $( "#total-inovice" ).remove();
                            $(".discount").append("<td class='text-right'>- "+typeDescount+""+percentagem+"</td>");

                            $('#price_now').val(total);
                        }else if(data.discount_type == 2){
                            var typeDescount = "R$";
                            var descount = data.discount_price;
                            var price = data.price;
                            var total = price - descount;

                            $( "#total-inovice" ).remove();
                            $(".discount").append("<td class='text-right'>- "+typeDescount+""+descount+"</td>");

                            $('#price_now').val(total);
                        }
                        $(".total-tr").append("<td id='total-inovice' class='text-right' colspan='2'>R$ "+total+"</td>");
                        $("#price_refresh").val(total);
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
$('#cicle-payament').on('change', function(){

    var valor_real = $("#price_now").val();


    $( "#total-inovice" ).remove();

    $('.descount_attr').remove();
    if($(this).val() == 0){
        $(".total-tr").append("<td id='total-inovice' class='text-right' colspan='2'>R$ "+valor_real+"</td>");
    }else if($(this).val() == 2){
        $(".t_body").append("<td class='descount_attr'>Desconto Trimestral </td>");
        $(".t_body").append("<td class='text-right descount_attr'> - %5</td>");

        var price = ($("#price_now").val() * 3);
        var percentagem = parseFloat(0.05);
        var desconto = price * percentagem;
        var total = price - desconto ;
        $("#price_refresh").val(total.toFixed(2));

        $(".total-tr").append("<td id='total-inovice' class='text-right' colspan='2'>R$ "+total.toFixed(2)+"</td>");
    }else if($(this).val() == 3){
        $(".t_body").append("<td class='descount_attr'>Desconto Anual </td>");
        $(".t_body").append("<td class='text-right descount_attr'> - %15</td>");

        var price = ($("#price_now").val() * 12);
        var percentagem = parseFloat(0.15);
        var desconto = price * percentagem;
        var total = price - desconto ;
        $("#price_refresh").val(total.toFixed(2));


        $(".total-tr").append("<td id='total-inovice' class='text-right' colspan='2'>R$ "+total.toFixed(2)+"</td>");  
    }

});

$(document).on('click', '.btn-send-card', function(){
            //alert("algo");
        });
}
new ChangeMethod();

}(jQuery));
;(function($){
	function AuthMoip() {
		var expiry = $("#expiry").val();

		$(document).on('click', '.btn-send-card',function(event){

			event.preventDefault();
           //do something
           $(this).prop('disabled', true);



           var expiry = $("#expiry").val();
           var expiry_blank = expiry.replace(" ","");
           var expiry_array = expiry_blank.split('/');
           var month = expiry_array[0];
           var year = expiry_array[1];

           var cc = new Moip.CreditCard({
           	number  : $("#number").val(),
           	cvc     : $("#cvc").val(),
           	expMonth: month,
           	expYear : year,
           	pubKey  : $("#public_key").val()
           });

           console.log(cc);
           if( cc.isValid()){
           	var hash = cc.hash();
           	$('#f_discount').val($('#discount').val());
           	$('#f_cicle').val($('#cicle-payament').val());
           	$("#encrypted_value").val(cc.hash());
           	$("#form-card").submit();
           }
           else{			
           	swal({
           		type: 'error',
           		title: 'Ops...',
           		text: 'Cartão de crédito inválido. Verificar parâmetros: Numero, Codigo de Segurança, Vencimento!'
           	})
           }
       });	


		$(document).on('click', '.btn-send-card', function(e){

      alert("ALGO");

			e.preventDefault();
           //do something
           $(this).prop('disabled', true);

			swal(
				'Pronto!',
				'Suas Informações foram enviadas com sucesso, Aguarde enquanto é processado o pedido',
				'success'
				)
		});


	}
	new AuthMoip();
}(jQuery));
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

//# sourceMappingURL=client-create-invoice.js.map
