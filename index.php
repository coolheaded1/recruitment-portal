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
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="mystyle.css">
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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="#">About Us</a>
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
	
	<div>
		<a href="#top"><img src="images/moov.png" id="backToTop"></a>

	<div id="slide">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <!-- <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			  </ol> -->

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="images/banner1.jpg" alt="Chania" style="height: 500px; width: 100%">
			      	<div class="carousel-caption animate-box">
			          <h1 style="color: #fff; font-size: 60px">BUSINESS GOAL</h1>
			          <p style="color: #fff; margin-bottom: 150px; ">Success Depends On Productivity</p>
			        </div>
			    </div>

			    <div class="item">
			     	<img src="images/banner2.jpg" alt="Chania" style="height: 500px; width: 100%">
			      	<div class="carousel-caption animate-box">
			         	<h1 style="color: #fff; font-size: 60px">CREATIVE MIND</h1>
						<p style="margin-bottom: 150px; color: #fff">We Create Best Opportunities</p>
			        </div>
			    </div>
	  		</div>

			  <!-- Left and right controls -->
			  <a class="" href="#myCarousel" role="button" data-slide="prev">
			    <span class="fa fa-chevron-left" aria-hidden="true" style="position: absolute; top: 250px; left: 30px; font-size: 30px; display: none;" id="left"></span>
			  </a>
			  <a href="#myCarousel" role="button" data-slide="next">
			    <span class="fa fa-chevron-right" aria-hidden="true" style="position: absolute; top: 250px; right: 30px; font-size: 30px; display: none;" id="right"></span>
			  </a>
		</div>
	</div>

		<div id="fh5co-blog-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Recent Post</h3>
						<?php
						$sel = "SELECT * FROM vacancy ORDER BY Job_id DESC LIMIT 1";
						$res = $conn->query($sel);
						while($row = $res->fetch_assoc()){
						?>
							<p style="font-size: 18px;">We are currently in need of <?php echo $row['Job_title']; ?> please, kindly proceed to vacancies page to apply.</p>
						<?php
						}
						?>
					</div>
				</div>
			</div>


			<div class="container">
				<center><h2 id="job" class="animate-box">Our services</h2></center><br><br>
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box" >
							<img class="img-responsive" src="images/c6.jpg" id="c6" >
							<div class="blog-text">
								<div class="prod-title">
									<p style="font-size: 14px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									</p>
								</div>
							</div> 
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<img class="img-responsive" src="images/c101.jpg" alt=""  id="c7">
							<div class="blog-text">
								<div class="prod-title">
									<p style="font-size: 14px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									</p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="fh5co-blog animate-box">
							<img class="img-responsive" src="images/c9.jpg" alt="" id="c8">
							<div class="blog-text">
								<div class="prod-title">
									<p style="font-size: 14px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									</p>
								</div>
							</div> 
						</div>
					</div>
					<div class="clearfix visible-md-block"></div>
				</div>	
			</div>
		</div>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<script src="js/main.js"></script>
	<script>
		$(function(){
			$("#slide").mouseover(function(){
				$("#left").show('fast');
				$("#right").show('fast');
			});

			$("#slide").mouseleave(function(){
				$("#left").hide('fast');
				$("#right").hide('fast');
			});
			let design = {
				color: "white"
			}
			$("#left").css(design);		
			$("#right").css(design);
			$("#c6, #c7, #c8").mouseover(function(){
				$(this).fadeTo('slow', 0.6);
			});
			$("#c6, #c7, #c8").mouseleave(function(){
				$(this).fadeTo('slow', 1);
			});
		});
	</script>
	</body>
</html>

