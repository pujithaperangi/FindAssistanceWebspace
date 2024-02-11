

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('connect.php');

// Check if the connection was successful

// Initialize variables with default values
$fname = $lname = $workloc = $gmail = $phone = $jobdesc = $availability = $rateprice = $profilepic = '';

// Check if the form was submitted using POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Use the null coalescing operator to set default values if keys are not set in $_POST
    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $workloc = $_POST['workloc'] ?? '';
    $gmail = $_POST['gmail'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $jobdesc = $_POST['jobdesc'] ?? '';
    $availability = $_POST['avail'] ?? '';
    $rateprice = $_POST['rateprice'] ?? '';
    //$profilepic = $_POST['pic'] ?? '';
}

// Check jobdesc value and insert into the corresponding table
$tableName = '';
if ($jobdesc == 'Electrician') {
    $tableName = 'electrician';
} elseif ($jobdesc == 'Plumber') {
    $tableName = 'plumber';
} elseif ($jobdesc == 'Carpenter') {
    $tableName = 'carpenter';
}

if (!empty($tableName)) {
    // Fix the typo in the column name ('gamil' to 'gmail')
    $query = "INSERT INTO $tableName (fname, lname, workloc, gmail, phone, jobdesc, availability, ratepricing) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, 'ssssssss', $fname, $lname, $workloc, $gmail, $phone, $jobdesc, $availability, $rateprice);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
           // echo "Inserted successfully into $tableName table";
		header("Location: success.php");
        } else {
            echo "Error executing statement: " . mysqli_error($con);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($con);
    }
} else {
    echo "Invalid job description value";
}


?>



