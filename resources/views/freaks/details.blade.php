<!DOCTYPE html>
<html>
<head>
	<title>BlogS</title>
</head>
<body>
	<h1>Blog Details</h1>
	<a href="{{route('author.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			@foreach($blogs as $b)
			<td>{{$b->id}}</td>
		</tr>
		<tr>
			<td>Author Name</td>
			<td>{{$b->author_name}}</td>
		</tr>
		<tr>
			<td>Title</td>
			<td>{{$b->blog_title}}</td>
		</tr>
		<tr>
			<td>Blog</td>
			<td>{{$b->content}}</td> @endforeach
		</tr>
	</table>
	
</body>
</html>