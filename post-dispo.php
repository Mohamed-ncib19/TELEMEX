<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
        
    extract($_POST,EXTR_OVERWRITE);

	$date_dep= date("d/m/Y", strtotime($date_dep));
	$date_arr= date("d/m/Y", strtotime($date_arr));
	

    $insertSQL="INSERT INTO `disponibilite` (`poid_disp`, `pays_dep`, `ville_dep`, `date_dep`, `adresse_dep`, `pays_arr`, `ville_arr`, `date_arr`, `adresse_arr`, `contact_name`, `contact_phone`, `id_abonnement` , `longitude`, `latitude`, `longitude1`, `latitude1`) 
    VALUES (\"$poid_disp\", \"$pays_dep\", \"$ville_dep\", \"$date_dep\", \"$adresse_dep\", \"$pays_arr\", \"$ville_arr\", \"$date_arr\", \"$adresse_arr\", \"$contact_name\", \"$contact_phone\", \"$id_ab\", \"$longitude\", \"$latitude\", \"$longitude1\", \"$latitude1\")";

    // echo( "\n 222222222222222222222222222222222222222222222222 \n");
    // var_dump($insertSQL);

   $result = mysqli_query($db,$insertSQL);
    
    
   header("location: espace-transporteur.php?ok=Votre poste de disponibilité a été enregistré");
}

?>