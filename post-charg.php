<?php
   include("config.php");
   session_start();
   $telephoneAdmin=690465196;

if(isset($_SESSION['login_user'])) {
    
    $telephone=$_SESSION['telephone'];

    foreach ($_POST as $name => $value) {
        var_dump( $name . " = " . $value . "<br>");
      }
    extract($_POST,EXTR_OVERWRITE);
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
	
	$filename1 = stripslashes($_FILES['img_march']['name']);
	$image_name1="";
    if ($_FILES['img_march']['name']!="") {
	$extension1 = getExtension($filename1);
	$extension1 = strtolower($extension1);
	
	$image_name1=time().'1.'.$extension1;
	
	$newname1="./img/uploaded/".$image_name1;
	$newname11=$image_name1;

	$copied = copy($_FILES['img_march']['tmp_name'], $newname1);
    }
	
	if(isset($prop_prix)){
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
	

    $insertSQL="INSERT INTO `chargement` (`marchandise`, `poid`, `nb_colis`, `volume`, `type_vehicule`, `details_march`, `emballage`, `mode_t`, `valeurm`, `img_march`, `pays_charg`, `ville_charg`, `date_charg`, `adresse_charg`, `pays_liv`, `ville_liv`, `date_liv`, `adresse_liv`, `tol_charg`, `jr_retard2`, `tol_liv`, `jr_retard`, `contact_name`, `contact_phone`, `telephone`, `prix_prop` , `nb_vehicules`  , `avance` , `methodepayement`, `autre_info` , `longitude`, `latitude`, `longitude1`, `latitude1`, `name_expediteur`, `telephone_expediteur`, `priceestimated`, `distance`)
    
    VALUES (\"$marchandise\", \"$poid\", \"$nb_colis\", \"$volume\", \"$type_vehicule\", \"$details_march\", \"$emballage\", \"$mode_t\", \"$valeurm\", \"$image_name1\", \"$pays_charg\", \"$ville_charg\", \"$date_charg\", \"$adresse_charg\", \"$pays_liv\", \"$ville_liv\", \"$date_liv\", \"$adresse_liv\", \"$toler_charge\", \"$jr_retard2\", \"$tol_liv\", \"$jr_retard\", \"$contact_name\", \"$contact_phone\", \"$telephone\", \"$prix_prop\", \"$nb_vehicules\", \"$avance\", \"$methodepayement\", \"$autre_info\", \"$longitude\", \"$latitude\", \"$longitude1\", \"$latitude1\", \"$name_expediteur\", \"$telephone_expediteur\", \"$priceestimated\", \"$distance\")";

    $result = mysqli_query($db,$insertSQL);
    $id1=mysqli_insert_id($db);


    $insertSQL1="INSERT INTO `notifications` (`type`, `telephone`, `contenu`, `id_chargement`, `to_telephone` ) VALUES 
    ('Soumission',  '$telephone', 'Vous avez une nouvelle proposition de transport.', '$id1', '$telephoneAdmin')";
   $result1 = mysqli_query($db,$insertSQL1);
    
    header("location: historique-new.php?telephone=".$_SESSION['telephone']."&ok=Votre poste de chargement a été enregistré !");
    
    }
else{
    header("location: historique-new.php?telephone=".$_SESSION['telephone']."msg=cnx");
}

?>