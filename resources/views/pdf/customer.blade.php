<!DOCTYPE html>
<html>
<head>
	<title>pdf</title>
	<style type="text/css">
		body{
			text-align: center;
			background: red;

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
	<h1>usuarios informacion </h1>
<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>nombre</th>
			<th>email</th>
		</tr>
	</thead>
	<tbody>
			@foreach($users as $key => $users)
		<tr>
			<td>{{$users->id}}</td>
			<td>{{$users->name}}</td>
			<td>{{$users->email}}</td>

		</tr>
				@endforeach
	</tbody>

</table>

</body>
</html>