$('.accordion-body').hide();

$('.toggle-accordion').each(function () {
	$(this).show(0).on('click', function (e) {
		/* segmenta elementos */
		e.preventDefault();
		/* procura proximo accordion-body e faz alterações (logo após, não a necessidade de separar por id) */
		$(this).next('.accordion-body').slideToggle('slow', function () {
			$(this).prev().html($(this).is(':visible') ? '<i class="os-icon os-icon-arrow-right2"></i>' : '<i class="os-icon os-icon-arrow-down"></i>');
		});
	});
});


