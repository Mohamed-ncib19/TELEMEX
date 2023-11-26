<?php 

	include("config.php");
	session_start();

	extract($_POST,EXTR_OVERWRITE);
	
	$sql = "SELECT * FROM transporteur WHERE email='$mail' AND password='$oldpass'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$nb= mysqli_num_rows($result);
	
	if($nb==1){
		$updateSQL="UPDATE transporteur SET password='$newpass' WHERE password='$oldpass' AND email='$mail'";
		$rs=mysqli_query($db,$updateSQL);
		
		$msg = "Votre nouveau mot de passe est :" . "\r\n" . $newpass;
	
		$subject = "Changement de Mot de passe";
		
		$headers = 'From: noreplay@telefret.com' . "\r\n" .
		'Reply-To:  noreplay@telefret.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		mail($mail, $subject, $msg, $headers);
		
		header("location: index.php");
	}
	else{
		header("Location: index.php?message=Email ou ancien mot de passe incorrecte");
	}
	
	
	
	
 ?>