<!-- Made By Bharat -->

<?php

	$con = mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die ("Error Occures");
	error_reporting(0);
	$tid = $_POST["tid"];
	$tname = $_POST["tname"];
	$res = $_POST["res"]; 
	$sdate = $_POST["sdate"];
	$edate = $_POST["edate"];
	$pid = $_POST["pid"];
	
	if($_POST["submit"]) {
		$sql= "INSERT INTO treatment VALUES ('$tid','$tname','$res','$sdate','$edate','$pid')";
			
		if(mysqli_query($con, $sql)) {
			echo "Data Inserted Successfully";
			}
		else {
			echo "Oops ! Something went wrong.Try again";
		}
	}
	
?>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>
	
	<body>
		<div class="container">
			<header><h1>Treatment Details</h1></header>
			<section>
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
		
							<form action="insertTreatment.php" method="POST">
								<h1>Enter Treatment for Your Patient</h1>
								<p>
                                    <label data-icon="u" > Patient ID </label>
                                    <input name="pid" required="required" type="text" placeholder="Patient ID"/>
								</p>
								<p>
                                    <label data-icon="u" > Treatment ID </label>
                                    <input name="tid" required="required" type="text" placeholder="Treatment ID"/>
								</p>
								<p>
                                    <label data-icon="u" > Treatment Name </label>
                                    <input name="tname" required="required" type="text" placeholder="Name of the treatment"/>
								</p>
								<p>
                                    <label data-icon="u" > Results </label>
                                    <input name="res" required="required" type="text" placeholder="result of the test"/>
								</p>
								<p>
                                    <label data-icon="u" > Start Date </label>
                                    <input name="sdate" required="required" type="text" placeholder="start date"/>
								</p>
								<p>
                                    <label data-icon="u" > End Date </label>
                                    <input name="edate" required="required" type="text" placeholder="end date"/>
								</p>
								<p class="login button"> 
                                    <input type="submit" name="submit" value="Submit" />
								</p>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</body>

</html>
