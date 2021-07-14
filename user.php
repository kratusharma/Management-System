<!-- Made By Kratu -->

<?php
	/*creating a connection with the database*/
	$con = mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die("Error Occures");
	

	$username = $_POST["user"];
	$password = $_POST["pass"];
	
	$pID="";
	$pss="";
	/*Assign username and password from the given table if there is*/
	$tmp = "SELECT * FROM plog WHERE patient_ID='$username'";
	$getData = mysqli_query($con, $tmp);
	if($getData){
		while($assData=mysqli_fetch_assoc($getData)) {
			$pID = $assData["patient_ID"];
			$pss = $assData["password"];
		}
	}
	
	$sql_1 = "SELECT patient_ID,patient_name,phone_number,DOB,gender,ward_ID FROM patient WHERE patient_ID='$username'";
	$sql_2 = "SELECT tID,tname,results,s_date,e_date FROM treatment WHERE patient_ID='$username'";
	
	$records_1 = mysqli_query($con, $sql_1);
	$records_2 = mysqli_query($con, $sql_2);
	
	if($username==$pID && $password==$pss) {
?>	
		<html>
			<head>
				<title>User LoggedIn Interface</title>
				<link rel="stylesheet" type="text/css" href="template.css" />
				<!-- centering the image -->
				<style type="text/css">
					.center {
						display: block;
						margin-left: auto;
						margin-right: auto;
						width: 50%;
					}
				</style>
			</head>
			
			<body>
				<div class="template">
					<header>
						<h1 style="text-align:center;font-sizse:45px">User LogIn Interface</h1>
					</header>
					
					<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
						
						<tr>
						
							<th>Patient ID</th>
							<th>Patient Name</th>
							<th>Phone Numebr</th>
							<th>DOB</th>
							<th>Gender</th>
							<th>Ward ID</th>
						</tr>	
					<?php
						if($records_1){
						while($row = mysqli_fetch_assoc($records_1)){
							echo "<tr>";
							echo "<td>".$row['patient_ID']."</td>";
							echo "<td>".$row['patient_name']."</td>";
							echo "<td>".$row['phone_number']."</td>";
							echo "<td>".$row['DOB']."</td>";
							echo "<td>".$row['gender']."</td>";
							echo "<td>".$row['ward_ID']."</td>";
							echo "</tr>";
						}
						echo "<table>";
						}
						
					?>
					
					<header>
						<h2 style="font-size:20px;text-align:center">Patient Treatment and Test Details</h2>
					</header>
					<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
							
							<tr>
							
								<th>Treatment ID</th>
								<th>Treatment Name</th>
								<th>Result</th>
								<th>Star Date</th>
								<th>End Date</th>
							</tr>	
						<?php
							if($records_2){
							while($row = mysqli_fetch_assoc($records_2)){
								echo "<tr>";
								echo "<td>".$row['tID']."</td>";
								echo "<td>".$row['tname']."</td>";
								echo "<td>".$row['results']."</td>";
								echo "<td>".$row['s_date']."</td>";
								echo "<td>".$row['e_date']."</td>";
								echo "</tr>";
							}
							echo "<table>";
							mysqli_close($con);
							}
							
						?>

						<br><h3 style="text-align: center;">XRAY</h3>
						<!-- retrieving image from local folder, if available . Else display default error image-->
						<img src="Patient_Reports/<?php echo $pID; ?>.jpg" onerror="this.onerror=null; this.src='Patient_Reports/default.jpg'" alt="ERROR 404" width="300" height="400" class="center">

					<footer>
						<div>
							<a href="mainPage.php"><button>Log Out</button></a>
						</div>
							KRATU SHARMA - 18BCE0642 <br>
							ANKITA MAITI - 18BCE2078 <br>
							BHARAT RAJORA - 18BCE2082 <br>
							ATHARVA MANGESHKUMAR AGARWAL - 18BCE2029
					</footer>
				</div>
			</body>
		</html>
<?php
	}
	else {
		echo "ERROR, wrong username or password";
	}
?>
