<?php
   include("config.php");
   session_start();

    
    $id_charg=$_GET['id_charg'];
    $telephone=$_GET['telephone'];
    

    
    echo $insertSQL="DELETE FROM `chargement` WHERE id_charg='$id_charg'";
    

    $result = mysqli_query($db,$insertSQL);
   

 
    
    if($_SESSION['type']=="admin"){ 
        if(isset($_SERVER['HTTP_REFERER'])) {
            $previousPage = $_SERVER['HTTP_REFERER'];
            header("location:". $previousPage);
        } else {
            header("location: index-admin.php");

        }
    
    }
    else{header('location: historique_client.php?telephone='.$telephone);}
?>