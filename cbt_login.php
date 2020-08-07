<?php
session_start();
$conn = new mysqli("localhost", "root", "", "project");
if($conn->connect_error){
die("connection failed:".connect_error);
}
if(isset($_GET['id3'])){
$no = $_GET['id3'];
}
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$ins = "SELECT * FROM application WHERE email = '$email' AND password = '$password' AND job_id = '$no'";
	$res = $conn->query($ins);

	$ins2 = "SELECT * FROM cbt WHERE email = '$email' AND job_id = '$no'";
	$res2 = $conn->query($ins2);
	if($res2->num_rows > 0){
		echo "<script> alert('Sorry, you cannot take this test again'); </script>";
	}
	elseif ($res->num_rows == 1){
		$_SESSION['email'] = $email;
		$_SESSION['$_GET[id3]'] = $no;
		$login = "Login successful Redirecting...";
		echo "<meta http-equiv='refresh' content='2; URL=loader.php'>";		
	}
	else{
		$error = "Incorrect username or password";
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
	<script src="admin/js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<title>Online &mdash; CBT portal</title>
</head>
<body>
	<div class="container" id="box1">
		<center><span class="fa fa-male" id="icon"></span> <span style="font-size: 30px">Applicant</span></center><br>
		<div class="container" id="box2">
			<form method="POST">
				<div>
					<?php
						if(isset($error)){
							$error2 = "<span id='error' class='invalid-feedback alert alert-danger' style='display: block; font-size: 14px; font-family: segoe ui; padding: 10px'><i class='fa fa-warning'></i>&nbsp;&nbsp;".$error."</span>";
							echo $error2;
						}
					?>
				</div>

				<?php
					if(isset($login)){
						$error2 = "<span class='invalid-feedback alert alert-success' style='display: block; font-size: 14px; font-family: segoe ui; padding: 10px'><i class='fa fa-info-circle'></i>&nbsp;&nbsp;".$login."</span>";
						echo $error2;
					}
				?>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" required>
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div>

				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-lg" id="loginbtn"><b>Login</b></button>
				</div>
			</form><br>
		</div>
		<br>
	</div>
	<script>
		$(document).ready(function(){
			$('#error').delay(4000).fadeOut(1000);
		});
	</script>
</body>
</html>
