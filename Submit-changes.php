<?php
include ('config.php');
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $phone = $_SESSION['telephone'];
    $getUser = "SELECT * FROM `transporteur` WHERE (`telephone`='$phone');";
    $result = $db->query($getUser);
    $row = $result -> fetch_array(MYSQLI_NUM);
    
     if(($_SESSION['login_user'] != $_POST['name']) or ($_SESSION['prenom'] != $_POST['name1']) or ($_SESSION['telephone'] != $_POST['phone']) or ($_SESSION['email'] != $_POST['email']) or($_SESSION['adresse'] != $_POST['ville']) ){
       $name = $_POST['name'];
       $firstName = $_POST['name1'];
       $mail = $_POST['email'];
       $ville = $_POST['ville'];
       $newPhone = $_POST['phone'];
       $updateInformation = "UPDATE `transporteur` SET
        nom='$name',
        prenom='$firstName',
        adresse='$ville',
        telephone='$newPhone',
        email='$mail'
        WHERE telephone = '$phone'
        ";
        $updateResult = $db->query($updateInformation);
        if ($updateResult) {
        echo "success"; 
        $_SESSION['login_user'] = $name;
		$_SESSION['telephone'] = $newPhone;
		$_SESSION['nom'] = $name;
		$_SESSION['prenom'] = $firstName;
		$_SESSION['adresse'] = $ville;
		$_SESSION['email'] = $mail;
        }else{
            echo "update_failed";
        } 
    }
}
$db->close();
?>