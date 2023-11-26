<?php
// Retrieve the form values
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$ville = $_POST['ville'];
$vehicle = $_POST['vehicle'];
$quantity = $_POST['quantity'];
$anotherQuantity = $_POST['anotherQuantity'];
$message = $_POST['message'];

// Perform the necessary database operations to save the data
// Replace the placeholders with your actual database connection and table details

$servername = "localhost";
$username = "your-username";
$password = "your-password";
$dbname = "your-database-name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  echo "error";
  exit();
}

// Prepare and execute the SQL query to insert the data into the table
$stmt = $conn->prepare("INSERT INTO your_table_name (name, phone, email, ville, vehicle, quantity, another_quantity, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $phone, $email, $ville, $vehicle, $quantity, $anotherQuantity, $message);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  echo "success";
} else {
  echo "error";
}

$stmt->close();
$conn->close();
?>
