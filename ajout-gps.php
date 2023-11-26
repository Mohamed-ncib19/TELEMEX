<?php
	include("config.php");
	session_start();
	if(isset($_SESSION['login_user'])) {
	extract($_POST,EXTR_OVERWRITE);
	$id_gps=$_POST['id_gps'];
	$id_ab=$_POST['id_ab'];
	
	echo $sql2 = "UPDATE `abonnements` SET  `ID_gps`='$id_gps' WHERE `id_abonnement`='$id_ab'";
	$rs=mysqli_query($db,$sql2);
	
  
    header("location: index-admin.php?ok=Votre ID GPS a été enregistré");
}
?>