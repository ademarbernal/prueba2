@extends('layouts.principal')
@section('content')


	<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					
					<h1>Requisitos</h1>
				</div>
				
				<div class="clearfix"></div>
			</div>
			<!---contact-->
	<div class="main-contact">
		 <h3 class="head">Formulario de adopcion</h3>
		<div class="contact-form">
	 		<form>
				 <div class="col-md-6 contact-left">
					  <input type="text" placeholder="nombre" required/>
					  <input type="text" placeholder="apellido" required/>
					  <input type="text" placeholder="edad" required/>
					   <input type="text" placeholder="direccion" required/>
					  <input type="text" placeholder="estado civil" required/>
					  <input type="text" placeholder="cantidad de hijos" required/>
					
				  </div>
				  <div class="col-md-6 contact-right">
					 <textarea placeholder="descripcion del hogar"></textarea>
					 <input type="submit" value="enviar"/>
				 </div>
				 <div class="clearfix"></div>
			 </form>
	     </div>
	</div>
	
</div>
@stop