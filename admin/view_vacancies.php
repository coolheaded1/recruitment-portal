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

if(isset($_GET['id'])){
	if(isset($_POST)){
		$sql ="DELETE FROM vacancy WHERE Job_id = '$_GET[id]' ";
		$result = $conn->query($sql);
		if($result == true){
			$delete = "Deleted Successfully";
		}
	}
}

//edit vacancies


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
	<div style="width: 30%; position: absolute; right: 7px">
		<?php
			if(isset($delete)){
				echo "<b><span class='invalid-feedback alert alert-success btn-block fa fa-info-circle'>&nbsp;&nbsp;<span style='font-family: segoe ui;'>".$delete."</span></span></b>";
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

				<abbr title="View Vacancies"><a href="view_vacancies.php"><span id="dash" style="background: orange" data-aos="slide-right" data-aos-duration="350"><span class="fa fa-unlock-alt"></span>&nbsp;&nbsp;Vacancies
				<?php
					$sel = "SELECT * FROM vacancy";
					$res = $conn->query($sel);
				 	$total = $res->num_rows;
				 	?>
				 	<span id="total"><?php echo $total; ?></span>
				 	<?php
				 	?>
				 </span></a></abbr><br /><br /><br />

				<abbr title="View CBT Result"><a href="cbt_result.php"><span id="dash"><span class="fa fa-recycle"></span>&nbsp;&nbsp;CBT Result</span></a></abbr><br / ><br /><br />

				<abbr title="Update About Page"><a href="update_about.php"><span id="dash"><span class="fa fa-random"></span>&nbsp;&nbsp;update about</span></a></abbr><br /><br /><br />

				<abbr title="Change Password"><a href="change_password.php"><span id="dash"><span class="fa fa-lock"></span>&nbsp;&nbsp;password</span></a></abbr><br /><br /><br />

				<abbr title="Log Out"><a href="logout.php"><span id="dash"><span class="fa fa-power-off"></span>&nbsp;&nbsp;log out </span></a></abbr><br /><br /><br /><br />
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12" id="dash-area2"><br>
				<p>Dashboard / <a style="cursor: pointer;">View Vacancies</a></p><br>
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-condensed">
						<tr style="background: #D55808; color: #fff; height: 50px">
							<th style="width: 150px">Job Name</th>
							<th>Description</th>
							<th>Qualification</th>
							<th>Experience</th>
							<th style="width: 150px">Posted Date</th>
							<th>Due Date</th>
							<th>Action</th>
						</tr>
						<?php
						$sel = "SELECT * FROM vacancy ORDER BY Job_id DESC";
						$res = $conn->query($sel);
						while($row = $res->fetch_assoc()){
							$id3= $row['Job_id'];
							$job_id = $row['Job_id'];
							$job_title = $row['Job_title'];
							$description = $row['Description'];
							$qualification = $row['Qualification'];
							$experience = $row['Experience'];
							$deadline = date("d/m/Y", strtotime($row['Deadline']));
							// beginning of modal button
							if(isset($_POST["modalSubmit$id3"])){
								$job_title = $_POST['modalName'];
								$description = $_POST['modalDescription'];
								$qualification = $_POST['modalQualification'];
								$experience = $_POST['modalExperience'];
								$deadline = $_POST['modalDeadline'];
								$update = "UPDATE vacancy SET Job_title = '$job_title', Description = '$description', Qualification = '$qualification', Experience = '$experience', Deadline = '$deadline' WHERE Job_id = $id3";
								$res = $conn->query($update);
								if($res == TRUE){
									echo "<script> window.location.assign('view_vacancies.php'); </script>";
								}
							}
							//end of modal button
								echo "<tr>";
									echo "<td class='active success'>".$row['Job_title'] . "</td>";
									echo "<td>".$row['Description'] . "</td>";
									echo "<td class='active success'>".$row['Qualification'] . "</td>";
									echo "<td>".$row['Experience'] . "</td>";
									echo "<td class='active success'>".date("d/m/Y", strtotime($row['created_dt']))."</td>";
									echo "<td>".$row['Deadline'] . "</td>";
									echo "<td>";
										echo "<a style='color: #fff; text-decoration: none;' href='#?id2=$row[Job_id]' title='Edit' data-toggle='modal' data-target='#myModal$job_id'><p style='border-radius: 5px; padding: 5px; text-align: center' class='bg-primary'>Edit</p></a>";
										echo "<a style='color: #fff; text-decoration: none' href='view_vacancies.php?id=$row[Job_id];' title='Delete'><p style='border-radius: 5px; padding: 5px; text-align: center; background: #D55808;'>Delete</p></a>";
									echo "</td>";
								echo "</tr>";

									//beginning of modal///////
								echo "<div id='myModal$job_id' class='modal fade' style='color: black;' role='dialog'>";
									  echo "<div class='modal-dialog'>";
									    echo "<div class='modal-content'>";
									     echo"<div class='modal-header'>";
									        echo"<button type='button' class='close' data-dismiss='modal'>&times;</button>";
									        echo"<h4 class='modal-title'>Edit Vacancies</h4>";
									      echo "</div>";
									      echo"<div class='modal-body'>";
									        echo "<form method='post'>";
													echo "<div class='form-group'>";
														echo "</label>Job_title</label>";
														echo "<input type='text' name='modalName' class='form-control' value='$job_title'>";
													echo "</div>";

													echo "<div class='form-group'>";
														echo "</label>Description</label>";
														echo "<textarea class='form-control' name='modalDescription' rows='5' style='resize: none;'>$description</textarea>";
													echo "</div>";

													echo "<div class='form-group'>";
														echo "</label>Qualification</label>";
														echo "<input type='text' name='modalQualification' class='form-control' value='$qualification'>";
													echo "</div>";

													echo "<div class='form-group'>";
														echo "</label>Experience</label>";
														echo "<input type='text' name='modalExperience' class='form-control' value='$experience'>";
													echo "</div>";

													echo "<div class='form-group'>";
														echo "</label>Deadline</label>";
														echo "<input type='text' name='modalDeadline' class='form-control' value='$deadline'>";
													echo "</div>";
													echo "<button name='modalSubmit$id3' class='btn btn-warning'> EDIT</button>";
												echo "</form>";
									      echo "</div>";
									      echo "<div class='modal-footer'>";
									        echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>";
									      echo "</div>";
									   echo "</div>";
									  echo "</div>";
								echo "</div>";
									/// end of modal////
						?>
						<?php

						}
						?>
					</table>
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
			});
			$("#me2").click(function(){
				$("#dash-area").hide(200);
			});

			$('.invalid-feedback').delay(4000).fadeOut(1000);
		});
	</script>
</body>
</html>
