<?php
	include("config.php");
	session_start();
	
	extract($_POST,EXTR_OVERWRITE);
	$id_charg=$_GET['id_charg'];
	$selectSQL="SELECT * FROM status_gps WHERE id_chargement='$id_charg' and Id_abonnement='$id_abonnement' and Etat=0 ";

    $resultat = mysqli_query($db,$selectSQL);
    $res=mysqli_fetch_array($resultat);
    $s=mysqli_num_rows($resultat);
	$etat=$s>0?'1':'0';
	
 $sql2 = "UPDATE `status_gps` SET  `Etat`='$etat' WHERE `id_chargement`='$id_charg'  and `Id_abonnement`='$id_abonnement'  ";
	$rs=mysqli_query($db,$sql2);


	echo $etat;
	
?>