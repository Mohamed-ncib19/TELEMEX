<?php
   include("config.php");
   session_start();

if($_SESSION['type']=="admin"){
    
    $telephone=$_GET['telephone'];

    echo $insertSQL="UPDATE `transporteur` SET `verif`=1 WHERE `telephone`='$telephone'";

   echo $result = mysqli_query($db,$insertSQL);
    
    
    header("location: index-admin.php");
}

?>