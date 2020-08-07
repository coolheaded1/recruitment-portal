<?php
$server="localhost";
$user="root";
$password="";
$db ="project";
$conn = new mysqli($server,$user,$password,$db);
if($conn->connect_error){
die("connection failed:".connect_error);
}

if(isset($_POST['send'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$sel = "SELECT * FROM contact WHERE Email = '$email'";
	$result = $conn->query($sel);
	if($result->num_rows > 0){
		echo "<script> alert('Message not sent'); </script>";
		$error = "The email ".$email." has been used.";
	}

	else{
		$ins = "INSERT INTO contact (Name, Email, Message) VALUES('$name', '$email', '$message')";
		$res = $conn->query($ins);
		if($res === TRUE){
		header("location: contact.php");
		}
	}
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
							<li><a href="#" class="fh5co-sub-ddown">About Us</a>
								<ul class="fh5co-sub-menu">
									<li><a href="about.php">Our company</a></li>
									<li><a href="about_team.php">Our team</a></li>
								</ul>
							</li>
							<li><a href="vacancies.php?page=1">Vanancies</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<a href="#top"><img src="images/moov.png" id="backToTop"></a>

		<div class="container-fluid" style="background: orange">
			<center><h2 id="vacancies">contact us</h2></center>
		</div>



		<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Contact Information</h3>
						<p style="font-size: 16px;">If you encountered any problem using this website or you have a suggestion about this website. Kindly fill the form to send us message.</p>
					</div>
				</div>

				<div class="row animate-box">
					<div class="col-md-6">
						<h3 class="section-title">Our Address</h3>
						<ul class="contact-info">
							<li><i class="fa fa-home"></i>52 Ijemo Agbadu Road, Ake, Abeokuta</li>
							<li><i class="fa fa-phone"></i>+234 903 030 6779</li>
							<li><i class="fa fa-envelope"></i><a href="www.gmail.com" target=_blank >dotsict@gmail.com</a></li>
							<li><i class="fa fa-globe"></i><a href="www.dotsict.edu.ng" target=_blank >www.dotsict.edu.ng</a></li>
						</ul>
					</div>

					<div class="col-md-6">
						<center><h3 class="section-title">Get In Touch</h3></center>
						<div class="row">
							<form method="POST">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" name="name" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email" name="email" required>
										<?php
										if(isset($error)){
											$x = "<span class='invalid-feedback' style='display: block; font-size: 10px; color: red; font-weight: bold'>" . $error . "</span>";
											echo $x;
										}
										?>
									</div>

								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message" required style="resize: none;"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary" name="send">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


		<?php include "text.php"; ?>

		<!-- END map -->

		<?php include "footer.php"; ?>


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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
