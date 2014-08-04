$(document).on('ready', function(){

    $.post(urlBase+"index.php/account_controller/getDisciplines", {
    }, function(data) {
        $("#disiplineName").html(data);
    })

    $.post(urlBase+"index.php/account_controller/getSubdisciplines", {
    }, function(data) {
        $("#subdisiplineName").html(data);
    })

    $.post(urlBase+"index.php/account_controller/getSpecialisms", {
    }, function(data) {
        $("#specialismName").html(data);
    })

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
				$("#aviso").html('<script>alert("Su registro a sido realizado con éxito.");</script>');
				console.log(resp)
				window.location = urlBase+"index.php/login_controller";
			},
			error: function(jqXHR, status, error){
				$("#aviso").html('<script>alert("Algo salió mal con su registro vuelva a intentarlo.");</script>');
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