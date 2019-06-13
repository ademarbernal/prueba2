$("#registro").click(function(){
	var dato = $("#requisitospeq").val();
	


	var route = "http://localhost:8000/requisitospeq";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{requisitospeq: dato,
			
			},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.requisitospeq);
			$("#msj-error").fadeIn();
		}
	});
});