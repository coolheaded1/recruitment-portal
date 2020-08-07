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

$username = $_SESSION['username'];
if(empty($username)){
  header("Location: ./");
}

if(isset($_SESSION['password'])){
$password = $_SESSION['password'];
}
if(isset($_POST['change'])){

	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$confirm = $_POST['confirm'];
	if($pass2 != $confirm){
		$feedback = "Password doesn't match.";
	}
	else if($pass1 != $password){
		$wrongPassword = "Current password is not correct.";
	}
	else if($pass2 == $password){
		$errorPassword = "Current Password cannot be use as the New Password";
	}
	else{
		$update = "UPDATE admin SET password = '$pass2'";
		$result = $conn->query($update);
		if($result === TRUE){
			// header("location: change_password.php");
			$success = "Password changed successfully";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="aos/aos.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<title>Online &mdash; CBT portal</title>
</head>
<body>
	<div style="position: absolute; right: 10px; width: 30%">
		<?php
		if(isset($success)){
			echo "<span class='invalid-feedbac alert alert-success btn-block fa fa-info-circle' style=''>&nbsp;&nbsp;<span style='font-family: segoe ui;'>".$success."</span></span>";
		}
		?>
	</div>
	<button id="me" class="fa fa-bars" title="Menu"></button><br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-10 navbar-fixed-top" id="dash-area" style="display: none;"><br>
				<button id="me2" class="fa fa-times" title="Close"></button>
				<h2 style="color: orange"><img src="img/dots.jpg" width="35"> DOTS ICT</h2>
				<abbr title="Dashboard"><a href="dashboard.php"><span id="dash"><span class="fa fa-dashboard"></span>&nbsp;&nbsp;dashboard</span></a></abbr><br /><br /><br />

				<abbr title="Post Vacant Job"><a href="post_job.php"><span id="dash"><span class="fa fa-send"></span>&nbsp;&nbsp;Post Job</span></a></abbr><br /><br /><br />

				<abbr title="View Messages from user"><a href="view_report.php"><span id="dash"><span class="fa fa-envelope"></span>&nbsp;&nbsp;Report</span></a></abbr><br /><br /><br />

				<abbr title="View Applicants"><a href="applicants.php"><span id="dash"><span class="fa fa-user"></span>&nbsp;&nbsp;Applicants</span></a></abbr><br /><br /><br />

				<abbr title="View Vacancies"><a href="view_vacancies.php"><span id="dash"><span class="fa fa-unlock-alt"></span>&nbsp;&nbsp;Vacancies</span></a></abbr><br /><br /><br />

				<abbr title="View CBT Result"><a href="cbt_result.php"><span id="dash"><span class="fa fa-recycle"></span>&nbsp;&nbsp;CBT Result</span></a></abbr><br / ><br /><br />

				<abbr title="Update About Page"><a href="update_about.php"><span id="dash"><span class="fa fa-random"></span>&nbsp;&nbsp;update about</span></a></abbr><br /><br /><br />

				<abbr title="Change Password"><a href="change_password.php"><span id="dash" style="background: orange" data-aos="slide-right" data-aos-duration="350"><span class="fa fa-lock"></span>&nbsp;&nbsp;password</span></a></abbr><br /><br /><br />

				<abbr title="Log Out"><a href="logout.php"><span id="dash"><span class="fa fa-power-off"></span>&nbsp;&nbsp;log out </span></a></abbr><br /><br /><br /><br />
				
			</div><br>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<p>Dashboard / <a style="cursor: pointer;">Change Password</a></p><br><br>
				<div class="container" id="formContainer">
					<div class="container" id="subContainer">
						<p>Fill the form to change your password</p>
					</div>
					<div class="row">
						<div class="col-md-12 offset-2">
							<form method="POST" id="form">
								<div>
									<?php
									if(isset($wrongPassword)){
										echo "<span class='invalid-feedback alert alert-danger btn-block'><i class='fa fa-warning'></i>&nbsp;&nbsp;&nbsp;".$wrongPassword."</span>";
									}

									?>
								</div>
								<div class="form-group">
									<label> Current Password</label>
									<input type="password" name="pass1" class="form-control" required>
								</div>

								<?php
									if(isset($feedback)){
										echo "<span class='invalid-feedback alert alert-danger btn-block'><i class='fa fa-warning'></i>&nbsp;&nbsp;&nbsp;".$feedback."</span>";
									}

									if(isset($errorPassword)){
										echo "<span class='invalid-feedback alert alert-danger btn-block'><i class='fa fa-warning'></i>&nbsp;&nbsp;&nbsp;".$errorPassword."</span>";
									}
								?>
								<div class="form-group">
									<label>New Password</label>
									<input type="password" name="pass2" class="form-control" required >
								</div>
							

								<div class="form-group">
									<label> Confirm New Password</label>
									<input type="password" name="confirm" class="form-control" required>
								</div>

								<div class="form-group">
									<button type="submit" name="change" class="btn btn-warning">Change</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="aos/aos.js"></script>
	<script>
      AOS.init({

        easing: 'ease-in-out-sine'
      });
    </script>

    <script>
		$(function(){
			$("#me").click(function(){
				$("#dash-area").show(200);
			});
			$("#me2").click(function(){
				$("#dash-area").hide(200);
			});
			$(".invalid-feedbac").delay(4000).fadeOut(1000);
		});
	</script>
</body>
</html>
