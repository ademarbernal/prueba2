$("#registro").click(function(){
	var dato = $("#nombre").val();
	var dato1 = $("#color").val();
	var dato2 = $("#tamaño").val();
	var dato3 = $("#detalle").val();
	var dato4 = $("#fecha_lugar").val();


	var route = "http://localhost:8000/mascotasext";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{nombre: dato,
			color: dato1,
			tamaño: dato2,
			detalle: dato3,
			fecha_lugar:dato4,
			},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.mascota);
			$("#msj-error").fadeIn();
		}
	});
});