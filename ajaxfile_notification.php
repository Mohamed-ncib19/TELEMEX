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
$type= $_POST['type'];

$notification_input="";

if (isset($_POST['notification_input'])) {
    $notifi=$_POST['notification_input'];
    if ($notifi=="all") {
        # code...
    } else {
        $notification_input=" and notifications.type='$notifi' ";
    }
    
    }
if (isset($_POST['telephone'])) {
$tel=$_POST['telephone'];
}
$select="";
if($type=="transporteur"){
     $select .= " and  ( chargement.telephone = transporteur.telephone )  ".$notification_input." ";
    //$select .= "and  ( chargement.telephone = transporteur.telephone or (postuler.telephone = transporteur.telephone  and  notifications.to_telephone='$tel') )  ".$notification_input." ";

}else
if($type=="client"){
    $select .= " and  chargement.telephone = transporteur.telephone and notifications.type='Soumission' and transporteur.telephone='$tel' and notifications.to_telephone = '$tel' ";
}else {
    $select .= " and ( chargement.telephone = transporteur.telephone ) ".$notification_input." ";
}

## Search 
$searchQuery = " ";

if (isset($_POST['id_notification'])) {
    $id_notification= $_POST['id_notification'];

    $searchQuery .= " and notifications.id=".$id_notification." ";

}
if($pays3 != ''){
    $searchQuery .= " and ( CONVERT(CAST(CONVERT(pays_liv USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays3)."%'  ) ";
}
if($pays2 != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(pays_charg USING LATIN1) AS BINARY) USING UTF8) like '%".str_replace("'","\'",$pays2)."%' ) ";
}
if($villed != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(ville_charg USING LATIN1) AS BINARY) USING UTF8) like '%".str_replace("'","\'",$villed)."%' ) ";
}
if($villef != ''){
    $searchQuery .= " and (CONVERT(CAST(CONVERT(ville_liv USING LATIN1) AS BINARY) USING UTF8) like '%".str_replace("'","\'",$villef)."%' ) ";
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
$sel = mysqli_query($con,"select count(*) as allcount from chargement, transporteur ,notifications    WHERE 1    ".$select."  GROUP BY notifications.id ");
$records = mysqli_fetch_assoc($sel);
$totalRecords =$records!=null ?$records['allcount'] : 0; 

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from chargement, transporteur ,notifications    WHERE 1    ".$select."   ".$searchQuery." GROUP BY notifications.id");
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records!=null ?$records['allcount'] : 0; 

## Fetch records
$empQuery = "select *,notifications.telephone as telephonenotifications,notifications.id as id_notifications ,chargement.telephone as chargement_telephone from chargement, transporteur  ,notifications   WHERE 1 ".$select."   ".$searchQuery." GROUP BY notifications.id  order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $SenderInfo= array(
        "nom"=>"",
    		"prenom"=>"",
            "telephone"=>"",
            "email"=>"");
            $phone="";
        // if ($row['type']=="Reception") {
        //     $phone=$row['telephonenotifications'];    
        //     }
        //     else if ($row['type']=="Reception"){
        //         $phone=$row['to_telephone'];    
 
        //     }
        $phone=$row['telephonenotifications'];    

       
        $vehicules="SELECT * FROM transporteur WHERE telephone='$phone' ";
     
        $result = mysqli_query($con,$vehicules);
        while ($val= mysqli_fetch_array($result)) {
        $SenderInfo= array(
            "nom"=>$val["nom"],
                "prenom"=>$val["prenom"],
                "telephone"=>$val["telephone"],
                "email"=>$val["email"]);
        }
       
   

    $vehi=[];

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
            "id_chargement"=>$row['id_chargement'],

    		"telephone"=>$row['telephone'],
            "to_telephone"=>$row['to_telephone'],
            "telephonenotifications"=>$row['telephonenotifications'],

    		"vehicules"=>$vehi,
    		"avance"=>$row['avance'],
    		// "montant"=>$row['montant'],
    		"nom"=>$row['nom'],
    		"prenom"=>$row['prenom'],
            // "message"=>$row['message'],
            "statut"=>$row['statut'],

            "nomSender"=> $SenderInfo,
    		"r_s"=>$row['r_s'],
    		"id_notifications"=>$row['id_notifications'],
            "chargement_telephone"=>$row['chargement_telephone'],
            "type"=>$row['type']
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
