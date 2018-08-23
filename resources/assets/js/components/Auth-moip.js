;(function($){
	function AuthMoip() {
		var expiry = $("#expiry").val();

		$(document).on('click', '.btn-send-card',function(){
			
			

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

	}
	new AuthMoip();
}(jQuery));