<?php
   include("config.php");
   session_start();

if($_SESSION['type']=="admin"){
    
    $id_abn=$_GET['id_abn'];
    $pack=$_POST['pack'];
    
    $date_deb=date('d/m/Y');
    $date_fin=date('d/m/Y', strtotime($pack));
    


    echo $insertSQL="UPDATE `abonnements` SET `date_deb`='$date_deb',`date_fin`='$date_fin', `valide`=1 WHERE id_abonnement=$id_abn";

    $result = mysqli_query($db,$insertSQL);
    
    
    header("location: index-admin.php");
}

?>