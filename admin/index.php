<?php
session_start();
$conn = new mysqli("localhost", "root", "", "project");
if($conn->connect_error){
die("connection failed:".connect_error);
}

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$ins = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$res = $conn->query($ins);

	if ($res->num_rows == 1){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$login = "Login successful Redirecting...";
		echo "<meta http-equiv='refresh' content='2; url=dashboard.php'>";	
	} else{
		$error = "Incorrect username or password";
	}
}

/*
$ins = "INSERT INTO admin(username, password) VALUES('Admin', '1234')";
$res = $conn->query($ins);
*/
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
	<title>Online &mdash; CBT portal</title>
</head>
<body>
	<div class="container" id="box1">
		<center><span class="fa fa-codepen" id="icon"></span> <span style="font-size: 30px">Admin</span></center><br>
		<div class="container" id="box2">
			<form method="POST">
				
				<?php
				if(isset($error)){
					$error2 = "<span id='error' class='invalid-feedback alert alert-danger' style='display: block; font-size: 14px; font-family: segoe ui; padding: 10px;'><i class='fa fa-warning'></i>&nbsp;&nbsp;".$error."</span>";
					echo $error2;
				}
				?>
				

				<?php
					if(isset($login)){
						$err = "<span class='invalid-feedback alert alert-success' style='display: block; font-size: 14px; font-family: segoe ui; padding: 10px'><i class='fa fa-info-circle'></i>&nbsp;&nbsp;".$login."</span>";
						echo $err;
					}
				?>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required>
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div>

				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-lg" id="loginbtn"><b>Login</b></button>
				</div>
			</form>
		</div>
		<br>
	</div>
	<script>
		$(document).ready(function(){	
			$("#error").delay(4000).fadeOut(1000);
		});
	</script>
</body>
</html>
