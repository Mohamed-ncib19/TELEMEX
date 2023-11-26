<?php

	/************************** Phone Verification **************************************/
	
	$code = '' ; 
	$i=0;
	
    while ($i < 4) {
        $num = rand(0,9); 
        $code = $code.$num; 
        $i++; 
    }
	
	/***************************************************************************************/

	$telephone = "+21655518492";
	$phonemsg=substr($telephone,2);

	$data = "";
	$ch = curl_init('https://api.1s2u.io/bulksms?username=smscontact020&password=web89355&mt=0&fl=0&sid=Telefret&mno='.$phonemsg.'&msg=code%20'.$code);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	
	echo $result;


?>