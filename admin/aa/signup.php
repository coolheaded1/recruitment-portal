<?php
session_start();
$server="localhost";
$user="root";
$password="";
$db ="freestyle";
$conn = new mysqli($server,$user,$password,$db);
if($conn->connect_error){
die("connection failed:".connect_error);
}
if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	if($pass1 != $pass2){
		$notMatch = "Password doesn't match";
	}
	else{
		$insert = "INSERT INTO registration(Firstname, Lastname, Email, Password) VALUES('$firstname', '$lastname', '$email', '$pass1')";
		$result = $conn->query($insert);
		if($result == TRUE){
			echo "<script> alert('Password doesn't match'); </script>";
			header('location: freestyle-home2.php');
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="container">
			<div class="container well bg-primary font-weight-bold" style="margin-top: 20px; font-size: 20px; border-radius: 0px solid #000; width: 75%;">
				<p class="text-center">Input your details here to register with us!</p>
			</div>

			<form method="POST" class="container border border-primary p-5" style="margin-top: -22px; width: 74.8%">
				<div class="form-group">
					<span class="fa fa-user text-danger" style="font-size: 20px; width: 25px"></span><label>Firstname</label>
					<input type="text" name="firstname" class="form-control" required>
				</div>
				<div class="form-group">
					<span class="fa fa-user text-danger" style="font-size: 20px; width: 25px"></span><label>Lastname</label>
					<input type="text" name="lastname" class="form-control" required>
				</div>
				<div class="form-group">
					<span class="fa fa-envelope text-danger" style="font-size: 16px; width: 25px"></span><label>E-mail</label>
					<input type="email" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<?php
					$x = "<span class='invalid-feedback' style='display:block; font-size: 17px;'>".$notMatch."</span>";
					echo $x;
					?>
					<span class="fa fa-lock text-danger" style="font-size: 20px; width: 25px"></span><label>Password</label>
					<input type="password" name="pass1" class="form-control" required>
				</div>
				<div class="form-group">
					<span class="fa fa-lock text-danger" style="font-size: 20px; width: 25px"></span><label>Retype Password</label>
					<input type="password" name="pass2" class="form-control" required>
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary border border-primary float-right"> <span class="fa fa-sign-in float-right" style="margin-left: 5px; margin-top: 2px; font-size: 16px;"></span>Register</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>