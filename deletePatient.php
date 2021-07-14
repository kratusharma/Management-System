<!-- Made By Atharva -->

<?php
	$con = mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die ("Error Occures");
	error_reporting(0);
	$pid = $_POST["pid"];
		
	if($_POST["delete"]) {
		$sql = "DELETE FROM patient WHERE patient_ID='$pid'";
			
		if(mysqli_query($con, $sql)) {
			echo "Deletion Success";
		}
		else {
			echo "Somethig went wrong";
		}
	}
	else {
		echo "Insert ID to deletion";
	}
?>
<html>
	<head>
		<title>Delete Patient Details</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>
	
	<body>
		<div class="container">
			<header><h1>Delete Patient</h1></header>
			<section>				
				<div id="container_demo" >
					<div id="wrapper">
						<div id="login" class="animate form">
							<form action="deletePatient.php" method="POST">
								<h1>Delete Patient Details</h1>
								<p> 
                                    <label data-icon="u">Patient ID :</label>
                                    <input id="pid" name="pid" required="required" type="text" placeholder="Insert patient ID" />
                                </p>
								<p class="signin button"> 
									<input type="submit"  name="delete" value="Delete"/> 
								</p>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>	
	</body>
</html>
