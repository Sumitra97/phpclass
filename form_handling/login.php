<!DOCTYPE html>
<html>
<head>
	<title>Form handling in php</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel=stylesheet" href="../css/bootstrap.css">
</head>
<body
<div class="container">
<h1>Login</h1>

	<form action="checklogin.php?get_value=1" method="post">

		<div class="row">
			<div class="col-md-4">
				<label>UserName:</label>
			</div>
			<div class="col-md-8">
				<input required="" type="text" name="username">
			</div>
</div>


			<div class="row">
			<div class="col-md-4">
				<label>Password :</label>
			</div>
			<div class="col-md-4">
				<input required="password" type="password" name="password">
			</div>
		</div>


			<div class="row">
				<button class="btn btn-primary">Login </button>
					</div>
				</form>
				

</body>
</html>