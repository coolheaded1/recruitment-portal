<?php
session_start();
$conn = new mysqli("localhost", "root", "", "project");
if($conn->connect_error){
die("connection failed:".connect_error);
}

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$ins = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$res = $conn->query($ins);
	if ($res->num_rows == 1){
		$_SESSION['username'] = $username;
		header('location: dashboard.php');
	} else{
		$error = "Username or Password is incorrect.";
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
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<title>Online &mdash; CBT portal</title>
</head>
<body>
	<div class="row">
		<div class="container" id="login_container">
			<br />
			<div class="col-md-6 col-sm-6 col-xs-6">
				<div class="container-fluid" id="img-fluid">

				</div>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-6">
				<form method="POST">
					<h2 id="h2">login with your details!</h2><br />
					<div id="alert">
						<?php
						$error2 = "<span class='invalid-feedback' style='display: block; font-size: 14px; color: red'>".$error."</span>";
						echo $error2;
						?>
					</div>

					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" required><br />
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required><br />
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-warning btn-block" name="login"><b>LOGIN</b></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>