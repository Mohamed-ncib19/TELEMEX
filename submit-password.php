<?php
   include("config.php");
   session_start();
   extract($_POST,EXTR_OVERWRITE);

   $id = $_POST['email'];
   $newPassword = $_POST['password'];
   
   // Construct the SQL UPDATE statement
   $updateSQL = "UPDATE `transporteur` SET `password` = '$newPassword' WHERE `email` = '$id'";
   
   // Execute the UPDATE query
   $result = mysqli_query($db, $updateSQL);
   
   if ($result) {
       // Password updated successfully
       echo "success";
   } else {
       // Error occurred while updating the password
       echo "error";
   }
   
  
?>