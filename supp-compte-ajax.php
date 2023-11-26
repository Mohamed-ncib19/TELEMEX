<?php
   include("config.php");
   session_start();

    $telephone=$_POST['telephone'];
    
	
	$deleteSQL0="DELETE `disponibilite` FROM `disponibilite` INNER JOIN `abonnements` ON `abonnements`.id_abonnement=`disponibilite`.id_abonnement WHERE `abonnements`.telephone=$telephone";
	$deleteSQL1="DELETE FROM `chargement` WHERE telephone='$telephone'";
    $deleteSQL2="DELETE FROM `abonnements` WHERE telephone='$telephone'";
    $deleteSQL3="DELETE FROM `transporteur` WHERE telephone='$telephone'";
	
	

    $result0 = mysqli_query($db,$deleteSQL0);
    $result1 = mysqli_query($db,$deleteSQL1);
    $result2 = mysqli_query($db,$deleteSQL2);
   echo $result3 = mysqli_query($db,$deleteSQL3);
    
    
?>