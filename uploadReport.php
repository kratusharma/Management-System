<?php
	
	/*Create the connection with the data base*/
	$con = mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die ("Error Occures");
	
	error_reporting(0);
	
	/*Getting Patient ID and Moving the uploaded report to the Records folder in the local Server*/
	$patientid = $_POST["pid"];
	
	$allowedExts = array("gif","png", "jpeg", "jpg");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);
	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 20000000)
	&& in_array($extension, $allowedExts))
  	{
	$_FILES["file"]["name"]=$patientid;
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  	else
    {
    	if (file_exists("Patient_Reports/" . $_FILES["file"]["name"]))
      	{
      		echo $_FILES["file"]["name"] . " already exists. ";
      	}
    	else
     	{
			$newfilename = $patientid . '.' . $extension;
      		move_uploaded_file($_FILES["file"]["tmp_name"],"Patient_Reports/" . $newfilename);
      		echo "Patient Treatment Report Uploaded Successfully";
	  		echo "<br><br>";
      	}
    }
	}
	else
	{
		
		echo "<br><br>";
	}	
?>
<html>
    <head>
		<title>Upload Patient Report</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>

	<body>
		<div class="container">
			<header><h1>Insert Patient Report</h1></header>
			<section>				
				<div id="container_demo" >
					<div id="wrapper">
						<div id="login" class="animate form">
		
							<form action="uploadReport.php" method="POST" enctype="multipart/form-data">
								<h1>Insert Patient Treatment Report</h1>
								
								<p> 
                                    <label data-icon="u">Patient ID :</label>
                                    <input id="pid" name="pid" required="required" type="text" placeholder="Insert Patient ID" /><br>
                                </p>
								<p> 
                                    <label data-icon="u">Treatment Report :</label>
                                    <input name="file" id="file" required="required" type="File"/><br>
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
