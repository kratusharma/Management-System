<?php

	$con = mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die ("Error Occures");
	
	$sql = "SELECT * FROM admit";
	$records = mysqli_query($con, $sql);
?>

<html>

	<head>
		<title>Admitting Details</title>
	</head>
	
	<body>
	
		<h1 style="text-align:center">Patient Admitting Details</h1>
		
		<div>
				
			<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
							
				<tr>
					<th>Patient ID</th>
					<th>Doctor ID</th>
					<th>Ward ID</th>
					<th>Admitted Date</th>
				</tr>	
				<?php
					if($records){		
					while($row = mysqli_fetch_assoc($records)){
						echo "<tr>";
						echo "<td>".$row['pID']."</td>";
						echo "<td>".$row['eID']."</td>";
						echo "<td>".$row['ward_ID']."</td>";
						echo "<td>".$row['date']."</td>";
						echo "</tr>";
					}
					echo "<table>";
					mysqli_close($con);
					}
				?>
		</div>
	</body>
</html>
