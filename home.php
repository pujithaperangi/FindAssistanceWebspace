<?php
//session_start();
$email = $_POST['email'];
$password = $_POST['password'];
//echo $email;
//echo $password;

//database connection
$con = new mysqli("localhost","root","","data");
if($con->connect_error){
	die("failed to connect: " .$con->connect_error);
}
else{
	$stmt = $con->prepare("select * from registration where email=?");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['password'] == $password){
				//$_SESSION['status'] = "Login Successfully";
				header("Location: home1.php");
				
			}else
			{
				echo "<h2>Invalid email or password</h2>";
	
		}
	}
	else
	{
		echo "<h2>Invalid email or password</h2>";
	}
	
}

?>
