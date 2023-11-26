<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
    $telephone=$_SESSION['telephone'];

    
    extract($_POST,EXTR_OVERWRITE);


    
    if(isset($_POST['check'])) {


        $vehicules=0;
        $vehis=$_POST['checkId'];
        $vehi=$_POST['check'];
        $id_charg=$_POST['id_charg'];
        $telephone=$_SESSION['telephone'];
        $id_postuler=$_POST['id_postuler'];
        $id_chargement=$_POST['id_charg'];
        $to_telephone=$_POST['to_telephone'];


     
            for($i=0;$i<count($vehis);$i++) 
            {
               
               
                 $t =$vehis[$i];
                 
        $insertSQL="select * from `chargement_vehicules`  WHERE `chargement_vehicules`.`id_chargement` = '$id_charg' and (`chargement_vehicules`.`id_abonnement` = '$t' )";
    
        $result = mysqli_query($db,$insertSQL);
        $s=mysqli_num_rows($result);
         
        if($s==0 && $vehi[$i]=="1"){
            $vehicules=$vehicules+1;
            $insertSQL1="INSERT INTO `chargement_vehicules` (`id_chargement`, `id_abonnement`) VALUES 
            ('$id_chargement', '$t')";
        
           $result1 = mysqli_query($db,$insertSQL1);

        }else if ($s>0 && $vehi[$i]=="0") {
            
            $insertSQL="DELETE FROM `chargement_vehicules` WHERE id_abonnement='$t' AND id_chargement='$id_chargement'";

            $result = mysqli_query($db,$insertSQL);
        }

            }
          

            if ($vehicules>0) {
                $insertSQL1="INSERT INTO `notifications` (`type`, `id_postuler`, `telephone`, `contenu`, `id_chargement`, `to_telephone`) VALUES 
                ('Reception', '$id_postuler',  '$telephone', 'Des véhicules proposer ont été sélectionnés.', '$id_chargement', '$to_telephone')";
            
               $result1 = mysqli_query($db,$insertSQL1);
            }
        
       
        echo "Success";
        header("location: notifications.php?ok=Vous avez postuler a cette offre avec succès!");
    
    


    }


    }
else{
    header("location: espace-client.php?msg=cnx");
}

?>