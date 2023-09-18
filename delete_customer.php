<?php
// Retrieve the customer ID from the URL
$id = $_GET['id'];

// Delete the customer data from the database based on the ID
// Here, you need to write your PHP code to connect to the database and delete the customer data using the provided $id

// Redirect back to the admin view after deleting
header("Location: adminview.php");
exit;
?>
