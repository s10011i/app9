<?php



?>
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
	<h3>Please Insert Your Data:</h3>

	<form action="/create1" method="get">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" placeholder="Your name" name="name">
  </div>
  <div class="form-group">
    <label>Age:</label>
    <input type="number" class="form-control" placeholder="Your age" min="5" name="age">
  </div>
  <div class="form-group">
    <label>Address:</label>
    <input type="text" class="form-control" placeholder="Your address" name="addr">
  </div>
  <button type="submit" class="btn btn-primary">Add User</button>
</form>

</div>
	
</body>
</html>