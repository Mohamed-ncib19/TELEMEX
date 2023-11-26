<?php include"header.php" ?>

<?php

    extract($_POST,EXTR_OVERWRITE);
        
        $today =   strtotime(date('d-m-Y')) ;

        $editFormAction = $_SERVER['PHP_SELF'];
        if (isset($_SERVER['QUERY_STRING'])) {
          $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
        }
        
        if (empty($_POST['gps'])){
            $gps="off";
        }
        
        if (empty($_POST['prix'])){
            $prix="off";
        }

        $filtre = "1=1" ;

     if (!empty($_POST)){

        if($dat_dep!=""){
           $filtre.=" AND STR_TO_DATE(`date_dep`, '%d/%m/%Y') >= '$dat_dep'";
        }

        if($dat_limite!=""){
            $filtre.=" AND STR_TO_DATE(`date_dep`, '%d/%m/%Y') <= '$dat_limite'";
        }

        if($gps=="on"){
            $filtre.=" AND gps=1";
        }

        if($poid!=""){
            $filtre.=" AND poid_disp>'$poid'";
        }

        if($pays_dep!="off"){
            $filtre.=" AND pays_dep='$pays_dep'";
        }
        
        if($ville_dep!="off"){
            $filtre.=" AND ville_dep='$ville_dep'";
        }
        
        if($pays_arr!="off"){
            $filtre.=" AND pays_arr='$pays_arr'";
        }
        
        if($ville_arr!="off"){
            $filtre.=" AND ville_arr='$ville_arr'";
        }
        
     }

?>

<section class="page-title-section trouvtrans">
    <div class="container hidden-xs slide-bord">
        <div class="demo-slides">
        <div class="animated lightSpeedIn slide-title">Envoyer un colis </div>
        <p class="lead animated lightSpeedIn">Veuillez remplir le formulaire suivant</p>
        </div>
    </div>
</section>

