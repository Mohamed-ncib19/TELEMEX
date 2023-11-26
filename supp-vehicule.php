<?php
   include("config.php");
   session_start();

   $id_abonnement=$_GET['id_abonnement'];

    $id_chargement=$_GET['id_chargement'];
       
    echo $insertSQL="DELETE FROM `status_gps` WHERE Id_abonnement='$id_abonnement' and id_chargement='$id_chargement' ";
    

    $result = mysqli_query($db,$insertSQL);

     $insertSQL1="DELETE FROM `disponibilite` WHERE Id_abonnement='$id_abonnement' and id_chargement='$id_chargement'";
    
    $result1 = mysqli_query($db,$insertSQL1);

    $insertSQL2="DELETE FROM `chargement_vehicules` WHERE id_abonnement='$id_abonnement' and id_chargement='$id_chargement'";
    
    $result2 = mysqli_query($db,$insertSQL2);

    if($_SESSION['type']=="admin"){ header("location: index-admin.php"); }
    else{header('location: historique_client.php?telephone='.$telephone);}
?>