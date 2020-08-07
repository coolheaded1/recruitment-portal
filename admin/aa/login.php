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
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$checkbox = $_POST['checkbox'];
	
	$select = "SELECT * FROM registration WHERE Email = '$email' AND Password = '$password'";
	$result = $conn->query($select);

	if($result->num_rows == 1){
		 $_SESSION['Email'] = $email;		
		header ('Location: freestyle-home2.php');
	}
	else{
		$notMatch = "Email or Password is incorrect.";
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
	<title>Freestyle</title>
</head>
<body>

	<div class="container">
		<div class="container">
			<div class="container well w-75 bg-primary rounded-0" style="margin-top: 130px; font-size: 20px; border-radius: 0px solid #000">
				<p class="text-center font-weight-bold"> Login Here with your details!</p>
			</div>
			<div class="container border border-primary p-5 rounded-0" style="margin-top: -22px; width: 74.8%;">
					<form method="POST" class="">
						<div class="form-group">
							<?php
								$x = "<span class='invalid-feedback' style='display:block; font-size: 17px;'>".$notMatch."</span>"."<br />";
									echo $x;
							?>
							<span class="fa fa-envelope text-danger" style="font-size: 20px; width: 25px"></span><label>Email</label>
							<input type="email" name="email" class="form-control input-lg w-100" required>
						</div>

						<div class="form-group">
							<span class="fa fa-lock text-danger" style="font-size: 20px; width: 25px"></span><label>Password</label>
							<input type="password" name="password" class="form-control input-lg w-100" required>
						</div>
						<div class="form-group">
							<input type="checkbox" name="checkbox" required><span class="pl-2">Remember me</span>
						</div>
						<div class="form-group">
							<button type="submit" name="login" class= "btn btn-primary border border-primary float-right"> <span class="fa fa-sign-in float-right" style="margin-left: 5px; margin-top: 2px; font-size: 16px;"></span>Login</button>
						</div><br /><br /><br />
						<p>Don't have an account? <a href="freestyle-registration.php">Register</a></p>
					</form>
			</div>
		</div>
	</div>
</body>
</html>