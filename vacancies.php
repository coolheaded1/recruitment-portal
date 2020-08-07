<?php
session_start();
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
							<li><a href="#" class="fh5co-sub-ddown">About Us</a>
								<ul class="fh5co-sub-menu">
									<li><a href="about.php">Our company</a></li>
									<li><a href="about_team.php">Our team</a></li>
								</ul>
							</li>
							<li class="active"><a href="vacancies.php?page=1">Vanancies</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		<a href="#top"><img src="images/moov.png" id="backToTop"></a>
	
		<div class="container-fluid " style="background: orange">
			<center><h2 id="vacancies">vacancies</h2></center>
		</div><br><br><br><br><br>

		<section class="animate-box">
			<div class="container"> 
				<div class="row">
					<div class="col-md-6 col-sm-6"> 
						<div class="text-left">
							<h2 id="Choose">Why <strong>Choosing Us?</strong></h2>
							<p id="text">As part of efforts to drive and foster ICT enhancement, local content drive and “game-changing” innovation in the city of Abeokuta, an institution with qualified personnel and all, went all out in bringing her dreams to reality. Our unrelenting optimism birthed what could possibly be the first institutional based tech hub in Ogun State. We are focus on empowering entrepreneurs on their journey to build great ideas out of little or nothing, we work with Start-ups at every stage of maturity to provide the tools, resources, knowledge and expertise they need to succeed.
								<br /><br />
							One of our primary goals is to empower a new crop of innovative and creative young men and women, who will add technological value to every sector of the economy and solve real problems.</p>
						</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<img src="images/c101.jpg" alt="About Images" class="img-responsive" id="c101">
	           		</div>
				</div>
			</div>
		</section><br><br>

	<section class="animate-box">
		<div class="container animate-box">
			<h2 id="Choose">vacant <strong>post</strong></h2>
		</div><br />
		
		<div class="container-fluid">
				<?php
				if(isset($_GET['page']) ){
				$page2 = $_GET['page'];
				}
				if($page2 == "" || $page2 == 1){
					$page2 = 0;
				} else{
					$page2 = ($page2 * 3) - 3;
				}
				$sel = "SELECT * FROM vacancy ORDER BY Job_id DESC LIMIT $page2, 3";
				$res = $conn->query($sel);
				while($row = $res->fetch_assoc()){
					$currentDate = date("d/m/y");
					$createdDate = date("d/m/y", strtotime($row['created_dt']));
					$id4 = $row['Job_id'];
					echo "<div class='col-md-4 col-sm-4'>";
						echo "<div style='box-shadow: 0 0 5px grey; padding: 10px;' id='box'>";
							echo "<div style='padding: 1px; background: rgb(0,173,124);'><br>";
								echo "<center><h4 style='color: #fff'>".$row['Job_title']."</h4></center>";
							echo "</div><br>";
							echo "<div>";
								echo "<p id='description'>". $row['Description'] ."</p>" ;
								echo "<p id='qualification'> The qualifications: ". $row['Qualification'] ."</p>";
								echo "<p id='experience'> You must also have at least ". $row['Experience'] ." of experience</p>";
								echo "<p id='date'> Posted &mdash;&nbsp; ". date("d/m/y", strtotime($row['created_dt'])) ."</p><br><br>";
								echo "<p id='date'> Deadline &mdash;&nbsp; ". $row['Deadline'] ."</p><br><br>";
								if($currentDate > $createdDate){
									echo "<button type='button' class='btn btn-block' style='background: black; color: white'>Application closed</button></a>";
									
								}
								else{
									echo "<a href='application_form.php?id2=$row[Job_id]'><button type='submit' class='btn btn-block apply'>Apply</button></a>";
								}
							echo "</div>";
						echo "</div><br><br>";
					echo "</div>";
				}
				echo "<div style='position: absolute; bottom: -50px; left: 45%'>";
					$sel2 = "SELECT * FROM vacancy";
					$res2 = $conn->query($sel2);
					$count_row  = $res2->num_rows;
					$get_num = ceil($count_row / 3);
					for($i = 1; $i <= $get_num; $i++){
						?>
						<ul class="pagination pagination-sm">
							<?php
							 echo "<li><a href='vacancies.php?page=$i' id='m'>".$i."</a></li>";
							 ?>
						</ul>
					<?php
					}
				echo "</div>";
				?>
		</div>
		</div><br><br>
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

	<script>
		$(function(){
			$(".panel").css("box-shadow","0px 0px 2px grey");
		});
	</script>
	</body>
</html>