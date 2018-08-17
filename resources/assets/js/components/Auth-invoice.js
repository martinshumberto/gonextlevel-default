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
                        })
                    }else if(data.result == "expired"){
                        swal({
                            type: 'error',
                            title: 'Ops...',
                            text: 'Cupom Vencido!'
                        })

                    }else if(data.result == "registered"){
                        swal({
                            type: 'error',
                            title: 'Ops...',
                            text: 'Cupom ja registrado em seu Cadastro!'
                        })
                    }else if(data.result == "success"){
                        swal({
                            type: 'success',
                            title: 'Legal...',
                            text: 'Cupom Validado com sucesso!'
                        }),
                        $("#discount").attr('disabled', 'disabled');    
                        $(".discount").show();
                        $(".discount").append("<td>Cupom de Desconto ("+cupom+")</td>");
                        if(data.discount_type == 1){
                            var typeDescount = "%";
                            var percentagem = parseFloat(data.discount_price);
                            var price = data.price;
                            var total = price * (percentagem/100);

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
            }else if($(this).val() == 1){
                $(".t_body").append("<td class='descount_attr'>Desconto Trimestral </td>");
                $(".t_body").append("<td class='text-right descount_attr'> - %5</td>");

                var price = ($("#price_now").val() * 3);
                var percentagem = parseFloat(0.05);
                var desconto = price * percentagem;
                var total = price - desconto ;
                $("#price_refresh").val(total.toFixed(2));

                $(".total-tr").append("<td id='total-inovice' class='text-right' colspan='2'>R$ "+total.toFixed(2)+"</td>");
            }else if($(this).val() == 2){
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