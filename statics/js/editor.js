$(document).on('ready', function(){

	$.post(urlBase+"index.php/editor_controller/getAllArticles", {
		
	}, function(data) {
		// console.log(data);
		$('#allArticles').html(data);
	})

	
})