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
/**
$pays3 = $_POST['pays3'];
$pays2 = $_POST['pays2'];
$villed= $_POST['villed'];
$villef= $_POST['villef'];
$dated='' ;
// $_POST['dated'];
$datef='' ;*/
// $_POST['datef'];
$now="";
if (isset($_POST['now'])) {
    $now= "and  STR_TO_DATE( disponibilite.date_arr, '%d/%m/%Y') >= NOW() ";
  }

## Search 
$searchQuery = " ";/**
if($pays3 != '' && $pays3 != 'all'){
    $searchQuery .= " and ( CONVERT(CAST(CONVERT(disponibilite.pays_arr USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays3)."%'  ) ";
}
if($pays2 != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(disponibilite.pays_dep USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays2)."%' ) ";
}
if($villed != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(disponibilite.ville_dep USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$villed)."%' ) ";
}
if($villef != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(disponibilite.ville_arr USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$villef)."%' ) ";
}

if($dated != ''){
    $searchQuery .= " and  STR_TO_DATE( disponibilite.date_dep, '%d/%m/%Y')>='$dated' ";
}
if($datef != ''){
    $searchQuery .= " and STR_TO_DATE( disponibilite.date_arr, '%d/%m/%Y')<='$datef' ";
}
 */
if($searchValue != ''){
	$searchQuery .= " and (
        abonnements.img_vehicule like '%".str_replace("'","\'",$searchValue)."%'  or 
        disponibilite.poid_disp like '%".str_replace("'","\'",$searchValue)."%'  or 
        abonnements.type_vehicule like '%".str_replace("'","\'",$searchValue)."%'  or
        disponibilite.ville_dep like '%".str_replace("'","\'",$searchValue)."%'  or 
        disponibilite.date_dep like '%".str_replace("'","\'",$searchValue)."%'  or 
        disponibilite.ville_arr like '%".str_replace("'","\'",$searchValue)."%'  or
        disponibilite.date_arr like '%".str_replace("'","\'",$searchValue)."%'  or 
        disponibilite.pays_dep like '%".str_replace("'","\'",$searchValue)."%'  or 
        abonnements.telephone like '%".str_replace("'","\'",$searchValue)."%'  or
        abonnements.matricule like '%".str_replace("'","\'",$searchValue)."%'  or 
        transporteur.genre like '%".str_replace("'","\'",$searchValue)."%'  or 
        transporteur.nom like '%".str_replace("'","\'",$searchValue)."%'  
        ) ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from disponibilite, transporteur, abonnements    ,status_gps,chargement WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone=transporteur.telephone and status_gps.Id_abonnement=abonnements.id_abonnement and chargement.id_charg=status_gps.id_chargement and disponibilite.id_disp=status_gps.Id_dispo  ".$now." ");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from disponibilite, transporteur, abonnements   ,status_gps,chargement WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone=transporteur.telephone and status_gps.Id_abonnement=abonnements.id_abonnement and chargement.id_charg=status_gps.id_chargement and disponibilite.id_disp=status_gps.Id_dispo  ".$now." ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select *,status_gps.Etat as suivi from disponibilite, transporteur, abonnements   ,status_gps,chargement WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone=transporteur.telephone and status_gps.Id_abonnement=abonnements.id_abonnement and chargement.id_charg=status_gps.id_chargement and disponibilite.id_disp=status_gps.Id_dispo ".$now." ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
    		"img_vehicule"=>$row['img_vehicule'],
            "poid_disp"=>$row['poid_disp'],
    		"type_vehicule"=>$row['type_vehicule'],
    		"ville_dep"=>$row['ville_dep'],
    		"date_dep"=>$row['date_dep'],
    		"ville_arr"=>$row['ville_arr'],
    		"date_arr"=>$row['date_arr'],
    		"pays_dep"=>$row['pays_dep'],
            "pays_arr"=>$row['pays_arr'],
    		"telephone"=>$row['telephone'],
            "matricule"=>$row['matricule'],
            "genre"=>$row['genre'],
            "nom"=>$row['nom'],
            "Id_status"=>$row['Id_status'],
            "ID_gps"=>$row['ID_gps'],
            "Date_D"=>$row['Date_D'],
            "Date_F"=>$row['Date_F'],
            "Etat"=>$row['Etat'],
            "id_abonnement"=>$row['Id_abonnement'],
            "id_chargement"=>$row['id_chargement'],
            "id_disp"=>$row['id_disp'],

            "suivi"=>$row['suivi']


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
