<!-- Made By Atharva -->

<?php

	$con = mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die("Error Occures");
	
	error_reporting(0);
	
	$eid = $_POST["eid"];
	
	if($_POST["submit"]) {
		
		$sql = "INSERT INTO admin VALUES('$eid','$eid')";
		if(mysqli_query($con, $sql)) {
			echo "Success";
		}
		else {
			echo "Error Occures";
		}
	}
	else {
		echo "Insert valid Employee ID";
	}
?>

<html>

	<head>
		<title>Make Admin</title>
	</head>
	
	<body>
	
		<h1 style="text-align:center">Make Admin</h1>
		
		<form>
			Employee ID:<input type="id" name="eid" required>
			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>
