<?php
   include("config.php");
   include 'sendsms.php';

   session_start();
   $telephoneAdmin=690465196;

if(isset($_SESSION['login_user'])) {

    $telephone=$_SESSION['telephone'];
    
    extract($_POST,EXTR_OVERWRITE);

    $sqlgetaffectation="SELECT * FROM chargement_vehicules WHERE id_chargement='$id_chargement' ";
     
$result = mysqli_query($db,$sqlgetaffectation);

if ($result && mysqli_num_rows($result) > 0) {
  mysqli_free_result($result);
  $del="DELETE FROM chargement_vehicules WHERE id_chargement='$id_chargement'";
  $resultdel = mysqli_query($db,$del);
  $del="DELETE FROM notifications WHERE id_chargement='$id_chargement'";
  $resultdel = mysqli_query($db,$del);
  $del="DELETE FROM disponibilite WHERE id_chargement='$id_chargement'";
  $resultdel = mysqli_query($db,$del);
  $del="DELETE FROM status_gps WHERE id_chargement='$id_chargement'";
  $resultdel = mysqli_query($db,$del);

} 

    $vehicules="";
    $vehi=$_POST['vehicules'];
    $message=$_POST['message'];
    $to_telephone=$_POST['to_telephone'];
    if(count($vehi)>0) {
        foreach ($vehi as $t){
            $vehicules.=";".$t;
        }
        $avance=$_POST['avance'];
        $montant=$_POST['montant'];
        $id_chargement=$_POST['id_chargement'];
        $nom=  $_SESSION['prenom']." ".$_SESSION['nom'];
    
        $insertSQL="INSERT INTO `postuler` (`vehicules`, `avance`, `telephone`, `montant`, `id_chargement`, `message`, `devise` ) VALUES 
         ('$vehicules', '$avance',  '$telephone', '$montant', '$id_chargement', '$message', '$devise')";
    
        $result = mysqli_query($db,$insertSQL);
       
        if (!$result) 
    {
        die('Invalid query: ' . mysql_error());
    }
    else
    {
        $id=mysqli_insert_id($db);
    
    
            $insertSQL1="INSERT INTO `notifications` (`type`, `id_postuler`, `telephone`, `contenu`, `id_chargement`, `to_telephone` ) VALUES 
            ('Soumission', '$id',  '$telephoneAdmin', 'Vous avez une nouvelle proposition de transport.', '$id_chargement', '$to_telephone')";
       
       
        
           $result1 = mysqli_query($db,$insertSQL1);
           $id1=mysqli_insert_id($db);
    
            $vehicules=0;
            $selectSQL="SELECT * FROM chargement, transporteur WHERE id_charg='$id_chargement' AND chargement.telephone=transporteur.telephone";
    
            $resultat = mysqli_query($db,$selectSQL);
            $row=mysqli_fetch_array($resultat);

            foreach ($vehi as $t)
                {
                    $telephone=$_POST['to_telephone'];
            $id_postuler= $id;
            $to_telephone=$_SESSION['telephone'];
                        
                    $abonementsql=" SELECT * FROM abonnements WHERE id_abonnement= '$t' ";
    
                    $resultabonementsql = mysqli_query($db,$abonementsql);
                    $resab=mysqli_fetch_array($resultabonementsql);
                    $rowabonnement=$resab;
                    
                         $vehicules=$vehicules+1;
                        $insertSQL1="INSERT INTO `chargement_vehicules` (`id_chargement`, `id_abonnement`) VALUES 
                        ('$id_chargement', '$t')";
                    
                    $result1 = mysqli_query($db,$insertSQL1);
    
                   
    
                    $updatecharg="UPDATE `chargement` SET `statutenvoi`=1
                      WHERE `id_charg`=\"$id_chargement\"";
    
                      echo $updatecharg;
                
                $rs=mysqli_query($db,$updatecharg);
    
                
    
                $poid_disp=$resab['poid_max'];
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
        
            $insertSQL="INSERT INTO `disponibilite` (`poid_disp`, `pays_dep`, `ville_dep`, `date_dep`, `adresse_dep`, `pays_arr`, `ville_arr`, `date_arr`, `adresse_arr`, `contact_name`, `contact_phone`, `id_abonnement`, `id_chargement`) 
                                            VALUES  ('$poid_disp', '$pays_dep', '$ville_dep', '$date_dep', '$adresse_dep', '$pays_arr', '$ville_arr', '$date_arr', '$adresse_arr', '$contact_name', '$contact_phone', $t, $id_chargement)";
        
        
            $result = mysqli_query($db,$insertSQL);
        
            $ID_gps=$resab['ID_gps'];
            $id_abonnement=$resab['id_abonnement'];
            $id=mysqli_insert_id($db);
            $date_dep1= date("Y-m-d", strtotime($row['date_charg']));
            $date_arr1= date("Y-m-d", strtotime($row['date_liv']));
            $insertSQLstatus="INSERT INTO `status_gps` (`ID_gps`, `Date_D`, `Date_F`, `Etat`, `Id_abonnement`, `Id_dispo`, `id_chargement`) 
            VALUES  ('$ID_gps', '$date_dep1', '$date_arr1',  0, $t, $id, $id_chargement)";
    
            $result1 = mysqli_query($db,$insertSQLstatus);
    
    
                        }
                    
                    
    
    
    
        echo "Success";
    
        
        $headers="";
        $email=$_SESSION['email'];
    
        $to=$_POST['mail'];
    
       
        
        $sujet="Vous avez une nouvelle proposition de transport.";
        
        $subject = "Send HTML Email in PHP by CodexWorld"; 
     
        $htmlContent = ' 
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <style>
                body {
                    font-family: sans-serif;
                }
                .bouton{
                    padding: 1rem 1.2rem;
                    background-color: #1877f2;
                    color: white;
                    border-radius: 5px;
                    display: block;
                    width: 30%;
                    margin-bottom: 1rem;
                    text-decoration: none;
                    margin: auto;
                    text-align: center;
                }
                .mt-1{
                    margin-top: 1rem;
                    display: block;
                }
                .text-center{
                    text-align: center;
                    display: block;
                }
                .link{
                    color: #1877f2;
                    display: block;
                }
            </style>
        </head>
        <body>
            <table width="100%" cellpadding="0" cellspacing="0" style="width:100%;height:100%" bgcolor="#ffffff">
                <tbody>
                    <tr>
                        <td align="center">
                            <table cellpadding="0" cellspacing="0" style="width:540px" bgcolor="#ffffff">
                                <tbody>
                                    <tr>
                                        <td style="line-height:1px;font-size:1px;height:5px" bgcolor="#1877f2">.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" cellpadding="0" cellspacing="0" style="border-color:#ebecee;border-style:solid;border-width:0 1px 1px">
                                                <tbody>
                                                    <tr>
                                                        <td align="left" style="padding:64px 60px 30px">
                                                            <img src="https://telefret.com/logo.png" alt="Telefret" height="35" style="display:block;line-height:1px;border:0" class="CToWUd">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="font-size:14px;padding:0 60px 30px">
                                                            <span class="im">
                                                                <h1 style="font-weight:300;font-size:22px;line-height:1.3em;color:#313745;margin:0 0 0.35em;padding:0">Notification</h1>
                                                                <p style="font-size:14px;line-height:1.5em;margin-bottom:1em;color:#313745;margin-top:0" align="left">Vous avez une nouvelle proposition de transport.</p>
                                                                <p style="font-size:14px;line-height:1.5em;margin-bottom:1em;color:#313745;margin-top:0" align="left">Nom du transporteur: '.$nom .'.</p>
                                                                <p style="font-size:14px;line-height:1.5em;margin-bottom:1em;color:#313745;margin-top:0" align="left">Email du transporteur: '.$email .'.</p>
                                                                <p style="font-size:14px;line-height:1.5em;margin-bottom:1em;color:#313745;margin-top:0" align="left">Téléphone du transporteur: '.$telephone .'.</p>
                                                                <h3 style="font-weight:300;font-size:22px;line-height:1.3em;color:#313745;margin:0 0 0.35em;padding:0">Message du transporteur:</h3>
                                                                <p style="font-size:14px;line-height:1.5em;margin-bottom:1em;color:#313745;margin-top:0" align="left"> '.$message .'.</p>
    
    
                                                                </span>
        
                                                            <a class="bouton" href="https://telefret.com/notifications.php?id_notification='.$id1.'"> Cliquez ici</a>
        
                                                            <span class="text-center mt-1">ou copiez ce lien et collez le dans votre navigateur</span>
                                                            <span class="link text-center mt-1">https://telefret.com/notifications.php?id_notification='.$id1.'</span>
                                                          
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <td align="center" style="border-top-style:solid;border-top-width:1px;border-top-color:#ebecee;color:#6c7689;font-size:12px;padding:20px 0" bgcolor="#F8F8FA">
                                                        Avez-vous des Questions? <a href="#" style="color:#276ee5;text-decoration:none" target="_blank" data-saferedirecturl="#">Nous sommes là pour vous aider.</a>
                                                    </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="im">
                                <table cellpadding="0" cellspacing="0" style="width:540px;margin-top:24px">
                                    <tbody>
                                        <tr>
                                            <td align="center">
                                                <h2 style="font-weight:500;margin:0;padding:0;font-size:12px;line-height:1.5em;text-transform:uppercase;letter-spacing:.02em;color:#313745">Powered by Telefret</h2>
                                                <h3 style="font-weight:300;color:#6c7689;font-size:12px;letter-spacing:.02em;line-height:20px;margin:0;padding:0">Telefret the collaborative digital freight platform</h3>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>
        
        '; 
         
        // Set content-type header for sending HTML email 
        //$headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n"; 

      
        //Send sms to expediteur
        $lienDeSuivi ="https://telemex.suivi.telefret.com/". $row['id_charg'];
        $lienDuSiteWeb = "https://telemex.cm/";
        $message = "Votre colis a été pris en charge par Telemex , cliquez sur ce lien pour  le suivi en temps réel " . $lienDeSuivi . " .Ou contactez votre coursier au ".$rowabonnement['telephone_chauffeur'].".";
        send_sms($row['telephone'], $message);
        send_sms($row['telephone_expediteur'], $message);

        //Send sms to destinateur
        send_sms($row['contact_phone'], $message);

        //Send sms to coursier
        $message=        "Cher coursier le colis " . $lienDeSuivi . " vous a été affecté.Heure de ramassage : " . $row['date_charg']. " La sécurité avant tout , le client est roi !";
        send_sms($rowabonnement['telephone_chauffeur'], $message);

        //Send email 
    
        // mail($to.",commercial@telefret.com",$sujet, $htmlContent,"Content-type:text/html;charset=UTF-8");
    
       header("location: espace-transporteur.php?ok=Vous avez postuler a cette offre avec succès!");
    
    }
    }else{
       header("location: chargement.php?id_charg=$id_chargement");

    }
   
    }
else{
    header("location: espace-transporteur.php?msg=cnx");
}

?>