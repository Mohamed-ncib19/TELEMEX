<?php
require('./configSMSapi.php');


function SendSMS($destinataire){
    $key_api = APIKEY; 
    $message = "Bonjour le monde"; 
    $sender = "TELEMEX"; 
   $url_base="https://obitsms.com/api/v2/bulksms?key_api=".urlencode($key_api)."&sender=".urlencode($sender)."&destination=237".urlencode($destinataire)."&message=".urlencode($message); 
    $ch = curl_init($url_base); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    $response = curl_exec ($ch); 
    $response = json_decode($response,true); 
    curl_close($ch);
}
    
   
   


?>