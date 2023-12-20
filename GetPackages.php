<?php
require('./config.php');
session_start();
$status = $_POST['Status'];
$phone = $_SESSION['telephone'];

$sql = "SELECT * from `chargement`,`notifications` where(notifications.telephone = '$phone' AND notifications.id_chargement = chargement.id_charg AND statutenvoi='$status' );";
$result = mysqli_query($db,$sql);

if (!$result) {
    die('Error in SQL query: ' . mysqli_error($db));
}

// Fetch data and convert it to an associative array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);


?>