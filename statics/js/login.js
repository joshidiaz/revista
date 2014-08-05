$(document).on('ready', function(){

	$('#login').on('submit',function(e){
		var request = $('form').attr('action');
		var method = $('form').attr('method');

		e.preventDefault(); 
		$.ajax({
			url: request,
			type: method,
			data: $('#login').serialize(),
			success: function(resp) {
				if(resp == 'incorrecto'){
					$("#aviso").html('<div data-alert class="alert-box warning">El usuario y/o contraseña que proporcionó son incorrectos, por favor verifique los datos e intente de nuevo.<a href="#" class="close">&times;</a> </div>');					
				}else{
					window.location = urlBase+"index.php/dashboard_controller";
				}
				console.log(resp);
			},
			error: function(jqXHR, status, error){
				$("#aviso").html('<div data-alert class="alert-box warning">Algo salió mal, por favor intente de nuevo.<a href="#" class="close">&times;</a> </div>');
				console.log(status)
				console.log(error)
			},
			complete: function(jqXHR, status){
				console.log(status)
			},
			timeout: 1000
		})	
	})
})