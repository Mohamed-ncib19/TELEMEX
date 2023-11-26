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

## Search 
$searchQuery = " ";



if($searchValue != ''){
	$searchQuery .= " and (
        ab.matricule like '%".str_replace("'","\'",$searchValue)."%'  or 
        ab.img_vehicule like '%".str_replace("'","\'",$searchValue)."%'  or 
        ab.type_vehicule like '%".str_replace("'","\'",$searchValue)."%'  or
        ab.marque like '%".str_replace("'","\'",$searchValue)."%'  or 
        ab.poid_max like '%".str_replace("'","\'",$searchValue)."%'  or 
        ab.nom_chauffeur like '%".str_replace("'","\'",$searchValue)."%'  or
        ab.telephone_chauffeur like '%".str_replace("'","\'",$searchValue)."%'  or 
        tr.nom like '%".str_replace("'","\'",$searchValue)."%'  or 
        tr.prenom like '%".str_replace("'","\'",$searchValue)."%'  or
        tr.telephone like '%".str_replace("'","\'",$searchValue)."%'  or 
        tr.email like '%".str_replace("'","\'",$searchValue)."%'  or 
        tr.r_s like '%".str_replace("'","\'",$searchValue)."%'  
        ) ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount FROM abonnements as ab, chargement ch, chargement_vehicules chv, transporteur tr  
WHERE 1 and ab.id_abonnement=chv.id_abonnement AND
ch.id_charg=chv.id_chargement and 
tr.telephone=ab.telephone");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount FROM abonnements as ab, chargement ch, chargement_vehicules chv, transporteur tr  
WHERE 1 and ab.id_abonnement=chv.id_abonnement AND
ch.id_charg=chv.id_chargement and 
tr.telephone=ab.telephone ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "SELECT chv.id, ab.id_abonnement,ab.matricule,ab.img_vehicule,ab.type_vehicule,ab.marque,
ab.poid_max,ab.nom_chauffeur,ab.telephone_chauffeur
,tr.nom,tr.prenom,tr.telephone,tr.email,tr.r_s FROM abonnements as ab, chargement ch, chargement_vehicules chv, transporteur tr  
WHERE 1 and ab.id_abonnement=chv.id_abonnement AND
ch.id_charg=chv.id_chargement and 
tr.telephone=ab.telephone  ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();
//echo $empQuery;
while ($row = mysqli_fetch_assoc($empRecords)) {

    $id_abonnement= $row['id_abonnement'];
    $now=$row['id_abonnement'];
    $selectSQL="SELECT * FROM status_gps WHERE id_chargement='$now' and Id_abonnement='$id_abonnement' and Etat=0 ";

    $resultat = mysqli_query($con,$selectSQL);
    $res=mysqli_fetch_array($resultat);
    $s=mysqli_num_rows($resultat);
    $data[] = array(
    		"img_vehicule"=>$row['img_vehicule'],
            "id"=>$row['id'],
    		"type_vehicule"=>$row['type_vehicule'],
    		"id_abonnement"=>$row['id_abonnement'],
    		"matricule"=>$row['matricule'],
    		"type_vehicule"=>$row['type_vehicule'],
    		"marque"=>$row['marque'],
    		"poid_max"=>$row['poid_max'],
            "nom_chauffeur"=>$row['nom_chauffeur'],
    		"telephone_chauffeur"=>$row['telephone_chauffeur'],
            "nom"=>$row['nom'],
            "prenom"=>$row['prenom'],
            "telephone"=>$row['telephone'],
            "r_s"=>$row['r_s'],
            "email"=>$row['email'],
            "suivi"=> $s>0


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
