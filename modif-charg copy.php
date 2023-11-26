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
	$id_charg=$_GET["id_charg"];

	$telephone=$_SESSION['login_user'];
	
	if (($_SESSION['type']=="client") OR ($_SESSION['type']=="transporteur")){
		
		$selectSQL="SELECT * FROM chargement WHERE id_charg='$id_charg'";
		$resultat = mysqli_query($db,$selectSQL);
		$res=mysqli_fetch_array($resultat);
		$s=mysqli_num_rows($resultat);
		
		$date_charg_americain = str_replace('/', '-', $res["date_charg"] );
		$date_charg_americain = date("Y-m-d", strtotime($date_charg_americain));
		
		$date_liv_americain = str_replace('/', '-', $res['date_liv'] );
		$date_liv_americain = date("Y-m-d", strtotime($date_liv_americain));
		
?>
<section class="contact-info-section">
	<div class="container ">
		<form id="form" action="update-charg.php?id_charg=<?php echo $id_charg ?>&amp;telephone=<?php echo $res['telephone'] ?>" method="POST">
			<div class="container">
				<div class="col-md-8 col-xs-12 formulaire">
					<h3 class="txt-bordure sections-title">Caracteristiques</h3>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12 no-padding left-title">Type de Marchandise </div>
							<div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
							<div class="col-sm-5 col-xs-12 no-padding">
								<select class="form-control" id="" name="marchandise" required> 
									<option value="Demenagement"<?php if($res['marchandise']=='Demenagement') echo "selected" ?>>Demenagement</option>
									<option value="Produit alimentaires"<?php if($res['marchandise']=='Produit alimentaires') echo "selected" ?>>Produit alimentaires</option>
									<option value="Materiaux De Construction"<?php if($res['marchandise']=='Materiaux De Construction') echo "selected" ?>>Materiaux De Construction</option>
									<option value="Carburant & Gaz"<?php if($res['marchandise']=='Carburant & Gaz') echo "selected" ?>>Carburant & Gaz</option>
									<option value="Vehicules"<?php if($res['marchandise']=='Vehicules') echo "selected" ?>>Vehicules</option>
									<option value="Produits Agricoles "<?php if($res['marchandise']=='Produits Agricoles') echo "selected" ?>>Produits Agricoles </option>
									<option value="Boissons"<?php if($res['marchandise']=='Boissons') echo "selected" ?>>Boissons</option>
									<option value="Produits Chimiques"<?php if($res['marchandise']=='Produits Chimiques') echo "selected" ?>>Produits Chimiques</option>
									<option value="Meubles"<?php if($res['marchandise']=='Meubles') echo "selected" ?>>Meubles</option>
									<option value="Materiaux Lourds"<?php if($res['marchandise']=='Materiaux Lourds') echo "selected" ?>>Materiaux Lourds</option>
									<option value="Produits Medicaux"<?php if($res['marchandise']=='Produits Medicaux') echo "selected" ?>>Produits Medicaux</option>
									<option value="Materiels industriel"<?php if($res['marchandise']=='Materiels industriel') echo "selected" ?>>Materiels industriel</option>
									<option value="Agregats"<?php if($res['marchandise']=='Agregats') echo "selected" ?>>Agregats</option>
									<option value="Grumes & Bois"<?php if($res['marchandise']=='Grumes & Bois') echo "selected" ?>>Grumes & Bois</option>
									<option value="Divers marchandises"<?php if($res['marchandise']=='Divers marchandises') echo "selected" ?>>Divers marchandises</option>
									<option value="Autres"<?php if($res['marchandise']=='Autres') echo "selected" ?>>Autres</option>
									
									
								</select>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-3 col-xs-12 no-padding left-title">Type d'emballage </div>
							<div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
							<div class="col-sm-5 col-xs-12 no-padding">
								<select class="form-control" id="" name="emballage" required> 
									<option value="Cartons"<?php if($res['emballage']=='Cartons') echo "selected" ?>>Cartons</option>
									<option value="Palettes"<?php if($res['emballage']=='Palettes') echo "selected" ?>>Palettes</option>
									<option value="Sacs"<?php if($res['emballage']=='Sacs') echo "selected" ?>>Sacs</option>
									<option value="Ballots"<?php if($res['emballage']=='Ballots') echo "selected" ?>>Ballots</option>
									<option value="Bidons"<?php if($res['emballage']=='Bidons') echo "selected" ?>>Bidons</option>
									<option value="Caisses"<?php if($res['emballage']=='Caisses') echo "selected" ?>>Caisses</option>
									<option value="Sceaux"<?php if($res['emballage']=='Sceaux') echo "selected" ?>>Sceaux</option>
									<option value="Citerne"<?php if($res['emballage']=='Citerne') echo "selected" ?>>Citerne</option>
									<option value="Bonbonnes"<?php if($res['emballage']=='Bonbonnes') echo "selected" ?>>Bonbonnes</option>
									<option value="Futs"<?php if($res['emballage']=='Futs') echo "selected" ?>>Futs</option>
									<option value="Conteneur 20’"<?php if($res['emballage']=='Conteneur 20’') echo "selected" ?>>Conteneur 20’</option>
									<option value="Conteneur 40’"<?php if($res['emballage']=='Conteneur 40’') echo "selected’" ?>>Conteneur 40’</option>
									<option value="Colis"<?php if($res['emballage']=='Colis') echo "selected" ?>>Colis</option>
									<option value="Bouteilles"<?php if($res['emballage']=='Bouteilles') echo "selected" ?>>Bouteilles</option>
									<option value="Autres"<?php if($res['emballage']=='Autres') echo "selected" ?>>Autres</option>
								</select>
							</div>
						</div>
						
						<!-- <div class="row">
							<div class="col-sm-3 col-xs-12 no-padding left-title">Mode de Transport </div>
							<div class="col-sm-1 hidden-xs no-padding left-title">*</div>
							<div class="col-sm-5 col-xs-12 no-padding">
								<select class="form-control" id="" name="mode_t" required> 
									<option value="Transport routier"<?php if($res['mode_t']=='Transport routier') echo "selected" ?>>Transport routier</option>
									<option value="Maritime"<?php if($res['mode_t']=='Maritime') echo "selected" ?>>Maritime</option>
									<option value="Ferroviaire"<?php if($res['mode_t']=='Ferroviaire') echo "selected" ?>>Ferroviaire</option>
									<option value="Aerien"<?php if($res['mode_t']=='Aerien') echo "selected" ?>>Aerien</option>
								</select>
							</div>
						</div> -->
						
						<!-- <div class="row">
							<div class="col-sm-3 col-xs-12  no-padding left-title">Poids (T) </div>
							<div class="col-sm-1 hidden-xs no-padding left-title">*</div>
							<div class="col-sm-5 col-xs-12 no-padding">
								<input type="number" name="poid" class="col-xs-12" value=<?php echo $res['poid'] ?> required>
							</div>
						</div> -->

						<div class="row hidden">
							<div class="col-sm-3 col-xs-12  no-padding left-title">Nombre de Colis</div>
							<div class="col-sm-1 hidden-xs no-padding left-title"></div>
							<div class="col-sm-5 col-xs-12 no-padding">
								<input type="number" name="nb_colis" class="col-xs-12" value=<?php echo $res['nb_colis'] ?>>
							</div>
						</div>

						<!-- <div class="row">
							<div class="col-sm-3 col-xs-12  no-padding left-title">Volume(m3)</div>
							<div class="col-sm-1 hidden-xs no-padding left-title"></div>
							<div class="col-sm-5 col-xs-12 no-padding">
								<input type="text" name="volume" class="col-xs-12" value=<?php echo $res['volume'] ?>>
							</div>
						</div> -->

						<div class="row">
							<div class="col-sm-3 col-xs-12 no-padding left-title">Type de vehicule </div>
														<div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
														<div class="col-sm-5 col-xs-12 no-padding">
													<select  class="form-control" name="type_vehicule" size="1" id="vehicule" onChange="changecat(this.value);">
									<option value="Fourgon"<?php if($res['type_vehicule']=='Fourgon') echo "selected" ?>>Fourgon</option>
									<option value="plateau"<?php if($res['type_vehicule']=='plateau') echo "selected" ?>>Plateau</option>
									<option value="Benne"<?php if($res['type_vehicule']=='Benne') echo "selected" ?>>Benne</option>
									<option value="citerne"<?php if($res['type_vehicule']=='citerne') echo "selected" ?>>Citerne</option>
									<option value="frigorifique"<?php if($res['type_vehicule']=='frigorifique') echo "selected" ?>>Frigorifique</option>
									<option value="carrosserie"<?php if($res['type_vehicule']=='carrosserie') echo "selected" ?>>Carrosseries</option>
									<option value="portechar"<?php if($res['type_vehicule']=='portechar') echo "selected" ?>>Porte char</option>
									
								</select>
							</div>
						</div>
						<div class="row">
<div class="col-sm-3 col-xs-12 no-padding left-title">Tonnage </div>
<div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
<div class="col-sm-5 col-xs-12 no-padding">
<select  class="form-control"  name="poid" id="Poid">
    <option value="" disabled selected>Tonnage</option>
</select></div>
</div>

						<div class="row">
							<div class="col-sm-3 col-xs-12  no-padding left-title">Details de Marchandise</div>
							<div class="col-sm-1 hidden-xs no-padding left-title">*</div>
							<div class="col-sm-7 col-xs-12 no-padding form">
								<textarea placeholder="Plus de details sur votre marchandise" name="details_march" required><?php echo $res['details_march'] ?></textarea>
								<div class="conseil">Conseil : Donnez le maximum d’information pour eviter les surprises</div>
							</div>
						</div>
					</div>     
				</div>
				
				
				
				<div class="col-md-6 col-xs-12 formulaire">
					<h3 class="txt-bordure sections-title">Chargement</h3>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-4 col-xs-12 no-padding left-title">Pays de Chargement </div>
							<div class="col-sm-6 col-xs-12 no-padding">
								<select type="text" name="pays_charg" id="pays4" placeholder="Pays *" required  onchange="changePays(4)" onload="test();">
									<option 
										<?php if($res['pays_charg']=='Cameroun') echo "selected" ?>
										value="Cameroun">
										Cameroun
									</option>
									
									<option 
										<?php if($res['pays_charg']=='Congo') echo "selected" ?>
										value="Congo">
										Congo
									</option>
									
									<option 
										<?php if($res['pays_charg']=='Gabon') echo "selected" ?>
										value="Gabon">
										Gabon
									</option>
									
									<option
										<?php if($res['pays_charg']=='Tchad') echo "selected" ?>
										value="Tchad">
										Tchad
									</option>
									
									<option 
										<?php if($res['pays_charg']=='République centrafricaine') echo "selected" ?>
										value="République centrafricaine">
										République centrafricaine
									</option>

									<option
										<?php if($res['pays_charg']=='Guinée équatoriale') echo "selected" ?>
										value="Guinée équatoriale">
										Guinée équatoriale
									</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4 col-xs-12 no-padding left-title">Adresse d'enlèvement </div>
							<div class="col-sm-6 col-xs-12 no-padding"> 
								
								 
            <input type="text" name="ville_charg" id="ville4" placeholder="Ville Chargement" required value=<?php echo $res['ville_charg'] ?> />
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-xs-12 no-padding left-title">Date de Chargement </div>
							<div class="col-sm-6 col-xs-12 no-padding">
								<input type="date" name="date_charg" value=<?php echo $date_charg_americain ?> required>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4 col-xs-12 no-padding left-title">Adresse de chargement </div>
							<div class="col-sm-8 col-xs-12 no-padding form">
								<textarea placeholder="Plus de details sur votre marchandise" name="adresse_charg" required><?php echo $res['adresse_charg'] ?></textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-xs-12 formulaire">
					<h3 class="txt-bordure sections-title">Livraison</h3>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-4 col-xs-12 no-padding left-title">Pays de Livraison </div>
							<div class="col-sm-6 col-xs-12 no-padding">
								<select type="text" name="pays_liv" id="pays5" placeholder="Pays *" required onchange="changePays(12)" >
									<option 
										<?php if($res['pays_liv']=='Cameroun') echo "selected" ?>
										value="Cameroun" style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
										Cameroun
									</option>
									
									<option 
										<?php if($res['pays_liv']=='Congo') echo "selected" ?>
										value="Congo" style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
										Congo
									</option>
									
									<option 
										<?php if($res['pays_liv']=='Gabon') echo "selected" ?>
										value="Gabon" style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
										Gabon
									</option>
									
									<option
										<?php if($res['pays_liv']=='Tchad') echo "selected" ?>
										value="Tchad" style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
										Tchad
									</option>
									
									<option 
										<?php if($res['pays_liv']=='République centrafricaine') echo "selected" ?>
										value="République centrafricaine" style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
										République centrafricaine
									</option>

									<option
										<?php if($res['pays_liv']=='Guinée équatoriale') echo "selected" ?>
										value="Guinée équatoriale" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
										Guinée équatoriale
									</option>
								</select>
								
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4 col-xs-12 no-padding left-title">Adresse de livraison </div>
							<div class="col-sm-6 col-xs-12 no-padding"> 
								 <input type="text" name="ville_liv" id="ville5"  style="width: 100%; border-width: 5px;" placeholder="Adresse de livraison" value="<?php echo $res['ville_liv'] ?>"/>
																		<div id="suggestions-container" style="position: relative;"></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 col-xs-12 no-padding left-title">Au plus tard </div>
							<div class="col-sm-6 col-xs-12 no-padding">
								<input type="date" name="date_liv" required value=<?php echo $date_liv_americain ?>>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4 col-xs-12 no-padding left-title">Adresse de Livraison </div>
							<div class="col-sm-8 col-xs-12 no-padding form">
								<textarea placeholder="Plus de details sur votre marchandise" name="adresse_liv" required><?php echo $res['adresse_liv'] ?></textarea>
							</div>
						</div>
					</div>
				</div>
				
				 <!-- <div class="row form-group" id="prixpropdetails"   >
                                                                <div class="col-sm-2 col-xs-12 no-padding left-title">Modalité de payement
</div>
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number"
                                                                    onchange="form1.reste.value=form1.prix_prop.value-form1.avance.value"
                                                                    placeholder="Au chargement"
                                                                        name="avance" class="col-xs-12">
                                                                </div>
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number" placeholder="A la livraison"
                                                                    onfocus="form1.avance.value=form1.prix_prop.value-form1.reste.value"

                                                                        name="reste" class="col-xs-12">
                                                                </div>
                                                                <div class="col-sm-1 col-xs-12 no-padding">
                                                                <input  placeholder="devise"
                                                                style="color: #808080;
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


															<div class="row form-group" >
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

                                                     </div> -->

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
					<h3 class="txt-bordure sections-title">Autres informations</h3>


<div class="col-md-12 no-padding">
	<textarea name="autre_info"placeholder="Autres informations" value="<?php echo $res['autre_info']?>" id="" cols="30" rows="4"><?php echo $res['autre_info']?></textarea>
</div>
				</div>
		
			</div>
				
			<div class="col-md-8 col-xs-12 formulaire">		
				<div class="col-xs-1 form pull-right hidden-xs">
					<div class="res-flx petit ">
						<input type="submit" value="Modifier" <?php if(!isset($_SESSION['login_user'])) { echo "disabled" ;} ?> />
					</div>
				</div>
				
				<div class="col-xs-12 form hidden-lg hidden-sm hidden-md">
					<div class="res-flx ">
						<input type="submit" value="Modifier" <?php if(!isset($_SESSION['login_user'])) { echo "disabled" ; } ?> />
					</div>
				</div>
			</div></div>
			
		</form>
	</div>
</section>


<?php } ?>
<?php include"footer.php"?>