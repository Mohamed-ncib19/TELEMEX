<?php
include('./config.php');
session_start();

$phone = $_SESSION['telephone'];
$getUser = "SELECT * FROM `transporteur` WHERE (`telephone`='$phone');";
$result = $db->query($getUser);
$row = $result -> fetch_array(MYSQLI_NUM);
echo $row[7];



?>