<?php
// register.php
include("config.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $prenom = $_POST['name1'];
    $phone = $_POST['phone'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $password = $_POST['SignUppassword'];
    $confirmpassword = $_POST['confirmpassword'];
    $pays = $_POST['pays'];
    $phoneCode = $_POST['phoneCode'];
    $type = "client";
    



    // Vérifiez que les mots de passe correspondent
    if ($password !== $confirmpassword) {
        echo "failure";
        exit();
    }

    // Échapper les valeurs pour éviter les attaques par injection SQL
    $escaped_name = $db->real_escape_string($name);
    $escaped_prenom = $db->real_escape_string($prenom);
    $escaped_telephone = $db->real_escape_string($phone);
    $escaped_adresse = $db->real_escape_string($ville);
    $escaped_email = $db->real_escape_string($email);
    $hashed_password = $password; // Hashage du mot de passe
    $escaped_pays = $db->real_escape_string($pays);

    // Requête pour insérer les données dans la base de données
    $insertSQL = "INSERT INTO transporteur (`nom`, `prenom`, `pays`, `adresse`, `telephone`, `email`, `password`,`type`, `indicatif`, `Date_inscri`) 
                  VALUES ('$escaped_name', '$escaped_prenom', '$escaped_pays', '$escaped_adresse', '$escaped_telephone', '$escaped_email', '$hashed_password','$type','$phoneCode',  NOW())";

    if ($db->query($insertSQL) === TRUE) {
        $_SESSION['login_user'] = $name;
		$_SESSION['telephone'] = $phone;
		$_SESSION['indicatif'] = $phoneCode;
		$_SESSION['type'] = $type;
		$_SESSION['nom'] = $name;
		$_SESSION['prenom'] = $prenom;
		$_SESSION['pays'] = $pays;
		$_SESSION['adresse'] = $ville;
		$_SESSION['email'] = $email;
		
        echo "success";
        
    } else {
        echo "failure";
    }

    // Fermer la connexion
    $db->close();
}
?>
