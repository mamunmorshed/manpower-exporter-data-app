$(".delete-btn").on('click', function(e){
	e.preventDefault();
	var id = $(this).data( "id" );
	if (id) {
		var actionUrl = "/workers/" + id + "/destroy";
		$( "#delete-form" ).attr('action', actionUrl);
		$( "#delete-form" ).submit();
	} else {
		alert("Error processing the request.");
	}
	
});