<section class="contact-info-section ">
    <div class=" ">
        <div class="row ">
            <div class="">
                <div class="css-tab" role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                    <li role="choix" class="active">
                            <a href="#choix" aria-controls="choix" role="tab" data-toggle="tab">Envoyer un colis</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="row">
                        <div  class="tab-pane">
                            <div class="css-tab-content">
                                <div class="tab-pane">
                                    <div class="css-tab-content formulaires">
                                        <form id="myForm" action="post-charg.php" method="POST"
                                            enctype="multipart/form-data">
                                            <div class="container">
                                                <div class="col-md-8 col-xs-12 formulaire">
                                                    <h3 class="txt-bordure sections-title">Caractéristiques</h3>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Type
                                                                de véhicule </div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                            <select class="form-control" name="type_vehicule" size="1"
                                                                id="vehicule" onChange="changecat(this.value);">
                                                                <option value="Moto" selected>Moto</option>
                                                                <option value="Tricycle">Tricycle</option>
                                                                <option value="Van">Van</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-sm-3 col-xs-12 no-padding left-title">Type
                                                            de colis </div>
                                                        <div class="col-sm-1 hidden-xs no-padding left-title">
                                                            <font color="red">*</font>
                                                        </div>
                                                        <div class="col-sm-5 col-xs-12 no-padding">
                                                            <select class="form-control" name="marchandise"
                                                                id="marchandise" required="">
                                                                <option value="repas">repas</option>
                                                                <option value="plis">plis</option>
                                                                <option value="Médicaments">Médicaments</option>
                                                                <option value="Vêtements">Vêtements</option>
                                                                <option value="Sac à main">Sac à main</option>
                                                                <option value="téléphone">téléphone</option>
                                                                <option value="petit colis">petit colis</option>
                                                                <option value="Autres">Autres</option>
                                                            </select>
                                                            <div class="col-sm-12 col-xs-12 no-padding" id="othervalue"
                                                                style='display: none'>
                                                                <input type="text" name="marchandise1" class="col-xs-12"
                                                                    placeholder="Préciser">
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row hidden">
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Type
                                                                d'emballage </div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <select class="form-control" id="" name="emballage"
                                                                    >
                                                                    <option value="" disabled selected>Type d'emballage
                                                                    </option>
                                                                    <option value="Cartons">Cartons</option>
                                                                    <option value="En vrac">En vrac</option>
                                                                    <option value="Palettes">Palettes</option>
                                                                    <option value="Sacs">Sacs</option>
                                                                    <option value="Ballots">Ballots</option>
                                                                    <option value="Bidons">Bidons</option>
                                                                    <option value="Caisses">Caisses</option>
                                                                    <option value="Sceaux">Sceaux</option>
                                                                    <option value="Citerne">Citerne</option>
                                                                    <option value="Bonbonnes">Bonbonnes</option>
                                                                    <option value="Futs">Futs</option>
                                                                    <option value="Conteneur 20’">Conteneur 20’</option>
                                                                    <option value="Conteneur 40’">Conteneur 40’</option>
                                                                    <option value="Colis">Colis</option>
                                                                    <option value="Bouteilles">Bouteilles</option>
                                                                    <option value="Autres" selected>Autres</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row hidden">
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                Nombre de Colis</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title"></div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                            <input type="number" name="nb_colis" class="col-xs-12"
                                                                value="1">                                                            </div>
                                                        </div>
                                                                                                          
                                                        <div class="row hidden">
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                Nombre de véhicules</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title"></div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <input type="number" name="nb_vehicules" class="col-xs-12" value="1">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                Details de Marchandise</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-7 col-xs-12 no-padding form">
                                                                <textarea
                                                                    placeholder="Plus de details sur votre marchandise"
                                                                    name="details_march" required></textarea>
                                                                <div class="conseil">Conseil : Donnez le maximum
                                                                    d’information pour eviter les surprises</div>
                                                            </div>
                                                        </div>

                                                        <div class="row margt">
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">Image du
                                                            colis</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title"></div>
                                                            <div class="add-img col-sm-7 col-xs-12 no-padding previmg">
                                                                <input id="file" type="file" class="input-file"
                                                                    name="img_march" onchange="readURL(this);">
                                                                <label for="file" class="label-file"><span
                                                                        class="plus">+</span></label>
                                                                <div class="imgs-prev">
                                                                    <img id="blah" src="./img/contact-back.png" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-md-6 col-xs-12 formulaire">
                                                    <div class="form-group">
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

                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Adresse d'enlèvement </div>
                                                            <input type="text" name="ville_charg" id="ville4" class="hidden"
                                                                    placeholder="Adresse d'enlèvement" />
                                                                    <div id="depdiv" class="col-sm-6 col-xs-11">
                                                            <input type="text" class="location-input"
                                                                placeholder="Location" name="autocomplete"
                                                                id="autocomplete">
                                                        </div>
                                                        <div class="col-sm-1 input-container">
                                                            <img id="mapmylocation" class="location-icon"
                                                                src="./img/mylocation.png" alt="My Location"
                                                                onclick="setMyLocation('autocomplete','latitude','longitude','ville4')">
                                                        </div>
                                                        </div>
                                                        <div class="card-body hidden">

 
                                                            <div class="form-group " id="lat_area">
                                                                <label for="latitude"> Latitude </label>
                                                                <input type="text" name="latitude" id="latitude"
                                                                class="form-control">
                                                            </div>

                                                            <div class="form-group" id="long_area">
                                                                <label for="latitude"> Longitude </label>
                                                                <input type="text" name="longitude" id="longitude"
                                                                class="form-control">
                                                            </div>
                                                    </div>
                                                    <div class="row hidden">
                                                        <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                            Distance(Km) :</div>
                                                        <div class="col-sm-8 col-xs-12 no-padding">

                                                            <input type="number" name="distance" id="distance" value="0"
                                                                disabled>
                                                        </div>

                                                    </div>
                                                        <div class="row">
                                                        <div class="col-sm-4 col-xs-12 no-padding left-title">Heure de
                                                            ramassage</div>
                                                        <div class="col-sm-6 col-xs-12 no-padding">
                                                            <input type="time" name="date_charg" required
                                                                onclick="getDistanceAndPrice()">
                                                        </div>
                                                    </div>

                                                        <div class="row hidden">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                               Description de l'adresse de chargement </div>
                                                            <div class="col-sm-8 col-xs-12 no-padding form">
                                                                <textarea placeholder="Adresse exacte de chargement "
                                                                    name="adresse_charg" value=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                    <div class="col-sm-5 col-xs-12 no-padding left-title"><b>Expéditeur: </b>Moi
                                                        même</div>
                                                    <div class="col-sm-5 col-xs-12 no-padding form">
                                                        <div class="onoffswitch">
                                                            <input type="checkbox" class="onoffswitch-checkbox"
                                                                name="contactPersonX1" id="contactPersonX1"
                                                                onclick="contactPerson1()">
                                                            <label class="onoffswitch-label" for="contactPersonX1">
                                                                <span class="onoffswitch-inner"></span>
                                                                <span class="onoffswitch-switch"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Nom
                                                                expéditeur </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <input type="text" id="name_expediteur" name="name_expediteur" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Téléphone
                                                                expéditeur </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <input type="text" name="telephone_expediteur" id="telephone_expediteur" required>
                                                            </div>
                                                        </div>
                                                        <div class="row hidden">
                                                            <div class="col-sm-5 col-xs-12 no-padding left-title">
                                                                Tolérance au retard de chargement </div>
                                                            <div class="col-sm-7 col-xs-12 no-padding form">
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" class="onoffswitch-checkbox"
                                                                        name="toler_charge" id="myonoffswitch"
                                                                        onclick="activate3()">
                                                                    <label class="onoffswitch-label"
                                                                        for="myonoffswitch">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row" id="nbjr2" style="display:none">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Nombre
                                                                de jours </div>
                                                            <div class="col-sm-3 col-xs-12 no-padding">
                                                                <input type="number" name="jr_retard2">
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-xs-12 formulaire">
                                                    <div class="form-group">
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

                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Adresse de Livraison </div>
                                                            <input type="text" name="ville_liv" class="hidden"
                                                                    id="ville5"
                                                                    style="width: 100%; border-width: 5px;"
                                                                    placeholder="Adresse de livraison" />
                                                            <div id="arrdiv" class="col-sm-6 col-xs-11 no-padding">
                                                               
                                                                    <input type="text" name="autocomplete" id="autocomplete1" class="form-control" placeholder="Selectionné votre localisation">

                                                            </div>
                                                            <div class="col-sm-1 input-container">
                                                                <img id="mapmylocation1" class="location-icon"
                                                                    src="./img/mylocation.png" alt="My Location"
                                                                    onclick="setMyLocation('autocomplete1','latitude1','longitude1','ville5')">
                                                            </div>
                                                        </div>

                                                        <div class="card-body hidden">

 
