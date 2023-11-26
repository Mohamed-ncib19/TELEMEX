<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
    echo json_encode($_POST) ;
    extract($_POST,EXTR_OVERWRITE);
	
    $telephone=$_SESSION['telephone'];
	
    $today=strtotime(date('d-m-Y'));
    $today1=date('d/m/Y');
    
	$selectSQL="SELECT * FROM abonnements WHERE telephone='$telephone'";
	$resultat = mysqli_query($db,$selectSQL);
	$s=mysqli_num_rows($resultat);
    echo $_SESSION['date_limite1'];
									
    if ( ($_SESSION['date_limite'] >= $today) AND ($s==0) ){
        $valide=9;
		$onemonth="1 months";
        $date_fin=date('d/m/Y', strtotime($onemonth));
		
		/*$_SESSION['date_limite1'];*/
    }
    else{
        $valide=0;
        $date_fin= date('d/m/Y', strtotime($pack));
    }
     
	if (empty($_POST['gps'])){
            $gpst="0";
        }
    else{
        $gpst="1";
    }
    
    function getExtension($str) {
        $i = strrpos($str,".");
        if (!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }	
    echo $_FILES['avat']['name'];

  
    if ($_FILES['avat']['name']!="") {

    $filename1 = stripslashes($_FILES['avat']['name']);
    
    $extension1 = getExtension($filename1);
    $extension1 = strtolower($extension1);
    
    $image_name1=time().'1.'.$extension1;
    
    $newname1="./img/uploaded/".$image_name1;
    $newname11=$image_name1;
    
    $copied1 = copy($_FILES['avat']['tmp_name'], $newname1);
        $img_vehicule=$image_name1;
    }else
    $img_vehicule=$old_image;


      
    if ($_FILES['avat1']['name']!="") {

        $filename2 = stripslashes($_FILES['avat1']['name']);
        
        $extension2 = getExtension($filename2);
        $extension2 = strtolower($extension2);
        
        $image_name2=time().'2.'.$extension2;
        
        $newname2="./img/uploaded/".$image_name2;
        $newname22=$image_name2;
        
        $copied2 = copy($_FILES['avat1']['tmp_name'], $newname2);
            $carte_grise=$image_name2;
        }else
        $carte_grise=$old_image1;



        
    if ($_FILES['avat2']['name']!="") {

        $filename3 = stripslashes($_FILES['avat2']['name']);
        
        $extension3 = getExtension($filename3);
        $extension3 = strtolower($extension3);
        
        $image_name3=time().'3.'.$extension3;
        
        $newname3="./img/uploaded/".$image_name3;
        $newname33=$image_name3;
        
        $copied3 = copy($_FILES['avat2']['tmp_name'], $newname3);
            $assurance=$image_name3;
        }else
        $assurance=$old_image2;


         
    if ($_FILES['avat3']['name']!="") {

        $filename4 = stripslashes($_FILES['avat3']['name']);
        
        $extension4 = getExtension($filename4);
        $extension4 = strtolower($extension4);
        
        $image_name4=time().'4.'.$extension4;
        
        $newname4="./img/uploaded/".$image_name4;
        $newname44=$image_name4;
        
        $copied4 = copy($_FILES['avat3']['tmp_name'], $newname4);
            $cni=$image_name4;
        }else
        $cni=$old_image3;
   

    $insertSQL= "UPDATE `abonnements` SET   
    `cni`='$cni',
    `assurance`='$assurance',
    `carte_grise`='$carte_grise',
    
    `matricule`='$matricule', `ID_gps`='$id_gps', `marque`='$marque', `date_deb`='$date_deb', `date_fin`='$date_fin', `gps`='$gps', `telephone`='$telephone', `type_vehicule`='$type_vehicule', `poid_max`='$poid_max', `img_vehicule`='$img_vehicule', `nom_chauffeur`='$nom_chauffeur', `telephone_chauffeur`='$telephone_chauffeur'  WHERE `id_abonnement`='$id_abonnement'";
    $result = mysqli_query($db,$insertSQL);
    
    header("location: abonnement.php");
    
    }

?>