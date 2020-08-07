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

if(isset($_POST['update'])){
	$description = $_POST['description'];
	$ins = "UPDATE about SET description = '$description'";
	$res = $conn->query($ins);
	if($res == true){
		$update = "Updated successfully";
	}
}

if(isset($_POST['update2'])){
	$description2 = $_POST['description2'];
	$insert = "UPDATE choose SET description = '$description2'";
	$res2 = $conn->query($insert);
	if($res2 == true){
		$update2 = "Updated successfully";
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
	<div style="width: 30%; position: absolute; right: 7px">
		<?php
			if(isset($update)){
				echo "<b><span class='invalid-feedback alert alert-success btn-block fa fa-info-circle'>&nbsp;&nbsp;<span style='font-family: segoe ui;'>". $update."</span></span></b>";
			}

			if(isset($update2)){
				echo "<b><span class='invalid-feedback alert alert-success btn-block fa fa-info-circle'>&nbsp;&nbsp;<span style='font-family: segoe ui;'>". $update2."</span></span></b>";
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

				<abbr title="Update About Page"><a href="update_about.php"><span id="dash" style="background: orange" data-aos="slide-right" data-aos-duration="350"><span class="fa fa-random"></span>&nbsp;&nbsp;update about</span></a></abbr><br /><br /><br />

				<abbr title="Change Password"><a href="change_password.php"><span id="dash"><span class="fa fa-lock"> </span>&nbsp;&nbsp;password</span></a></abbr><br /><br /><br />

				<abbr title="Log Out"><a href="logout.php"><span id="dash"><span class="fa fa-power-off"></span>&nbsp;&nbsp;log out </span></a></abbr><br /><br /><br /><br />
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12" id="dash-area2"><br>
				<p>Dashboard / <a style="cursor: pointer;">Update About</a></p>
				<?php
				$select = "SELECT * FROM about";
				$result = $conn->query($select);
				while ($row = $result->fetch_assoc()){
				?>

				<form method="POST">
					<h2>Our Company</h2>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="description" rows="7" style="resize: none;"><?php echo $row['description'];?></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-warning" name="update">UPDATE</button>
					</div>
				</form><br /><br />
				<?php
			}
			?>

				<!-- why choose us--->

				<?php
				$select2 = "SELECT * FROM choose";
				$result2 = $conn->query($select2);
				while ($rows = $result2->fetch_assoc()){
				?>
				<form method="POST">
					<h2>Why Choose Us?</h2>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="description2" rows="7" style="resize: none;"><?php echo $rows['description'];?></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-warning" name="update2">UPDATE</button>
					</div>
				</form>
				<?php
				}
				?>
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
			$(".invalid-feedback").show(function(){
				$(this).delay(4000).fadeOut(500);
			})
		});
	</script>
</body>
</html>
