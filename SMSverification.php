<?php


    $key_api = "xxx"; 
    $sender = "TESTAPI"; 
    $destinataire = "55518492";   //674937152
    $message = "Bonjour le monde"; 
   $url_base="https://obitsms.com/api/v2/bulksms?key_api=".urlencode($key_api)."&sender=".urlencode($sender)."&destination=216".urlencode($destinataire)."&message=".urlencode($message); 
    $ch = curl_init($url_base); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    $response = curl_exec ($ch); 
    $response = json_decode($response,true); 
    curl_close($ch); 
    var_dump ($response); 
   


?>