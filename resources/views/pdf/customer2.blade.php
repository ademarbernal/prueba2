<!DOCTYPE html>
<html>
<head>
	<title>pdf</title>
	<style type="text/css">
		body{
			text-align: center;
			background: red;
			border: 1px solid;
			margin: 0 auto;
			color: white;

		}
		table{
			background: rgba(0,0,0,0.6);
			width: 70%;
			margin: 0 auto;
			border: 1px solid;
		}
		thead{
			text-align: left;
			
		}
		tbody{
			text-align: left;

		}
		th{
			margin: 0 auto;
			border: 1px solid;
		}
		td{
			margin: 0 auto;
			border: 1px solid;
		}
	</style>
</head>
<body>
	<h1>MASCOTAS EN ADOPCION </h1>
<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>nombre</th>
			<th>edad</th>
			<th>color</th>
			<th>peso</th>
			<th>tamaño</th>
			<th>clasificacion</th>
		</tr>
	</thead>
	<tbody>
			@foreach($genre as $key => $genres)
		<tr>
			<td>{{$genres->id}}</td>
			<td>{{$genres->genre}}</td>
			<td>{{$genres->edad}}</td>
			<td>{{$genres->color}}</td>
			<td>{{$genres->peso}}</td>
			<td>{{$genres->tamaño}}</td>
			<td>{{$genres->clasificacion}}</td>

		</tr>
				@endforeach
	</tbody>

</table>

</body>
</html>