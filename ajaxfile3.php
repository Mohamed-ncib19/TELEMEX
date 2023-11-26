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
$telephone= "";
if (isset($_POST['telephone'])) {
    $val=$_POST['telephone'];
    $telephone= "and abonnements.telephone = '$val'";
  }


## Search 
$searchQuery = " ";
if($pays3 != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(pays_arr USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays3)."%'  ) ";
}
if($pays2 != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(pays_dep USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays2)."%' ) ";
}
if($villed != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(ville_dep USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$villed)."%' ) ";
}
if($villef != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(ville_arr USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$villef)."%' ) ";
}

if($dated != ''){
    $searchQuery .= " and  STR_TO_DATE(abonnements. date_dep, '%d/%m/%Y')>='$dated' ";
}
if($datef != ''){
    $searchQuery .= " and STR_TO_DATE(abonnements. date_arr, '%d/%m/%Y')<='$datef' ";
}
if($searchValue != ''){
	$searchQuery .= " and (
        abonnements.img_vehicule like '%".str_replace("'","\'",$searchValue)."%'  or 
        disponibilite.ville_dep like '%".str_replace("'","\'",$searchValue)."%'  or 
        disponibilite.date_dep like '%".str_replace("'","\'",$searchValue)."%'  or
        disponibilite.ville_arr like '%".str_replace("'","\'",$searchValue)."%'  or 
        disponibilite.ville_charg like '%".str_replace("'","\'",$searchValue)."%'  or 
        disponibilite.date_arr like '%".str_replace("'","\'",$searchValue)."%'  or
        disponibilite.pays_dep like '%".str_replace("'","\'",$searchValue)."%'  or 
        disponibilite.pays_arr like '%".str_replace("'","\'",$searchValue)."%'  or 
        abonnements.telephone like '%".str_replace("'","\'",$searchValue)."%'  or
        abonnements.matricule like '%".str_replace("'","\'",$searchValue)."%'  or 
        disponibilite.id_disp like '%".str_replace("'","\'",$searchValue)."%' 
        ) ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from disponibilite, abonnements    WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement ".$telephone." ");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from disponibilite, abonnements   WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement ".$telephone." ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from disponibilite, abonnements   WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement ".$telephone." ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
    		"img_vehicule"=>$row['img_vehicule'],
    		"ville_dep"=>$row['ville_dep'],
    		"date_dep"=>$row['date_dep'],
    		"ville_arr"=>$row['ville_arr'],
    		"date_arr"=>$row['date_arr'],
    		"pays_dep"=>$row['pays_dep'],
            "pays_arr"=>$row['pays_arr'],
    		"telephone"=>$row['telephone'],
            "matricule"=>$row['matricule'],
            "id_disp"=>$row['id_disp']


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
