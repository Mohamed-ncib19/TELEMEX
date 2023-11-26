<?php
   include("config.php");
   session_start();

   $id_postuler=$_GET['id_postuler'];

    $id_charg=$_GET['id_charg'];
    $telephone=$_GET['telephone'];
    

    
    echo $insertSQL="DELETE FROM `postuler` WHERE id='$id_postuler'";
    

    $result = mysqli_query($db,$insertSQL);
    echo $insertSQL1="DELETE FROM `notifications` WHERE id_postuler='$id_postuler'";
    

    $result1 = mysqli_query($db,$insertSQL1);

 
    
    if($_SESSION['type']=="admin"){ header("location: index-admin.php"); }
    else{header('location: historique_client.php?telephone='.$telephone);}
?>