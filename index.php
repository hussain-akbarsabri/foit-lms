<!DOCTYPE html>
<html>

<head>
	<title>FoIT LMS</title>
	<link rel="icon" type="png" href="img/foitlmsLogo.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>

	<!-- Header -->
	<?php include("includes/header.php"); ?>

	<!-- imageToPlace -->
	<div class="container-fluid" style="margin-top: 50px;">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="img/img.png" alt="Chania" style="width: 100%;">
					<div class="carousel-caption">
						<h3>FoIT LMS</h3>
					</div>
				</div>

				<div class="item">
					<img src="img/img.png" alt="Chicago" style="width: 100%;">
					<div class="carousel-caption">
						<h3>FoIT LMS</h3>
					</div>
				</div>

				<div class="item">
					<img src="img/img.png" alt="Chicago" style="width: 100%;">
					<div class="carousel-caption">
						<h3>FoIT LMS</h3>
					</div>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">

			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">

			</a>
		</div>
	</div>

	<!-- 4images -->
	<div class="container">
		<div class="row" style="margin-top: 60px;">

			<!-- 1 column -->
			<div class="col-md-3">
				<center><img src="img/1.png" class="img img-circle" style="height: 150px;">
					<h4>LIVE QUIZ</h4>
					<p>Our Live Quiz system is developed for the teachers who are interested in taking online quizzes. Teachers can create quizzes in different categories where each category represents a concept. Instantaneous results to both the students and the teachers are provided.</p>
				</center>
			</div>

			<!-- 2 column -->
			<div class="col-md-3">
				<center><img src="img/2.png" class="img img-circle" style="height: 150px;">
					<h4>ASSIGNMENT SUBMISSION</h4>
					<p>Our Live Quiz system is developed for the teachers who are interested in taking online quizzes. Teachers can create quizzes in different categories where each category represents a concept. Instantaneous results to both the students and the teachers are provided.</p>
				</center>
			</div>

			<!-- 3 column -->
			<div class="col-md-3">
				<center><img src="img/3.png" class="img img-circle" style="height: 150px;">
					<h4>SUPPORT</h4>
					<p class="text-justify">Our Live Quiz system is developed for the teachers who are interested in taking online quizzes. Teachers can create quizzes in different categories where each category represents a concept. Instantaneous results to both the students and the teachers are provided.</p>
				</center>
			</div>

			<!-- 4 column -->
			<div class="col-md-3">
				<center><img src="img/4.png" class="img img-circle" style="height: 150px;">
					<h4>RESPONSIVE DESIGN</h4>
					<p>Our Live Quiz system is developed for the teachers who are interested in taking online quizzes. Teachers can create quizzes in different categories where each category represents a concept. Instantaneous results to both the students and the teachers are provided.</p>
				</center>
			</div>
		</div>
	</div>
	<br><br><br>

	<!-- Footer -->
	<?php include("includes/footer.php"); ?>

</body>

</html>