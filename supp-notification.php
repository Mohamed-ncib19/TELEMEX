<?php
   include("config.php");
   session_start();

    
    $id_notification=$_GET['id_notification'];
    $redirect=$_GET['redirect'];
    

    
    echo $insertSQL="DELETE FROM `notifications` WHERE id='$id_notification'";
    

    $result = mysqli_query($db,$insertSQL);
   header('location: '.$redirect);
?>