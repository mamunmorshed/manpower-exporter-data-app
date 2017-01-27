$('#worker-login button').on('click', function(e){
	e.preventDefault();
	var workerId =  $('#worker-sid').val().toUpperCase().trim();
	if (workerId) {
		var workerUrl = "/workers/"+workerId+"/json";
		$.get( workerUrl, function( data ) {

			$('#login-block').fadeOut(function(){
				$('#worker-input-form').removeClass('invisible');
				$('input[name=worker_id]').val(data['sid']);
				$('input[name=worker_name]').val(data['name']);
				$('input[name=worker_agent_id]').val(data['agent']);
				$('input[name=worker_commission]').val(data['commission']);
				$('input[name=worker_agency_in_bd]').val(data['agency_in_bd']);
				$('input[name=worker_agency_abroad]').val(data['agency_abroad']);
				$('input[name=worker_country]').val(data['country']);
				$('input[name=worker_flight_date]').val(data['flight_date']);

			});

		});
		
		$( document ).ajaxError(function( event, request, settings ) {
		  // $( "#msg" ).append( "<li>Error requesting page " + settings.url + "</li>" );
		  alert('Worker Not Found');
		});
	}
	
});
