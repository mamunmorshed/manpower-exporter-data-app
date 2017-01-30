$('#agent-login button').on('click', function(e){
	e.preventDefault();
	var agentId =  $('#agent-sid').val().toUpperCase().trim();
	if (agentId) {
		var agentUrl = "/agents/"+agentId+"/json";
		$.get( agentUrl, function( data ) {

			$('#login-block').fadeOut(function(){
				$('input[name=agent_id]').val(data['sid']);
				$('input[name=agent_name]').val(data['name']);
				$('input[name=agent_commission]').val(data['commission']);
				$('#agent-commission-form').removeClass('invisible');
			});

		});
		
		$( document ).ajaxError(function( event, request, settings ) {
		  // $( "#msg" ).append( "<li>Error requesting page " + settings.url + "</li>" );
		  alert('Agent Not Found');
		});
	}
	
});
