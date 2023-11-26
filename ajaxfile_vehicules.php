<?php
include 'config1.php';


##Location request

$lat1 = $_POST['latitude'];
$lng1 = $_POST['longitude'];
$id_charg = $_POST['id_charg'];
$Existid_abonnement=0;
$sqlgetaffectation="SELECT * FROM chargement_vehicules WHERE id_chargement='$id_charg' ";
     
$result = mysqli_query($con,$sqlgetaffectation);

if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $Existid_abonnement = $row['id_abonnement'];
  mysqli_free_result($result);
} 

//login
$data = array(
    'username' => 'telemex',
    'password' => 'telemex2023'
);
$post_data = json_encode($data);
   
// Prepare new cURL resource
$crl = curl_init('http://fleet.tn/ws_rimtrack_all/signin');
curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($crl, CURLINFO_HEADER_OUT, true);
curl_setopt($crl, CURLOPT_POST, true);
curl_setopt($crl, CURLOPT_POSTFIELDS, $post_data);
 
// Set HTTP Header for POST request 
curl_setopt($crl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'
));
function distance($lat1, $lng1, $lat2, $lng2) {
  $earth_radius = 6371; // rayon de la Terre en kilomètres
  $dLat = deg2rad($lat2 - $lat1);
  $dLng = deg2rad($lng2 - $lng1);
  $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLng/2) * sin($dLng/2);
  $c = 2 * asin(sqrt($a));
  $distance = $earth_radius * $c;
  return $distance;
} 
// Submit the POST request
$resultLogin = curl_exec($crl);
// Close cURL session handle
if ($resultLogin === false) {
    // // Handle the error
    // $error = curl_error($crl);
    // echo "Error: " . $error;
    $response = array(
        "draw" => 1,
        "iTotalRecords" => "0",
        "iTotalDisplayRecords" =>"0",
        "aaData" => []
    );
} else {
    // Handle the successful result
    $ObjectvalueToken = json_decode($resultLogin);

// Liste des éléments de la table
$items = array(
);


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
// if($pays3 != ''){
//     $searchQuery .= " and (  CONVERT(CAST(CONVERT(chargement.pays_liv USING LATIN1) AS BINARY) USING UTF8)  like '%".str_replace("'","\'",$pays3)."%'  ) ";
// }


## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from abonnements  WHERE 1");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from abonnements   WHERE 1  ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from abonnements    WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();


// Requête cURL pour récupérer les informations de localisation GPS
$url = "http://fleet.tn/ws_rimtrack_all/realTimeRecords";
      
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: ".$ObjectvalueToken->token,
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);


$resp = curl_exec($curl);
$obj = new stdClass();

    // Add properties to the object
    $obj->errorCode ="Error";
    $resp1 = $obj;  // Set default value to $obj

// Boucle pour afficher chaque élément dans la table
while ($row = mysqli_fetch_array($empRecords)) {
  $checked=$row['id_abonnement']==$Existid_abonnement?'checked':'';
  foreach (json_decode($resp) as $e) {
      if ($e->idRealTimeRecord == $row['ID_gps']) {
          $resp1 = $e;
          break;  // Exit the loop if a match is found
      }
  }
    
    $apiKey = 'AIzaSyBzlVZve6W0EpZiZdIx5FZbz9fcZ0Lje0g';

    $resp = curl_exec($curl);
  
  if (is_array($resp1)) {
      // handle array
      // echo 'This is an array.';
     
    $lat2 = $resp1[0]->coordinate->lat;
    $lng2 = $resp1[0]->coordinate->lng;
    //Name of the position
    $lat = $lat2;
    $lng = $lng2;  
      // Construction de l'URL de requête à l'API de Google Maps
      $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lng&key=AIzaSyBzlVZve6W0EpZiZdIx5FZbz9fcZ0Lje0g";
      
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, $url);
      curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      
      $respp = curl_exec($curl_handle);
      $datarespp = json_decode($respp, true);
      
      // Vérification du statut de la requête et récupération du nom de la position
      if ($datarespp['status'] == 'OK') {
          $display_name = $datarespp['results'][0]['formatted_address'];
      } else {
          $display_name = 'Nom de position non disponible';
      }
  
    // Calcul de la distance entre les deux coordonnées GPS
    $distance = distance($lat1, $lng1, $lat2, $lng2);
    // Affichage de la ligne de la table avec les informations de l'élément

    $data[] = array(
        "ID_gps"=>$row['ID_gps'],
    		"matricule"=>$row['matricule'],
            "display_name"=>$display_name,
    		"distance"=>$distance.'km',
            "input"=>"<input type='checkbox' name='vehicules[]' {$checked} value='{$row['id_abonnement']}'>"
           	);

  } elseif (is_object($resp1)) {
      // handle object  
    if (property_exists($resp1, 'errorCode')) {
      $data[] = array(
        "ID_gps"=>$row['ID_gps'],
    		"matricule"=>$row['matricule'],
            "display_name"=>'Inconnu',
    		"distance"=>'Inconnu',
            "input"=>"<input type='checkbox' name='vehicules[]' {$checked} value='{$row['id_abonnement']}'>"
           	);
    }else{
      $lat2 = $resp1->coordinate->lat;
      $lng2 = $resp1->coordinate->lng;
      //Name of the position
      $lat = $lat2;
      $lng = $lng2;      
      // Construction de l'URL de requête à l'API de Google Maps
      $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lng&key=AIzaSyBzlVZve6W0EpZiZdIx5FZbz9fcZ0Lje0g";
      
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, $url);
      curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      $respp = curl_exec($curl_handle);
      $datarespp = json_decode($respp, true);
    //   var_dump($datarespp);
    //   var_dump("/////////////::::");


      // Vérification du statut de la requête et récupération du nom de la position
      if ($datarespp['status'] == 'OK') {
          $display_name = $datarespp['results'][0]['formatted_address'];
      } else {
          $display_name = 'Nom de position non disponible';
      }
      
      curl_close($curl_handle);
      $distance = distance($lat1, $lng1, $lat2, $lng2);

      // Utilisation du nom de la position dans votre tableau de données
      $data[] = array(
          "ID_gps" => $row['ID_gps'],
          "matricule" => $row['matricule'],
          "display_name" => $display_name,
          "distance" => $distance . 'km',
          "input" => "<input type='checkbox' name='vehicules[]' {$checked} value='{$row['id_abonnement']}'>"
      );
      
    }
  }
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

}

echo json_encode($response);
