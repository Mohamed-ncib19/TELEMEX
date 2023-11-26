<?php include "header-new.php" ?>

<?php 
	$id_charg=$_GET["id_charg"];

	$telephone=$_SESSION['login_user'];
	
	if (($_SESSION['type']=="client") OR ($_SESSION['type']=="transporteur") OR ($_SESSION['type']=="admin")){
		
		$selectSQL="SELECT * FROM chargement WHERE id_charg='$id_charg'";
		$resultat = mysqli_query($db,$selectSQL);
		$res=mysqli_fetch_array($resultat);
		$s=mysqli_num_rows($resultat);
		
		$date_charg_americain = str_replace('/', '-', $res["date_charg"] );
		$date_charg_americain = date("H:i:s", strtotime($date_charg_americain));
		
		$date_liv_americain = str_replace('/', '-', $res['date_liv'] );
		$date_liv_americain = date("H:i:s", strtotime($date_liv_americain));
		
?>
<div class="row" style="margin: unset;text-align: center;">
    <div class="col-md-12" style="display: inherit;
    text-align: center;
    justify-content: center;
    height: 295px;
    background-image: url('newdesign/images/pexels-kindel-media-6868618.png');
    ">
        <div class="row col-md-9" style="margin-top: 150px;">
            <span class="servicee1_364" style="color: white!important;">Modifier le Chargement
                <div class="e1_328" style="position: unset!important;"></div>
            </span>
            <span class="" style="color: white;margin-top: 20px;font-size: 21px!important;position: absolute;
    bottom: 10px;">Veuillez remplir le formulaire suivant</span>

        </div>
    </div>
</div>

                                            <form id="form1" enctype="multipart/form-data" action="update-charg.php?id_charg=<?php echo $id_charg ?>&amp;telephone=<?php echo $res['telephone'] ?>" method="POST">
                        
<div class="row" style="margin: unset;text-align: center;">
    <div class="col-md-12" style="display: inherit;
    text-align: center;
    justify-content: center;
    ">
        <div class="row col-md-9" style="margin-top: 10px;">
            <span class="servicee1_3641">Caractéristiques
            </span>
        </div>

    </div>
    <div class="col-md-12" style="display: inherit;
    text-align: center;
    justify-content: center;
    ">
        <div class="row col-md-9" style="margin-top: 10px;">
            <div class="col-md-6" style="margin-top: 10px;">
                <div class="col-md-12">
                    <div class="v1_146">
                            <div class="row classicInput1">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Type de véhicule<span style="color: red;">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="v1_106 classicInput" name="type_vehicule" size="1"
                                            style="width: 100%;padding-left: 20px;" id="vehicule"
                                            onChange="changecat(this.value);">
                                            <option value="Moto"<?php if($res['type_vehicule']=='Moto') echo "selected" ?>>Moto</option>
									<option value="Tricycle"<?php if($res['type_vehicule']=='Tricycle') echo "selected" ?>>Tricycle</option>
									<option value="Van"<?php if($res['type_vehicule']=='Van') echo "selected" ?>>Van</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Type de colis<span style="color: red;">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="v1_106 classicInput" name="marchandise" id="marchandise"
                                            required="" style="width: 100%;padding-left: 20px;">
                                            <option value="repas">repas</option>
                                            <option value="plis">plis</option>
                                            <option value="Médicaments">Médicaments</option>
                                            <option value="Vêtements">Vêtements</option>
                                            <option value="Sac à main">Sac à main</option>
                                            <option value="téléphone">téléphone</option>
                                            <option value="petit colis">petit colis</option>
                                            <option value="Autres">Autres</option>

                                            	
                                            <?php if(
                                                               	$res['marchandise']=='Médicaments' 
                                                                   ||	$res['marchandise']=='Vêtements'
                                                                   ||	$res['marchandise']=='plis'
                                                                   ||	$res['marchandise']=='Sac à main'
                                                                   ||	$res['marchandise']=='téléphone'
                                                                   ||	$res['marchandise']=='petit colis'
                                                                  
                                                                ){
                                                             ?>   

<option value="Demenagement"<?php if($res['marchandise']=='Demenagement') echo "selected" ?>>Demenagement</option>
									
                                    <option value="Autres"  >Autres</option>
                                    <option value="plis" <?php if($res['marchandise']=='plis') echo "selected" ?>>plis</option>
                                            <option value="Médicaments" <?php if($res['marchandise']=='Médicaments') echo "selected" ?>>Médicaments</option>
                                            <option value="Vêtements" <?php if($res['marchandise']=='Vêtements') echo "selected" ?>>Vêtements</option>
                                            <option value="Sac à main" <?php if($res['marchandise']=='Sac à main') echo "selected" ?>>Sac à main</option>
                                            <option value="téléphone" <?php if($res['marchandise']=='téléphone') echo "selected" ?>>téléphone</option>
                                            <option value="petit colis" <?php if($res['marchandise']=='petit colis') echo "selected" ?>>petit colis</option>
                                                             <?php 
                                                            }else{ ?>
                                                       <option value="repas">repas</option>
                                                       <option value="plis" <?php if($res['marchandise']=='plis') echo "selected" ?>>plis</option>
                                            <option value="Médicaments" <?php if($res['marchandise']=='Médicaments') echo "selected" ?>>Médicaments</option>
                                            <option value="Vêtements" <?php if($res['marchandise']=='Vêtements') echo "selected" ?>>Vêtements</option>
                                            <option value="Sac à main" <?php if($res['marchandise']=='Sac à main') echo "selected" ?>>Sac à main</option>
                                            <option value="téléphone" <?php if($res['marchandise']=='téléphone') echo "selected" ?>>téléphone</option>
                                            <option value="petit colis" <?php if($res['marchandise']=='petit colis') echo "selected" ?>>petit colis</option>
                                               
                                                            <option value="Autres" selected >Autres</option>
                                                            <?php } ?>

                                        </select>
                                        <?php if(
                                                                 	$res['marchandise']=='Médicaments' 
                                                                     ||	$res['marchandise']=='Vêtements'
                                                                     ||	$res['marchandise']=='plis'
                                                                     ||	$res['marchandise']=='Sac à main'
                                                                     ||	$res['marchandise']=='téléphone'
                                                                     ||	$res['marchandise']=='petit colis'
                                                                  
                                                                ){
                                                                    echo `<div id="othervalue" class="row"
                                                                    style="display: none;width: 100%;margin: unset!important;">`;
                                                                                              }else{
                                                                                                echo `<div id="othervalue" class="row"
                                                                                                style="width: 100%;margin: unset!important;">`;
                                                                                                            
                                                             } ?>
                                            <input type="text" name="marchandise1" class="v1_106 classicInput" value="<?php echo $res['marchandise'] ?>"
                                                placeholder="Préciser"
                                                style="padding-left: 20px;width: 100%; margin-top:10px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Recommandations
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="v1_106 classicInput"
                                            placeholder="Plus de details sur votre marchandise" name="details_march"
                                             style="padding-left: 20px;width:  100%!important;height: 140px;"
                                            ><?php echo $res['details_march'] ?></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1">
                            <div class="row hidden">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Pays
                                                                de Chargement </div>
                                                            <div  class="col-sm-6 col-xs-12 no-padding">
                                                             
                                                            <select type="text" name="pays_charg" id="pays4"
                                                                onchange="initialize()" placeholder="Pays *" >
                                                                <option selected value="Cameroun"
                                                                        style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
                                                                        Cameroun</option>
                                                                        <option value="Senegal"
                                                                style="background:url('./img/flags/senegal.jpg') no-repeat; width:30px; height:30px;">
                                                                Senegal</option>
                                                                <option value="Côte d'Ivoire"
                                                                style="background:url('./img/flags/ivoire.png') no-repeat; width:30px; height:30px;">
                                                                Côte d'Ivoire</option>
                                                                <option value="Togo"
                                                                style="background:url('./img/flags/togo.png') no-repeat; width:30px; height:30px;">
                                                                Togo</option>
                                                            <option value="Congo(R)"
                                                                style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
                                                                Congo(R)</option>
                                                                    <option value="Gabon"
                                                                        style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
                                                                        Gabon</option>
                                                                    <option value="Tchad"
                                                                        style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
                                                                        Tchad</option>
                                                                    <option value="République centrafricaine"
                                                                        style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                        République centrafricaine</option>
                                                                    <option value="Guinée équatoriale"
                                                                        style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                        Guinée équatoriale</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Adresse d'enlèvement <span style="color: red;">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="ville_charg" id="ville4" class="hidden"
                                            placeholder="Adresse d'enlèvement" value="<?php echo $res['ville_charg'] ?>" />
                                        <div id="depdiv" class="row" style="width: 100%;margin: unset!important;">
                                            <input type="text" class="location-input v1_106 classicInput"
                                                placeholder="Location" name="autocomplete" id="autocomplete" value="<?php echo $res['ville_charg'] ?>"
                                                style="padding-left: 20px;">
                                            <img id="mapmylocation" class="location-icon"
                                                src="newdesign/images/ic_person_pin_circle_24px.svg" alt="My Location"
                                                onclick="setMyLocation('autocomplete','latitude','longitude','ville4')">
                                        </div>

                                        <div class="card-body hidden">
                                            <div class="form-group " id="lat_area">
                                                <label for="latitude"> Latitude </label>
                                                <input type="text" name="latitude"value="<?php echo $res['latitude'] ?>" id="latitude" class="form-control">
                                            </div>

                                            <div class="form-group" id="long_area">
                                                <label for="latitude"> Longitude </label>
                                                <input type="text" name="longitude" id="longitude" value="<?php echo $res['longitude'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row hidden">
                                            <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                Distance(Km) :</div>
                                            <div class="col-sm-8 col-xs-12 no-padding">

                                                <input type="number" name="distance" value=<?php echo $res['distance'] ?> id="distance"  disabled>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Heure de ramassage<span style="color: red;">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="v1_106 classicInput" type="time" name="date_charg" required
                                            onclick="getDistanceAndPrice()" value="<?php echo $date_charg_americain ?>"
                                            style="padding-left: 20px;width:  100%!important;">
                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1 hidden">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Expéditeur: Moi même <span style="color: red;">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="onoffswitch">
                                            <input type="checkbox" class="onoffswitch-checkbox"   name="contactPersonX1"
                                                id="contactPersonX1" onclick="contactPerson1()">
                                            <label class="onoffswitch-label" for="contactPersonX1">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Nom expéditeur <span style="color: red;">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="v1_106 classicInput" id="name_expediteur" name="name_expediteur" value="<?php echo $res['name_expediteur']; ?>"
                                            required type="text" style="padding-left: 20px;width:  100%!important;"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Téléphone expéditeur<span style="color: red;">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="v1_106 classicInput" type="number" name="telephone_expediteur"  value="<?php echo $res['telephone_expediteur']; ?>"
                                            id="telephone_expediteur" style="padding-left: 20px;width:  100%!important;"
                                            required="">
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div id="alertDiv" style="display: none;"></div>

                </div>
            <div class="col-md-6" style="margin-top: 10px;">
                <div class="col-md-12">
                    <div class="v1_146">
                        <form id="myForm" method="post" action="submit.php">
                            <div class="row classicInput1">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Image du colis
                                    </div>
                                    <div class="col-md-8">
                                        <div class="add-img col-sm-7 col-xs-12 no-padding previmg">
                                        <input  value="<?php echo $res['img_march']; ?>" name="old_image" class="hidden" id="id_abonnement">
  
                                        <input id="file" type="file" class="input-file" name="img_march"
                                                onchange="readURL(this);">
                                            <label for="file" class="label-file" style="
    position: absolute;
    left: 30px;
    top: 20px;
">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    viewBox="0 0 22 22" fill="none">
                                                    <path
                                                        d="M11.1393 0C5.14403 0 0.27832 4.86571 0.27832 10.861C0.27832 16.8562 5.14403 21.7219 11.1393 21.7219C17.1345 21.7219 22.0002 16.8562 22.0002 10.861C22.0002 4.86571 17.1345 0 11.1393 0ZM16.5698 11.9471H12.2254V16.2914H10.0532V11.9471H5.7088V9.77487H10.0532V5.43048H12.2254V9.77487H16.5698V11.9471Z"
                                                        fill="#E92C24" />
                                                </svg></label>
                                            <div class="imgs-prev">
                                                <img id="blah" 
                                                src="<?php echo $res['img_march']!=""? './img/uploaded/'.$res['img_march']:'newdesign/images/pile.png'; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1">
                            <div class="row hidden">
                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Pays
                                        de Livraison </div>
                                    <div class="col-sm-6 col-xs-12 no-padding">
                                        
                                        <select type="text" name="pays_liv" id="pays5"  onchange="initialize1()"
                                            placeholder="Pays *"
                                            >
                                            <option selected value="Cameroun"
                                                style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
                                                Cameroun</option>
                                                <option value="Senegal"
                                        style="background:url('./img/flags/senegal.jpg') no-repeat; width:30px; height:30px;">
                                        Senegal</option>
                                        <option value="Côte d'Ivoire"
                                        style="background:url('./img/flags/ivoire.png') no-repeat; width:30px; height:30px;">
                                        Côte d'Ivoire</option>
                                        <option value="Togo"
                                        style="background:url('./img/flags/togo.png') no-repeat; width:30px; height:30px;">
                                        Togo</option>
                                    <option value="Congo(R)"
                                        style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
                                        Congo(R)</option>
                                            <option value="Gabon"
                                                style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
                                                Gabon</option>
                                            <option value="Tchad"
                                                style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
                                                Tchad</option>
                                            <option value="République centrafricaine"
                                                style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                République centrafricaine</option>
                                            <option value="Guinée équatoriale"
                                                style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                Guinée équatoriale</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Adresse de Livraison <span style="color: red;">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="ville_liv" id="ville5" class="hidden"
                                        value="<?php echo $res['ville_liv'] ?>"
                                            placeholder="Adresse d'enlèvement" />
                                        <div id="arrdiv" class="row" style="width: 100%;margin: unset!important;">
                                            <input type="text" class="location-input v1_106 classicInput"
                                                placeholder="Location" name="autocomplete" id="autocomplete1"
                                                value="<?php echo $res['ville_liv'] ?>"
                                                style="padding-left: 20px;">
                                            <img id="mapmylocation1" class="location-icon"
                                                src="newdesign/images/ic_person_pin_circle_24px.svg" alt="My Location"
                                                onclick="setMyLocation('autocomplete1','latitude1','longitude1','ville5')">
                                        </div>


                                        <div class="card-body hidden">


                                            <div class="form-group " id="lat_area">
                                                <label for="latitude"> Latitude </label>
                                                <input type="text" name="latitude1" value="<?php echo $res['latitude1'] ?>" id="latitude1" class="form-control">
                                            </div>

                                            <div class="form-group" id="long_area">
                                                <label for="latitude"> Longitude </label>
                                                <input type="text" name="longitude1" value="<?php echo $res['longitude1'] ?>"  id="longitude1"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="row hidden">
                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Temps estimé pour
                                                l’enlèvement</div>
                                            <div class="col-sm-8 col-xs-12 no-padding">
                                                <input type="time" name="date_liv" id="date_liv" value="<?php echo $date_liv_americain ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1 hidden">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Destinataire: Moi même<span style="color: red;"></span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="onoffswitch">
                                            <input type="checkbox" class="onoffswitch-checkbox" name="contactPersonX1"
                                            name="contactPersonX" id="contactPersonX"
                                                                onclick="contactPerson()">
                                            <label class="onoffswitch-label" for="contactPersonX">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Nom du destinataire<span style="color: red;">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="v1_106 classicInput" name="contact_name" id="contact_name"
                                            type="text" placeholder="Nom" value="<?php echo $res['contact_name'] ?>"
                                            style="padding-left: 20px;width:  100%!important;" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Téléphone du destinataire<span style="color: red;">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="v1_106 classicInput" name="contact_phone" id="contact_phone"
                                        type="number" style="padding-left: 20px;width:  100%!important;"
                                             value="<?php echo $res['contact_phone'] ?>"  required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row classicInput1">
                                <div class="row col-md-12">
                                    <div class="col-md-4">
                                        Montant Estimer(XAF) : <span style="color: red;">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="v1_106 classicInput" type="number" id="priceestimated" name="priceestimated" value="<?php echo $res['priceestimated'] ?>"
                                            style="  pointer-events: <?php echo $_SESSION['type']!="admin"?'none':''; ?>;padding-left: 20px;width:  100%!important;" required="">
                                    </div>
                                </div>
                                <div class="row hidden" id="nbjr" >
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Nombre
                                                                de jours </div>
                                                            <div class="col-sm-3 col-xs-12 no-padding">
                                                                <input type="number" name="jr_retard" value="<?php echo $res['jr_retard'] ?>">
                                                            </div>
                                                        </div>
                            </div>

                        </form>
                    </div>
                    <div id="alertDiv" style="display: none;"></div>

                </div>
            </div>

        </div>

    


    

    
    </div>




    





    <div class="row col-md-12" id="FACULTATIF" style="<?php  echo $res['type_vehicule']=="Moto"?"display:none;":""; ?>">

<div class="col-md-12" style="display: inherit;
text-align: center;
justify-content: center;
">
    <div class="row col-md-9" style="margin-top: 10px;">
        <span class="servicee1_3641">Facultatif
        </span>
    </div>

</div>
<div class="col-md-12" style="display: inherit;
text-align: center;
justify-content: center;
">
    <div class="row col-md-9" style="margin-top: 10px;">
        <div class="col-md-12" style="margin-top: 10px;">
            <div class="col-md-12">
                <div class="v1_146">


                    <div class="row classicInput1">
                        <div class="row col-md-12">
                            <div class="col-md-3">
                                Proposer un Prix
                            </div>
                            <!-- <div class="col-md-1">
                                <div class="onoffswitch">
                                    <input type="checkbox" class="onoffswitch-checkbox" name="prop_prix"
                                        id="myonoffswitch88"
                                         onclick="activate()">
                                    <label class="onoffswitch-label" for="myonoffswitch88">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div> -->
                            <div class="col-md-8 row" id="prixprop" style="display:nonne">
                                <div class="col-md-6 no-padding">
                                    <input type="number" placeholder="Prix"
                                    value="<?php echo explode(" ",$res['prix_prop'])[0]; ?>"

                                        onchange="form1.deviseval.value=form1.devise.value" name="prix_prop"
                                        class="v1_106 classicInput"
                                        style="padding-left: 20px;width:  100%!important;">
                                </div>
                                <div class="col-md-6 col-xs-12 no-padding">
                                    <select name="devise" class="v1_106 classicInput"
                                        onclick="form1.deviseval.value=form1.devise.value"
                                        style="padding-left: 20px;width:  100%!important;">
                                        <option <?php if($res['prix_prop']!="" && explode(" ",$res['prix_prop'])[1]=='FCFA') echo "selected"; else echo "selected"  ?> value="FCFA">FCFA</option>
                                                                        <option <?php if($res['prix_prop']!="" && explode(" ",$res['prix_prop'])[1]=='EURO') echo "selected" ?> value="EURO">EURO</option>
                                                                  
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row classicInput1" id="prixpropdetails" style="display:none">
                        <div class="row col-md-12">
                            <div class="col-md-3">
                                Modalité de payement <span style="color: red;">*</span>
                            </div>
                            <div class="col-md-3">
                                <input class="v1_106 classicInput" type="number"
                                value="<?php echo $res['avance']?>"

                                    onchange="form1.reste.value=form1.prix_prop.value-form1.avance.value"
                                    placeholder="Au chargement" name="avance"
                                    style="padding-left: 20px;width:  100%!important;">
                            </div>
                            <div class="col-md-3">
                                <input class="v1_106 classicInput" type="number"
                                    placeholder="A la livraison"
                                    onfocus="form1.avance.value=form1.prix_prop.value-form1.reste.value"
                                    value=<?php if($res['prix_prop']!="" && $res['avance']!="" ){ echo  (intval(explode(" ",$res['prix_prop'])[0] ) -intval($res['avance'] )); }   ?>
                                    name="reste" style="padding-left: 20px;width:  100%!important;">
                            </div>
                            <div class="col-md-3">
                                <input class="v1_106 classicInput" type="number" placeholder="devise"
                                value=<?php if($res['prix_prop']!="" && explode(" ",$res['prix_prop'])[1]!=null){ echo explode(" ",$res['prix_prop'])[1];} else{ echo "FCFA";}  ?>

                                    onfocus="form1.avance.value=form1.prix_prop.value-form1.reste.value"
                                    name="deviseval" style="padding-left: 20px;width:  100%!important;
                                                        color: #808080;
                                                            background-color: #eeecec;
                                                            height: 38px;
                                                            margin: 5px;
                                                            border-radius: 5px;
                                                            box-shadow: none;
                                                            border: none;
                                                            width: 100%;
                                                            padding: 0px 10px;" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row classicInput1">
                        <div class="row col-md-12">
                            <div class="col-md-3">
                                Valeur de la marchandise
                            </div>
                            <!-- <div class="col-md-1">
                                <div class="onoffswitch">
                                    <input type="checkbox" class="onoffswitch-checkbox" name="mvaleur"
                                    value="<?php echo $res['valeurm']?>"
                                        id="myonoffswitch22" onclick="activate4()">
                                    <label class="onoffswitch-label" for="myonoffswitch22">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div> -->
                            <div class="col-md-8 row" id="valeurm" style="display:nonne">
                                <div class="col-md-6 no-padding">
                                    <input type="number" placeholder="Prix"
                                        onchange="form1.deviseval.value=form1.devise.value" name="prix_prop"
                                        class="v1_106 classicInput"
                                        style="padding-left: 20px;width:  100%!important;">
                                </div>
                                <div class="col-md-6 col-xs-12 no-padding">
                                    <select name="devise" class="v1_106 classicInput"
                                        onclick="form1.deviseval.value=form1.devise.value"
                                        style="padding-left: 20px;width:  100%!important;">
                                        <option value="FCFA">FCFA</option>
                                        <option value="EURO">EURO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row classicInput1">
                        <div class="row col-md-12">
                            <div class="col-md-3">
                                Mode de payement<span style="color: red;">*</span>
                            </div>
                            <div class="col-md-3">
                                <select name="methodepayement" class="v1_106 classicInput"
                                    style="padding-left: 20px;width:  100%!important;">
                                    <option <?php if($res['methodepayement']=='Espèce') echo "selected" ?>
 value="Espèce">Espèce</option>
                                                                     <option  <?php if($res['methodepayement']=='Chèque') echo "selected" ?> value="Chèque">Chèque</option>
                                                                     <option value="Virement"  <?php if($res['methodepayement']=='Virement') echo "selected" ?>>Virement</option>
                                </select>

                            </div>
                        </div>
                    </div>

                </div>
                <div id="alertDiv" style="display: none;"></div>

            </div>
        </div>


    </div>
    <div id="alertDiv" style="display: none;"></div>


</div>

</div>













    <div class="col-md-12" style="display: inherit;
    text-align: center;
    justify-content: center;
    margin-bottom: 50px;
    "> 
        <button id="submitBtnEdit" class="aboute1_362"
        <?php if(!isset($_SESSION['login_user'])) { echo "disabled" ;}else{ echo $res['statutenvoi']>0?"disabled":"";} ?> 
        style="color: white; width: unset!important;padding-left: 10px; padding-right: 10px; height: 40px!important;" type="submit">ENVOYER></button>

    </div>  
    </form>

</div>

<div id="myModal" class="modal">
  <div class="modal-content confirmModal col-md-4">
    <p>Are you sure you want to submit this form?</p>
    <div class="row col-md-12">
    <button id="okBtn" class="aboute1_362"
    style="color: white; width: unset!important;padding-left: 10px; padding-right: 10px; height: 40px!important;"
    >OK</button>
    <button id="cancelBtn"class="aboute1_362"
    style="color: white; width: unset!important;padding-left: 10px; padding-right: 10px; height: 40px!important;"
   >Cancel</button>
   </div>
  </div>
</div>
<?php } ?>
<?php include "footer-new.php" ?>