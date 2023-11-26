<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
            
    
    $rate=$_GET['note'];
    
    $telephone=$_GET['telephone'];
    
    $id_disp=$_GET['id_disp'];
    
    
    $selectSQL="SELECT * FROM transporteur WHERE telephone='$telephone'";

    $resultat = mysqli_query($db,$selectSQL);
    $res=mysqli_fetch_array($resultat);
    
    $nb=$res["nb_note"]+1;
    
    $total_note=$res["total_note"]+$rate;
    
    $nte=($total_note)/$nb;
    
    $note=number_format($nte,2);

    $insertSQL="UPDATE `transporteur` SET `note`='$note', `nb_note`=$nb, `total_note`=$total_note WHERE telephone='$telephone'";

    $result = mysqli_query($db,$insertSQL);
    
    
    header("location: disponibilite.php?id_disp=$id_disp");
}

?>

