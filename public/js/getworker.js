$('#worker-login button').on('click', function(e){
	e.preventDefault();
	var workerId =  $('#worker-id').val().toUpperCase().trim();
	if (workerId) {
		var workerUrl = "/workers/"+workerId+"/json";
		$.get( workerUrl, function( data ) {

			$('#worker-login').fadeOut(function(){
				$('#worker-id').attr("disabled", "disabled");
				$('#worker-input-form').removeClass('invisible');
				$('input[name=agent-id]').val(data['agent-id']);
				$('input[name=commission]').val(data['commission']);
				$('input[name=agency_in_bd]').val(data['agency_in_bd']);
				$('input[name=agency_abroad]').val(data['agency_abroad']);
				$('input[name=country]').val(data['country']);

			});

		});
		
		$( document ).ajaxError(function( event, request, settings ) {
		  // $( "#msg" ).append( "<li>Error requesting page " + settings.url + "</li>" );
		  alert('Worker Not Found');
		});
	}
	
});
