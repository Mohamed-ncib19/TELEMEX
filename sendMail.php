<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';
require './PHPMailer-master/src/Exception.php';

require './configMailSend.php';



function sendMail($email,$mesasge,$senderName){

    try{
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;

    $mail->isSMTP();
    $mail->Host=MAILHOST;
    $mail->SMTPAuth = true;
    $mail->Username = USERNAME;
    $mail->Password=USER_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port =587 ;

    $mail->setFrom($email,$senderName); //SMTP mail sender
    $mail->addAddress(USERNAME); //mail recipient nnfranck78@gmail.com
    //$mail->addReplyTo(USERNAME,"Mohamed");

    $mail->isHTML(true);
    $mail->Subject = "demande d'emploi";
    $mail->Body = $mesasge;
    $mail->AltBody = $mesasge;
   $mail->send();
   return true;
}catch(Exception $e){
    return false;
}
    
}


?>