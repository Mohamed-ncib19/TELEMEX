<?php
include("config.php");
session_start();
   
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
	$login = mysqli_real_escape_string($db,$_POST['login']);	
	$passwd = mysqli_real_escape_string($db,$_POST['password']); 

	$sql = "SELECT * FROM `transporteur` WHERE (`telephone`='$login' AND `password`='$passwd' ) OR (`email`='$login' AND `password`='$passwd')";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


	$count = mysqli_num_rows($result);
      
		
	if($count == 1) {
				
		header("Content-Type: text/html;charset=UTF-8");
		if(isset($_POST['verifcode'])){
			if($row["code"]==$_POST['verifcode']){
				$sql2 = "UPDATE `transporteur` SET `verif`=1 WHERE (`telephone`='$login' AND `password`='$passwd' ) OR (`email`='$login' AND `password`='$passwd')";
				$result2 = mysqli_query($db,$sql2);
				$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
				
				$date_limite = $row["date_limite"];  
				$date_limite_americain = str_replace('/', '-', $date_limite );
				$today =   strtotime(date('d-m-Y')) ;

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
				$_SESSION['date_limite'] =   strtotime($date_limite_americain) ;
				$_SESSION['date_limite1'] =   $date_limite ;
				
				header("location: index.php");
			}
			else{
				header("Location: index.php?verif=Le code de vérification est incorrecte");
			}
		}
		
		else{
			if ($row["verif"]==0){
				header("Location: index.php?verif=Insérer votre login et le code reçu via e-mail ou téléphone");
			}  
			else if ($row["verif"]==5){
				header("Location: index.php?ban=Vous êtes Bannis ! contacter l'administrateur par e-mail ou par téléphone");
			}
			else {
				$date_limite = $row["date_limite"];  
				$today =   strtotime(date('d/m/Y')) ;
				  
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
				
				$date_lim_americain = str_replace('/', '-', $date_limite );
				$_SESSION['date_limite'] = strtotime($date_lim_americain) ;
				
				$_SESSION['date_limite1'] = $date_limite ;
				 
				if($_SESSION['type']=="admin") {
					header("location: index-admin.php");
				}

				else if ( $_SESSION['type']=="transporteur" ) {
					header("location: espace-transporteur.php");  
				}

				else {
				    header("location: index.php");
				}
			}
			
		}
	}
	else {
		header("Location: index.php?message=Le numéro de Téléphone, l'e-mail ou le Mot de passe est invalide");
	}
}
?>