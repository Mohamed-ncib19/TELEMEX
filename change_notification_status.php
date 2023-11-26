<?php
	include("config.php");
	session_start();
	

	
	$id_notification=$_POST['id_notification'];

	
	echo $sql2 = "UPDATE `notifications` SET `statut`=1 WHERE `id`='$id_notification'";
	echo $rs=mysqli_query($db,$sql2);
	

?>