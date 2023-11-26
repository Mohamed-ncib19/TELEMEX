<?php
	include("config.php");
	session_start();
   
	extract($_POST,EXTR_OVERWRITE);
	
	
	
	function getExtension($str) {
		$i = strrpos($str,".");
		if (!$i) { return ""; }
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
	}	
	
	if($img_1 ==""){
		$sql1 = "UPDATE `pub` SET `image1`='' WHERE `id`=1";
		$r1=mysqli_query($db,$sql1);
		echo "test1";
	}
	else{
		echo $filename1 = stripslashes($_FILES['image1']['name']);
		if($filename1!=""){
			$extension1 = getExtension($filename1);
			$extension1 = strtolower($extension1);
			$image_name1='image1.'.$extension1;
			$newname1="./img/pub/".$image_name1;
			$newname11=$image_name1;
			
			if(($extension1=="jpg") or ($extension1=="jpeg")){
				$copied = copy($_FILES['image1']['tmp_name'], $newname1);
				$sql1 = "UPDATE `pub` SET `image1`='image1.jpg' WHERE `id`=1";
				$r1=mysqli_query($db,$sql1);
			}
			else{
				header("location: pubs.php?error=Le format de l'image de la publicité 1 n'est pas valide!");
				exit();
			}
		}
	}


	if($img_2 ==""){
		 $sql2 = "UPDATE `pub` SET `image2`='' WHERE `id`=1";
		$r2=mysqli_query($db,$sql2);
	}
	else{
		$filename2 = stripslashes($_FILES['image2']['name']);
		if($filename2!=""){
			$extension2 = getExtension($filename2);
			$extension2 = strtolower($extension2);
			$image_name2='image2.'.$extension2;
			$newname2="./img/pub/".$image_name2;
			$newname22=$image_name2;
			if (($extension2=="jpg") or ($extension2=="jpeg")){
				$copied = copy($_FILES['image2']['tmp_name'], $newname2);
				$sql2 = "UPDATE `pub` SET `image2`='image2.jpg' WHERE `id`=1";
				$r2=mysqli_query($db,$sql2);
			}
			else{
				header("location: pubs.php?error=Le format de l'image de la publicité 2 n'est pas valide!");
				exit();
			}
		}	
	}
	

	if($img_3 ==""){
		$sql3 = "UPDATE `pub` SET `image3`='' WHERE `id`=1";
		$r3=mysqli_query($db,$sql3);
	}
	else{
		$filename3 = stripslashes($_FILES['image3']['name']);
		if($filename3!=""){
			$extension3 = getExtension($filename3);
			$extension3 = strtolower($extension3);
			$image_name3='image3.'.$extension3;
			$newname3="./img/pub/".$image_name3;
			$newname33=$image_name3;
			if (($extension3=="jpg") or ($extension3=="jpeg")){
				$copied = copy($_FILES['image3']['tmp_name'], $newname3);
				$sql3 = "UPDATE `pub` SET `image3`='image3.jpg' WHERE `id`=1";
				$r3=mysqli_query($db,$sql3);
			}
			else{
				header("location: pubs.php?error=Le format de l'image de la publicité 3 n'est pas valide!");
				exit();
			}
		}
	}
	
	header("location: pubs.php");

?>