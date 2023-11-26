<?php
	include("config.php");
	session_start();
	
	$user=$_SESSION['telephone'];
	$id_disp=$_GET["id_disp"];
	$telephone=$_SESSION['telephone'];
	
	$poid_disp=$_POST['poid_disp'];
	$contact_name=$_POST['contact_name'];
	$contact_phone=$_POST['contact_phone'];
	
	$pays_dep=$_POST['pays_dep'];
	$ville_dep=$_POST['ville_dep'];
	
	$date_dep=$_POST['date_dep'];
	$date_dep= date("d/m/Y", strtotime($date_dep));
	
	$adresse_dep=$_POST['adresse_dep'];

	$pays_arr=$_POST['pays_arr'];
	$ville_arr=$_POST['ville_arr'];
	
	$date_arr=$_POST['date_arr'];
	$date_arr= date("d/m/Y", strtotime($date_arr));
	
	$adresse_arr=$_POST['adresse_arr'];

	$longitude=$_POST['longitude'];
	$latitude=$_POST['latitude'];

	$longitude1=$_POST['longitude1'];
	$latitude1=$_POST['latitude1'];

	
	echo $sql2 = "UPDATE `disponibilite` SET `poid_disp`=\"$poid_disp\", `contact_name`=\"$contact_name\", `contact_phone`=\"$contact_phone\", `pays_dep`=\"$pays_dep\", `ville_dep`=\"$ville_dep\", `date_dep`=\"$date_dep\", `adresse_dep`=\"$adresse_dep\", `pays_arr`=\"$pays_arr\", `ville_arr`=\"$ville_arr\", `date_arr`=\"$date_arr\", `adresse_arr`=\"$adresse_arr\"
	,`longitude`=\"$longitude\"
	,`latitude`=\"$latitude\"
	,`longitude1`=\"$longitude1\"
	,`latitude1`=\"$latitude1\"
	 WHERE `id_disp`=\"$id_disp\"";
	echo $rs=mysqli_query($db,$sql2);
	
	
	header("location: historique_client.php?telephone=".$telephone."&success=vos informations ont bien été modifiées");

?>