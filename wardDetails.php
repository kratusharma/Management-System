<!-- Made By Kratu -->

<?php
	/*create a connection with the database*/
	$con = mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die("Error Occures");
	error_reporting(0);
	
	$sql = "SELECT * FROM ward";
	$records = mysqli_query($con, $sql);
?>

<html>

	<head>
		<title>Ward Details</title>
		<link rel="stylesheet" type="text/css" href="template.css" />
				
	</head>

	<body>
		<div class="template">
			<header>
				<h1 style="text-align:center; font-size:45px;color:white">Ward Details</h1>
			</header>
			<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
			
				<tr>
					<th>Ward Name</th>
					<th>Ward ID</th>
				
				</tr>
				
				<?php
					if($records){
					while($row = mysqli_fetch_assoc($records)) {
						echo "<tr>";
						echo "<td>".$row['ward_name']."</td>";
						echo "<td>".$row['ward_ID']."</td>";
						echo "</tr>";
					}
					echo "<table>";
					mysqli_close($con);
					}
				?>
			
			</table>
			
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
