<?php
// Retrieve the date of birth from the form submission


$firstname = $_POST["firstname"];
  $lastname =$_POST["lastname"];
  $email = $_POST["email"];
  $password=$_POST["password"];
  $phoneno=$_POST["phoneno"];
  $country =$_POST["country"];
  $city=$_POST["city"];
  $favsport=$_POST["favsport"];
  $dob = $_POST['dob'];
  $gender=$_POST["gender"];

// Create a connection to the MySQL database
$servername = "localhost";
$username = "root";
$passwords = "";
$dbname = "olympics";

$conn = new mysqli($servername, $username, $passwords, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$sql = "INSERT INTO registrationuser (firstname,lastname,email,password,phoneno,country,city,favsport,dob,gender) VALUES ('$firstname','$lastname','$email','$password','$phoneno','$country','$city','$favsport','$dob','$gender')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Duplicate Email and Password')</script>";
    echo"<script>window.location='userlogin.php'</script>";
} else {
    echo "Error inserting date of birth: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
