<?php 



include("config.php");

session_start();



    

    $email=$_SESSION['login_user'];

    $to=$_GET['mail'];

    $tel=$_SESSION['telephone'];

    

    

    $headers  = "De la part de ".$email ."\n a  ".$to."\n";

   $headers =$headers."Numéro de telephone ".$tel;

    //$headers .= "MIME-Version: 1.0\r\n";

   // $headers .= "Content-Type: text/html; charset=iso-8859-1\n";



        

    extract($_POST,EXTR_OVERWRITE);



    

    $msg = wordwrap($message,70);



    mail($to,$sujet,utf8_decode($msg),$headers);

   

   header("location: index.php");



?>