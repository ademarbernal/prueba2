$("#registro").click(function(){
	var dato = $("#requisitosgra").val();
	


	var route = "http://localhost:8000/requisitosgra";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{requisitosgra: dato,
			
			},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.requisitosgra);
			$("#msj-error").fadeIn();
		}
	});
});