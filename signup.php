<!DOCTYPE html>
<html>
<head>
	<title>PHP Simple Chat System using AJAX</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#signup_form{
		width:350px;
		height:430px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
</style>
	<style> body {
		background-color: #e5e5f7;
opacity: 0.87;
background-image:  linear-gradient(30deg, #b5b8ff 12%, transparent 12.5%, transparent 87%, #b5b8ff 87.5%, #b5b8ff), linear-gradient(150deg, #b5b8ff 12%, transparent 12.5%, transparent 87%, #b5b8ff 87.5%, #b5b8ff), linear-gradient(30deg, #b5b8ff 12%, transparent 12.5%, transparent 87%, #b5b8ff 87.5%, #b5b8ff), linear-gradient(150deg, #b5b8ff 12%, transparent 12.5%, transparent 87%, #b5b8ff 87.5%, #b5b8ff), linear-gradient(60deg, #b5b8ff77 25%, transparent 25.5%, transparent 75%, #b5b8ff77 75%, #b5b8ff77), linear-gradient(60deg, #b5b8ff77 25%, transparent 25.5%, transparent 75%, #b5b8ff77 75%, #b5b8ff77);
background-size: 40px 70px;
background-position: 0 0, 0 0, 20px 35px, 20px 35px, 0 0, 20px 35px;}
		</style>
</head>
<body>
<div class="container">
	<div id="signup_form" class="well">
		<h2><center><span class="glyphicon glyphicon-user"></span> Sign Up</center></h2>
		<hr>
		<form method="POST" action="register.php">
		Name: <input type="text" name="name" class="form-control" required>
		<div style="height: 10px;"></div>
		Username: <input type="text" name="username" class="form-control" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Sign Up</button> <a href="index.php"> Back to Login</a>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			
		</div>
	</div>
</div>
</body>
</html>