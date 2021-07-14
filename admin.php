<!-- Made By Ankita -->

<?php
	/*Connect the data base*/
	$con = mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die ("Error Occures");
	
	// error_reporting(0);
	$username = $_POST["user"];
	$password = $_POST["pass"];
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $password);
	
	$aID="";
	$pss="";
	/*Assign username and password if there is*/
	$tmp = "SELECT * FROM admin WHERE eID='$username'";
	$getData = mysqli_query($con, $tmp);
	if($getData){
	while($assData=mysqli_fetch_assoc($getData)) {
		$aID = $assData["eID"];
		$pss = $assData["password"];
	}
	}
	if($username!=$aID || $password!=$pss) {
		header("Location: adminLogin.php");
	}
	else{
?>		
		<html>

			<head>
				<title>Admin Administration</title>
				<link rel="stylesheet" type="text/css" href="template.css" />
				<?php
					include("button.php");
				?>
			</head>
			
			<body>
				<div class="template">
					<header>
						<h1 style="text-align:center;font-size:45px;color:white">Admin Administration</h1>
					</header>
					
					<login>
						<a href="wardDetails.php"><button class="button button6">Ward Details</button></a>
						<a href="admit.php"><button class="button button1">Admitting Details</button></a>
						<a href="makeAdmin.php"><button class="button button3">Make Admin</button></a>
						
					</login>
					
					<article>
						<login>
						<a href="insertPatient.php"><button class="button">Insert New Patient</button></a>
						<a href="insertDoctor.php"><button class="button button3">Insert Doctor/Consultant</button></a>
						</login>
						<login>
						<a href="updatePatient.php"><button class="button button2">Update Patient Details</button></a>
						<a href="updateDoctor.php"><button class="button button5">Update Doctor/Consultant Details</button></a>
						
						
						</login>
						
						<login>
						<a href="deletePatient.php"><button class="button">Delete Patient</button></a>
						<a href="deleteDoctor.php"><button class="button button3">Delete Doctor/Consultant</button></a>
						
						</login>
						
						<login>
						<a href="viewPatient.php"><button class="button button2">View Patient Details</button></a>
						<a href="viewDoctor.php"><button class="button button5">View Doctor/Consultant Details</button></a>
						</login>
				
					</article>
						
					
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
?>