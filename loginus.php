<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "olympics";

// Establish a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Construct and execute the SQL query
$sql = "SELECT * FROM registrationuser WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) >= 1) {
   
    echo "<script>window.alert('User account Login Successful.')</script>";
    echo "<script>window.location='index.php'</script>";
} else {
    echo "<script>window.alert('Invalid username or password.')</script>";
    
    
}

// Close the database connection
mysqli_close($conn);
?>