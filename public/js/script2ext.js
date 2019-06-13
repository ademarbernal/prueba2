$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://localhost:8000/mascotasext";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.nombre+"</td><td>"+value.color+"</td><td>"+value.tamaño+"</td><td>"+value.detalle+"</td><td>"+value.fecha_lugar+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Eliminar(btn){
	var route = "http://localhost:8000/mascotasext/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-success").fadeIn();
		}
	});
}

function Mostrar(btn){
	var route = "http://localhost:8000/mascotasext/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#nombre").val(res.nombre);
		$("#color").val(res.color);
		$("#tamaño").val(res.tamaño);
		$("#detalle").val(res.detalle);
		$("#fecha_lugar").val(res.fecha_lugar);
		$("#id").val(res.id);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#nombre").val();
	var dato1 = $("#color").val();
	var dato2 =	 $("#tamaño").val();
	var dato3 =	$("#detalle").val();
	var dato4 =	$("#fecha_lugar").val();
	var route = "http://localhost:8000/mascotasext/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {nombre: dato,
		color: dato1,
			tamaño: dato2,
			detalle: dato3,
			fecha_lugar:dato4,
			},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});