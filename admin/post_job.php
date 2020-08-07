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

if(isset($_POST['send'])){
	$job_title = $_POST['job_title'];
	$description = $_POST['description'];
	$qualification = $_POST['qualification'];
	$experience = $_POST['experience'];
	$deadline = $_POST['deadline'];
	$_SESSION['Job_title'] = $job_title;
	$_SESSION['Description'] = $description;
	$_SESSION['Qualification'] = $qualification;
	$_SESSION['Experience'] = $experience;
	$ins = "INSERT INTO vacancy (Job_title, Description, Qualification, Experience, Deadline) VALUES('$job_title', '$description', '$qualification', '$experience', '$deadline')";
	$res = $conn->query($ins);
	if($res == true){
		$success = "Jod posted successfully";
		echo "<meta http-equiv='refresh' content='1'>";
		
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="aos/aos.css">
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
			echo "<span class='invalid-feedback alert alert-success btn-block fa fa-info-circle' style=''>&nbsp;&nbsp;<span style='font-family: segoe ui;'>".$success."</span></span>";
		}
		?>
	</div>
	<button id="me" class="fa fa-bars" title="Menu"></button><br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-10 navbar-fixed-top" id="dash-area" style="display: none"><br>
				<button id="me2" class="fa fa-times" title="Close"></button>
				<h2 style="color: orange"><img src="img/dots.jpg" width="35"> DOTS ICT</h2>
				<abbr title="Dashboard"><a href="dashboard.php"><span id="dash"><span class="fa fa-dashboard"></span>&nbsp;&nbsp;dashboard</span></a></abbr><br /><br /><br />

				<abbr title="Post Vacant Job"><a href="post_job.php"><span id="dash" style="background: orange" data-aos="slide-right" data-aos-duration="350"><span class="fa fa-send"></span>&nbsp;&nbsp;Post Job
				<?php
					$sel = "SELECT * FROM vacancy";
					$res = $conn->query($sel);
				 	$total = $res->num_rows; 
				 	?>
				 	<span id="total"><?php echo $total; ?></span>
				 	<?php
				 	?>
				 </span></a></abbr><br /><br /><br />

				<abbr title="View Messages from user"><a href="view_report.php"><span id="dash"><span class="fa fa-envelope"></span>&nbsp;&nbsp;Report</span></a></abbr><br /><br /><br />

				<abbr title="View Applicants"><a href="applicants.php"><span id="dash"><span class="fa fa-user"></span>&nbsp;&nbsp;Applicants</span></a></abbr><br /><br /><br />

				<abbr title="View Vacancies"><a href="view_vacancies.php"><span id="dash"><span class="fa fa-unlock-alt"></span>&nbsp;&nbsp;Vacancies</span></a></abbr><br /><br /><br />

				<abbr title="View CBT Result"><a href="cbt_result.php"><span id="dash"><span class="fa fa-recycle"></span>&nbsp;&nbsp;CBT Result</span></a></abbr><br /><br /><br />

				<abbr title="Update About Page"><a href="update_about.php"><span id="dash"><span class="fa fa-random"></span>&nbsp;&nbsp;update about</span></a></abbr><br /><br /><br />

				<abbr title="Change Password"><a href="change_password.php"><span id="dash"><span class="fa fa-lock"></span>&nbsp;&nbsp;password</span></a></abbr><br /><br /><br />

				<abbr title="Log Out"><a href="logout.php"><span id="dash"><span class="fa fa-power-off"></span>&nbsp;&nbsp;log out </span></a></abbr><br /><br /><br /><br />
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12" id="dash-area2"><br>
				<p>Dashboard / <a style="cursor: pointer;">Post Job</a></p><br>
				
					<form method="POST">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Job Title</label>
								<input type="text" name="job_title" class="form-control" required>
							</div>

							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" name="description" rows="7" style="resize: none;" required></textarea>
							</div>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Qualification</label>
								<input type="text" name="qualification" class="form-control" required>
							</div>

							<div class="form-group">
								<label>Experience</label>
								<input type="number" name="experience" class="form-control" required>
							</div>

							<div class="form-group">
								<label>Deadline</label>
								<input type="text" name="deadline" class="form-control" required placeholder="dd/mm/yy">
							</div>

							<div class="form-group">
								<button type="submit" name="send" class="btn btn-warning" id="pst"><b>POST</b></button>
							</div>
						</div>
					</form>
			
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
			$(this).fadeOut(4000);
			});
		});
	</script>
</body>
</html>