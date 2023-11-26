<?php
	include("config.php");
	session_start();
	
	$type=$_SESSION['type'];
	$tel=$_SESSION['telephone'];
	$select="";
  

	if($type=="transporteur"){
		// $select .= "and  ( chargement.telephone = transporteur.telephone and postuler.telephone = '$tel'  and  notifications.to_telephone='$tel'  )   ";
		$select .= "  and notifications.statut=0  and  ( chargement.telephone = transporteur.telephone  and ( (notifications.telephone = '$tel' and notifications.type !='Soumission')   or notifications.to_telephone = '$tel'  ) )   ";

	}else
	if($type=="client"){
		$select .= "and  chargement.telephone = transporteur.telephone and notifications.type='Soumission' and transporteur.telephone='$tel' ";
	}else {
		$select .= "and ( chargement.telephone = transporteur.telephone or postuler.telephone = transporteur.telephone)  ";
	}

	$empQuery = "select *,notifications.telephone as telephonenotifications,notifications.id as id_notifications ,postuler.id as id_postuler ,chargement.telephone as chargement_telephone from chargement, transporteur  ,postuler ,notifications   WHERE 1 and notifications.id_postuler=postuler.id and postuler.id_chargement=chargement.id_charg and notifications.statut=0 ".$select."  GROUP BY notifications.id  ";
	$empRecords = mysqli_query($db, $empQuery);

	$totalRecordwithFilter = mysqli_num_rows($empRecords);

	echo $totalRecordwithFilter ;

?>