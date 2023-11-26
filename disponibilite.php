<?php include"header.php" ?>

<section class="page-title-section consultation">
</section>


<section class="contact-info-section">
    <?php
        $id_disp=$_GET['id_disp'];
        $telephone=$_SESSION['login_user'];

        $selectSQL="SELECT * FROM disponibilite, transporteur, abonnements  WHERE id_disp='$id_disp' AND abonnements.id_abonnement=disponibilite.id_abonnement AND abonnements.telephone=transporteur.telephone";

        $resultat = mysqli_query($db,$selectSQL);
        $res=mysqli_fetch_array($resultat);
        $s=mysqli_num_rows($resultat);

        if($s>0){
    ?>     
    <div class="container ">

        <div class="row content-row">

            <div class="col-md-6">
                <div class="contact-map">
                    <h3 class="txt-bordure sections-title">Détails de la Disponibilité </h3>
                    <div class="res-flx img_lg">
                        <img src="./img/uploaded/<?php echo $res['img_vehicule']; ?>">
                    </div>
                    <div id='testprint1'>
                        <div class="col-md-12">Matricule Véhicule: <font style="text-transform: uppercase;"><?php echo $res['matricule']; ?></font></div>

                        <div class="col-md-12">Marque Véhicule: <?php echo $res['marque']; ?></div>

                        <div class="col-md-12">Type Véhicule : <?php echo $res['type_vehicule']; ?></div>

                        <div class="col-md-12">Poids Disponible : <?php echo $res['poid_disp'].' Tonnes'; ?></div>    

                        <div class="col-md-12">Départ :  <?php echo $res['adresse_dep'].', '.$res['ville_dep']; ?> </div> 
						
                        <div class="col-md-12">Date de départ  : <?php echo $res['date_dep']; ?></div>  						

                        <div class="col-md-12">Destination : <?php echo $res['adresse_arr'].', '.$res['ville_arr']; ?></div>    

                        <div class="col-md-12">Date d'arrivée au plus tard: <?php echo $res['date_arr']; ?></div>    

						<?php if($res['telephone']!=$telephone) { ?>
							<div class="col-md-12 vert" style="font-family:titillium-bold ;">Note : <?php echo $res['note']; ?> / 5 </div> 
							<form class="col-md-12" name="rating">

								<a href="rating.php?telephone=<?php echo $res['telephone']; ?>&id_disp=<?php echo $res['id_disp']; ?>&note=1"><span class="fa fa-star <?php if (round($res['note']) >= 1) { echo 'checked' ;} ?> "></span> </a>
								<a href="rating.php?telephone=<?php echo $res['telephone']; ?>&id_disp=<?php echo $res['id_disp']; ?>&note=2"><span class="fa fa-star <?php if (round($res['note']) >= 2) { echo 'checked' ;} ?> "></span> </a>
								<a href="rating.php?telephone=<?php echo $res['telephone']; ?>&id_disp=<?php echo $res['id_disp']; ?>&note=3"><span class="fa fa-star <?php if (round($res['note']) >= 3) { echo 'checked' ;} ?> "></span> </a>
								<a href="rating.php?telephone=<?php echo $res['telephone']; ?>&id_disp=<?php echo $res['id_disp']; ?>&note=4"><span class="fa fa-star <?php if (round($res['note']) >= 4) { echo 'checked' ;} ?> "></span> </a>
								<a href="rating.php?telephone=<?php echo $res['telephone']; ?>&id_disp=<?php echo $res['id_disp']; ?>&note=5"><span class="fa fa-star <?php if (round($res['note']) >= 5) { echo 'checked' ;} ?> "></span> </a>

							</form>
						<?php }?>
                    </div>
                    
                    
                    
                    <div class="col-md-12"><a href="#" onclick="PrintElem('testprint1')">Imprimer Chargement</a></div>
                    
                </div>
            </div>
            <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']!='admin'){
                                        ?> 	
			
			<div class="col-md-6">
                <div class="contact-map">
                    <h3 class="txt-bordure sections-title">Contactez Telefret</h3>   
                    <div class="container result-rech">

                       <!-- <div class="col-md-12 ">Nom & Prénom : <?php echo $res['nom'].' '.$res['prenom'];  ?></div>
                        <div class="col-md-12 ">E-mail : <?php echo $res['email']; ?></div>
                        <div class="col-md-12 ">Téléphone : <?php echo $res['telephone']; ?></div>
                        <div class="col-md-12 ">Je suis un <?php echo $res['type'].', '.$res['genre']; ?></div> -->
                        <div class="col-md-12 ">E-mail : commercial@telefret.com</div>
                        <div class="col-md-12 ">Téléphone : +237 655 767 535</div>

                    </div>
                    <div class="col-md-12">
                        <div class="contact-map">
                            <form id="mainContact" action="sendemails.php?mail=commercial@telefret.com&id_disp=<?php echo  $id_disp; ?>" method="POST">

                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-md-12 no-padding">
                                            <input name="sujet" type="text"  class=" form-control" placeholder="Sujet">
                                        </div>
                                        <div class="col-md-12 padding-12">
                                            <textarea name="message" class="form-control" rows="6" required="" placeholder="Votre Message"></textarea>
                                            <input id="telephone" name="telephone" type="hidden" value="<?php echo $_SESSION['login_user']; ?>">
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group text-area">

                                </div>

                                <button type="submit" class="btn btn-primary pull-right">ENVOYER</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div> <?php }}?>
		
		<?php if($res['contact_name']!=""){?>
		<div class="row" style="margin-top:30px;">
		 <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']=='admin'){
                                        ?> 
            <div class="col-md-6">
                <div class="contact-map">
                    <h3 class="txt-bordure sections-title">Personne à contacter</h3>   
                    <div class="container no-padding">
						   <div class="col-md-12 no-padding">Nom  du client : <?php echo $res['nom'].' '.$res['prenom'];  ?></div>
                                                <div class="col-md-12 no-padding">Numero  du client :<?php  echo $res['telephone']; ?></div>
                                                <div class="col-md-12 no-padding">Email : <a href="mailto:<?php echo $res['email']; ?>"><?php echo $res['email']; ?> </a></div>
						<div class="col-md-12 no-padding">Nom & Prénom du contact : <?php echo $res['contact_name']; ?></div>
						<div class="col-md-12 no-padding">Numéro de téléphone du contact : <?php echo $res['contact_phone']; ?> <a href="tel:<?php echo $res['contact_phone']; ?>"><i class="fa fa-phone"></i></a></div>
					</div>
				</div>
			</div><?php }}?>
		</div>
		<?php }?>
		
    </div>
    
    <?php
        }
        else{
            echo " Il faut choisir un Chargement !";
        }
    ?>
</section>

<?php include"footer.php" ?>