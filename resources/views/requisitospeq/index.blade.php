@extends('layouts.admin')
	@section('content')
	@include('requisitospeq.modal')
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  		<strong> Requisito Actualizado Correctamente.</strong>
	</div>
		<table class="table">
			<thead>
				<th>requisito mascota pequeña</th>
				
				
				<th>Operaciones</th>

			</thead>
			
			<tbody id="datos"></tbody>
		</table>

	@endsection

	@section('scripts')
		{!!Html::script('js/script2reqpeq.js')!!}
	@endsection