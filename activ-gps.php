<?php
	include("config.php");
	session_start();
	if(isset($_SESSION['login_user'])) {
	extract($_POST,EXTR_OVERWRITE);
	$id_abon=$_POST['id_abonn'];
	$id_disp=$_POST['IdDispo'];
	$id_acti=$_POST['Suivi'];
	$date_deb=$_POST['date_deb'];
	$date_fin=$_POST['date_fin'];

	
	 $insertSQL="SELECT ID_gps FROM `abonnements` WHERE abonnements.id_abonnement='$id_abon'";

                                        $result = mysqli_query($db,$insertSQL);
                                        
                                        $r=mysqli_fetch_array($result);
                                        $s=$r["ID_gps"];
	//normalement c'est $s pour la premiere value
	echo $sql2 = "INSERT INTO `status_gps` (`ID_gps` ,`Date_D`,`Date_F`, `Etat`,`Id_abonnement`,`Id_dispo`) VALUES ('$s','$date_deb','$date_fin','$id_acti','$id_abon','$id_disp') ";
	$rs=mysqli_query($db,$sql2);
	
  
    header("location: index-admin.php?ok=Votre suivi a été activé");
}
?>