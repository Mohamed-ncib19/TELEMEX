<?php
include('./config.php');
session_start();
$phone = $_SESSION['telephone'];
    $getUser = "SELECT * FROM `transporteur` WHERE (`telephone`='$phone');";
    $result = $db->query($getUser);
    $row = $result -> fetch_array(MYSQLI_NUM);
   
 $currntPassword = $_POST['password'];
if($currntPassword != $row[7]){
    echo "wrong_curent_password";
    exit();
}else{
    $newPassword = $_POST['newPassword'];
    $confirmeNewPassword = $_POST['confirmpassword'];
    if($newPassword != $confirmeNewPassword){
        echo "not_matching_passwords";
        exit();
    }else if(($newPassword === $confirmeNewPassword) and (strlen($newPassword)<10)){
        echo "too_short_password";
        exit();
    }else{
        $chnagePassword = "UPDATE `transporteur` set 
        password='$newPassword'
        where telephone = '$phone';
        ";
        $resultChangePassowrd = $db->query($chnagePassword);
        if($resultChangePassowrd){
            echo "password_changed";
    }else{
        echo "error_in_the_system";
    }
}
} 

$db->close();


?>