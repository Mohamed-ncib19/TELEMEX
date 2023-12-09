<?php
include("config.php");
session_start();
require './sendMail.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['nomER'];
    $firstName = $_POST['prenomER'];
    $phone = $_POST['phoneER'];
    $email = $_POST['emailER'];
    $city = $_POST['villeER'];
    $vehicle = $_POST['VehiculeER'];
    $quantity = $_POST['quantity'];
    $message = $_POST['messageER'];

    $fullName = $firstName . " " . $name;

    // Check if the user already exists
     $getUser = "SELECT * FROM `inscriptions` WHERE (`phone`='$phone');";
     $result = $db->query($getUser);

       if ($result->num_rows > 0) {
            // User already exists
            echo "user_applied_before";
            
        } else {
            // User does not exist, proceed with inserting
            if(sendMail($email, $message, $name)){
                $sql = "INSERT INTO `inscriptions`(`name`, `phone`,`email`,`ville`,`vehicle`,`quantity`,`message`) values
                ('$fullName','$phone','$email','$city','$vehicle','$quantity','$message');";

                $insertResult = $db->query($sql);
                echo "success";
            }

           
           
        } 
    

    
} else {
    echo "error_with_system";
    exit();
}
$db->close();

   

  
?>