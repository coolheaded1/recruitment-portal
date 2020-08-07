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

if(isset($_GET['id'])){
	if (isset($_POST)) {
		$sql = "DELETE FROM contact WHERE msg_id = '$_GET[id]' ";
		$result = $conn->query($sql);
		if($result == true){
			$delete = "Delete Successfully";
		}
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
	<div style="width: 30%; position: absolute; right: 7px">
		<?php
			if(isset($delete)){
				echo "<b><span class='invalid-feedback alert alert-success btn-block fa fa-info-circle' style=''>&nbsp;&nbsp;<span style='font-family: segoe ui;'>".$delete."</span></span></b>";
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

				<abbr title="View Messages from user"><a href="view_report.php"><span id="dash" style="background: orange" data-aos="slide-right" data-aos-duration="350"><span class="fa fa-envelope"></span>&nbsp;&nbsp;Report
					<?php
					$sel = "SELECT * FROM contact";
					$res = $conn->query($sel);
				 	$total = $res->num_rows;
				 	?>
				 	<span id="total"><?php echo $total; ?></span>
				 	<?php
				 	?>
				 </span></a></abbr><br /><br /><br />

				<abbr title="View Applicants"><a href="applicants.php"><span id="dash"><span class="fa fa-user"></span>&nbsp;&nbsp;Applicants</span></a></abbr><br /><br /><br />

				<abbr title="View Vacancies"><a href="view_vacancies.php"><span id="dash"><span class="fa fa-unlock-alt"></span>&nbsp;&nbsp;Vacancies</span></a></abbr><br /><br /><br />

				<abbr title="View CBT Result"><a href="cbt_result.php"><span id="dash"><span class="fa fa-recycle"></span>&nbsp;&nbsp;CBT Result</span></a></abbr><br /><br /><br />

				<abbr title="update About Page"><a href="update_about.php"><span id="dash"><span class="fa fa-random"></span>&nbsp;&nbsp;update about</span></a></abbr><br /><br /><br />

				<abbr title="Change Password"><a href="change_password.php"><span id="dash"><span class="fa fa-lock"></span>&nbsp;&nbsp;password</span></a></abbr><br /><br /><br />

				<abbr title="Log Out"><a href="logout.php"><span id="dash"><span class="fa fa-power-off"></span>&nbsp;&nbsp;log out</span></a></abbr><br /><br /><br /><br />
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12" id="dash-area2"><br>
				<p>Dashboard / <a style="cursor: pointer;">View Report</a></p><br>
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-condensed" style="cursor: default;">
						<tr style="background: #D55808; color: #fff; height: 50px">
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
						<?php
						$sel = "SELECT * FROM contact ORDER BY msg_id DESC;";
						$res = $conn->query($sel);
						while($row = $res->fetch_assoc()){
						echo "<tr>";
							echo "<td class='active success'>".$row['Name']."</td>";
							echo "<td>"."<a href='www.$row[Email]' target = _blank>".$row['Email']."</a></td>";
							echo "<td class='active success'>".$row['Message']."</td>";
							echo "<td>".date ("d-M-y", strtotime($row['dt']))."</td>";
							echo "<td><a style='color: #fff; text-decoration: none' href='view_report.php?id=$row[msg_id];' title='Delete'><p style='border-radius: 5px; padding: 5px; text-align: center; background: #D55808;'>Delete</p></a></td>";
						echo "</tr>";
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
			$('.invalid-feedback').fadeOut(4000);
		});
	</script>
</body>
</html>