<div class="form-group " id="lat_area">
    <label for="latitude"> Latitude </label>
    <input type="text" name="latitude1" id="latitude1" class="form-control">
</div>

<div class="form-group" id="long_area">
    <label for="latitude"> Longitude </label>
    <input type="text" name="longitude1" id="longitude1" class="form-control">
</div>
</div>
                                                        <div class="row hidden">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Temps estimé pour l’enlèvement</div>
                                                            <div class="col-sm-8 col-xs-12 no-padding">
                                                                <input type="time" name="date_liv" id="date_liv">
                                                            </div>
                                                        </div>

                                                        <div class="row hidden">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                                Description de l'adresse de Livraison </div>
                                                            <div class="col-sm-8 col-xs-12 no-padding form">
                                                                <textarea placeholder="Adresse exacte de livraison"
                                                                    name="adresse_liv" value=""></textarea>
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                    <div class="col-sm-5 col-xs-12 no-padding left-title"><b>Destinataire: </b>Moi
                                                        même</div>
                                                    <div class="col-sm-5 col-xs-12 no-padding form">
                                                        <div class="onoffswitch">
                                                            <input type="checkbox" class="onoffswitch-checkbox"
                                                                name="contactPersonX" id="contactPersonX"
                                                                onclick="contactPerson()">
                                                            <label class="onoffswitch-label" for="contactPersonX">
                                                                <span class="onoffswitch-inner"></span>
                                                                <span class="onoffswitch-switch"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    </div>

                                                    <div  id="meNot" >
                                                    <div class="row">
                                                        <div class="col-sm-4 col-xs-12 no-padding left-title">Nom du
                                                            destinataire </div>
                                                        <div class="col-sm-6 col-xs-12 no-padding">
                                                            <input type="text" name="contact_name" id="contact_name"  >
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 col-xs-12 no-padding left-title">Téléphone
                                                            du destinataire </div>
                                                        <div class="col-sm-6 col-xs-12 no-padding">
                                                            <input type="text" name="contact_phone" id="contact_phone" >
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row" id="divpriceestimated">
                                                        <div class="col-sm-4 col-xs-12 no-padding left-title">Montant(XAF) :</div>
                                                        <div class="col-sm-8 col-xs-12 no-padding">

                                                            <input type="number" name="priceestimated"
                                                                id="priceestimated"  disabled>
                                                        </div>

                                                    </div>
                                                        <div class="row hidden">
                                                            <div class="col-sm-5 col-xs-12 no-padding left-title">
                                                                Tolérance au retard de livraison </div>
                                                            <div class="col-sm-7 col-xs-12 no-padding form">
                                                                <div class="onoffswitch ">
                                                                    <input type="checkbox" name="tol_liv"
                                                                    class="onoffswitch-checkbox" id="myonoffswitch10"
                                                                    onclick="activate2()">
                                                                    <label class="onoffswitch-label" for="myonoffswitch10">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row" id="nbjr" style="display:none">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Nombre
                                                                de jours </div>
                                                            <div class="col-sm-3 col-xs-12 no-padding">
                                                                <input type="number" name="jr_retard">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="col-md-12 col-xs-12 formulaire"id="FACULTATIF" style="display:none;">
                                                    <h3 class="txt-bordure sections-title">Facultatif</h3>
                                                    <div class="form-group">
                                                        <div class="row margt">
                                                            <div class="col-sm-2 col-xs-12 no-padding left-title">
                                                                Proposer un Prix </div>
                                                            <div class="col-sm-1 col-xs-12 no-padding form">
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" class="onoffswitch-checkbox"
                                                                        name="prop_prix" id="myonoffswitch88"
                                                                        onclick="activate()">
                                                                        <label class="onoffswitch-label" for="myonoffswitch88">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12" id="prixprop" style="display:none">
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number" placeholder="Prix"
                                                                    onchange="form1.deviseval.value=form1.devise.value"
                                                                        name="prix_prop" class="col-xs-12">
                                                                </div>
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                <select name="devise" class="form-control"
                                                                onclick="form1.deviseval.value=form1.devise.value">
                                                                        <option value="FCFA">FCFA</option>
                                                                        <option value="EURO">EURO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
  
                                                        <div class="row margt" id="prixpropdetails"   style="display:none">
                                                                <div class="col-sm-2 col-xs-12 no-padding left-title">Modalité de payement
