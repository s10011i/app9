<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
h3{
	margin-left: 23px;
	color: blue;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<h3>Register Page:</h3>

	<form action="/register1" method="get">
  <div class="form-group">
    <label>Username:</label>
    <input type="text" class="form-control" name="username">
  </div>
  
  <div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control"  name="pass">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>

</div>
	
</body>
</html>