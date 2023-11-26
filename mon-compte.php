

<?php include"header.php";

if (isset($_SESSION['login_user'])) {

?>

<section class="page-title-section trouvtrans">
	<div class="container hidden-xs slide-bord">
		<div class="demo-slides">
			<div class="animated lightSpeedIn slide-title">Mon Compte</div>
			<p class="lead animated lightSpeedIn">Consultez ou modifier vos informations</p>
		</div>
	</div>
</section>


<section class="contact-info-section">
	<div class="container ">

		<div class="row content-row">
			
			<div class="col-md-12">
				<div class="contact-map">
					<h3 class="txt-bordure sections-title">Mes informations</h3>
					
					<form id="update_information" action="update_information.php" method="POST" name="update_information">
						<div class="form-group">
						
				
							<div class="row">
								<div class="col-md-2 col-xs-12"></div>
								<div class="col-md-2">
									<label>
									  <input type="radio" <?php if($_SESSION['type']=="client") {echo "checked='checked'";} else {echo "disabled";} ?> name="type" id="client" value="client"> Expéditeur
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="col-md-3">
									<label>
									  <input type="radio" <?php if($_SESSION['type']=="transporteur"){ echo "checked='checked'"; } else {echo "disabled"; }?>  name="type" id="transporteur" value="transporteur"> Transporteur
									  <span class="checkmark"></span>
									</label>
								</div>
							</div>
						
							<div class="row">
								<div class="col-md-2 col-xs-12  left-title ">Num. de Téléphone :</div>
								<div class="col-md-8 no-padding ">
									<input id="telephone" name="telephone" type="text" class="form-control" disabled value="<?php echo $_SESSION['telephone']; ?>"> 
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-2 col-xs-12  left-title ">Votre Nom :</div>
								<div class="col-md-8 no-padding ">
									<input id="nom" name="nom" type="text" class="form-control" disabled required value="<?php echo $_SESSION['nom']; ?>"> 
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-xs-12  left-title ">Votre Prénom :</div>
								<div class="col-md-8 no-padding ">
									<input id="prenom" name="prenom" type="text" class="form-control" disabled required value="<?php echo $_SESSION['prenom']; ?>"> 
								</div>
							</div>
							
							
							<div class="row" id="position2">
						<div id="raison">
									<div class="col-md-2 col-xs-12  left-title ">Entreprise:</div>
									<div class="col-md-8 no-padding">
										<input id="r_s" name="r_s" type="text" class="form-control" required disabled value="<?php echo $_SESSION['r_s']; ?>"> 
									</div>
								</div>
					
							</div>
							
							
							<div class="row">
								<div class="col-md-2 col-xs-12  left-title ">Votre Pays :</div>
								<div class="col-md-8 no-padding">
									<select type="text" name="pays" id="pays_p" placeholder="Pays *" required disabled >
										<option value="Cameroun" <?php if($_SESSION['pays']=="Cameroun") echo "selected"; ?>>Cameroun</option>
										<option value="Congo" <?php if($_SESSION['pays']=="Congo") echo "selected"; ?>>Congo</option>
										<option value="Gabon" <?php if($_SESSION['pays']=="Gabon") echo "selected"; ?>>Gabon</option>
										<option value="Tchad" <?php if($_SESSION['pays']=="Tchad") echo "selected"; ?>>Tchad</option>
										<option value="République centrafricaine" <?php if($_SESSION['pays']=="République centrafricaine") echo "selected"; ?>>République centrafricaine</option>
										<option value="Guinée équatoriale" <?php if($_SESSION['pays']=="Guinée équatoriale") echo "selected"; ?>>Guinée équatoriale</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-2 col-xs-12  left-title ">Votre adresse :</div>
								<div class="col-md-8 no-padding ">
									<input id="adresse" name="adresse" type="text" class="form-control" required disabled value="<?php echo $_SESSION['adresse']; ?>"> 
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-2 col-xs-12  left-title ">Votre e-mail :</div>
								<div class="col-md-8 no-padding ">
									<input id="email" name="email" type="text" class="form-control" disabled value="<?php echo $_SESSION['email']; ?>"> 
								</div>
							</div>
							
							<div class="col-md-10 col-xs-12 p-0 mtb-sm" id="modif">
								<button type="button" class="btn btn-primary pull-right" onclick="modiftook()">Modifier</button>
							</div>

							<div class="col-md-10 col-xs-12 p-0 mtb-sm" style="display:none;" id="oksub">
								<button type="submit" class="btn btn-primary pull-right ">OK</button>
							</div>
	
							
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</section>		
			
<?php 
}
include"footer.php" ;

if (!isset($_SESSION['login_user'])) {
	echo '<script language="Javascript">  document.location.replace("index.php"); </script>';
}
?>