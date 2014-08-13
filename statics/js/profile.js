$(document).on('ready', function(){
    var disciplines, subDisciplines, specialisms;
    $.post(urlBase+"index.php/user_controller/getDisciplinesJson", {
    }, function(data) {
        disciplines = JSON.parse(data);
    })

    $.post(urlBase+"index.php/user_controller/getSubDisciplinesJson", {
    }, function(data) {
        subDisciplines = JSON.parse(data);
    })

    $.post(urlBase+"index.php/user_controller/getSpecialismsJson", {
    }, function(data) {
        specialisms = JSON.parse(data);
        // console.log(data);
    })
    var sniLevels = '{"1":{ "sniLevel": "1", "value": "Nivel 1"},"2":{ "sniLevel": "2", "value": "Nivel 2"},"3":{ "sniLevel": "3", "value": "Nivel 3"},"4":{ "sniLevel": "4", "value": "Nivel 4"},"5":{ "sniLevel": "5", "value": "Nivel 5"}}';
    // console.log(sniLevels);
    var sniLevelJ = JSON.parse(sniLevels);


    $.post(urlBase+"index.php/user_controller/getAllUserData/", {
    }, function(data) {
        // console.log(data);
    	var userData=JSON.parse(data);
    	// console.log(userData.name);
    	// $('#name').attr('value',userData.name);
    	$.each( userData, function( key, value ) {
    		$('#'+key).attr('value',value);
			// console.log( key+':'+value );
		});
        
        var optionsDiscipline = '';
        if($.isEmptyObject(disciplines)== false){
            $.each(disciplines, function(key,value){
                // console.log(key+':'+value.disciplineName);
                if(value.iddiscipline == userData.iddiscipline){
                    optionsDiscipline += '<option value="'+value.iddiscipline+'" selected>'+value.disciplineName+'</option>';
                }else{
                    optionsDiscipline += '<option value="'+value.iddiscipline+'">'+value.disciplineName+'</option>';
                }
            });    
        }
        
        var optionsSubDiscipline = '';
        if($.isEmptyObject(subDisciplines)== false){
            $.each(subDisciplines, function(key,value){
                // console.log(subDisciplines);
                if(value.idsubDiscipline == userData.idsubDiscipline){
                    optionsSubDiscipline += '<option value="'+value.idsubDiscipline+'" selected>'+value.subdisciplineName+'</option>';
                }else{
                    optionsSubDiscipline += '<option value="'+value.idsubDiscipline+'">'+value.subdisciplineName+'</option>';
                }
            });
        }
        
        var optionsSpecialism = '';
        if($.isEmptyObject(specialisms)== false){
            $.each(specialisms, function(key,value){
                if(value.idspecialism == userData.idspecialism){
                    optionsSpecialism += '<option value="'+value.idspecialism+'" selected>'+value.specialismName+'</option>';
                }else{
                    optionsSpecialism += '<option value="'+value.idspecialism+'">'+value.specialismName+'</option>';
                }
            });
        }
        
        var optionSniLevel = '';
        if($.isEmptyObject(sniLevelJ)== false){
            $.each(sniLevelJ, function(key,value){
                if(value.sniLevel == userData.sniLevel){
                    optionSniLevel += '<option value="'+value.sniLevel+'" selected>'+value.value+'</option>';
                }else{
                    optionSniLevel += '<option value="'+value.sniLevel+'">'+value.value+'</option>';
                }
            });
        }

        $('#iddiscipline').html(optionsDiscipline);
        $('#idsubDiscipline').html(optionsSubDiscipline);
        $('#idspecialism').html(optionsSpecialism);
        $('#sniLevel').html(optionSniLevel);
    	$("#lastFiveArticles").html(userData.lastFiveArticles);
    	$("#lastFiveResearch").html(userData.lastFiveResearch);
    	$("#moreInformation").html(userData.moreInformation);
    	// $("#sniLevel").html(userData.sniLevel);
    })
	
})