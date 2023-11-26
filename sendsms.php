
<?php
    
    function send_sms($destinataire, $message){
        
        $url_base="https://obitsms.com/api/v2/bulksms?key_api=52mlSSdexc561ddfcLml8ddccwzCdsZS&sender=TELEMEX&destination=237".urlencode($destinataire)."&message=".urlencode($message);

        $ch = curl_init($url_base);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $response = json_decode($response,true);
        curl_close($ch);

        return $response;
        }

