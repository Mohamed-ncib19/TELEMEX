<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
    $telephone=$_SESSION['telephone'];
    
    extract($_POST,EXTR_OVERWRITE);



    //Get chargement
    $id_charg=$id_chargement;
    
    $selectSQL="SELECT * FROM chargement, transporteur WHERE id_charg='$id_charg' AND chargement.telephone=transporteur.telephone";

    $resultat = mysqli_query($db,$selectSQL);
    $row=mysqli_fetch_array($resultat);

    // Create disponibilities  for all vehicules
    
    if ($row['status']=="0") {
         
    $selectSQLvehi="SELECT ab.* FROM abonnements as ab, chargement ch, chargement_vehicules chv, transporteur tr  WHERE 1 and ab.id_abonnement=chv.id_abonnement AND  ch.id_charg=chv.id_chargement and  tr.telephone=ab.telephone AND ch.id_charg=".$id_charg." ";
    $empRecords = mysqli_query($db, $selectSQLvehi);
       
    $date_dep= date("d/m/Y", strtotime($Date_D));
    $date_arr= date("d/m/Y", strtotime($Date_F));
    
    //  echo( json_encode ($selectSQLvehi));
    //  echo( json_encode ($emecords+""));
    $id_chargement=$row['id_charg'];
    
    while ($res = mysqli_fetch_assoc($empRecords)) {
    
        
       
        
        $poid_disp=$res['poid_max'];
        $pays_dep=$row['pays_charg'];
        $ville_dep=$row['ville_charg'];
        $date_dep=$row['date_charg'];
        $adresse_dep=$row['adresse_charg'];
        $pays_arr=$row['pays_liv'];
        $ville_arr=$row['ville_liv'];
        $date_arr=$row['date_liv'];
        $adresse_arr=$row['adresse_liv'];
        $contact_name=$row['contact_name'];
        $contact_phone=$row['contact_phone'];
        $id_ab=$res['id_abonnement'];
    
        $insertSQL="INSERT INTO `disponibilite` (`poid_disp`, `pays_dep`, `ville_dep`, `date_dep`, `adresse_dep`, `pays_arr`, `ville_arr`, `date_arr`, `adresse_arr`, `contact_name`, `contact_phone`, `id_abonnement`, `id_chargement`) 
                                        VALUES  ('$poid_disp', '$pays_dep', '$ville_dep', '$date_dep', '$adresse_dep', '$pays_arr', '$ville_arr', '$date_arr', '$adresse_arr', '$contact_name', '$contact_phone', $id_ab, $id_chargement)";
    
    
        $result = mysqli_query($db,$insertSQL);
    
        $ID_gps=$res['ID_gps'];
        $id_abonnement=$res['id_abonnement'];
        $id=mysqli_insert_id($db);
        $date_dep1= date("Y-m-d", strtotime($Date_D));
        $date_arr1= date("Y-m-d", strtotime($Date_D));
        $insertSQLstatus="INSERT INTO `status_gps` (`ID_gps`, `Date_D`, `Date_F`, `Etat`, `Id_abonnement`, `Id_dispo`, `id_chargement`) 
        VALUES  ('$ID_gps', '$date_dep1', '$date_arr1',  0, $id_abonnement, $id, $id_chargement)";
    
    // echo( json_encode ($insertSQLstatus));
    // echo( json_encode ($emecords+""));
        $result1 = mysqli_query($db,$insertSQLstatus);
       
    
    }
    
    
        //update chargement (desactivate)
    
    
        $insertSQL= "UPDATE `chargement` SET `status`=1 WHERE `id_charg`='$id_chargement'";
        $result = mysqli_query($db,$insertSQL);
        // echo( json_encode ("selectSQLvehi"));
        // echo( json_encode ($emecords+""));
    
    
    }else  if ($row['status']=="1") {

        //select status

     
    $selectSQLstatus="SELECT ab.* FROM status_gps as ab  WHERE 1 and ab.id_chargement=".$id_charg." ";
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
   
    header('Location: notifications.php');  

    }
else{
    header("location: espace-transporteur.php?msg=cnx");
}

?>