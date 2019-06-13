$("#registro").click(function(){
	var dato = $("#requisitos").val();
	


	var route = "http://localhost:8000/requisitos";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{requisitos: dato,
			
			},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.requisitos);
			$("#msj-error").fadeIn();
		}
	});
});