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
function get_single_status_gps_info($id,$token)
{
    $pdo = Database::connect();
    $sql = "SELECT * FROM status_gps where id_dispo = {$id} and Etat=0  and Cast( Date_F as date ) >= DATE_ADD( NOW(), INTERVAL - 1 DAY)";
     
    //    try {

            $query = $pdo->prepare($sql);
            $query->execute();
            $val = $query->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($val)){

                $url = "http://fleet.tn/ws_rimtrack_all/realTimeRecords/". $val[0]['ID_gps'];
    
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


                $selectSQL="SELECT * FROM disponibilite WHERE id_disp= {$id} ";
                $query1 = $pdo->prepare($selectSQL);
                $query1->execute();
                $val1 = $query1->fetchAll(PDO::FETCH_ASSOC);
                $resp1->Disponibilite=$val1[0];

                $idcharg=$val[0]['id_chargement'];
                $selectSQLchargement="SELECT * FROM chargement WHERE id_charg= {$idcharg} ";
                $query1chargement = $pdo->prepare($selectSQLchargement);
                $query1chargement->execute();
                $val1chargement = $query1chargement->fetchAll(PDO::FETCH_ASSOC);
                $resp1->Chargement=$val1chargement[0];

                $Id_abonnement=$val[0]['Id_abonnement'];
                $selectSQLabonnement="SELECT * FROM abonnements WHERE id_abonnement= {$Id_abonnement} ";
                $query1abonnement = $pdo->prepare($selectSQLabonnement);
                $query1abonnement->execute();
                $val1abonnement = $query1abonnement->fetchAll(PDO::FETCH_ASSOC);
                $resp1->Abonnement=$val1abonnement[0];


                $Id_transporteur=$val1abonnement[0]['telephone'];
                $selectSQLtransporteur="SELECT * FROM transporteur WHERE telephone= {$Id_transporteur} ";
                $query1transporteur = $pdo->prepare($selectSQLtransporteur);
                $query1transporteur->execute();
                $val1transporteur = $query1transporteur->fetchAll(PDO::FETCH_ASSOC);
                $resp1->Transporteur=$val1transporteur[0];

                $Id_transporteur1=$val1chargement[0]['telephone'];
                $selectSQLtransporteur1="SELECT * FROM transporteur WHERE telephone= {$Id_transporteur1} ";
                $query1transporteur1 = $pdo->prepare($selectSQLtransporteur1);
                $query1transporteur1->execute();
                $val1transporteur1 = $query1transporteur1->fetchAll(PDO::FETCH_ASSOC);
                $resp1->Chargeur=$val1transporteur1[0];


                $status_gps_info= json_encode($resp1)  ;             
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
