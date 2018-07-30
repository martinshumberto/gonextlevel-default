;(function($){

	function AuthPirpeline() {
		
  // #15. CRM PIPELINE
	  if ($('.pipeline').length) {
	    // INIT DRAG AND DROP FOR PIPELINE ITEMS
	    var dragulaObj = dragula($('.pipeline-body').toArray(), {})
	    .on('drag', function () {})
	    .on('drop', function (el) {
	    	alert(el);
	    }).on('over', function (el, container) {
	      $(container).closest('.pipeline-body').addClass('over');
	    }).on('out', function (el, container, source) {

	      var new_pipeline_body = $(container).closest('.pipeline-body');
	      new_pipeline_body.removeClass('over');
	      var old_pipeline_body = $(source).closest('.pipeline-body');
	    });
	  }


	}
	new AuthPirpeline();
}(jQuery));

//# sourceMappingURL=all.js.map
