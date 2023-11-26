<?php

include 'database.php';


function get_single_reverse_info($lon,$lat)
{
   
        try {

        
                $url = 'https://nominatim.openstreetmap.org/reverse?format=json&lon='.$lon.'&lat='.$lat;
                $curl_handle=curl_init();
                curl_setopt($curl_handle, CURLOPT_URL, $url);
                curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
                curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
                $query = curl_exec($curl_handle);
                curl_close($curl_handle);


        } catch (PDOException $e) {
    
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    return $query;
}

function get_single_reverse_info1($value)
{
   
        try {

        
                $url = 'https://nominatim.openstreetmap.org/search?q='.$value.'&format=json&polygon=1&addressdetails=1';
                 
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $headers = array(
                    "Accept: application/json",
                  
                 );
                 var_dump( $url);
                 curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                 //for debug only!
                 curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                 
                 $resp = curl_exec($curl);

                 var_dump( $resp);
               


        } catch (PDOException $e) {
    
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    return $resp;
}
function get_single_status_gps_info($id,$token)
{
    $pdo = Database::connect();
    $sql = "SELECT * FROM status_gps where id_chargement = {$id} and Etat=0  and Cast( Date_F as date ) >= DATE_ADD( NOW(), INTERVAL - 1 DAY)";
     
    //    try {

            $query = $pdo->prepare($sql);
            $query->execute();
            $vals = $query->fetchAll(PDO::FETCH_ASSOC);

            //var_dump($vals);
            if(!empty($vals)){
                $response = array();

                for($i = 0;$i < count($vals);$i++){

                    $val= $vals[$i];
                    $url = "http://fleet.tn/ws_rimtrack_all/realTimeRecords/". $val['ID_gps'];
                    //var_dump($url)

                    $curl = curl_init($url);
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    
                    $headers = array(
                       "Accept: application/json",
                       "Authorization: ".$token,
                    );
                    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                    //for debug only!
                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    
                    $resp = curl_exec($curl);
                    $resp1=json_decode($resp);
    
                    //echo( json_encode ($resp));

                    $selectSQL="SELECT * FROM disponibilite WHERE id_disp= {$val['Id_dispo']} ";
                    $query1 = $pdo->prepare($selectSQL);
                    $query1->execute();
                    $val1 = $query1->fetchAll(PDO::FETCH_ASSOC);
                    $resp1->Disponibilite=$val1[0];
                    //var_dump($url)

                    $idcharg=$val['id_chargement'];
                    $selectSQLchargement="
                    SELECT JSON_OBJECT(
                        'marchandise'    ,filterval.marchandise       
                       ,'type_vehicule'  ,filterval.type_vehicule     
                       ,'pays_charg'     ,filterval.pays_charg        
                       ,'ville_charg'    ,filterval.ville_charg       
                       ,'date_charg'     ,filterval.date_charg        
                       ,'adresse_charg'  ,filterval.adresse_charg     
                       ,'pays_liv'       ,filterval.pays_liv          
                       ,'ville_liv'      ,filterval.ville_liv         
                       ,'date_liv'       ,filterval.date_liv          
                       ,'adresse_liv'    ,filterval.adresse_liv       
                       ,'telephone'      ,filterval.telephone         
                       ,'client'         ,filterval.client            
                       ,'telephoneclient',filterval.telephoneclient 
                            ) AS 'Result' FROM  (
                            SELECT *  FROM chargement WHERE id_charg= {$idcharg}
                        ) AS filterval; 
                    ";
                                      $query1chargement = $pdo->prepare($selectSQLchargement);
                    $query1chargement->execute();
                    $val1chargement = $query1chargement->fetchAll(PDO::FETCH_ASSOC);
                   // var_dump( $val1chargement);

                   $array =json_decode($val1chargement[0]['Result']);
               
                    $resp1->Chargement= $array;
                   //// echo( "\n 222222222222222222222222222222222222222222222222 \n");
                    //// //var_dump($resp1);

                   //// echo( json_encode ($resp1));
                    $Id_abonnement=$val['Id_abonnement'];
                    $selectSQLabonnement="	SELECT JSON_OBJECT(
                        'id_abonnement'	     , filterval.id_abonnement	     
                      , 'matricule'	         , filterval.matricule	         
                      , 'marque'	             , filterval.marque	         
                      , 'date_deb'	         , filterval.date_deb	         
                      , 'date_fin'	         , filterval.date_fin	         
                      , 'gps'	                 , filterval.gps	             
                      , 'telephone'	         , filterval.telephone	         
                      , 'type_vehicule'	     , filterval.type_vehicule	     
                      , 'poid_max'	         , filterval.poid_max	         
                      , 'img_vehicule'	     , filterval.img_vehicule	     
                      , 'valide'	             , filterval.valide	         
                      , 'ID_gps'	             , filterval.ID_gps	         
                      , 'nom_chauffeur'	     , filterval.nom_chauffeur	     
                      , 'telephone_chauffeur'  , filterval.telephone_chauffeur
                      , 'cni'	                 , filterval.cni	             
                      , 'assurance'	         , filterval.assurance	         
                      , 'carte_grise'          , filterval.carte_grise        
               ) AS 'Result' FROM  (
               SELECT *  FROM abonnements WHERE id_abonnement= {$Id_abonnement} 
           ) AS filterval;  ";
                    $query1abonnement = $pdo->prepare($selectSQLabonnement);
                    $query1abonnement->execute();
                    $val1abonnement = $query1abonnement->fetchAll(PDO::FETCH_ASSOC);
                    $resp1->Abonnement=json_decode($val1abonnement[0]['Result']);
                    // //var_dump($val1abonnement[0]);

                  // echo( "\n 333333333333333333333333333333333333333333333333333 \n");
                   //// echo( json_encode ($resp1));
                   // //var_dump($resp1);

                    $Id_transporteur=$val1abonnement[0]['telephone'];
                    $selectSQLtransporteur="SELECT JSON_OBJECT(
                        'nom'                      ,filterval. nom  
                       , 'prenom'                   ,filterval. prenom       
                       , 'r_s'                      ,filterval. r_s          
                       , 'pays'                     ,filterval. pays         
                       , 'adresse'                  ,filterval. adresse      
                       , 'telephone'                ,filterval. telephone    
                       , 'email'                    ,filterval. email        
                       , 'password'                 ,filterval. password     
                       , 'type'                     ,filterval. type         
                       , 'genre'                    ,filterval. genre        
                       , 'date_limite'              ,filterval. date_limite  
                       , 'note'                     ,filterval. note         
                       , 'nb_note'                  ,filterval. nb_note      
                       , 'total_note'               ,filterval. total_note   
                       , 'verif'                    ,filterval. verif        
                       , 'code'                     ,filterval. code         
                       , 'indicatif'                ,filterval. indicatif    
                       , 'Date_inscri'              ,filterval. Date_inscri  
                            ) AS 'Result' FROM  (
                            SELECT *  FROM transporteur
                            WHERE telephone= {$Id_transporteur}
                        ) AS filterval; ";
                    $query1transporteur = $pdo->prepare($selectSQLtransporteur);
                    $query1transporteur->execute();
                    $val1transporteur = $query1transporteur->fetchAll(PDO::FETCH_ASSOC);
                    $resp1->Transporteur=json_decode($val1transporteur[0]['Result']) ;
    

                   // echo( "\n 44444444444444444444444444444444444444444444444444444 \n");
                    // //var_dump($resp1);


                    $Id_transporteur1=$val1chargement[0]['telephone'];
                    $selectSQLtransporteur1="SELECT JSON_OBJECT(
                        'nom'                      ,filterval. nom  
                       , 'prenom'                   ,filterval. prenom       
                       , 'r_s'                      ,filterval. r_s          
                       , 'pays'                     ,filterval. pays         
                       , 'adresse'                  ,filterval. adresse      
                       , 'telephone'                ,filterval. telephone    
                       , 'email'                    ,filterval. email        
                       , 'password'                 ,filterval. password     
                       , 'type'                     ,filterval. type         
                       , 'genre'                    ,filterval. genre        
                       , 'date_limite'              ,filterval. date_limite  
                       , 'note'                     ,filterval. note         
                       , 'nb_note'                  ,filterval. nb_note      
                       , 'total_note'               ,filterval. total_note   
                       , 'verif'                    ,filterval. verif        
                       , 'code'                     ,filterval. code         
                       , 'indicatif'                ,filterval. indicatif    
                       , 'Date_inscri'              ,filterval. Date_inscri  
                            ) AS 'Result' FROM  (
                            SELECT *  FROM transporteur
                            WHERE telephone= {$Id_transporteur1}
                        ) AS filterval; ";
                    $query1transporteur1 = $pdo->prepare($selectSQLtransporteur1);
                    $query1transporteur1->execute();
                    $val1transporteur1 = $query1transporteur1->fetchAll(PDO::FETCH_ASSOC);
                    $resp1->Chargeur=$val1transporteur1[0];
                   // echo( "\n 555555555555555555555555555555555555555555555555555555555 \n");
                   //// echo( json_encode ($resp1));
                    $response[$i]= $resp1;
                    //var_dump($response);

                }
               // echo( "777777777777777777777777777777777777777");
                //echo(json_encode($response));
               // //var_dump($response);

                //echo( json_encode ($emecord1131s+""));
                $status_gps_info= json_encode($response)  ;     
                ////var_dump( $status_gps_info);        
             }
              else{
                $status_gps_info= "" ;              
            }
        
    
     //   } catch (PDOException $e) {
    
     //       print "Error!: " . $e->getMessage() . "<br/>";
     //       die();
     //   }

 

  

    Database::disconnect();
    return $status_gps_info;
}
function get_all_status_gps_list()
{
    $pdo = Database::connect();
    $sql = "SELECT * FROM status_gps";

    try {

        $query = $pdo->prepare($sql);
        $query->execute();
        $all_status_gps_info = $query->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    Database::disconnect();
    return $all_status_gps_info;
}

function login_user_info($data)
{
   

    try {

        $post_data = json_encode($data);
   
        // Prepare new cURL resource
        $crl = curl_init('http://fleet.tn/ws_rimtrack_all/signin');
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLINFO_HEADER_OUT, true);
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $post_data);
         
        // Set HTTP Header for POST request 
        curl_setopt($crl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json'
        ));
         
        // Submit the POST request
        $result = curl_exec($crl);
         
        // Close cURL session handle
        curl_close($crl);



            $status = $result;
      

    } catch (PDOException $e) {

        $status['message'] = $e->getMessage(); 
    }

    return $status;
}
