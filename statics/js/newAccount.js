$(document).on('ready', function(){

    $.post(urlBase+"index.php/account_controller/getDisciplines", {
    }, function(data) {
        $("#iddiscipline").html(data);
    })

    $.post(urlBase+"index.php/account_controller/getSubdisciplines", {
    }, function(data) {
        $("#idsubDiscipline").html(data);
    })

    $.post(urlBase+"index.php/account_controller/getSpecialisms", {
    }, function(data) {
        $("#idspecialism").html(data);
    })

	$('#account').on('submit',function(e){
		var request = $('form').attr('action');
		var method = $('form').attr('method');

		e.preventDefault(); 

		var em1 = $('#email1').val();
		var em2 = $('#email2').val();
		console.log(em1);
		console.log(em2);
		if((em1 == em2) && (em1 != "") && (em2 != "")){
			$.ajax({
				url: request,
				type: method,
				data: $('form').serialize(),
				success: function(resp) {
					$("#aviso").html('<script>alert("Su registro a sido realizado con éxito.");</script>');
					console.log(resp);

					$.post(urlBase+"index.php/account_controller/sendEmail", {
						iduser:resp
					}, function(data) {
						console.log(data);
					    window.location = urlBase+"index.php/account_controller/sendConfirmation";
					})
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
		}
	})


})