<!-- Made By Atharva -->

<?php
	/*create a connection with the database*/
	$con=mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die ("Error Occures");
	
	$sql="SELECT eName,phone,gender,isDoc,isCon FROM employee,con_doc WHERE employee.eID=con_doc.eID";
	$records=mysqli_query($con, $sql);
?>

<html>

	<head>
		<title>View Doctor/Consultant Details</title>
		<link rel="stylesheet" type="text/css" href="template.css" />
				
	</head>

	<body>
		<div class="template">
			<header>
				<h1 style="text-align:center;font-size:45px">Doctor/Consultant Details</h1>
			</header>
			<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
						
				<tr>
					<th>Doctors Name</th>
					<th>Phone Number</th>
					<th>Gender</th>
					<th>Is a Doctor</th>
					<th>Is a Consultant</th>
							
				</tr>	
				<?php
					if($records){
					while($row = mysqli_fetch_assoc($records)){
						echo "<tr>";
						echo "<td>".$row['eName']."</td>";
						echo "<td>".$row['phone']."</td>";
						echo "<td>".$row['gender']."</td>";
						echo "<td>".$row['isDoc']."</td>";
						echo "<td>".$row['isCon']."</td>";
						echo "</tr>";
					}				
					echo "<table>";
					mysqli_close($con);
					}
				?>
			<footer>
				<div>
					<a href="mainPage.php"><button>Back to Main Page</button></a>
				</div>
					KRATU SHARMA - 18BCE0642 <br>
					ANKITA MAITI - 18BCE2078 <br>
					BHARAT RAJORA - 18BCE2082 <br>
					ATHARVA MANGESHKUMAR AGARWAL - 18BCE2029
			</footer>
		</div>
	</body>

</html>
