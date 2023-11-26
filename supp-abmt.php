<?php
   include("config.php");
   session_start();

if($_SESSION['type']=="admin"){
    
    $id_abn=$_GET['id_abn'];
    


    echo $insertSQL="UPDATE `abonnements` SET `valide`=0 WHERE id_abonnement=$id_abn";

    $result = mysqli_query($db,$insertSQL);
    
    
    header("location: index-admin.php");
}

?>