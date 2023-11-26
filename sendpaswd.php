<?php 

	include("config.php");
	session_start();

	extract($_POST,EXTR_OVERWRITE);
	
	$sql = "SELECT * FROM transporteur WHERE email = '$mail'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$passwd = $row['password'];
	
	$msg = "Votre mot de passe est :" . "\r\n" . $passwd;
	
	$subject = "Recuperation Mot de passe";
	
	$headers = 'From: noreplay@telefret.com' . "\r\n" .
	'Reply-To:  noreplay@telefret.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	mail($mail, $subject, $msg, $headers);


	


	header("location: index.php");
	
 ?>