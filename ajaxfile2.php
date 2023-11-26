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
$status= $_POST['status'];


## Search 
$searchQuery = " ";
if($pays3 != ''){
    $searchQuery .= " and ( CONVERT(CAST(CONVERT(pays_liv USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays3)."%'  ) ";
}
if($pays2 != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(pays_charg USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays2)."%' ) ";
}
if($villed != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(ville_charg USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$villed)."%' ) ";
}
if($villef != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(ville_liv USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$villef)."%' ) ";
}

if($dated != ''){
    $searchQuery .= " and  STR_TO_DATE(chargement. date_charg, '%d/%m/%Y')>='$dated' ";
}
if($datef != ''){
    $searchQuery .= " and STR_TO_DATE(chargement. date_liv, '%d/%m/%Y')<='$datef' ";
}

if($status != ''){
    $searchQuery .= " and chargement.statutenvoi  = '$status'";
}
if($searchValue != ''){
	$searchQuery .= " and (
        chargement.marchandise like '%".str_replace("'","\'",$searchValue)."%'  or 
        chargement.img_march like '%".str_replace("'","\'",$searchValue)."%'  or 
        chargement.poid like '%".str_replace("'","\'",$searchValue)."%'  or
        chargement.prix_prop like '%".str_replace("'","\'",$searchValue)."%'  or 
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
$sel = mysqli_query($con,"select count(*) as allcount from chargement, transporteur     WHERE 1  and chargement.telephone=transporteur.telephone and  STR_TO_DATE(chargement. date_liv, '%d/%m/%Y') >= DATE_ADD( NOW(), INTERVAL - 1 DAY) ");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from chargement, transporteur     WHERE 1  and chargement.telephone=transporteur.telephone and  STR_TO_DATE(chargement. date_liv, '%d/%m/%Y') >= DATE_ADD( NOW(), INTERVAL - 1 DAY) ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from chargement, transporteur     WHERE 1  and chargement.telephone=transporteur.telephone and  STR_TO_DATE(chargement. date_liv, '%d/%m/%Y') >= DATE_ADD( NOW(), INTERVAL - 1 DAY) ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $id_charg=$row['id_charg'];
    $sqlgetaffectation="SELECT * FROM chargement_vehicules WHERE id_chargement='$id_charg' ";
     
$result = mysqli_query($con,$sqlgetaffectation);
$matricule = "Non affecter";

if ($result && mysqli_num_rows($result) > 0) {
  $rowveh = mysqli_fetch_assoc($result);
  $Existid_abonnement = $rowveh['id_abonnement'];
  mysqli_free_result($result);

  $sqlgetabonnement="SELECT * FROM abonnements WHERE id_abonnement='$Existid_abonnement' ";     
  $resultabo = mysqli_query($con,$sqlgetabonnement);
  $rowab = mysqli_fetch_assoc($resultabo);
  $matricule= $rowab['matricule'];
  mysqli_free_result($resultabo);
} 
    $data[] = array(
        "marchandise"=>$row['marchandise'],
    		"img_march"=>$row['img_march'],
            "poid"=>$row['poid'],
    		"prix_prop"=>$row['prix_prop'],
    		"ville_charg"=>$row['ville_charg'],
    		"date_charg"=>$row['date_charg'],
    		"ville_liv"=>$row['ville_liv'],
    		"date_liv"=>$row['date_liv'],
    		"pays_charg"=>$row['pays_charg'],
            "pays_liv"=>$row['pays_liv'],
    		"id_charg"=>$row['id_charg'],
            "nb_vehicules"=>$row['nb_vehicules'],
            "type_vehicule"=>$row['type_vehicule'],
            "priceestimated"=>$row['priceestimated'],
            "statutenvoi"=>$row['statutenvoi'],
            "matricule"=>$matricule,

    		"telephone"=>$row['telephone']

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
