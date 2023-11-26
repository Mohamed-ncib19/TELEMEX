<?php
   include("config.php");
   include 'sendsms.php';

   session_start();

if(isset($_SESSION['login_user'])) {

    
    extract($_POST,EXTR_OVERWRITE);
    send_sms($numero, $message);

        // Send email 
    
        // mail($to.",commercial@telefret.com",$sujet, $htmlContent,"Content-type:text/html;charset=UTF-8");
    
      
        header("location: espace-transporteur.php");
    
    
    
   
    }
else{
   // header("location: espace-transporteur.php?msg=cnx");
}

?>