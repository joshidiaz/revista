$(document).on('ready', function(){

	$.post(urlBase+"index.php/autor_controller/getArticlesUser", {
		
	}, function(data) {
		var articles = JSON.parse(data);
		console.log(articles);

		var cadena = "";

		$.each(articles, function( key, value ) {
    		cadena += "<tr><td>"+value.articleName+"</td>";
    		cadena += "<td>"+value.review1+"</td>";
    		cadena += "<td>"+value.review2+"</td>";
    		cadena += "<td>"+value.status+"</td></tr>";
			console.log( key+':'+value.articleName );
		});
		$('#userArticles').html(cadena);

		
	$('#articlesUser').DataTable({
		"language": {
		    "url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
		},
		"aLengthMenu": [[10, 20, 30], [10, 20, 30]],
        "iDisplayLength": 10
    });
		
	})

	$('#sendArticle').on('click',function(){
		var idarticle = $('#idarticle').val();
		// alert(idarticle);
		$.post(urlBase+"index.php/autor_controller/sendArticle", {
			idarticle : idarticle
		}, function(data) {
			// console.log (data);
			// $('#userArticles').html(data);
			window.location = urlBase+"index.php/dashboard_controller/getArtsListAutor";
		})
	})	 

})