<!DOCTYPE html>
<html>

<head>
	<title>FoIT LMS</title>
	<link rel="icon" type="png" href="foitlmsLogo.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>

	<!-- Header -->
	<?php include("includes/header.php"); ?>

	<br><br><br><br><br>
	<!-- space for login -->
	<div class="container">
		<div class="panel panel-body panel-danger" style="background-color: #561209;">
			<h3 style="color: white; margin-left: 18px;">Login into your account</h3>

			<div class="col-md-5">
				<form action="" method="">
					<label style="color: white;"> Username </label>
					<input type="text" class="form-control" required>
					<a href="#" style="color: white;">Forgotton your username or password</a>
				</form>
			</div>
			<div class="col-md-5">
				<form action="" method="">
					<label style="color: white;"> Password </label>
					<input type="password" class="form-control" required>
					<input type="checkbox" name="">
				</form>
				<p style="color: white;">Remember username</p>
			</div>
			<div class="col-md-2">
				<button class="btn btn-md">Log in</button>
			</div>
		</div>
	</div>
	<br><br><br><br>

	<!-- Footer -->
	<?php include("includes/footer.php"); ?>


</body>

</html>