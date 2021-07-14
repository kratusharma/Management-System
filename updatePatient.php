<?php
	$con = mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die ("Error Occures");
	
	error_reporting(0);
	$pid = $_POST["pid"];
	$column = $_POST["column"];
	$data = $_POST["data"];
	if($_POST["update"]) {
		$sql = "UPDATE patient SET $column='$data' WHERE patient_ID='$pid'";
			
		if(mysqli_query($con, $sql)) {
			echo "Update Successfully";
		}
		else {
			echo "Something went wrong";
		}
	}
	else {
	}
		
	?>
<html>
	<head>
		<title>Update Patient Details</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>

	<body>
		<div class="container">
			<header><h1>Update Patient</h1></header>
			<section>				
				<div id="container_demo" >
					<div id="wrapper">
						<div id="login" class="animate form">
							<form action="updatePatient.php" method="POST">
								<h1>Update Patient Details</h1>
								<h1>Update Doctor/Consultant Details</h1>
								<p> 
                                    <label data-icon="u">Patient ID :</label>
                                    <input name="pid" required="required" type="text" placeholder="Insert patient ID" />
                                </p>
								<p> 
                                    <label data-icon="u">What detail to be updated :</label>
                                    <input name="column" required="required" type="text" placeholder="Insert colunm name to update" />
                                </p>
								<p> 
                                    <label data-icon="u">New Data :</label>
                                    <input name="data" required="required" type="text" placeholder="Insert new data" />
                                </p>
								<p class="signin button"> 
									<input type="submit"  name="update" value="Update"/> 
								</p>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>
