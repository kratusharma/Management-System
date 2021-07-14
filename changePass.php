<!-- Made By Atharva -->

<?php

	$con = mysqli_connect("localhost","root","") or die ("Error Occures");
	mysqli_select_db($con, "hospital_management_system") or die("Error Occures");
	
	error_reporting(0);
	$id = $_POST["id"];
	$newpass = $_POST["newpass"];
	$compass = $_POST["compass"];
	
	if($newpass==$compass) {
		if($_POST["submit"]){
	
			$sql = "UPDATE employee SET password='$newpass' WHERE eID='$id'";
			
			if(mysqli_query($con, $sql)) {
				echo "Password Updated Successfully !";
			}
			else {
				echo "Fill form correctly to update password";
			}
		}
	}
	else {
		echo "Enter same password in both password columns";
	}
	
?>

<html>

	<head>
		<title>Change Password to Your Account</title>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
	</head>

	<body>
		<div class="container">
			<header><h1>Change Password</h1></header>
			<section>				
				<div id="container_demo" >
					<div id="wrapper">
						<div id="login" class="animate form">
							<h1>Change password to Your Account</h1>
		
							<form action="changePass.php" method="POST">
							
								<p> 
                                    <label data-icon="u">Enter Your Login ID :</label>
                                    <input id="id" name="eid" required="required" type="text" placeholder="Insert employee ID" />
                                </p>
								 <p> 
                                    <label data-icon="p">Enter Your New Password : </label>
                                    <input id="mewpass" name="newpass" required="required" type="password" placeholder="DID****"/>
                                </p>
								 <p> 
                                    <label data-icon="p">Please confirm your password </label>
                                    <input id="compass" name="compass" required="required" type="password" placeholder="DID****"/>
                                </p>
								<p class="signin button"> 
									<input type="submit"  name="submit" value="Update"/> 
								</p>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>
