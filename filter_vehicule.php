<?php
   include("config.php");
   session_start();


    $telephone=$_SESSION['telephone'];
    $date_charg=$_POST['date_charg'];
    $date_liv=$_POST['date_liv'];


    $vehiculedispo="SELECT * FROM abonnements WHERE telephone='$telephone' and id_abonnement NOT  IN (SELECT ab.id_abonnement FROM abonnements ab, chargement ch, chargement_vehicules chv  WHERE 1 and ab.id_abonnement=chv.id_abonnement AND
    ch.id_charg=chv.id_chargement and ch.status=0  
     and( 
    (STR_TO_DATE( ch.date_liv , '%d/%m/%Y' )   BETWEEN STR_TO_DATE( '$date_charg' , '%d/%m/%Y' ) AND STR_TO_DATE( '$date_liv' , '%d/%m/%Y' ) )
        or
       ( STR_TO_DATE( ch.date_liv , '%d/%m/%Y' )>=STR_TO_DATE( '$date_liv' , '%d/%m/%Y' ) ) )
    
    
     ) ORDER BY id_abonnement DESC;
    ";
    
    $result = mysqli_query($db,$vehiculedispo);
    $resultValue="";
    while ($row = mysqli_fetch_array($result)) {
        $idab=$row['id_abonnement'];

        $vehiculedispoused="SELECT * FROM `status_gps` p WHERE  1 and ( 
            (STR_TO_DATE( p.Date_F , '%Y-%m-%d' )   BETWEEN STR_TO_DATE( '$date_charg' , '%Y-%m-%d' ) AND STR_TO_DATE( '$date_liv' , '%Y-%m-%d' ) )
                or
               ( STR_TO_DATE( p.Date_F , '%Y-%m-%d' )>=STR_TO_DATE( '$date_liv' , '%Y-%m-%d' ) ) )
             and  p.Id_abonnement='$idab';";

    $resultused = mysqli_query($db,$vehiculedispoused);
    $sused=mysqli_num_rows($resultused);

    $vehiculedispoused1="SELECT * FROM `status_gps` p WHERE  1 and p.Id_abonnement='$idab';";
    $resultused1 = mysqli_query($db,$vehiculedispoused1);
    $sused1=mysqli_num_rows($resultused1);

    $resultValue= $resultValue. "<option value='" . $row['id_abonnement'] . "'  ".(( $sused>0)?"disabled":"")."  ".(($sused>0)?" style=\"background-color: #f39797;\"":"")."  >'" . $row['matricule'] . "'</option>";
    }
    
    echo $resultValue;
?>