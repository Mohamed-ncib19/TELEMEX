<?php
	include("config.php");
	session_start();
	
	if(isset($_SESSION['login_user'])) {
    
		$telephone=$_SESSION['telephone'];
		
		extract($_POST,EXTR_OVERWRITE);
	
		$vehicules="";
		$vehi=$_POST['vehicules'];
		$message=$_POST['message'];

		// echo json_encode($_POST['vehicules']);

		// echo $ee;
	
		foreach ($vehi as $t){
			$vehicules.=";".$t;
		}
		$id=$_POST['id'];

		$avance=$_POST['avance'];
		$montant=$_POST['montant'];
		$id_chargement=$_POST['id_chargement'];
	
		$insertSQL="UPDATE `postuler` SET `vehicules`='$vehicules', `avance`='$avance', `telephone`='$telephone', `montant`='$montant', `id_chargement`='$id_chargement', `message`='$message'   WHERE `id`='$id' ";
	
		$result = mysqli_query($db,$insertSQL);
	   
		if (!$result) 
	{
		die('Invalid query: ' . mysql_error());
	}
	else
	{
		
		$insertSQL1="INSERT INTO `notifications` (`type`, `id_postuler`, `telephone`, `contenu`, `id_chargement` ) VALUES 
		 ('Soumission', '$id',  '$telephone', 'Vous avez une nouvelle proposition de transport.', '$id_chargement')";
	 
		$result1 = mysqli_query($db,$insertSQL1);
		echo "Success";
		header("location: espace-transporteur?ok=Vous avez postuler a cette offre avec succès!");
	
	}
		}
	else{
		header("location: espace-transporteur?msg=cnx");
	}
	
	
	
	header("location: espace-transporteur.php?telephone=".$telephone."&success=vos informations ont bien été modifiées");

?>