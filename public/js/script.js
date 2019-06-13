$("#registro").click(function(){
	var dato = $("#genre").val();
	var dato1 = $("#edad").val();
	var dato2 = $("#color").val();
	var dato3 = $("#peso").val();
	var dato4 = $("#tamaño").val();
	var dato5 = $("#clasificacion").val();

	var route = "http://localhost:8000/genero";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{genre: dato,
			edad: dato1,
			color: dato2,
			peso: dato3,
			tamaño:dato4,
			clasificacion:dato5},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.genre);
			$("#msj-error").fadeIn();
		}
	});
});