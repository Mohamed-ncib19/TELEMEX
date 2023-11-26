<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
        
    extract($_POST,EXTR_OVERWRITE);

	$date_dep= date("d/m/Y", strtotime($date_dep));
	$date_arr= date("d/m/Y", strtotime($date_arr));
	

    $insertSQL="INSERT INTO `disponibilite` (`poid_disp`, `pays_dep`, `ville_dep`, `date_dep`, `adresse_dep`, `pays_arr`, `ville_arr`, `date_arr`, `adresse_arr`, `contact_name`, `contact_phone`, `id_abonnement`) VALUES ('$poid_disp', '$pays_dep', '$ville_dep', '$date_dep', '$adresse_dep', '$pays_arr', '$ville_arr', '$date_arr', '$adresse_arr', '', '', '$id_ab')";

    $result = mysqli_query($db,$insertSQL);
    
    
    header("location: index-admin.php?ok=Votre poste de disponibilité a été enregistré");
}

?>