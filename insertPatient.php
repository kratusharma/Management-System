<!-- Made By Bharat -->

<?php
	/*create a connection with the database*/
	$con = mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die ("Error Occures");
	
	error_reporting(0);
	
	$pid = $_POST["pid"];
	$pname = $_POST["pname"];
	$num = $_POST["tp"]; 
	$dob = $_POST["dob"];
	$gen = $_POST["gender"];
	$wid = $_POST["wid"];
	$eid = $_POST["eid"];
	$date = $_POST["date"];
		
	if($_POST["submit"]) {
		$sql_1 = "INSERT INTO patient VALUES ('$pid','$pname','$num','$dob','$gen','$wid','$eid')";
		$sql_2 = "INSERT INTO admit VALUES ('$pid','$eid','$wid','$date')";
		$sql_3 = "INSERT INTO plog VALUES ('$pid','$pid')";
	
		if(mysqli_query($con, $sql_1)) {
			if(mysqli_query($con, $sql_2)) {
				if(mysqli_query($con, $sql_3)) {
						echo "Data Inserted Successfully";
				}
			}
			else {
				echo "Something wrong with admitting section";
			}
		}
		else {
			echo "Oops ! Something went wrong.Try again";
		}
	}
	else {
		echo "Insert the data";
	}
?>
<html>	
	<head>
		<title>Insert New Patient to the Database</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>

	<body>
		<div class="container">
			<header><h1>Insert Patient</h1></header>
			<section>				
				<div id="container_demo" >
					<div id="wrapper">
						<div id="login" class="animate form">
	
							<form action="insertPatient.php" method="POST">
								<h1>Insert Patient Details</h1>
								<p> 
                                    <label data-icon="u">Patient ID :</label>
                                    <input id="pid" name="pid" required="required" type="text" placeholder="Insert patient ID" />
                                </p>
								<p> 
                                    <label data-icon="u">Patient Name :</label>
                                    <input name="pname" required="required" type="text" placeholder="Insert patient name" />
                                </p>
								<p> 
                                    <label data-icon="u">Phone Number :</label>
                                    <input name="tp" required="required" type="number" placeholder="Insert patient phone number" />
                                </p>
								<p> 
                                    <label data-icon="u">Date of Birth :</label>
                                    <input name="dob" required="required" type="text" placeholder="Insert patient birth day" />
                                </p>
								<p> 
                                    <label data-icon="u">Gender :</label>
                                    <input name="gender" required="required" type="text" placeholder="Insert patient gender < M or F >" />
                                </p>
								<p> 
                                    <label data-icon="u">Ward ID :</label>
                                    <input name="wid" required="required" type="text" placeholder="Insert patient ward ID" />
                                </p>
								<p> 
                                    <label data-icon="u">Admitting Date :</label>
                                    <input name="date" required="required" type="text" placeholder="Insert admitting date" />
                                </p>
								<p> 
                                    <label data-icon="u">Consultant/Doctor ID :</label>
                                    <input name="eid" required="required" type="text" placeholder="Insert doctor/consultant ID" />
                                </p>
								<p class="signin button"> 
									<input type="submit"  name="submit" value="Submit"/> 
								</p>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>
