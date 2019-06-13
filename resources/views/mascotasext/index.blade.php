@extends('layouts.admin')
	@section('content')
	@include('mascotasext.modal')
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  		<strong> Genero Actualizado Correctamente.</strong>
	</div>
		<table class="table">
			<thead>
				<th>Nombre y Raza</th>
				
				<th>color</th>
		
				<th>tamaño</th>
				<th>detalles</th>
				<th>fecha y lugar de extravio</th>
				<th>Operaciones</th>

			</thead>
			
			<tbody id="datos"></tbody>
		</table>

	@endsection

	@section('scripts')
		{!!Html::script('js/script2ext.js')!!}
	@endsection