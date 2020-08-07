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
$no = $_GET['id2'];
if (isset($_POST['apply'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$qualification = $_POST['qualify'];
	$exp = $_POST['exp'];
	$job = $_POST['job'];
	$image = $_FILES['image']['name'];
  	$directory = "uploads/".$image;
	$target_file = $directory.basename($image);
	$imageType = pathinfo($target_file,PATHINFO_EXTENSION);
	$sel2 = "SELECT * FROM application WHERE job_id = '$no' AND email = '$email'";
	$selResult2 = $conn->query($sel2);

	if ($pass1 != $pass2) {
		$error = "Password doesn't match";
	} 
	elseif($selResult2->num_rows > 0){
		echo "<script> alert('Sorry , you cannot apply for this job again'); </script>";
	}
	elseif($imageType != "jpg" && $imageType != "png" && $imageType != "gif" && $imageType != "JPG"&& $imageType != "PNG" && $imageType != "GIF"){
		echo "<script> alert('You are allowed to upload png, jpg, and gif image'); </script>";
	}
	else{
		move_uploaded_file($_FILES['image']['tmp_name'], $directory);
		$insert = "INSERT INTO application(firstname, lastname, email, password, qualification, experience, passport, job_id, job_name) VALUES('$fname', '$lname', '$email', '$pass1', '$qualification', '$exp', '$image', '$no', '$job')";
		$result = $conn->query($insert);
		if ($result == true) {
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			echo "<script> alert('Application successfully, click on login button to take the test'); </script>";
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
							<li class="active"><a href="vacancies.php">Vanancies</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		<a href="#top"><img src="images/moov.png" id="backToTop"></a>

		<section class="animate-box">
			<div class="container" style="width: 60%">
				<div class="row">
					<div class="col-md-12" id="form">
						<?php
	    					$sel = "SELECT * FROM vacancy WHERE Job_id = '$_GET[id2]'";
	    					$selResult = $conn->query($sel);
	    					while($row = $selResult->fetch_assoc()){
	    					?>
								<form method="POST" id="login_form" enctype="multipart/form-data">
									<div>
					    				<center><h2 id="login_head">application form</h2></center>
					    			</div>
					    			<div class="alert" style="background: rgb(0,173,124);">
										<p style="color: #fff; font-family: Gabriola; font-size: 20px;"><strong>Note</strong>
											<ul style="color: #fff; font-family: Gabriola; font-size: 20px;">
												<li>You are to take short test after applying.</li>
												<li>If you have already applied for this job, then click login button to access your test.</li>
											</ul>
										</p>

									</div>

					    			<div class="form-group">
					    				<label>Job Title</label>
					    				<input type="text" name="job" class="form-control" value="<?php echo $row['Job_title']; ?>" readonly style='background: #fff;'>
					    			</div>

					    			<div class="form-group">
					    				<label>Firstname</label>
					    				<input type="text" name="fname" class="form-control" required>
					    			</div>

					    			<div class="form-group">
					    				<label>Lastname</label>
					    				<input type="text" name="lname" class="form-control" required>
					    			</div>

					    			<div class="form-group">
					    				<label>Email</label>
					    				<input type="email" name="email" class="form-control" required>
					    			</div>

					    			<div>
					    				<?php
					    				if(isset($error)){
											$error2 = "<span class='invalid-feedback alert alert-danger' style='display: block; font-size: 14px;'><i class='fa fa-warning'></i>&nbsp;&nbsp;&nbsp;".$error."</span>";
											echo $error2;
										}
										?>
					    			</div>

					    			<div class="form-group">
					    				<label>Password</label>
					    				<input type="password" name="pass1" class="form-control" required>
					    			</div>

					    			<div class="form-group">
					    				<label>Confirm Password</label>
					    				<input type="password" name="pass2" class="form-control" required>
					    			</div>

					    			<div class="form-group">
					    				<label>Qualification</label>
					    				<input type="text" name="qualify" class="form-control" required>
					    			</div>

					    			<div class="form-group">
					    				<label>Experience</label>
					    				<input type="number" name="exp" class="form-control" required>
					    			</div>

					    			<div class="form-group">
					    				<label>Passport</label>
					    				<input type="file" name="image" class="form-control" required>
					    			</div>

				        			<div class="form-group">
				        				<button type="submit" name='apply' class="btn btn-warning" style="float: right;">apply</button>
				        			</div>
					        		<br><br><br>
					        		<?php
					        			echo "<p>Applied already? <a href='cbt_login.php?id3=$row[Job_id]'>Login</a></p>";
					        		?>
					    		</form>
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

	<script>
		$(function(){
			$(".panel").css("box-shadow","0px 0px 2px grey");
		});
		
	</script>
	</body>
</html>