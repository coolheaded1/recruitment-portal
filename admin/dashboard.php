<?php
session_start();
$conn = new mysqli("localhost", "root", "", "project");
if($conn->connect_error){
die("connection failed:".connect_error);
}
$username = $_SESSION['username'];
if(empty($username)){
  header("Location: ./");
}

if(isset($_POST['change'])){
	$uname = $_POST['username'];
	$update = "UPDATE admin SET username = '$uname'";
	$result = $conn->query($update);
	if($result == TRUE){
		header("location: ../admin/dashboard.php");
		
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
	<div style="position: absolute; right: 5px; display: none; cursor: default;" class="alert alert-info" id="alert">
		<p><i class="fa fa-info-circle"></i>&nbsp;&nbsp;Welcome <?php $username = $_SESSION['username']; echo $username; ?>!</p>
	</div>
	<button id="me" class="fa fa-bars" title="Menu"></button><br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-10 navbar-fixed-top" id="dash-area" style="display: none"><br>
				<button id="me2" class="fa fa-times" title="Close"></button>
				<h2 style="color: orange"><img src="img/dots.jpg" width="35"> DOTS ICT</h2>
				<abbr title="Dashboard"><a href="dashboard.php"><span id="dash" style="background: orange" data-aos="slide-right" data-aos-duration="350"><span class="fa fa-dashboard"></span>&nbsp;&nbsp;dashboard</span></a></abbr><br /><br /><br />

				<abbr title="Post Vacant Job"><a href="post_job.php"><span id="dash"><span class="fa fa-send"></span>&nbsp;&nbsp;Post Job</span></a></abbr><br /><br /><br />

				<abbr title="View Messages from user"><a href="view_report.php"><span id="dash"><span class="fa fa-envelope"></span>&nbsp;&nbsp;Report</span></a></abbr><br /><br /><br />

				<abbr title="View Applicants"><a href="applicants.php"><span id="dash"><span class="fa fa-user"></span>&nbsp;&nbsp;Applicants</span></a></abbr><br /><br /><br />

				<abbr title="View Vacancies"><a href="view_vacancies.php"><span id="dash"><span class="fa fa-unlock-alt"></span>&nbsp;&nbsp;Vacancies</span></a></abbr><br /><br /><br />

				<abbr title="View CBT Result"><a href="cbt_result.php"><span id="dash"><span class="fa fa-recycle"></span>&nbsp;&nbsp;CBT Result</span></a></abbr><br / ><br /><br />

				<abbr title="Update About Page"><a href="update_about.php"><span id="dash"><span class="fa fa-random"></span>&nbsp;&nbsp;update about</span></a></abbr><br /><br /><br />

				<abbr title="Change Name"><a href="change_name.php"><span id="dash"><span class="fa fa-user"></span>&nbsp;&nbsp;name</span></a></abbr><br /><br /><br />

				<abbr title="Log Out"><a href="logout.php"><span id="dash"><span class="fa fa-power-off"></span>&nbsp;&nbsp;log out </span></a></abbr><br /><br /><br /><br />
			</div>


			<div class="col-md-12 col-sm-12 col-xs-12" id="dash-area2">
				<br /><br />
				<!-- job posted -->
				<p class="container">Dashboard / <a style="cursor: pointer;" title="Chenge Username" id="session"><?php echo $_SESSION['username']?></a></p>
				<div id="form2">
					<form method="post">
						<div class="form-group">
							<label>New Username</label>
							<input type="text" name="username" class="form-control" required>
						</div>
						<button class="btn btn-warning btn-sm" name="change">Change</button>
					</form>
					<button id="close" style="float: right; margin-top: -30px" class="btn btn-sm btn-danger">Close</button><br><br>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">

					<div class="col-md-12">
						<div id="dash-panel">
							<h4>JOB POSTED <i class="fa fa-file" style="float: right; font-size: 25px; color: #337AB7"></i></h4>
							<?php
								$sel = "SELECT * FROM vacancy";
								$res = $conn->query($sel);
							 	$total = $res->num_rows;
							 	
								$sel2 = "SELECT * FROM vacancy ORDER BY Job_id DESC LIMIT 0,1";
								$res2 = $conn->query($sel2);
								$tot = $res2->num_rows;
								while($rows = $res2->fetch_assoc()){
							 	?>
								 <span id="total3"><?php echo $total; ?></span><br><br>
								 <span><mark class="bg-primary" style="padding: 5px; border-radius: 5px;">New</mark> &nbsp;job posted on <?php echo date("d-M-y", strtotime($rows['created_dt'])) ?><span style="float: right; color: #337AB7; border-radius: 5px;"><b><?php echo $tot; ?></b></span></span></span><br><br>
								 <center><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">View</button></center>
					  		 	<?php
					  			}
					  		?>
						</div><br><br>
					</div>

						<!---job modal
						///////////////////
						///////////////
						///////////////--->

					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  	<div class="modal-dialog">
						    <div class="modal-content">
						     	<div class="modal-header">
						        	<button type="button" class="close" data-dismiss="modal">&times;</button>
						        	<h4 class="modal-title">New Posted Job</h4>
						      	</div>
						      	<div class="modal-body">
						        <?php
									$sel2 = "SELECT * FROM vacancy ORDER BY Job_id DESC LIMIT 0,1";
									$res2 = $conn->query($sel2);
									while($rows = $res2->fetch_assoc()){
									 ?>
									 <p>A new job was posted searching for <br><br><mark  style="padding: 5px; border-radius: 5px;"><?php echo $rows['Job_title']; ?></mark></p>
									 <?php
									}
									?>
						      	</div>
						      	<div class="modal-footer">
						        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      	</div>
						    </div>
					  	</div>
					</div>
					<!---//////job modal
						///////////////////
						///////////////
						///////////////--->
				</div>

				<!-- vacancies -->
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="col-md-12">
						<div id="dash-panel">
							<h4>VACANCIES <i class="fa fa-folder-open" style="float: right; font-size: 25px; color: #5CB85C;"></i></h4>
							<?php
								$sel = "SELECT * FROM vacancy";
								$res = $conn->query($sel);
							 	$totall = $res->num_rows;
							 	
								$sel2 = "SELECT * FROM vacancy ORDER BY Job_id DESC LIMIT 0,1";
								$res2 = $conn->query($sel2);
								$tot = $res2->num_rows;
								while($rows = $res2->fetch_assoc()){
							 	?>
							 	<span id="total3"><?php echo $totall; ?></span><br><br>
							 		<span><mark class="bg-success" style="padding: 5px; border-radius: 5px;">New</mark> &nbsp;vacancy available on <?php echo date("d-M-y", strtotime($rows['created_dt'])) ?> <span style="float: right; color: #5CB85C; border-radius: 5px;"><b><?php echo $tot; ?></b></span></span><br><br>
							 		<center><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal2">View</button></center>
					  		 	<?php
					  			}
						 	?>
						</div><br><br>
					</div>

						<!---vacancy modal
						///////////////////
						///////////////
						///////////////--->

					<!-- Modal -->
					<div id="myModal2" class="modal fade" role="dialog">
					 	<div class="modal-dialog">
					    	<div class="modal-content">
					     		 <div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					        	<h4 class="modal-title">New Vanancy</h4>
					      		</div>

					     		<div class="modal-body">
						        <?php
									$sel2 = "SELECT * FROM vacancy ORDER BY Job_id DESC LIMIT 0,1";
									$res2 = $conn->query($sel2);
									while($rows = $res2->fetch_assoc()){
									 ?>
									 	<p>A new vacancy was provide for user to apply, the application is on <br><br><mark  style="padding: 5px; border-radius: 5px;"><?php echo $rows['Job_title']; ?></mark></p>
									 <?php
									}
									?>
					      		</div>
					      		<div class="modal-footer">
					        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      		</div>
					    	</div>

					  	</div>
					</div>
					<!---//////vacancy modal
						///////////////////
						///////////////
						///////////////--->
				</div>



				

				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="col-md-12">
						<div id="dash-panel">
							<h4>REPORT<i class="fa fa-envelope" style="float: right; font-size: 25px; color: #D9534F"></i></h4>
							<?php
								$sel = "SELECT * FROM contact";
								$res = $conn->query($sel);
							 	$totalll = $res->num_rows;
							 	
								$sel2 = "SELECT * FROM contact ORDER BY msg_id DESC LIMIT 0,1";
								$res2 = $conn->query($sel2);
								$tot = $res2->num_rows;
								while($rows = $res2->fetch_assoc()){
							 	?>
							 	<span id="total3"><?php echo $totalll; ?></span><br><br>
							 	<span><mark class="bg-danger" style="padding: 5px; border-radius: 5px;">New</mark> &nbsp; message from a user on <?php echo date("d-M-y", strtotime($rows['dt'])) ?> <span style="float: right; color: #D9534F; border-radius: 5px;"><b><?php echo $tot; ?></b></span></span><br><br>
							 	<center><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal3">View</button></center>
					  		 	<?php
					  			}
					  		?>
						</div><br><br>
					</div>

						<!---report modal
						///////////////////
						///////////////
						///////////////--->

					<!-- Modal -->
					<div id="myModal3" class="modal fade" role="dialog">
					 	<div class="modal-dialog">
					    	<div class="modal-content">
					      		<div class="modal-header">
					        		<button type="button" class="close" data-dismiss="modal">&times;</button>
					        		<h4 class="modal-title">New Message</h4>
					      		</div>

					      		<div class="modal-body">
						        <?php
									$sel = "SELECT * FROM contact ORDER BY msg_id DESC LIMIT 0,1";
									$res = $conn->query($sel);
									while($rows = $res->fetch_assoc()){
									 ?>
									 	<p>A new user sent message to you. <br><br><mark  style="padding: 5px; border-radius: 5px;"><?php echo $rows['Name']; ?></mark></p>

									 <?php
									}
									?>
					      		</div>

					      		<div class="modal-footer">
					        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      		</div>
					    	</div>
					  	</div>
					</div>
					<!---//////report modal
						///////////////////
						///////////////
						///////////////--->
				</div>

				
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="col-md-12">
						<div id="dash-panel">
							<h4>APPLICANTS<i class="fa fa-users" style="float: right; font-size: 25px; color: #F0AD4E"></i></h4>
							<?php
								$sel = "SELECT * FROM application";
								$res = $conn->query($sel);
							 	$totallll = $res->num_rows;
							 	
								$sel2 = "SELECT * FROM application ORDER BY user_id DESC LIMIT 0,1";
								$res2 = $conn->query($sel2);
								$tot = $res2->num_rows;
								while($rows = $res2->fetch_assoc()){
							 	?>
							 	<span id="total3"><?php  echo $totallll; ?></span><br><br>
							 	<span><mark class="bg-warning" style="padding: 5px; border-radius: 5px;">New</mark> &nbsp; applicant apply for job on <?php echo date("d-M-y", strtotime($rows['apply_date'])) ?> <span style="float: right; color: #F0AD4E; border-radius: 5px;"><b><?php echo $tot; ?></b></span></span><br><br>
					  			<center><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal4">View</button></center>
					  		 <?php
					  		}
					  		?>
						</div><br><br>
					</div>

						<!---applicant modal
						///////////////////
						///////////////
						///////////////--->

					<!-- Modal -->
					<div id="myModal4" class="modal fade" role="dialog">
					 	<div class="modal-dialog">
					    	<div class="modal-content">
					      		<div class="modal-header">
					       			<button type="button" class="close" data-dismiss="modal">&times;</button>
					        		<h4 class="modal-title">New Applicant</h4>
					      		</div>
					      		<div class="modal-body">
						        <?php
									$sel2 = "SELECT * FROM application ORDER BY user_id DESC LIMIT 0,1";
									$res2 = $conn->query($sel2);
									while($rows = $res2->fetch_assoc()){
									 ?>
									 <p>A new user apply for a job. <br><br><mark  style="padding: 5px; border-radius: 5px;"><?php echo $rows['firstname']." ".$rows['lastname']; ?></mark></p>
									 <?php
									}
									?>
					      		</div>
					      		<div class="modal-footer">
					        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      		</div>
					    	</div>
					  	</div>
					</div>
					<!---//////applicant modal
						///////////////////
						///////////////
						///////////////--->
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
				$("#dash-area").animate({width: '260px'});
			});

			$("#me2").click(function(){
				$("#dash-area").hide(200);
			});

			$("#alert").fadeIn(100, function(){
				$(this).delay(4000).fadeOut('fast');
			});
			$("#session").click(function(){
				$("#form2").show();
			});
			$("#close").click(function(){
				$("#form2").hide();
			});
		});
	</script>
</body>
</html>
