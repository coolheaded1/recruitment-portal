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
			<center><h2 id="vacancies">about page</h2></center>
		</div>

		<br /><br /><br /><br />

	<section>
		<div class="container"> 
			<div class="row">
				<div class="col-md-6 col-sm-6 info-blocks">
					<img src="img/about1.jpg" alt="About Images" class="img-responsive">
           		</div>

				<div class="col-md-6 col-sm-6">
					<h2 id="Choose">our <strong>company</strong></h2>
					<p id="text">As part of efforts to drive and foster ICT enhancement, local content drive and “game-changing” innovation in the city of Abeokuta, an institution with qualified personnel and all, went all out in bringing her dreams to reality. Our unrelenting optimism birthed what could possibly be the first institutional based tech hub in Ogun State. We are focus on empowering entrepreneurs on their journey to build great ideas out of little or nothing, we work with Start-ups at every stage of maturity to provide the tools, resources, knowledge and expertise they need to succeed.<br /><br />
					One of our primary goals is to empower a new crop of innovative and creative young men and women, who will add technological value to every sector of the economy and solve real problems.</p>
					<br /><br /><br />
				</div>

				<div class="col-md-12 col-sm-12">
					<h2 id="Choose">why <strong>choose us?</strong></h2>
					<p id="text">As part of efforts to drive and foster ICT enhancement, local content drive and “game-changing” innovation in the city of Abeokuta, an institution with qualified personnel and all, went all out in bringing her dreams to reality. Our unrelenting optimism birthed what could possibly be the first institutional based tech hub in Ogun State. We are focus on empowering entrepreneurs on their journey to build great ideas out of little or nothing, we work with Start-ups at every stage of maturity to provide the tools, resources, knowledge and expertise they need to succeed.

					One of our primary goals is to empower a new crop of innovative and creative young men and women, who will add technological value to every sector of the economy and solve real problems. We also play a leadership role in mentoring, nurturing dialogue, disseminating knowledge and re-wiring the ecosystem through different community and grouped based efforts that are geared towards building a generation of new tech-preneurs, entrepreneurs, software developers and an army of skilled and employable young people matching industry needs in priority sectors. We believe that technology innovation is the solution to Ogun State, Nigeria and Africa as a whole challenges and as the innovation landscape in Nigeria continues to expand; we are excited to be a pioneering force in the Ecosystem pushing the frontiers of Technology Innovation across Nigeria and supporting Tech Entrepreneurship in Nigeria and across the continent.

					Our dedication to innovation and tech-enabled entrepreneurship is in line with our strategic goal of being positioned as Nigeria’s Topmost Institutional Technology Startup Accelerator supporting innovative ideas, building high-impact entrepreneurs and nurturing top businesses in the process.
					JOIN DOTS HUB TODAY; LET’S BRING OUT THE TECH-PRENEUR IN YOU!!!</p>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<h2 id="Choose">our <strong>team</strong></h2>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-6">
				<img src="img/team.jpg" class="img-responsive" id="img">
			</div>

			<div class="col-md-3 col-sm-6 col-xs-6">
				<img src="img/team.jpg" class="img-responsive" id="img">
			</div>

			<div class="col-md-3 col-sm-6 col-xs-6">
				<img src="img/team.jpg" class="img-responsive" id="img">
			</div>

			<div class="col-md-3 col-sm-6 col-xs-6">
				<img src="img/team.jpg" class="img-responsive" id="img">
			</div>
		</div>
	</div><br /><br />

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