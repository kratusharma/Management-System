<!-- Made By Ankita -->

<?php

	/*This is the main page*/
?>
<html>
	<head>
		<title>Hospital Management System</title>
		<style>
			div.template {
			width: 100%;
			border: 1px solid gray;
		}

		header, footer {
			padding: 1em;
			color: black;
			background-color: rgb(40, 137, 154);
			clear: left;
			text-align: center;
		}

		login {
			float: left;
			max-width: 160px;
			margin: 1;
			padding: 1em;
		}

		login ul {
			list-style-type: none;
			padding: 0;
		}
		   
		login ul a {
			text-decoration: none;
		}

		article {
			margin-left: 170px;
			border-left: 1px solid gray;
			padding: 1em;
			overflow: hidden;
		}
		</style>
	</head>
	
	<body >
	
		<div class="template">
		
			<header>
				<h1 style="text-align:center;color:white;font-size:45px">Hospital Management System</h1>
			</header>
			
			<login>
			  <ul>
				<li><a href="userLogin.php"><button ><img src="Images\user.png" width="137" height="110"><h4 style="txt-align:center;">User Log In</h4></button></a></li>
				<li><a href="employeeLogin.php"><button ><img src="Images\doctor.png" width="100" height="90"><h5 style="txt-align:center;">Doctor/Consultant Log In</h5></button></a></li>
				<li><a href="adminLogin.php"><button ><img src="Images\admin.png" width="137" height="110"><h4 style="txt-align:center;">Admin Log In</h4></button></a></li>
			  </ul>
			</login>
			
			<article>
				<a href="wardDetails.php"><button ><img src="Images\ward.png" width="450" height="450"><h4 style="txt-align:center;">Ward Details</h4></button></a>
				<a href="doctorDetails.php"><button ><img src="Images\logo.png" width="450" height="450"><h4 style="txt-align:center;">Doctor/Consultant Details</h4></button></a>
			</article>
			
			<footer>
				KRATU SHARMA - 18BCE0642 <br>
				ANKITA MAITI - 18BCE2078 <br>
				BHARAT RAJORA - 18BCE2082 <br>
				ATHARVA MANGESHKUMAR AGARWAL - 18BCE2029
			</footer>
			
			
			
			
			

	</body>
	
</html>
