<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	{{csrf_field()}}
	@include('admin.header');
	@include('admin.sidenav');
  
<form method="post" >
	<h1>Pending List</h1>
	<a href="index">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>CONTACT</td>
			<td>USERNAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->id}}</td>
			<td>{{$s->name}}</td>
			<td>{{$s->contact}}</td>
			<td>{{$s->username}}</td>
			<td>{{$s->email}}</td>
			<td>
				<a href="{{route('admin.approve', $s->id)}}">Approve</a>
			</td>
		</tr>
	@endforeach

	</table>
</form>
</body>
</html>