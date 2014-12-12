$(document).on('ready', function(){

	$.post(urlBase+"index.php/autor_controller/getArticlesUser", {
		
	}, function(data) {
		$('#userArticles').html(data);
	})

	$('#sendArticle').on('click',function(){
		var idarticle = $('#idarticle').val();
		// alert(idarticle);
		$.post(urlBase+"index.php/autor_controller/sendArticle", {
			idarticle : idarticle
		}, function(data) {
			// $('#userArticles').html(data);
			window.location = urlBase+"index.php/dashboard_controller/getArtsListAutor";
		})
	})	 

})