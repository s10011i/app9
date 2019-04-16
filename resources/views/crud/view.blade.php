
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: 15px;
  margin-top: -55px;
  margin-bottom: 10px;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	
</body>
</html>
<div class="container">
	<a href="/login"><button style="margin-left: 900px" type="button" class=" btn btn-secondary">Login</button></a>
	<a href="/register"><button style="margin-left: 30px" type="button" class="btn btn-secondary">Register</button></a>

<h3 style="margin-left: 50px">User's Data</h3>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Age</th>
		<th>Address</th>
	</tr>

@foreach ($users as $user)
    <tr>
    	<td>{{$user->id}}</td>
    	<td>{{$user->name}}</td>
    	<td>{{$user->age}}</td>
    	<td>{{$user->address}}</td><br>


    </tr>


@endforeach
</table>
 <a style="margin-left: 20px" href="/create"><button type="button" class="btn btn-primary">Add</button></a>
 <a style="margin-left: 10px" href="/update"><button type="button" class="btn btn-primary">Update</button></a>
 <a style="margin-left: 10px" href="/delete"><button type="button" class="btn btn-danger">Delete</button></a>


</div>