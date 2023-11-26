<?php
	include("config.php");
	session_start();
	
	$user=$_SESSION['telephone'];
	
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$r_s=$_POST['r_s'];
	$pays=$_POST['pays'];
	$adresse=$_POST['adresse'];
	$email=$_POST['email'];
	$genre=$_POST['genre2'];
	$type=$_POST['type'];
	
	echo $sql2 = "UPDATE `transporteur` SET `nom`='$nom', `prenom`='$prenom', `r_s`='$r_s', `pays`='$pays', `adresse`='$adresse', `email`='$email', `genre`='$genre', `type`='$type' WHERE `telephone`='$user'";
	$rs=mysqli_query($db,$sql2);
	
	$_SESSION['type'] = $type;
	$_SESSION['nom'] = $nom;
	$_SESSION['prenom'] = $prenom;
	$_SESSION['pays'] = $pays;
	$_SESSION['adresse'] = $adresse;
	$_SESSION['email'] = $email;
	$_SESSION['genre'] = $genre;
	$_SESSION['r_s'] = $r_s;
	
	header("location: mon-compte.php?success=vos informations ont bien été modifiées");
?>