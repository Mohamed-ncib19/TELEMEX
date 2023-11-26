<?php 

	include("config.php");
	session_start();


	extract($_POST,EXTR_OVERWRITE);


	$msg = wordwrap($message,70);
	/*********************/
        $captcha;

        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Veuillez vérifier le formulaire captcha.</h2>';
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
                echo '<h2>Vous êtes spammeur ! Get the @$%K out</h2>';
        }
	
	$to      = 'contact@telefret.com';
	$subject = $sujet;
	$telephone=$phone;
	$msg=$msg."\n le numero de telephone : ".$telephone."\n Prenom : ".$prenom."\n Nom : ".$nom;
	
	$headers = 'From: ' . $mail . "\r\n" .
	'Reply-To: ' . $mail . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	mail($to, $subject,utf8_decode($msg), $headers);

	header("location: index.php");
	
 ?>