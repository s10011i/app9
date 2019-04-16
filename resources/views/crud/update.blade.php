<html>
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>
<div class="container">
<h3>Please Insert Your Id to update:</h3>

	<form action="/update1" method="get">
		<table border="1">
		<tr>
			<td>ID:</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Age:</td>
			<td><input type="number" min="5"name="age"></td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input  type="text" name="addr"></td>
		</tr>
		
		</table>
		<button type="text" class="btn btn-primary">Update User's data</button>
	</form>

 </div>

 </body>
 </html>