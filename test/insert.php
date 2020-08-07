<?php
session_start();
$conn = new mysqli("localhost","root","","project");
$email = $_SESSION['email'];
$name = $_POST["name"];
$job = $_POST["job"];
$no = $_SESSION['$_GET[id3]'];
$score = $_POST["score"];
$sel = "SELECT * FROM cbt WHERE email = '$email' AND job_id = '$no'";
$result = $conn->query($sel);
if($result->num_rows > 0){
	echo "Warning!!! Your answer is submitted already";
}
else{
	$ins = "INSERT INTO cbt(email, name, job, job_id, score) VALUES('$email', '$name', '$job', '$no', '$score')";
	$res = $conn->query($ins);
	if($res == true){
		echo "Answer submitted successfully";
	}
}
?>