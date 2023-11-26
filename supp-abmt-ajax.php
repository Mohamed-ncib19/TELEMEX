<?php
   include("config.php");
   session_start();

    
    $id_abn=$_POST['id_abn'];
    


    echo $insertSQL="delete from `abonnements` WHERE id_abonnement=$id_abn";

   echo $result = mysqli_query($db,$insertSQL);
    

?>