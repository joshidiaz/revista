$(document).on('ready', function(){

	$.post(urlBase+"index.php/editor_controller/getAllArticles", {
		
	}, function(data) {
		$('#allArticles').html(data);
	})

	
})