<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>menu 3d</title>
	<link rel="stylesheet"  href="cssdes/estilosdes.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.boton').mouseover(function(){
				$('audio')[0].play();
			});
			$('.boton2').mouseover(function(){
				$('audio')[1].play();
			});
		});
	</script>
</head>
<body>
<div class="contenedor-menu">
	<div class="pagina-izquierda">
		<div class="delante lado">
			
			<h1>Rexx </h1>
			<img src="imgdes/pastor3.jpg">
			
			<h2>pastor aleman </h2>
			<button class="btn-ver-menu">ver detalles</button><br>	<br>		
			<a href="/reviews">volver atras</a>
		<audio autoplay><source src="sounds/perrofeliz.mp3" type="audio/mp3"></audio>
		</div>
		<div class="atras lado">
			<div class="contenedor-lista">
				<div class="lista-uno">
					<h1>Rexx</h1>
					<img src="imgdes/pastor1.jpg">
					
					<h1>un muy fiel amigo y muy leal q fue abandonado y estuvo muy maltratado
					hoy en dia ya se recupero y esta con mas fuerzas que nunca y con mucha alegria
				para compartirla </h1>
					<hr>
				</div>
				
				
			</div>
			
		</div>
	</div>
	<div class="pagina-central">
		<div class="contenedor-lista">
				<div class="lista-uno">
					
					<h1>el te esta esperando para acerte muy feliz y pasarla muy bien a tu lado</h1>
					<img src="imgdes/pastor2.jpg">
					<h1>asi que no lo pienses mas y adopta a reex un gran amigo fiel</h1>
				</div>
				
			</div>
	</div>
	<div class="pagina-derecha">
		<div class="contenedor-lista lado-pagina-derecha">
				<div class="lista-uno">
					
					<img src="imgdes/pastor3.jpg">
					
					<h1>requisitos para adoptarlo :<br>
					tener una casa con al menos un patio de 4 metros cuadrados <br>
					mucha atencion para la mascota devido a su raza<br>
					tener pasiencia y comprencion</h1>
					<hr>
				</div>
				
				
			</div>
		<div class="pagina-derecha-atras lado-pagina-derecha">
			</div>
			<div class="btn-cerrar lado-pagina-derecha">X</div>
	</div>
</div>

<script src="jsdes/jquerydes.js"></script>
<script src="jsdes/scriptdes.js"></script>
</body>
</html>