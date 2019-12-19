<html>
    <head>
        <title>
            Home - Customer
        </title>
    </head>
    <body>
    <h1>Computer Shop Home</h1>
    <a href="{{route('customer.index')}}">Profile</a>
    <a href="/logout">Logout</a>
	    <h2>Select your category</h2>
        <table border="0">
		<tr>
        <tr>
			<td><a href="{{route('product.index')}}">RAM</a></td>
		</tr>
			<td><a href="{{route('product.index')}}">ROM</a></td>
		</tr>
		<tr>
			<td><a href="{{route('product.index')}}">HDD</a></td>
		</tr>
		<tr>
			<td><a href="{{route('product.index')}}">SSD</a></td>
		</tr>
        <tr>
			<td><a href="{{route('product.index')}}">Laptops</a></td>
		</tr>
        <tr>
			<td><a href="/logout">Logout</a></td>
		</tr>
		<tr>
		</tr>
	</table>

    </body>


</html>