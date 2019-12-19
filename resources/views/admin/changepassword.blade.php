<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Author Details</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			@foreach($users as $s)
			<td>{{$s->id}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{$s->name}}</td>
		</tr>
		<tr>
			<td>Contact</td>
			<td>{{$s->phone}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>{{$s->name}}</td> @endforeach
		</tr>
	</table>
	
</body>
</html>