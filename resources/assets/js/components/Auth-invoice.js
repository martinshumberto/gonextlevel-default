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
    }
    new ChangeMethod();

}(jQuery));