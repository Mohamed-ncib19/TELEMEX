<?php
   include("config.php");
   session_start();

    
    $id_charg=$_POST['id_charg'];
    

    
    echo $insertSQL="DELETE FROM `chargement` WHERE id_charg='$id_charg'";
    

    echo $result = mysqli_query($db,$insertSQL);
   

?>