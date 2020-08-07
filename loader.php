<?php
session_start();
$conn = new mysqli("localhost", "root", "", "project");
if($conn->connect_error){
die("connection failed:".connect_error);
}
$email = $_SESSION['email'];
if(empty($email)){
  header("Location: vacancies.php?page=1");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Online &mdash; CBT portal</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="css/matrix-login.css" />
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
  <meta http-equiv="refresh" content="4; URL=test">
  <style>
    .loader {
      border: 35px solid #f3f3f3;
      border-radius: 50%;
      border-top: 30px solid #999999;
      border-bottom: 30px solid #999;
      width: 150px;
      height: 150px;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

  </style>
</head>
<body> 
<!--The loader-->     
  <center>
      <div class="container col-md-12 col-sm-12 col-xs-12 col-lg-12" style="margin-top: 150px; opacity: .6;">
          <div class="loader"></div>
          <h2 style="font-weight: normal; color: grey;">Loading . . . </h2>
          <p>Hold on<b><span style="color: red"> 
            <?php 
              echo $email = $_SESSION['email']; 
            ?>
            </span></b> your questions are loading.</p>
      </div>
  </center>
<script src="js/jquery.min.js"></script>   
</body>
</html>
