$(document).ready(function(){
	Carga();
});

function Carga(){
	var tablaDatos = $("#datos");
	var route = "http://localhost:8000/genero";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.genre+"</td><td>"+value.edad+"</td><td>"+value.color+"</td><td>"+value.peso+"</td><td>"+value.tamaño+"</td><td>"+value.clasificacion+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Eliminar(btn){
	var route = "http://localhost:8000/genero/"+btn.value+"";
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
	var route = "http://localhost:8000/genero/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#genre").val(res.genre);
		$("#edad").val(res.edad);
		$("#color").val(res.color);
		$("#peso").val(res.peso);
		$("#tamaño").val(res.tamaño);
		$("#clasificacion").val(res.clasificacion);
		$("#id").val(res.id);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#genre").val();
	var dato1 = $("#edad").val();
	var dato2 =	 $("#color").val();
	var dato3 =	$("#peso").val();
	var dato4 =	$("#tamaño").val();
	var dato5 =	$("#clasificacion").val();
	var route = "http://localhost:8000/genero/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {genre: dato,
		edad: dato1,
			color: dato2,
			peso: dato3,
			tamaño:dato4,
			clasificacion:dato5},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});