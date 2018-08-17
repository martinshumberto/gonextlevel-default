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
