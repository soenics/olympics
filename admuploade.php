<?php
// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'olympics';

// Create a new PDO instance
try {
  $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error: " . $e->getMessage());
}

// Process the uploaded image
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $image = $_FILES['image']['name'];
  $title = $_POST['title'];
  $info =$_POST['info'];
  $imagelink =$_POST['imagelink'];

  // Validate and move the uploaded image to a directory
  $targetDirectory = 'uploads/'; // Specify your desired directory
  $targetFile = $targetDirectory . basename($image);
  
  // Check if the image file is a valid image
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
  
  if (!in_array($imageFileType, $allowedExtensions)) {
    die("Error: Only JPG, JPEG, PNG, and GIF files are allowed.");
  }
  
  if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
    die("Error: Failed to move the uploaded image.");
  }

  // Insert the image details into the database
  $sql = "INSERT INTO news (title, image,info,imagelink) VALUES (:title, :image, :info ,:imagelink)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':title', $title);
  $stmt->bindParam(':image', $image);
  $stmt->bindParam(':info', $info);
  $stmt->bindParam(':imagelink', $imagelink);
  
  if ($stmt->execute()) {
   
    echo "<script>window.alert('uploaded successfully.')</script>";
    echo "<script>window.location='adminview.php'</script>";
  } else {
    echo "Error: Unable to upload the image.";
  }
}
?>
