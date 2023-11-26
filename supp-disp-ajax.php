<?php
   include("config.php");
   session_start();

    
    $id_disp=$_POST['id_disp'];
    $telephone=$_SESSION['telephone'];



    echo $insertSQL="DELETE FROM `disponibilite` WHERE id_disp='$id_disp'";

    
	echo $result = mysqli_query($db,$insertSQL);

?>