<?php
include 'config1.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Custom Field value
$pays3 = $_POST['pays3'];
$pays2 = $_POST['pays2'];
$villed= $_POST['villed'];
$villef= $_POST['villef'];
$dated= $_POST['dated'];
$datef= $_POST['datef'];
$timed= $_POST['timed'];
$timef= $_POST['timef'];
$status= $_POST['status'];

$telephone= "";
if (isset($_POST['telephone'])) {
    $val=$_POST['telephone'];
    $telephone= "and chargement.telephone= '$val'";
  }

## Search 
$searchQuery = " ";
if($pays3 != ''){
    $searchQuery .= " and (  CONVERT(CAST(CONVERT(chargement.pays_liv USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays3)."%'  ) ";
}
if($pays2 != ''){
    $searchQuery .= " and ( CONVERT(CAST(CONVERT(chargement.pays_charg USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays2)."%' ) ";
}
if($villed != ''){
    $searchQuery .= " and ( CONVERT(CAST(CONVERT(chargement.ville_charg USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$villed)."%' ) ";
}
if($villef != ''){
    $searchQuery .= " and ( CONVERT(CAST(CONVERT(chargement.ville_liv USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$villef)."%' ) ";
}

if($status != ''){
    $searchQuery .= " and chargement.statutenvoi  = '$status'";
}

if(isset($_POST['Last24'])&&$_POST['Last24']){
    $searchQuery .= " and  TIMESTAMPDIFF(SECOND, NOW(), STR_TO_DATE(chargement. date_charg, '%d/%m/%Y %H:%i:%s')) > -86400 ";
}

if($dated != '' && $timed != '' ){
    $datedtimed =$dated." ".$timed ;
    $searchQuery .= " and  STR_TO_DATE(chargement. date_charg, '%d/%m/%Y %H:%i:%s') >= STR_TO_DATE(' $datedtimed ', '%Y-%m-%d %H:%i:%s') ";
}
if($datef != '' && $timef != ''){
    $datedtimef =$datef." ".$timef ;
    $searchQuery .= " and STR_TO_DATE(chargement. date_liv, '%d/%m/%Y %H:%i:%s') <= STR_TO_DATE('$datedtimef', '%Y-%m-%d %H:%i:%s') ";
}
if($dated == '' && $timed != '' ){
    $datedtimed =$dated." ".$timed ;
    $searchQuery .= " and TIME(SUBSTRING(chargement.date_charg, 12))  >= TIME(' $timed ')  ";
}
if($datef == '' && $timef != ''){
    $datedtimef =$datef." ".$timef ;
    $searchQuery .= " and TIME(SUBSTRING(chargement. date_liv, 12))  <= TIME(' $timef ')  ";
}
if($dated != '' && $timed == '' ){
    $datedtimed =$dated ;
    $searchQuery .= " and  STR_TO_DATE(chargement. date_charg, '%d/%m/%Y') >= STR_TO_DATE(' $datedtimed ', '%Y-%m-%d') ";
}
if($datef != '' && $timef == ''){
    $datedtimef =$datef ;
    $searchQuery .= " and STR_TO_DATE(chargement. date_liv, '%d/%m/%Y') <= STR_TO_DATE('$datedtimef', '%Y-%m-%d') ";
}
if($searchValue != ''){
	$searchQuery .= " and (
        chargement.marchandise like '%".str_replace("'","\'",$searchValue)."%'  or 
        chargement.img_march like '%".str_replace("'","\'",$searchValue)."%'  or 
        chargement.poid like '%".str_replace("'","\'",$searchValue)."%'  or
        chargement.volume like '%".str_replace("'","\'",$searchValue)."%'  or 
        chargement.ville_charg like '%".str_replace("'","\'",$searchValue)."%'  or 
        chargement.date_charg like '%".str_replace("'","\'",$searchValue)."%'  or
        chargement.ville_liv like '%".str_replace("'","\'",$searchValue)."%'  or 
        chargement.date_liv like '%".str_replace("'","\'",$searchValue)."%'  or 
        chargement.pays_charg like '%".str_replace("'","\'",$searchValue)."%'  or
        chargement.pays_liv like '%".str_replace("'","\'",$searchValue)."%'  or 
        chargement.id_charg like '%".str_replace("'","\'",$searchValue)."%'  or 
        chargement.telephone like '%".str_replace("'","\'",$searchValue)."%'  
        ) ";
}
## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from chargement  WHERE 1 ".$telephone." ");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from chargement   WHERE 1 ".$telephone." ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from chargement    WHERE 1 ".$telephone." ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();




while ($row = mysqli_fetch_assoc($empRecords)) {
    $telchar= $row['telephone'];
    $idchar= $row['id_charg'];

    $sql = "SELECT * FROM `transporteur` WHERE `telephone`='$telchar'";
	$result = mysqli_query($con,$sql);
	$row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);



    //Recuperer tout les vehicules assigner au chargement 
    //le sttut doit en attente (1) 

    $vehiculedispo="SELECT * FROM abonnements WHERE  id_abonnement  IN (SELECT ab.id_abonnement FROM abonnements ab, chargement ch, chargement_vehicules chv  WHERE 1 and ab.id_abonnement=chv.id_abonnement AND
    ch.id_charg=chv.id_chargement and ch.id_charg='$idchar' and  ch.telephone='$telchar') ORDER BY id_abonnement DESC;";
//and ch.status=0 and ch.statutenvoi!=0 
$res = mysqli_query($con,$vehiculedispo);

	$count = mysqli_num_rows($result);
    $data[] = array(
        "marchandise"=>$row['marchandise'],
    		"img_march"=>$row['img_march'],
            "poid"=>$row['poid'],
    		"volume"=>$row['volume'],
    		"ville_charg"=> $row['ville_charg'],
    		"date_charg"=>$row['date_charg'],
    		"ville_liv"=>$row['ville_liv'],
    		"date_liv"=>$row['date_liv'],
    		"pays_charg"=>$row['pays_charg'],
            "pays_liv"=>$row['pays_liv'],
    		"id_charg"=>$row['id_charg'],
            "prix_prop"=>$row['prix_prop'],
    		"priceestimated"=>$row['priceestimated'],
    		"statutenvoi"=>$row['statutenvoi'],
    		"telephone"=>$row['telephone'],

    		"rate"=>$row['rate'],
    		"type_vehicule"=>$row['type_vehicule'],

            "contact_name"=>$row['contact_name'],
    		"contact_phone"=>$row['contact_phone'],
    		"name_expediteur"=>$row['name_expediteur'],
    		"telephone_expediteur"=>$row['telephone_expediteur'],
            "clientphone"=>$row1['telephone'],
    		"clientname"=>$row1['nom'],
            "vehiculechargement"=>  mysqli_fetch_all($res, MYSQLI_ASSOC)
    	);
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

echo json_encode($response);
