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

		#menu2:visited{
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
	        			<li><a href="services.php">Services</a></li> 
	        			<li class="dropdown">
	        			<a id="link" class="dropdown-toggle" data-toggle="dropdown" href="#">Vacancies
	        			<span class="caret"></span></a>
	        			<ul class="dropdown-menu" id="menu">
	        				<li><a href="#" id="menu2">Blog Page</a></li>
	          				<li><a href="freestyle-singlepage.php" id="menu2">Single Page</a></li>
	        			</ul>
	      				</li>
	        			<li><a href="contact.php">Contact</a></li>
	      			</ul>
	    		</div>
	  		</div>
		</nav><br /><br />
		<center><h1 style="color: #fff; letter-spacing: 5px;"><b>Single Page</b></h1></center>
	</div><br /><br />
	<!--navbar-->

	<!--single page-->
	<div class="container">
		<h1>Single Page</h1>
		<div class="row">
			<div class="col-md-8">
				<img src="img/a1.jpg" width="620" height="300" class="img-responsive">
				<div class="container col-md-12" style="border: 2px solid lightgrey">
					<h1>Sadipisci velit sed quia non nuuam.</h1>
					<p>By Laura Paul</p>
					<p>Pellentesque eleifend ultricies tellus,varius risus, id dignissim sapien velit id felis ac cursus ac eros.Pellentesque eleifend ultricies tellus,varius risus, sapien velit id felis ac id dignissim sapien velit id felis ac cursus eros. sapien velit id felis ac eleifend ultricies tellus,varius risus. </p>
				</div>
			</div>
			<div class="fluid">
				<div class="col-md-4" style="border: 2px solid lightgrey">
					<div class="container col-md-12"><br /><br />
						<img src="img/a3.jpg" width="200">
						<h3>Sign Up To Our Newsletter</h3>
						<div class="form-group">
							<input type="text" name="text" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="sub" class="btn btn-danger btn-block" value="Subscribe">
						</div>
					</div>
				</div>
				<span style="color: #fff;">space</span>
				<div class="col-md-4" style="border: 2px solid lightgrey;">
					<div class="container col-md-12"><br /><br />
						
						<div class="progress">
  							<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
   								 <span class="sr-only">20% Complete</span>
  							</div>
						</div>

						<div class="progress">
  							<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
   								 <span class="sr-only">40% Complete</span>
  							</div>
						</div>

						<div class="progress">
  							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
   								 <span class="sr-only">60% Complete</span>
  							</div>
						</div>


						<div class="progress">
  							<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
   								 <span class="sr-only">80% Complete</span>
  							</div>
  						</div>
					</div>
				</div>
			</div>
<!--comment-->
			<span style="color: #fff;">empty</span>
			<div class="col-md-8">
				<h3>Comments</h3>
				<div class="col-md-2">
					<img src="img/me.jpg" width="100" height="130">
				</div>
				<div class="col-md-10">
					<h3>SAMUEL JOSEPH</h3>
					<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros. Cras a ornare elit.</p><br /><br /><br />
				</div>
				<div class="col-md-2">
					<img src="img/t3.jpg" width="100">
				</div>
				<div class="col-md-10">
					<h3>SAMUEL JOSEPH</h3>
					<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros. Cras a ornare elit.</p><br /><br />
				</div>
			<!--leave a comment-->
				<h3>Leave a Comments</h3>
				<form>
					<div class="form-group">
						<input type="text" name="name" placeholder="Name" class="form-control" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" placeholder="Email" class="form-control" required>
					</div>
					<div class="form-group">
						<input type="text" name="subject" placeholder="Subject" class="form-control" required>
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="5" required>Message</textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-danger btn-block" value="Send">
					</div>
				</form>
			</div>

			<div class="col-md-4" style="border: 2px solid lightgrey">
				<div class="container col-md-12"><br />
					<h4>Top stories of the week</h3>
					<div class="col-md-5">
						<img src="img/a3.jpg" width="100" class="thumbnail">
					</div>
					<div class="col-md-7">
						<p><a href="#">Pellentesque dui, non felis. Maecenas male
						</a></p><br /><br />
					</div>

					<div class="col-md-5">
						<img src="img/a2.jpg" width="100" class="thumbnail">
					</div>
					<div class="col-md-7">
						<p><a href="#">Pellentesque dui, non felis. Maecenas male
						</a></p><br /><br/>
					</div>

					<div class="col-md-5">
						<img src="img/a1.jpg" width="100" class="thumbnail">
					</div>
					<div class="col-md-7">
						<p><a href="#">Pellentesque dui, non felis. Maecenas male
						</a></p>
					</div>
				</div>
			</div>
			<span style="color: #fff;">emptys<br />dsdfsd</span>
			<div class="col-md-4" style="border: 2px solid lightgrey">
				<div class="container col-md-12">
					<h4>Recent Post</h4>
					<img src="img/a2.jpg" width="200"><br /><br />
					<p style="word-spacing: 5px; font-size: 16px;">Lorem Ipsum convallis diam sapien consequat magna vulputate ornare malesuada. id dignissim velit id felis ac cursus eros. Cras a elit.</p>
				</div>
			</div>
		</div>
	</div><br  /><br /><br />
	<!--single page-->

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