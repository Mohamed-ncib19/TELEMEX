<?php
   include("config.php");
   session_start();
   $telephoneAdmin=690465196;

if(isset($_SESSION['login_user'])) {
    
    $telephone=$_SESSION['telephone'];

   

      
      
      
    extract($_POST,EXTR_OVERWRITE);


   //calculate distance between ville_charg and ville_liv
    function calculateHaversineDistance($lat1, $lon1, $lat2, $lon2) {
        $R = 6371; // Radius of the Earth in kilometers
    
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
    
        $a = sin($dLat / 2) * sin($dLat / 2) +
            cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
            sin($dLon / 2) * sin($dLon / 2);
    
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    
        $distance = $R * $c; // Distance in kilometers
    
        return $distance;
    }
    
    
    $distance = calculateHaversineDistance($_POST['latitude'], $_POST['longitude'], $_POST['latitude1'], $_POST['longitude1']);
  







    
     $dateTimeNowString = date('Y-m-d H:i:s'); 
    
    
/* 
    $dateNowString = substr($dateTimeNowString, 0, 10);
	$date_charg= (new DateTime($dateNowString . ' ' . $date_charg))->format('d/m/Y H:i:s');
 	$date_liv= (new DateTime($dateNowString . ' ' . $date_liv))->format('d/m/Y H:i:s'); */
    
   
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
    if ($_FILES['img_march']['name'] != "") {
        $extension1 = getExtension($filename1);
        $extension1 = strtolower($extension1);
    
        $image_name1 = time() . '1.' . $extension1;
    
        $newname1 = "./src/uploadedImagesSendingPackage/" . $image_name1;
        $newname11 = $image_name1;
    
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['img_march']['tmp_name'], $newname1)) {
            echo "File uploaded successfully. Path: " . $newname1;
            // You can perform additional actions here if needed
        } else {
            echo "Error moving file to local folder.";
        }
    } else {
        echo "No file selected.";
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
	

    $insertSQL="INSERT INTO `chargement` (`marchandise`,  `type_vehicule`, `details_march`,  `valeurm`, `img_march`, `pays_charg`, `ville_charg`, `date_charg`, `adresse_charg`, `pays_liv`, `ville_liv`, `adresse_liv`, `tol_charg`, `jr_retard2`, `tol_liv`, `jr_retard`, `contact_name`, `contact_phone`, `telephone`, `prix_prop` ,  `avance` , `methodepayement`,  `longitude`, `latitude`, `longitude1`, `latitude1`, `name_expediteur`, `telephone_expediteur`, `priceestimated`, `distance`)
    
    VALUES (\"$marchandise\",   \"$type_vehicule\", \"$details_march\",  \"$valeurm\", \"$image_name1\", \"$pays_charg\", \"$ville_charg\", \"$date_charg\", \"$adresse_charg\", \"$pays_liv\", \"$ville_liv\",  \"$adresse_liv\", \"$toler_charge\", \"$jr_retard2\", \"$tol_liv\", \"$jr_retard\", \"$contact_name\", \"$contact_phone\", \"$telephone\", \"$prix_prop\", \"$avance\", \"$methodepayement\", \"$longitude\", \"$latitude\", \"$longitude1\", \"$latitude1\", \"$name_expediteur\", \"$telephone_expediteur\", \"$priceestimated\", \"$distance\")";

    $result = mysqli_query($db,$insertSQL);
    $id1=mysqli_insert_id($db);


    $insertSQL1="INSERT INTO `notifications` (`type`, `telephone`, `contenu`, `id_chargement`, `to_telephone` ) VALUES 
    ('Soumission',  '$telephone', 'Vous avez une nouvelle proposition de transport.', '$id1', '$telephoneAdmin')";
   $result1 = mysqli_query($db,$insertSQL1);

        echo "success";
    
    header("location: historique-new.php?telephone=".$_SESSION['telephone']."&ok=Votre poste de chargement a été enregistré !");
    
    }
else{
    echo "failure";
    header("location: historique-new.php?telephone=".$_SESSION['telephone']."msg=cnx");
}

?>