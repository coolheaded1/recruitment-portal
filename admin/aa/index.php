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
	<title>Online &mdash; CBT portal</title>
</head>
<body>
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
	</nav><br /><br /><br /><br /><br /><br /><br />
<!--slider-->
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px;">
  <!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>

	  <!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="img/banner2.jpg" alt="Chania">
	    </div>

	    <div class="item">
	      <img src="img/banner1.jpg" alt="Chania">
	    </div>

	    <div class="item">
	      <img src="img/banner3.jpg" alt="Flower">
	    </div>

	    <div class="item">
	      <img src="img/banner4.jpg" alt="Flower">
	    </div>

    	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span></a>
	  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span></a>
  	</div>
</div><br /><br /><br />

	<div class="container">
		<center><h1 id="job">Our job</h1></center><br /><br />
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<img class="img-responsive" src="img/c6.jpg" alt="">
				<br /><br />
				<p id="away">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<img class="img-responsive" src="img/c101.jpg" alt="">
				<br /><br />
				<p id="away">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<img class="img-responsive" src="img/c9.jpg" alt="">
				<br /><br />
				<p id="away">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p> 
			</div>	
		</div>
	</div>
	<br /><br /><br />
<!--footer-->
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