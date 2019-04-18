function listCities (){
	idUF = elemento;
	if (idUF > 0){
		url = '{{route("listCities", ['idUF'])}}';
		url = url.replace('idUF', idUF);

		var ajaxRequest = $.getJSON(url, function(data){
			elemSelect1 = '<option value=""></option>';
			$.each(data, function(i ,obj){
				php = "if(isset($client)){if($client->city->id == "+obj.id+"){echo (selected);}}";
				selectItem = "";
				@isset($client)
					if (obj.id == {{$client->city->id}}){
						selectItem = "selected";
					}
				@endisset
				elemSelect1 += '<option value="'+obj.id+'" '+selectItem+' >'+obj.name+'</option>';
			})
			$("#city1 option").remove();
			$('city1').append(elemSelect1);
		});
	}else{
		elemSelect = '<select name="city" class="form-control" id="city">';
		elemSelect += '</select>';
		$('#selectCity').append(elemSelect);
	} 
}