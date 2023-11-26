<?php
	include("config.php");
	session_start();
	
	extract($_POST,EXTR_OVERWRITE);
	$id_charg=$_GET['id_charg'];
	$telephone=$_SESSION['telephone'];
 
    $telephone=$_SESSION['telephone'];

    
    extract($_POST,EXTR_OVERWRITE);

	var_dump($_POST) ;

	$dateTimeNowString = date('Y-m-d H:i:s');

    // Extraire la date (partie "date") de la chaîne de caractères actuelle
    $dateNowString = substr($dateTimeNowString, 0, 10);
    
	$date_charg= (new DateTime($dateNowString . ' ' . $date_charg))->format('d/m/Y H:i:s');
	$date_liv= (new DateTime($dateNowString . ' ' . $date_liv))->format('d/m/Y H:i:s');
   

    if(isset($_POST['toler_charge'])){
        $toler_charge=1;
		if((!isset($_POST['jr_retard2']))){$jr_retard2=0;}
    }
    else{
        $toler_charge=0;
		$jr_retard2=0;
    }

	if(isset($_POST['tol_liv'])){
        $tol_liv=1;
		if(!(isset($_POST['jr_retard']))){$jr_retard=0;}
    }
    else{
        $tol_liv=0;
		$jr_retard=0;
    }
	
	function getExtension($str) {
		$i = strrpos($str,".");
		if (!$i) { return ""; }
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
	}	
	
	$image_name1="";
    if (isset($_FILES['img_march']) && isset($_FILES['img_march']['name']) && $_FILES['img_march']['name']!="") {
		$filename1 = stripslashes($_FILES['img_march']['name']);

		$extension1 = getExtension($filename1);
	$extension1 = strtolower($extension1);
	
	$image_name1=time().'1.'.$extension1;
	
	$newname1="./img/uploaded/".$image_name1;
	$newname11=$image_name1;

	$copied = copy($_FILES['img_march']['tmp_name'], $newname1);
    }else
    $image_name1=$old_image;
	// echo json_encode($_FILES);
	// echo $old_image;

	// echo $image_name1;
	// echo  $prix_propp+"";
	
	if(isset($prix_prop)){
        $prix_prop=$prix_prop.' '.$devise;
    }
	
    else{
        $prix_prop=' ';
    }
	
	if(isset($mvaleur)){
        $valeurm=$valeurm.' '.$devise;
    }
    else{
        $valeurm=' ';
    }
		
    if ($marchandise=="Autres") {
        $marchandise=$marchandise1;
        }
	

    $insertSQL="UPDATE `chargement` SET `marchandise`=\"$marchandise\",`poid`=\"$poid\",`nb_colis`=\"$nb_colis\",`volume`=\"$volume\",`type_vehicule`=\"$type_vehicule\",
	`details_march`=\"$details_march\",`emballage`=\"$emballage\",`mode_t`=\"$mode_t\",`valeurm`=\"$valeurm\",`img_march`=\"$image_name1\",
	`pays_charg`=\"$pays_charg\",`ville_charg`=\"$ville_charg\",`date_charg`=\"$date_charg\",`adresse_charg`=\"$adresse_charg\",`pays_liv`=\"$pays_liv\",
	`ville_liv`=\"$ville_liv\",`date_liv`=\"$date_liv\",`adresse_liv`=\"$adresse_liv\",`tol_charg`=\"$toler_charge\",`jr_retard2`=\"$jr_retard2\",
	`tol_liv`=\"$tol_liv\",`jr_retard`=\"$jr_retard\",`contact_name`=\"$contact_name\",`contact_phone`=\"$contact_phone\",`telephone`=\"$telephone\",
	`prix_prop`=\"$prix_prop\",`nb_vehicules`=\"$nb_vehicules\",`avance`=\"$avance\",`methodepayement`=\"$methodepayement\",`autre_info`=\"$autre_info\"
	,`longitude`=\"$longitude\"
	,`latitude`=\"$latitude\"
	,`longitude1`=\"$longitude1\"
	,`latitude1`=\"$latitude1\"
	

	,`name_expediteur`=\"$name_expediteur\"
	,`telephone_expediteur`=\"$telephone_expediteur\"
	,`priceestimated`=\"$priceestimated\"
	,`distance`=\"$distance\"
	  WHERE `id_charg`=\"$id_charg\"";

$rs=mysqli_query($db,$insertSQL);
if ($_SESSION['type']=="client"){

	header("location: historique-new.php?telephone=".$telephone."&success=vos informations ont bien été modifiées");
}else{
	header("location: espace-transporteur.php?success=vos informations ont bien été modifiées");

}
?>