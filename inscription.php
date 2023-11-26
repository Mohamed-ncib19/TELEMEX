<?php
   include("config.php");
   session_start();
   
   
   

   
   
	/********************************* Mail Code Verification -V1- ********************************/
   	/*
	$chars = "abcdefghijkmnopqrstuvwxyz023456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
	srand((double)microtime()*1000000); 
    $i = 0; 
    $code = '' ; 

    while ($i < 10) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $code = $code . $tmp; 
        $i++; 
    }
	*/

	/************************** Phone Code Verification **************************************/
	
	$code = '' ; 
	$i=0;
	
    while ($i < 4) {
        $num = rand(0,9); 
        $code = $code.$num; 
        $i++; 
    }
	
	/***************************************************************************************/
	 

    if (empty($_POST['r_s'])){
        $r_s =" ";
    }
    else{
        $r_s = $_POST['r_s'];
    }
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pays = $_POST['pays'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $indicatif = $_POST['indicatif'];
    $mail = $_POST['mail'];
    $passwd = $_POST['passwd'];
    $genre = $_POST['genre'];
    $type = $_POST['type'];

    $teleph=$indicatif.$telephone;
    /*********************/
        $captcha;

        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "6LfAXwoaAAAAABGZnMC4k9da4443ZfS00p72Tr0B";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
                echo '<h2>Thanks for posting comment</h2>';
        } else {
                echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }
    /*****************************/
    $date_limite = date('d/m/Y', strtotime("1 month"));
    $date_Inscrit=date('d/m/Y');

	

    echo $insertSQL ="INSERT INTO transporteur (`nom`, `prenom`, `r_s`, `pays`, `adresse`, `telephone`, `email`, `password` , `genre`, `type`, `date_limite`,`note`, `nb_note`,`total_note` , `verif`, `code` ,`indicatif`,`Date_inscri`) VALUES ('$nom', '$prenom', '$r_s', '$pays', '$adresse', '$telephone', '$mail', '$passwd', '$genre', '$type', '$date_limite', 0, 0, 0, 1, '$code','$indicatif','$date_Inscrit')";
    $result = mysqli_query($db,$insertSQL);
    
	/**************************************** Verification par Phone ****************************************/
	$phonemsg=substr($teleph,2);
	$data = "";
	$ch = curl_init('https://api.1s2u.io/bulksms?username=smscontact020&password=web89355&mt=0&fl=0&sid=Telefret&mno='.$phonemsg.'&msg=code%20'.$code);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	
	//echo $result;
	
	/*******************************************************************************************************/
	
	/**************************************** Verification par Mail ****************************************/
	if(isset($_POST[$mail])){
	$msg = "Cliquez sur le lien pour activer votre compte :" . "\r\n" ." www.telefret.com/verify.php?code=".$code;
	
	$subject = "Verification de compte";
	
	$headers = 'From: noreplay@telefret.com' . "\r\n" .
	'Reply-To:  noreplay@telefret.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	mail($mail, $subject, $msg, $headers);
	}
	/******************************************************************************************************/
	
	header("location: index.php");
?> 