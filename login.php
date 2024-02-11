<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$email = $_POST['email'];
$password = $_POST['password'];

// Database connection
$conn = new mysqli("localhost", "root", "", "data");

if ($conn->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
else{

// Check if login details exist in the registration table
$stmt = $conn->prepare("SELECT * FROM registration WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt_result = $stmt->get_result();

if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();

    if ($data['password'] == $password) {
	 header("Location: home1.php");
       //echo "<h2>Login successfully</h2>";
        // Redirect to home.html after successful login
     	  
        
    } 

	else {
	//echo	"<h2>Invalid email or password";
         echo "<script>alert('Invalid email or password'); window.location.href = 'login1.html'</script>";
    }
}
else {
		//echo "<h2>Invalid email or password";
   echo "<script>alert('Invalid email or password'); window.location.href = 'login1.html';</script>";
}
}


?>

