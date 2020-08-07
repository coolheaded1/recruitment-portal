<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<title></title>
	<style type="text/css">
		#link{
			color: grey;
		}

		#link:hover{
			text-decoration: none;
		}

		#menu{
			padding: 10px 0px 10px 0px;
			height: 78px;
			border-radius: 0px;
			box-shadow: 0px 0px 10px grey;
		}

		#menu2{
			padding: 10px;
			margin-top: -9px;
			margin-bottom: 5px;
		}

		#home:visited{
			color: red;
		}
	</style>
</head>
<body>
	<!--navbar-->
	<div class="fluid" style="padding: 0px; padding-bottom: 50px; background: url(img/abstract2.jpg); background-size:cover;"><br />
		<nav class="navbar navbar-inverse" style="border: none; border-radius: 0px; background: rgba(0,0,0,0.4);padding: 10px;">
	  		<div class="container-fluid">
	   	 		<div class="navbar-header">
	      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background: red">
	        			<span class="icon-bar"></span>
	        			<span class="icon-bar"></span>
	        			<span class="icon-bar"></span> 
	      			</button>
	     			 <a class="navbar-brand fa fa-plane" style="font-size: 20px; color: red" href="freestyle-home2.php"><span style="margin-left: 10px; color: white">GRADE</span></a>
	    		</div>
	    		<div class="collapse navbar-collapse" id="myNavbar">
	     			 <ul class="nav navbar-nav navbar-right">
	       	 			<li><a href="index.php">Home</a></li>
	        			<li><a href="about.php">About</a></li>
	        			<li><a href="services.php" id="home">Services</a></li> 
	        			<li class="dropdown">
	        			<a id="link" class="dropdown-toggle" data-toggle="dropdown" href="#">Vacancies
	        			<span class="caret"></span></a>
	        			<ul class="dropdown-menu" id="menu">
	        				<li><a href="#" id="menu2">Applicant</a></li>
	          				<li><a href="freestyle-singlepage.php" id="menu2">Post</a></li>
	        			</ul>
	      				</li> 
	        			<li><a href="contact.php">Contact</a></li>
	      			</ul>
	    		</div>
	  		</div>
		</nav><br /><br />
		<center><h1 style="color: #fff; letter-spacing: 5px;"><b>Services Page</b></h1></center>
	</div><br /><br />
	<!--management services-->
	<div class="container">
		<h1>Management Services</h1><br />
			<div class="col-md-4 col-sm-4 co-xs-6">
				<h3>Management Services <span class="fa fa-minus"></span></h3>
				<p>This website is developed by Samuel Joseph Monday, also known as <i><b>Coolheaded</b></i>.He is the CEO of GRADE company. He is a front-end developer with many features of CSS. He work with latest language released for the good job.</p>
				<a href="#" style="float: right">Read More</a><br />
				<h3>Capital Core Services <span class="fa fa-minus"></span></h3>
				<p>This website is developed by Samuel Joseph Monday, also known as <i><b>Coolheaded</b></i>.He is the CEO of GRADE company. He is a front-end developer with many features of CSS. He work with latest language released for the good job.</p>
				<a href="#" style="float: right">Read More </a>
			</div>

			<div class="col-md-3 col-sm-3 co-xs-6">
				<img src="img/service.jpg" width="300" class="img-responsive">
			</div>

			<div class="col-md-5 col-sm-5 co-xs-6">
				<h3>Management Services <span class="fa fa-minus"></span></h3>
				<p>This website is developed by Samuel Joseph Monday, also known as <i><b>Coolheaded</b></i>.He is the CEO of GRADE company. He is a front-end developer with many features of CSS. He work with latest language released for the good job.</p>
				<a href="#" style="float: right">Read More</a><br />

				<h3>Capital Core Services <span class="fa fa-minus"></span></h3>
				<p>This website is developed by Samuel Joseph Monday, also known as <i><b>Coolheaded</b></i>.He is the CEO of GRADE company. He is a front-end developer with many features of CSS. He work with latest language released for the good job.</p>
				<a href="#" style="float: right">Read More </a>
			</div>
	</div><br /><br />

	<!--blog-->
	<div class="container-fluid" style="background: rgb(240,240,240);">
		<div class="container">
			<h1>Our Blog</h1>
			<br /><br />
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-12" style="background: #fff; box-shadow: 0px -3px 0px maroon;">

					<div class="col-md-6 col-sm-12 col-xs-12">
						<img src="img/t1.jpg" width="170" style="float: left">
					</div>

					<div class="col-md-6 col-sm-12 col-xs-12">
						<p>june 15 2018</p>
						<h2>Capital Management</h2>
						<p>This website is developed by Samuel Joseph Monday, also known as <i><b>Coolheaded</b></i>.He is the CEO of GRADE company. He is a front-end developer with many features of CSS. He work with latest language released for the good job.</p>
					</div>
				</div>

				<div class="col-md-6 col-sm-5 col-xs-10" style="background: #fff; margin-left: 40px; box-shadow: 0px -3px 0px maroon;">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<img src="img/t4.jpg" width="190">
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<p>june 15 2018</p>
						<h2>Creative Solution</h2>
						<p>This website is developed by Samuel Joseph Monday, also known as <i><b>Coolheaded</b></i>.He is the CEO of GRADE company. He is a front-end developer with many features of CSS. He work with latest language released for the good job.</p>
					</div>
				</div>
			</div><br /><br />
			<center><button class="btn btn-danger" style="border-radius: 0px;">Read More Blog</button></center>
			<br /><br />
		</div>
	</div><br /><br />

	<!--features-->
	<div class="container-fluid">
		<div class="container">
			<h1>Our Features</h1><br /><br />
			<div class="container row">
				<div class="col-md-4 col-sm-4">
					<h2>24 Hour Support<span class="fa fa-dribbble text-primary" style="margin-left: 30px;"></span></h2>
					<p>Morbi tempus rhoncus finibus. lorem init Pellentesque tempor, diam ut cursus in sollicitudin, urna imperdiet arcu, id. </p>
				</div>

				<div class="col-md-4 col-sm-4">
					<span class="fa fa-send img-circle" style="font-size: 40px; padding: 45px; background: #800; margin: 50px 0px -50px 50px; color: #fff"></span>
				</div>

				<div class="col-md-4 col-sm-4">
					<h2><span class="fa fa-gears text-danger" style="margin-left: -50px;"></span><span style="margin-left: 20px">Creative Process</span></h2>
					<p>Morbi tempus rhoncus finibus. lorem init Pellentesque tempor, diam ut cursus in sollicitudin, urna imperdiet arcu, id. </p><br />
				</div>

				<div class="col-md-4 col-sm-4">
					<h2>Full Security<span class="fa fa-lock text-success" style="margin-left: 85px"></span></h2>
					<p>Morbi tempus rhoncus finibus. lorem init Pellentesque tempor, diam ut cursus in sollicitudin, urna imperdiet arcu, id. </p>
				</div>

				<div class="col-md-4 col-sm-4">
				</div>

				<div class="col-md-4 col-sm-4">
					<h2><span class="fa fa-gears text-warning" style="margin-left: -50px;"></span><span style="margin-left: 20px">Quality Performance</span></h2>
					<p>Morbi tempus rhoncus finibus. lorem init Pellentesque tempor, diam ut cursus in sollicitudin, urna imperdiet arcu, id. </p>
				</div>
			</div>
		</div>
	</div><br /><br /><br />

	<!--footer-->
	<div class="container-fluid" style="background: rgba(30,30,30); color: grey;">
		<br />
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<h3 style="color: #fff;">About Company</h3>
						<p>Our company manages your product and recruit new developer. We also manage your software for you.
						</p>

						<div class="col-md-6 col-sm-6">
							<h3 style="color: #fff;">Connect With Us</h3>
							<span class="fa fa-twitter" style="font-size: 20px;"></span><br /><span style="margin-left: 10px;">Samuel Joseph</span><br /><br />

							<span class="fa fa-instagram" style="font-size: 20px;"></span><br /><span style="margin-left: 10px;">Samuel Joseph</span>
							<br /><br />
							<span class="fa fa-youtube" style="font-size: 20px;"></span><br /><span style="margin-left: 10px;">Samuel Joseph</span>
						</div>

						<div class="col-md-6 col-sm-6">
							<h3 style="color: #fff;">Head Quarters</h3>
							<span class="fa fa-map-marker" style="font-size: 20px; color: #fff;"></span><span style="margin-left: 10px;">PMB 50, Ilaro, Ogun State</span><br /><br />
							<span class="fa fa-clock-o" style="font-size: 20px;  color: #fff;"></span><span style="margin-left: 10px;">Timing: 10 a.m to 6 p.m</span><br /><br />
							<span class="fa fa-phone" style="font-size: 20px;  color: #fff;"></span><span style="margin-left: 10px;">+234 903 030 6779</span>
						</div>
					</div>

					<div class="col-md-4 col-sm-4">
						<h3 style="color: #fff;">Services</h3>
						<span class="fa fa-chevron-circle-right"></span><span style="margin-left: 10px;">Maintaining product</span><br /><br />
						<span class="fa fa-chevron-circle-right"></span><span style="margin-left: 10px;">Maintaining Sales order</span><br /><br />
						<span class="fa fa-chevron-circle-right"></span><span style="margin-left: 10px;">Maintaining staff work</span><br /><br />
						<h3 style="color: #fff;">Newsletter</h3>
						<p>Subscribe to Our Newsletter to get News, Amazing Offers & More</p>
						<div class="form-inline">
							<input type="text" name="send" class="form-control" placeholder="Enter your email" required>
							<button type="submit" name="send_email" class="btn btn-danger btn-xs"><span class="fa fa-send btn"></span></button>
						</div>

					</div>

					<div class="col-md-4 col-sm-4">
						<h3 style="color: #fff;">Latest Posts</h3>
						<div class="col-md-5 col-sm-5">
							<img src="img/f2.jpg" width="100" class="thumbnail">
						</div>
						<div class="col-md-7 col-sm-7">
							<a href="#" id="link"><span>Pellentesque dui, non felis. Maecenas male non felis convallis nunc </span></a>
							<span class="fa fa-clock-o"><span style="margin-left: 5px;">12 December, 2018</span><br /><br />
						</div>

						<div class="col-md-5 col-sm-5">
							<img src="img/f1.jpg" width="100" class="thumbnail">
						</div>
						<div class="col-md-7 col-sm-7">
							<a href="#" id="link"><span>Pellentesque dui, non felis. Maecenas male non felis convallis nunc </span></a>
							<span class="fa fa-clock-o"><span style="margin-left: 5px;">12 December, 2018</span><br /><br />
						</div>

						<div class="col-md-5 col-sm-5">
							<img src="img/f3.jpg" width="100" class="thumbnail">
						</div>
						<div class="col-md-7 col-sm-7">
							<a href="#" id="link"><span>Pellentesque dui, non felis. Maecenas male non felis convallis nunc </span></a>
							<span class="fa fa-clock-o"><span style="margin-left: 5px;">12 December, 2018</span>
						</div>
					</div>
				</div>
			</div><br />
			<center><p>CopyRight &copy; 2018 | All Rights Reserved</p></center>
			<br />
		</footer>
	</div>
</body>
</html>