<?php
	include("config.php");
	session_start();
	
	$code = $_GET['code'];
	
	$sql ="SELECT * FROM transporteur WHERE code='$code' ";
    $result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);
	
	if ($count == 1) {
		echo $updateSQL="UPDATE `transporteur` SET `code`='**********', `verif`=1 WHERE `code`='$code' ";
		$rs=mysqli_query($db,$updateSQL);
		header("Location: index.php?message=Compte verifie Connectez-Vous");
	}
?>