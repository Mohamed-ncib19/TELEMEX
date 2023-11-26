<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
    $telephone=$_SESSION['telephone'];
    
    extract($_POST,EXTR_OVERWRITE);



    //Get chargement
    $id_charg=$_GET['id_chargement'];
    $Id_status=$_GET['Id_status'];
    $Date_D=$_GET['Date_D'];
    $Date_F=$_GET['Date_F'];

    $selectSQL="SELECT * FROM chargement, transporteur WHERE id_charg='$id_charg' AND chargement.telephone=transporteur.telephone";

    $resultat = mysqli_query($db,$selectSQL);
    $row=mysqli_fetch_array($resultat);
      
    
    
    if ($row['status']=="0") {
         
    $selectSQLvehi="SELECT ab.* FROM abonnements as ab, chargement ch, chargement_vehicules chv, transporteur tr  WHERE 1 and ab.id_abonnement=chv.id_abonnement AND  ch.id_charg=chv.id_chargement and  tr.telephone=ab.telephone AND ch.id_charg=".$id_charg." ";
    $empRecords = mysqli_query($db, $selectSQLvehi);
       
    $date_dep= date("d/m/Y", strtotime($Date_D));
    $date_arr= date("d/m/Y", strtotime($Date_F));
    
      echo( json_encode ($selectSQLvehi));
    //  echo( json_encode ($emecords+""));
    $id_chargement=$row['id_charg'];
  
    
    
        //update chargement (desactivate)
    
    
        $insertSQL= "UPDATE `chargement` SET `status`=1 WHERE `id_charg`='$id_chargement'";
        $result = mysqli_query($db,$insertSQL);
        // echo( json_encode ("selectSQLvehi"));
        // echo( json_encode ($emecords+""));
    
    
    }else  if ($row['status']=="1") {

        //select status


    $selectSQLstatus="SELECT ab.* FROM status_gps as ab  WHERE 1 and ab.id_chargement=".$id_charg." and ab.Id_status=".$Id_status."  ";
    $empRecords = mysqli_query($db, $selectSQLstatus);
        //update status
        $date_dep1= date("Y-m-d", strtotime($Date_D));
        $date_arr1= date("Y-m-d", strtotime($Date_F));
        while ($res = mysqli_fetch_assoc($empRecords)) {
            
            
        $id=$res['Id_status'];
        $insertSQL= "UPDATE `status_gps` SET  `Date_D`='$date_dep1', `Date_F`='$date_arr1' WHERE `Id_status`='$id'";

    //     echo( json_encode ($insertSQL));
    //  echo( json_encode ($emecords+""));
        $result = mysqli_query($db,$insertSQL);
    
        }
        # code...
    }
   
   // header('Location: index-admin.php');  

    }
else{
    //header("location: index-admin.php?msg=cnx");
}

?>