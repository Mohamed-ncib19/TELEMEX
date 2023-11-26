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

   
/* 
   include("config.php");
   session_start();
 


    $nom = $_POST['nomER'];
    $prenom = $_POST['prenomER'];
    $phone = $_POST['phoneER'];
    $email = $_POST['emailER'];
    $ville = $_POST['villeER'];
    $Vehicule = $_POST['VehiculeER'];
    $message = $_POST['messageER'];

    $to = "mohamedncib900@gmail.com";

    $subject = "Test Email";

    $message = "This is a test email sent from PHP.";

   $headers = 'From:mohamedncib900@gmail.com'."\r\n" .
                'Reply-To: mohamedncib900@gmail.com'. "\r\n".
                 'X-Mailer: PHP/'. phpversion();   
                $mailSuccess = mail($to, $subject, $message, $headers);
    if ($mailSuccess) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
 



   extract($_POST,EXTR_OVERWRITE);
   
    $subject = "Souhaite rejoindre";

    // Set additional headers
    $headers = "From: commercial@telemex.cm" . "\r\n" .
               "Reply-To: mohamedncib900@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
  $paramsString = '';

    // Loop through the extracted variables and build the string
    foreach ($_POST as $paramName => $paramValue) {
        $paramsString .= $paramName . ' = ' . $paramValue . ', ';
    }
    
    // Remove the trailing comma and space
    $paramsString = rtrim($paramsString, ', ');
    $message=$paramsString ;
    // Send the email
    $result = mail( "mohamedncib900@gmail.com", $subject, $message, $headers); //nnfranck78@gmail

    if ($result) {
        $insertSQL = "INSERT INTO `inscriptions` (`name`, `phone`, `email`, `ville`, `vehicle`, `quantity`, `message`) VALUES 
        ('$name', '$phone', '$email', '$ville', '$vehicle', $quantity, '$message')";
      
        $result1 = mysqli_query($db, $insertSQL);
        var_dump( $message);

        header("location: inscription1.php?");

    } 

    header("location: inscription1.php?");
 
   */
  
?>