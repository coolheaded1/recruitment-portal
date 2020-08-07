<?php
$server="localhost";
$user="root";
$password="";
$db ="freestyle";
$conn = new mysqli($server,$user,$password,$db);
if($conn->connect_error){
die("connection failed:".connect_error);
}
if (isset($_POST['send'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['number'];
	$message = $_POST['msg'];
	$insert = "INSERT INTO contact (Name, Email, Phone, Message) VALUES ('$name', '$email', '$phone', '$message')";
	$result = $conn->query($insert);
	if($result == TRUE){
		header('location: freestyle-contact.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<title> Online &mdash; CBT portal</title>
</head>
<body>
	<!--navbar-->
	<!--navbar-->
	<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
  		<div class="container-fluid">
   	 		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background: orange; border: none">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span> 
      			</button>
     			 <h1 id="logo"><a href="index.php" style="text-decoration: none; color: orange"><img src="img/dot.jpg" width="70"> dot ict</a></h1>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
     			 <ul class="nav navbar-nav navbar-right" style="font-size: 20px;">
       	 			<li><a href="index.php" id="home">Home</a></li>
        			<li><a href="about.php" style="color: grey">About</a></li>
        			<li><a href="services.php" style="color: grey">Services</a></li>
        			<li class="dropdown">
	        			<a id="link" class="dropdown-toggle" data-toggle="dropdown" href="#">Vacancies
	        			<span class="caret"></span></a>
	        			<ul class="dropdown-menu" id="menu">
	        				<li><a href="#" id="menu2">Applicant</a></li>
	          				<li><a href="freestyle-singlepage.php" id="menu2">Post</a></li>
	        			</ul>
	      			</li> 
        			<li><a href="contact.php" style="color: grey">Contact</a></li>
      			</ul>
    		</div>
  		</div>
	</nav><br /><br /><br /><br /><br />
	
	<div class="container-fluid" style="background: orange">
			<center><h2 id="vacancies">contact page</h2></center>
		</div>

	
	<!--footer-->
	<div class="container-fluid" style="background: rgba(70,79,79); color: #fff;">
		<br /><br />
		<footer>
			<center>
				<a href="www.facebook.com" target= _blank><span class="fa fa-facebook" id="fafa"></span></a>
				<a href="www.twitter.com" target=_blank><span class="fa fa-twitter" id="fafa"></span></a>
				<a href="www.instagram.com" target=_blank><span class="fa fa-instagram" id="fafa"></span></a>
				<a href="www.gmail.com" target=_blank><span class="fa fa-google-plus" id="fafa"></span></a><br /><br />
				<p>Copyright &copy; <?php echo date("Y"); ?> | All Rights Reserved</p>
			</center>
			<br />
		</footer>
	</div>
</body>
</html>