$(document).on('ready', function(){

	$('#login').on('submit',function(e){
		var request = $('form').attr('action');
		var method = $('form').attr('method');

		e.preventDefault(); 
		$.ajax({
			url: request,
			type: method,
			data: $('form').serialize(),
			success: function(resp) {
				if(resp =! 'incorrecto'){
					$("#aviso").html('<div data-alert class="alert-box warning"> <!-- Your content goes here --> <a href="#" class="close">&times;</a> </div>');					
				}
				console.log(resp);
				
			},
			error: function(jqXHR, status, error){
				$("#aviso").html('error');
				// console.log(status)
				// console.log(error)
			},
			complete: function(jqXHR, status){
				// console.log(status)
			},
			timeout: 10000
		})	
	})


})