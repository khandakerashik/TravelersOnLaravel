<!DOCTYPE html>
<html>

<head>
	<title>Registration page</title>
</head>
<body>
	<h1>Register</h1>
	
	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	<table border="0">
		<tr>
        <tr>
			<td>NAME</td>
			<td><input type="text" name="name" value="{{old('name')}}"></td>
		</tr>
			<td>USERNAME</td>
			<td><input type="text" name="username" value="{{old('username')}}"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td><input type="text" name="email" value="{{old('contact')}}"></td>
		</tr>
        <tr>
			<td>CONTACT</td>
			<td><input type="text" name="contact" value="{{old('contact')}}"></td>
		</tr>
        <tr>
			<td>TYPE</td>
			<td><select name="type"> 
            <option value="admin">Admin</option>
            <option value="customer">Customer</option>
            </select>
            </td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Save"></td>
			<td></td>
		</tr>
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach	
</body>
</html>