</div>
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number"
                                                                    onchange="form1.reste.value=form1.prix_prop.value-form1.avance.value"
                                                                    placeholder="Au chargement" name="avance" class="col-xs-12">
                                                                </div>
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number" placeholder="A la livraison"
                                                                    onfocus="form1.avance.value=form1.prix_prop.value-form1.reste.value"
                                                                        name="reste" class="col-xs-12">
                                                                </div>
                                                                <div class="col-sm-1 col-xs-12 no-padding">
                                                                <input  placeholder="devise" style="color: #808080;
                                                                        background-color: #eeecec;
                                                                        height: 38px;
                                                                        margin: 5px;
                                                                        border-radius: 5px;
                                                                        box-shadow: none;
                                                                        border: none;
                                                                        width: 100%;
                                                                        padding: 0px 10px;"
                                                                        name="deviseval" class="col-xs-12 number" disabled>
                                                                </div>
                                                               
                                                            </div>



                                                        <div class="row margt">
                                                            <div class="col-sm-2 col-xs-12 no-padding left-title">Valeur
                                                                de la marchandise </div>
                                                            <div class="col-sm-1 col-xs-12 no-padding form">
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" class="onoffswitch-checkbox"
                                                                        name="mvaleur" id="myonoffswitch22"
                                                                        onclick="activate4()">
                                                                    <label class="onoffswitch-label" for="myonoffswitch22">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12" id="valeurm" style="display:none">
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number"
                                                                        placeholder="Valeur de la marchandise"
                                                                        name="valeurm" class="col-xs-12">
                                                                </div>
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <select name="devise2" class="form-control">
                                                                        <option value="FCFA">FCFA</option>
                                                                        <option value="EURO">EURO</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                     


                                                            <div class="row margt">
                                                                <div class="col-sm-2 col-xs-12 no-padding left-title">Mode de payement
