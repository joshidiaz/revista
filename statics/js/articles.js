$(document).on('ready', function(){

	 $.post(urlBase+"index.php/autor_controller/getArticlesUser", {
	 	
    	}, function(data) {
        	$('#userArticles').html(data);
    	})

})