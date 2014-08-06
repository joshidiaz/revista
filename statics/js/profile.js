$(document).on('ready', function(){

	$.post(urlBase+"index.php/user_controller/getAllUserData/8", {
    }, function(data) {
        // console.log(data);
    	var userData=JSON.parse(data);
    	// console.log(userData.name);
    	// $('#name').attr('value',userData.name);
    	$.each( userData, function( key, value ) {
    		$('#'+key).attr('value',value);
			console.log( key+':'+value );
		});
    	$("#lastFiveArticles").html(userData.lastFiveArticles);
    	$("#lastFiveResearch").html(userData.lastFiveResearch);
    	$("#moreInformation").html(userData.moreInformation);
    	$("#moreInformation").html('<option value="'+userData.sniLevel+'" selected>Nivel '+userData.sniLevel+'</option>');
    })


	
})