$(document).on('ready', function(){
	$('form').on('submit',function(e){
		var request = $('form').attr('action');
		var method = $('form').attr('method');

		e.preventDefault(); 
		// alert(method);
		$.ajax({
			url: request,
			type: method,
			data: $('form').serialize(),
			success: function(resp) {
				$("#aviso").html('<b>Todo bien</b>');
				console.log(resp)
			},
			error: function(jqXHR, status, error){
				$("#aviso").html('<b>Algo salio mal</b>');
				console.log(status)
				console.log(error)
			},
			complete: function(jqXHR, status){
				console.log(status)
			},
			timeout: 10000
		})
	})

})