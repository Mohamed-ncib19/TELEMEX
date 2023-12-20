<?php
// auth.php
include("config.php");
session_start();
   
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Échapper les valeurs pour éviter les attaques par injection SQL
    $escaped_login = $db->real_escape_string($login);
    $escaped_password = $db->real_escape_string($password);

    // Requête pour vérifier les informations d'identification
    $sql = "SELECT * FROM `transporteur` WHERE (`telephone`='$escaped_login' AND `password`='$escaped_password' ) OR (`email`='$escaped_login' AND `password`='$escaped_password')";
    $result = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if (mysqli_num_rows($result) === 1) {
        //header("Content-Type: text/html;charset=UTF-8");
		
		  
		$_SESSION['login_user'] = $row["nom"];
		$_SESSION['telephone'] = $row["telephone"];
		$_SESSION['indicatif'] = $row["indicatif"];
		$_SESSION['type'] = $row["type"];
		$_SESSION['nom'] = $row["nom"];
		$_SESSION['prenom'] = $row["prenom"];
		$_SESSION['pays'] = $row["pays"];
		$_SESSION['adresse'] = $row["adresse"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['genre'] = $row["genre"];
		$_SESSION['r_s'] = $row["r_s"];

        echo "success";
       
    } else {
        echo "failure";
    }

    // Fermer la connexion
    $db->close();
}
?>