</div>
                                                             

                                                         <div class="col-sm-6 col-xs-12" >
                                                             
                                                             <div class="col-sm-4 col-xs-12 no-padding">
                                                                 <select name="methodepayement" class="form-control" >
                                                                     <option value="Espèce">Espèce</option>
                                                                     <option value="Chèque">Chèque</option>
                                                                     <option value="Virement">Virement</option>
                                                                 </select>
                                                             </div>
                                                         </div>

                                                     </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-8 col-xs-12 formulaire hidden">
                                                    <h3 class="txt-bordure sections-title">Personne à contacter</h3>
                                                    <div class="form-group">
                                                        <div class="row margt">
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Moi
                                                                même</div>
                                                            <div class="col-sm-7 col-xs-12 no-padding form">
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" checked="checked"
                                                                        class="onoffswitch-checkbox"
                                                                        name="contactPersonX" id="contactPersonX"
                                                                        onclick="contactPerson()">
                                                                    <label class="onoffswitch-label"
                                                                        for="contactPersonX">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="meNot" style="display:none">
                                                            <!-- <div class="row">
                                                                <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                    Nom Complet</div>
                                                                <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                    <font color="red">
                                                                        <font color="red">*</font>
                                                                    </font>
                                                                </div>
                                                                <div class="col-sm-5 col-xs-12 no-padding">
                                                                    <input type="text" id="contact_name"
                                                                        name="contact_name" class="col-xs-12">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                    Numéro de téléphone</div>
                                                                <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                    <font color="red">*</font>
                                                                </div>
                                                                <div class="col-sm-5 col-xs-12 no-padding">
                                                                    <input type="number" id="contact_phone"
                                                                        name="contact_phone" class="col-xs-12">
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                        <h3 class="txt-bordure sections-title">Autres informations</h3>


                                                        <div class="col-md-12 no-padding">
                                                            <textarea name="autre_info"placeholder="Autres informations" id="" cols="30" rows="4"></textarea>
                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12 formulaire">
                                                    <div class="form center">
                                                    <button id="submitBtn"
                                                        <?php if(!isset($_SESSION['login_user'])) { echo "disabled" ;} ?>>Valider</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Modal HTML -->
                                        <div id="myModal" class="modal">
                                            <div class="modal-content confirmModal">
                                                <p>Voulez vous continuer?</p>
                                                <button id="okBtn">Oui</button>
                                                <button id="cancelBtn">Non</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- /.css-tab -->
            </div><!-- /.col-md-12 -->
        </div>

    </div>

</section>

<?php include"footer.php" ?>