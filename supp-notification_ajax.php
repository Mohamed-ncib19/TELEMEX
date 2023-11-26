<?php
   include("config.php");
   session_start();

    
    $id_notification=$_GET['id_notification'];
   

    
    echo $insertSQL="DELETE FROM `notifications` WHERE id='$id_notification'";
    

   echo $result = mysqli_query($db,$insertSQL);
  
?>