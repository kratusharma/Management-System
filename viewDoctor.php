<!-- Made By Kratu -->

<?php
	/*create a coonection with the database*/
	$con = mysqli_connect("localhost","root","") or die("Error Occures") ;
	mysqli_select_db($con, "hospital_management_system") or die("Error Occures");
	$sql = "SELECT * FROM employee";
	$records = mysqli_query($con, $sql);
?>

<html>

	<head>
		<title>View Details of a Doctor</title>
	</head>
	
	<body>
	
		<h1 style="font-size:45px;text-align:center">View Doctor/Consultant Details</h1>
		<table width="600" cellpadding="1" border="1" cellspacing="1" align="center">
		
			<tr>
			
				<th>Employee ID</th>
				<th>Employee Name</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Salary</th>
			</tr>
			
			<?php
				if($records){
				while($row = mysqli_fetch_assoc($records)){
				echo "<tr>";
				echo "<td>".$row['eID']."</td>";
				echo "<td>".$row['eName']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['DOB']."</td>";
				echo "<td>".$row['salary']."</td>";
				echo "</tr>";
			}
			echo "<table>";
			mysqli_close($con);
			}
			?>
		
		
		</table>
		
	</body>
</html>
