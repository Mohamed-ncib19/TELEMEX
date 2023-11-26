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
$tel=$_POST['telephone'];


## Search 
$searchQuery = " ";
if($pays3 != ''){
    $searchQuery .= " and ( CONVERT(CAST(CONVERT(pays_liv USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays3)."%'  ) ";
}
if($pays2 != ''){
    $searchQuery .= " and ( CONVERT(CAST(CONVERT(pays_charg USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays2)."%' ) ";
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
$sel = mysqli_query($con,"select count(*) as allcount from chargement, transporteur ,postuler    WHERE 1  and postuler.id_chargement=chargement.id_charg and chargement.telephone=transporteur.telephone and  STR_TO_DATE(chargement. date_liv, '%d/%m/%Y') >= NOW()  and postuler.telephone='$tel' ");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from chargement, transporteur ,postuler     WHERE 1  and postuler.id_chargement=chargement.id_charg and chargement.telephone=transporteur.telephone and  STR_TO_DATE(chargement. date_liv, '%d/%m/%Y') >= NOW() and postuler.telephone='$tel' ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from chargement, transporteur  ,postuler    WHERE 1  and postuler.id_chargement=chargement.id_charg and chargement.telephone=transporteur.telephone and  STR_TO_DATE(chargement. date_liv, '%d/%m/%Y') >= NOW() and postuler.telephone='$tel' ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {

    $tags = explode(';',$row['vehicules']);
    $vehi=[];
foreach($tags as $key) {
    if ($key!="") {
      
            
        $vehicules="SELECT * FROM abonnements WHERE id_abonnement='$key' ORDER BY id_abonnement DESC ";
     
        $result = mysqli_query($con,$vehicules);
        while ($val= mysqli_fetch_array($result)) {
            $vehi[Count($vehi)]=$val;
        }
    }    
       
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
    		"telephone"=>$row['telephone'],
    		"vehicules"=>$vehi,
    		"avance"=>$row['avance'],
    		"montant"=>$row['montant'],
    		"id_postuler"=>$row['id'],

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
