<?php include"header.php"?>

    <section class="page-title-section trouvtrans">
        <div class="container hidden-xs slide-bord">
            <div class="demo-slides">
                <div class="animated lightSpeedIn slide-title">Votre historique</div>
                <p class="lead animated lightSpeedIn">Consultez Votre historique</p>
            </div>
        </div>
    </section>
	
<?php 
	$id_disp=$_GET["id_disp"];
	$telephone=$_SESSION['login_user'];
	
	if (($_SESSION['type']=="client") OR ($_SESSION['type']=="transporteur")){
		
		$selectSQL="SELECT * FROM disponibilite WHERE id_disp='$id_disp'";
		$resultat = mysqli_query($db,$selectSQL);
		$res=mysqli_fetch_array($resultat);
		$s=mysqli_num_rows($resultat);
		
		$date_arr_americain = str_replace('/', '-', $res["date_arr"] );
		$date_arr_americain = date("Y-m-d", strtotime($date_arr_americain));
		
		$date_dep_americain = str_replace('/', '-', $res['date_dep'] );
		$date_dep_americain = date("Y-m-d", strtotime($date_dep_americain));

?>
<section class="contact-info-section">
	<div class="container ">
		<form id="form" action="update-dispo.php?id_disp=<?php echo $id_disp?>" method="POST">
			<div class="col-md-8 col-xs-12 formulaire">
				<div class="row content-row">
					<div class="col-md-12">
						<div class="contact-map">
							<h3 class="txt-bordure sections-title">Détails Disponibilité</h3>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3 col-xs-12  no-padding left-title">Poids Disponible (T) </div>
									<div class="col-sm-1 hidden-xs no-padding left-title">*</div>
									<div class="col-sm-5 col-xs-12 no-padding">
										<input step="0.1" min="0.1" type="number" required class="col-xs-12" name="poid_disp" value="<?php echo $res['poid_disp'];?>">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			
			<div class="col-md-6 col-xs-12 formulaire">
				<h3 class="txt-bordure sections-title">Chargement</h3>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4 col-xs-12 no-padding left-title">Pays de Départ </div>
						<div class="col-sm-6 col-xs-12 no-padding">							
							<select type="text" name="pays_dep"  id="pays4"  onchange="initialize(true)" >
								<option 
									<?php if($res['pays_dep']=='Cameroun') echo "selected" ?>
									value="Cameroun" style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
									Cameroun
								</option>
								
								<option value="Senegal"
                                    <?php if($res['pays_dep']=='Senegal') echo "selected" ?>
								style="background:url('./img/flags/senegal.jpg') no-repeat; width:30px; height:30px;">
								Senegal</option>
								<option value="Côte d'Ivoire"
								<?php if($res['pays_dep']=="Côte d'Ivoire") echo "selected" ?>

								style="background:url('./img/flags/ivoire.png') no-repeat; width:30px; height:30px;">
								Côte d'Ivoire</option>
								<option value="Togo"
								<?php if($res['pays_dep']=="Togo") echo "selected" ?>
								style="background:url('./img/flags/togo.png') no-repeat; width:30px; height:30px;">
								Togo</option>
							<option value="Congo(R)"
							<?php if($res['pays_dep']=='Congo(R)') echo "selected" ?>

								style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
								Congo(R)</option>
								
								<option 
									<?php if($res['pays_dep']=='Gabon') echo "selected" ?>
									value="Gabon" style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
									Gabon
								</option>
								
								<option
									<?php if($res['pays_dep']=='Tchad') echo "selected" ?>
									value="Tchad" style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
									Tchad
								</option>
								
								<option 
									<?php if($res['pays_dep']=='République centrafricaine') echo "selected" ?>
									value="République centrafricaine" style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
									République centrafricaine
								</option>

								<option
									<?php if($res['pays_dep']=='Guinée équatoriale') echo "selected" ?>
									value="Guinée équatoriale" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
									Guinée équatoriale
								</option>
							</select>
							
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-4 col-xs-12 no-padding left-title">Ville de Départ </div>
						<input type="text" name="ville_dep" id="ville4"  class="hidden"
																value=<?php echo $res['ville_dep'] ?>
                                                                    placeholder="Adresse d'enlèvement" />
						<div id="depdiv" class="col-sm-6 col-xs-12 no-padding" i> 
																								
							 <input type="text"  name="autocomplete" id="autocomplete" class="form-control" value=<?php echo $res['ville_dep'] ?> >

							 <div id="suggestions-container" style="position: relative;"></div>
						</div>
					</div>

					<div class="card-body hidden ">

 
<div class="form-group " id="lat_area">
    <label for="latitude"> Latitude </label>
    <input type="text" name="latitude" value=<?php echo $res['latitude'] ?> id="latitude" class="form-control">
</div>

<div class="form-group" id="long_area">
    <label for="latitude"> Longitude </label>
    <input type="text" name="longitude"  value=<?php echo $res['longitude'] ?> id="longitude" class="form-control">
</div>
</div>
					<div class="row">
						<div class="col-sm-4 col-xs-12 no-padding left-title">Date de Départ </div>
						<div class="col-sm-6 col-xs-12 no-padding">
							<input required type="date" name="date_dep" value="<?php echo $date_dep_americain ?>">
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-4 col-xs-12 no-padding left-title">Adresse de Départ </div>
						<div class="col-sm-6 col-xs-12 no-padding form">
							<textarea required placeholder="Votre Adresse de Départ" name="adresse_dep"><?php echo $res['adresse_dep']?></textarea>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-6 col-xs-12 formulaire">
				<h3 class="txt-bordure sections-title">Arrivée</h3>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4 col-xs-12 no-padding left-title">Pays d'arrivée </div>
						<div class="col-sm-6 col-xs-12 no-padding">
							<select type="text" name="pays_arr" id="pays5"
                                                                    placeholder="Pays *" required
                                                                    onchange="changePays(5);initialize1(true);" >
								<option 
									<?php if($res['pays_arr']=='Cameroun') echo "selected" ?>
									value="Cameroun" style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
									Cameroun
								</option>
								
								<option value="Senegal"
                                    <?php if($res['pays_arr']=='Senegal') echo "selected" ?>
								style="background:url('./img/flags/senegal.jpg') no-repeat; width:30px; height:30px;">
								Senegal</option>
								<option value="Côte d'Ivoire"
								<?php if($res['pays_arr']=="Côte d'Ivoire") echo "selected" ?>

								style="background:url('./img/flags/ivoire.png') no-repeat; width:30px; height:30px;">
								Côte d'Ivoire</option>
								<option value="Togo"
								<?php if($res['pays_arr']=="Togo") echo "selected" ?>
								style="background:url('./img/flags/togo.png') no-repeat; width:30px; height:30px;">
								Togo</option>
							<option value="Congo(R)"
							<?php if($res['pays_arr']=='Congo(R)') echo "selected" ?>

								style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
								Congo(R)</option>
								
								<option 
									<?php if($res['pays_arr']=='Gabon') echo "selected" ?>
									value="Gabon" style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
									Gabon
								</option>
								
								<option
									<?php if($res['pays_arr']=='Tchad') echo "selected" ?>
									value="Tchad" style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
									Tchad
								</option>
								
								<option 
									<?php if($res['pays_arr']=='République centrafricaine') echo "selected" ?>
									value="République centrafricaine" style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
									République centrafricaine
								</option>

								<option
									<?php if($res['pays_arr']=='Guinée équatoriale') echo "selected" ?>
									value="Guinée équatoriale" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
									Guinée équatoriale
								</option>
							</select>
							
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-4 col-xs-12 no-padding left-title">Ville d'arrivée </div>
						<input type="text" name="ville_arr" class="hidden"
                                                                    id="ville5"
																	value="<?php echo $res['ville_arr'] ?>"
                                                                    style="width: 100%; border-width: 5px;"
                                                                    placeholder="Adresse de livraison" />
						
						<div id="arrdiv" class="col-sm-6 col-xs-12 no-padding"> 
							
							 <input type="text"  name="autocomplete" id="autocomplete1" class="form-control" value="<?php echo $res['ville_arr'] ?>" placeholder="Select Location">

							
						</div>
					</div>

					<div class="card-body hidden ">

 
<div class="form-group " id="lat_area">
    <label for="latitude"> Latitude </label>
    <input type="text" name="latitude1" value="<?php echo $res['latitude1'] ?>" id="latitude1" class="form-control">
</div>

<div class="form-group" id="long_area">
    <label for="latitude"> Longitude </label>
    <input type="text" name="longitude1"  value="<?php echo $res['longitude1'] ?>" id="longitude1" class="form-control">
</div>
</div>
					<div class="row">
						<div class="col-sm-4 col-xs-12 no-padding left-title">Au plus tard </div>
						<div class="col-sm-6 col-xs-12 no-padding">
							<input required type="date" name="date_arr" value="<?php echo $date_arr_americain?>">
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-4 col-xs-12 no-padding left-title">Destination </div>
						<div class="col-sm-6 col-xs-12 no-padding form">
							<textarea required placeholder="Votre adresse de destination" name="adresse_arr"><?php echo $res['adresse_arr']?></textarea>
						</div>
					</div>                                                                
					
				</div>
			</div>
			<div class="col-md-8 col-xs-12 formulaire">
				<h3 class="txt-bordure sections-title">Personne à contacter</h3>
				<div class="form-group">
					<div id="meNot">
						<div class="row">
							<div class="col-sm-3 col-xs-12  no-padding left-title">Nom Complet</div>
							<div class="col-sm-1 hidden-xs no-padding left-title">*</div>
							<div class="col-sm-5 col-xs-12 no-padding">
								<input type="text"  id="contact_name" name="contact_name" value="<?php echo $res['contact_name']?>" class="col-xs-12">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 col-xs-12  no-padding left-title">Numéro de téléphone</div>
							<div class="col-sm-1 hidden-xs no-padding left-title">*</div>
							<div class="col-sm-5 col-xs-12 no-padding">
								<input type="number"  pattern="[0-9]{15}" value="<?php echo $res['contact_phone']?>" id="contact_phone" name="contact_phone" class="col-xs-12">
							</div>	
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-8 col-xs-12 formulaire">
			<div class="col-xs-1 form pull-right hidden-xs">
				<div class="res-flx petit ">
					<input type="submit" value="Modifier">
				</div>
			</div>
			
			<div class="col-xs-12 form hidden-lg hidden-sm hidden-md">
				<div class="res-flx petit ">
					<input type="submit" value="Modifier">
				</div>
			</div></div>
			
		</form>
	</div>
</section>


<?php } ?>
<?php include"footerdispo.php"?>