<?php
$server="localhost";
$user="root";
$password="";
$db ="project";
$conn = new mysqli($server,$user,$password,$db);
if($conn->connect_error){
die("connection failed:".connect_error);
}
?>
<!DOCTYPE html>
<html id="top">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Online &mdash; CBT portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="mystyle.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	<style type="text/css">
		html{
			scroll-behavior: smooth;
		}
	</style>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php"><img src="images/dots.jpg" width="40">  dots ict</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.php">Home</a></li>
							<li class="active"><a href="#" class="fh5co-sub-ddown">About Us</a>
								<ul class="fh5co-sub-menu">
									<li><a href="about.php">Our company</a></li>
									<li><a href="about_team.php">Our team</a></li>
								</ul>
							</li>
							<li><a href="vacancies.php?page=1">Vanancies</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<a href="#top"><img src="images/moov.png" id="backToTop"></a>

		<div class="container-fluid" style="background: orange">
			<center><h2 id="vacancies">about us</h2></center>
		</div>
		<br /><br /><br /><br />

		<section class="section-padding whyWe nav-bg animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 info-blocks">
                	<div class="about-image">
						<img src="images/about1.jpg" alt="About Images" class="img-responsive">
                	</div>
           		</div>

				<div class="col-md-6 col-sm-6">
					<div class="about-text">
						<div class="section-title text-left">
							<h2 id="Choose">our <strong>company</strong></h2>

							<?php
							$sel = "SELECT * FROM about";
							$res = $conn->query($sel);
							while($row = $res->fetch_array()){
							?>
								<p id="text"><?php echo $row[1]; ?></p>
							<?php
							}
							?>
						</div><br /><br />
					</div>
				</div>

				<div class="col-md-12 col-sm-12">
					<h2 id="Choose">why <strong>choosing us?</strong></h2>

					<?php
						$sel = "SELECT * FROM choose";
						$res = $conn->query($sel);
						while($row = $res->fetch_array()){
						?>
							<p id="text"><?php echo $row[1]; ?></p><br>
						<?php
						}
					?>
				</div>
			</div>
		</div>
	</section>


		<?php include "text.php"; ?>


		<?php include "footer.php"; ?>



	</div>

	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
