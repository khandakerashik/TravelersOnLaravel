<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
</head>
<body>
	<h1>Welcome Back, {{session('name')}}</h1>
	<h1>{{session('name')}}'s Profile</h1> 
	<a href="{{route('customer.home')}}">Home</a> |
	<a href="/logout">logout</a>
	<table>
	<tr>
			<td>ID</td>
			@foreach($user as $s)
			<td>{{$s->id}}</td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td>{{$s->username}}</td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>{{$s->password}}</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>{{$s->type}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$s->email}}</td>
		</tr>
		<tr>
			<td>Contact</td>
			<td>{{$s->contact}}</td> @endforeach
		</tr>
	</table>
	
</body>
</html>