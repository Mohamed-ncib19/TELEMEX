<?php include"header.php" ?>

<section class="page-title-section consultation">
</section>
<section class="contact-info-section">
    <div class="container ">

        <div class="row content-row">

            <div class="col-md-6">
                <div class="contact-map" id="testprint">
                    <?php
                        $id_charg=$_GET['id_charg'];

                        $delelenotification="DELETE FROM `notifications` WHERE id_chargement='$id_charg'";  

                        $result = mysqli_query($db,$delelenotification);

                        $selectSQL="SELECT * FROM chargement, transporteur WHERE id_charg='$id_charg' AND chargement.telephone=transporteur.telephone";

                        $resultat = mysqli_query($db,$selectSQL);
                        $res=mysqli_fetch_array($resultat);
                        $s=mysqli_num_rows($resultat);

                        if($s>0){
                            $date_liv=   $res['date_liv'];
                            $date_charg=   $res['date_charg'];

                    ?>
<div class="form-group">
                                <b class="txt-bordure sections-title">Auteur</b>

                                <div class="col-md-12 ">Entreprise : <?php echo $res['r_s']; ?></div>

                                <div class="col-md-12 ">E-mail : <?php echo $res['email']; ?></div>
                                <div class="col-md-12 ">Télephone : <?php echo $res['telephone']; ?></div>


                            </div>
                 
                    <div class="form-group">
                                <b style="    font-size: 20px;
    font-weight: 500;
    margin-bottom: 20px;
    color: #2b2d86;
    width: 100% !important;">Expéditeur</b>
                                <div class="col-md-12 ">Nom: <?php echo $res['name_expediteur']; ?></div>
                                <div class="col-md-12 ">Télephone : <?php echo $res['telephone_expediteur']; ?></div>


                            </div>
                        <br>
                        <br>
                        <div class="form-group">
                                <b style="    font-size: 20px;
    font-weight: 500;
    margin-bottom: 20px;
    color: #2b2d86;
    width: 100% !important;">Détail de l’offre</b>

                            </div>

                            <div class="res-flx img_lg">
                        <img src="./img/uploaded/<?php echo $res['img_march']; ?>">
                    </div>
                    <div class="col-md-12">Marchandise : <?php echo $res['marchandise']; ?></div>
                    <div class="col-md-12 hidden">Emballage : <?php echo $res['emballage']; ?></div>
                  
                    <div class="col-md-12 hidden">Nombre de Colis : <?php echo $res['nb_colis']; ?></div>
                   

                   
                    <div class="col-md-12">Détails sur le colis : <?php echo $res['details_march']; ?></div>
                    <div class="col-md-12 hidden">Type de véhicule : 
                        <?php echo $res['type_vehicule'] ; ?></div>
                        <div class="col-md-12 hidden">Nombre de véhicules : <?php echo $res['nb_vehicules']; ?></div>

                    <div class="col-md-12">Adresse d'enlèvement :
                        <?php echo $res['adresse_charg'].' , '.$res['ville_charg']; ?></div>
                    <div class="col-md-12">Heure de ramassage : <?php echo $res['date_charg']; ?></div>
                
                    <div class="col-md-12">Adresse Livraison :
                        <?php echo $res['adresse_liv'].' , '.$res['ville_liv']; ?></div>
                    <div class="col-md-12 hidden">Temps estimé pour l’enlèvement : <?php echo $res['date_liv']; ?></div>
                    <div class="col-md-12">Distance: <?php echo $res['distance']; ?></div>
                    <div class="col-md-12">Prix
                        extimé: <?php echo $res['priceestimated']; ?> FCFA
                    </div>
                    <?php if($res['type_vehicule']!="Moto"){ ?>

                    <div class="col-md-12">Prix
                        proposé:<?php if(($res['prix_prop']=="") OR ($res['prix_prop']==" ")){ echo " N'est pas indiqué"; } else{echo $res['prix_prop'];} ?>
                    </div>
                    <div class="col-md-12">Valeur de la
                        Marchandise:<?php if(($res['valeurm']=="") OR ($res['valeurm']==" ")){ echo " N'est pas indiqué"; } else{echo $res['valeurm'];} ?>
                    </div>
                    <div class="col-md-12">Avance:<?php if(($res['avance']=="") OR ($res['avance']==" ")){ echo " N'est pas indiqué"; } else{echo $res['avance'];} ?>
                    </div>
                    <div class="col-md-12">Méthode de payement:<?php if(($res['methodepayement']=="") OR ($res['methodepayement']==" ")){ echo " N'est pas indiqué"; } else{echo $res['methodepayement'];} ?>
                    </div>
                    <?php } ?>

                    <div class="col-md-12 hidden">Autres informations:<?php if(($res['autre_info']=="") OR ($res['autre_info']==" ")){ echo ""; } else{echo $res['autre_info'];} ?>
                    </div>
                    <br>
                        <br>
                     
                                <b style="    font-size: 15px;
    font-weight: 200;
    margin-bottom: 20px;
    color: #2b2d86;
    width: 100% !important;" >Personne à contacter</b>
 <div class="col-md-12">Nom & Prénom  :<?php echo ($res['contact_name']==""||$res['contact_name']==" ")?($res['prenom']." ".$res['nom']):$res['contact_name']; ?></div>
                            <div class="col-md-12">Numéro de téléphone :<a href="tel:<?php echo  ($res['contact_phone']==""||$res['contact_phone']==" ")?($res['prenom']." ".$res['nom']):$res['contact_phone'] ; ?>"><i
                                    class="fa fa-phone"></i><?php echo  ($res['contact_phone']==""||$res['contact_phone']==" ")?($res['telephone']):$res['contact_phone'] ; ?></a></div>
                    <div class="col-md-12"><a href="invoice2.php?id_charg=<?php echo $_GET['id_charg']; ?>">Ordre 
de chargement</a> <br>
                            <!-- <a href="invoice1.php?id_charg=<?php echo $_GET['id_charg']; ?>">Consulter
                                les fiches de transport</a> -->
                </div>

                </div>
            </div>

            <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']=='admin'){
                                        ?>



            <div class="col-md-6">
                <div class="contact-map">




                    <h3 class="txt-bordure sections-title">Postuler</h3>
                    <div class="col-md-12">
                        <div class="contact-map">
                            <!-- <div class="form-group">
                                <b>Contactez Telefret</b>

                                <div class="col-md-12 "></div>
                                <div class="col-md-12 ">E-mail : commercial@telefret.com</div>
                                <div class="col-md-12 ">+237 655 767 535</div>


                            </div> -->
                            <div class="form-group">
                                <form id="postuler" action="post-postuler.php" method="POST">

                                    <div class="row">
                                    <input id="type_vehicule" hidden name="type_vehicule"
                                            value="<?php echo $res['type_vehicule'] ; ?>" >

                                        <input id="id_chargement" hidden name="id_chargement"
                                            value="<?php echo  $id_charg; ?>" type="number">

                                            <input id="to_telephone" hidden name="to_telephone"
                                            value="<?php echo  $res['telephone']; ?>" >
                                            <input id="mail" hidden name="mail"
                                            value="<?php echo  $res['email']; ?>" >

                                        <?php
 $telephone=$_SESSION['telephone'];

$vehiculedispo="SELECT * FROM abonnements  ORDER BY id_abonnement DESC;
";

$result = mysqli_query($db,$vehiculedispo);

?>
                                        <div class="col-md-12 padding-12">
                                            <label>Sélectionner les véhicules:</label>


                                            <table  id='empTableAbon' class='display dataTable'>
                                            <thead >
                                            <tr>
                                                <th></th>
                                                <th>IDGPS</th>
                                                <th>Matricule</th>
                                                <th>Position</th>
                                                <th>Distance</th>
                                            </tr>
                                            </thead>
                                            </table>


                                            <script>
                                                    $(document).ready(function () {
                                                        var dataTable = $('#empTableAbon').DataTable({
                                                            'processing': true,
                                                            'serverSide': true,
                                                            'serverMethod': 'post',
                                                            //'searching': false, // Remove default Search Control
                                                            'ajax': {
                                                                'url': 'ajaxfile_vehicules.php',
                                                                'data': function (data) {
                                                                    // Read values

                                                                    data.latitude = "<?php echo $res['latitude'];  ?>";
                                                                    data.longitude = "<?php echo $res['longitude'];  ?>";
                                                                    data.id_charg = "<?php echo $_GET['id_charg'];  ?>";

                                                                }
                                                            },
                                                            'success': function (data) {
                                                                console.log(data)
                                                            },
                                                            'error': function (data) {
                                                                console.log(data)
                                                            },
                                                            "createdRow": function (row, data, dataIndex) {
                                                                    $(row).addClass('testclassvalid');
                                                            },
                                                            'columns': [

                                                           {
                                                    "mData": "ID_gps",
                                                    "mRender": function(data, type, row) {
                                                        return row.input ;
                                                    }
                                                },{
                                                    data: 'ID_gps'
                                                },{
                                                    data: 'matricule'
                                                },{
                                                        data: 'display_name'
                                                    },{
                                                    data: 'distance'
                                                }
                                                            ],
                                                            dom: 'Bfrtip',
                                                            buttons: [
                                                                //'copyHtml5',
                                                                'excelHtml5',
                                                                //'csvHtml5',
                                                                'pdfHtml5'
                                                            ]
                                                        });
                                                        dataTable.buttons().container()
                                                            .appendTo('#example_wrapper .col-sm-6:eq( 0 )');
                                                    });
                                                </script>


                                            <script>
                                            
$(document).ready(function() {
  $('input[type="checkbox"]').click(function() {
    $('input[type="checkbox"]').not(this).prop('checked', false);
  });
});

  </script>


                                            <select style="height: 50px;" type="text" id="vehicules" 
                                                multiple placeholder="Pays *" class="hidden">
                                                <option value="Select School">Selectionner les véhicules</option>
                                                <?php
    while ($row = mysqli_fetch_array($result)) {
        $idab=";".$row['id_abonnement'];

        $vehiculedispoused="SELECT * FROM `postuler` WHERE `id_chargement`=$id_charg AND `vehicules` LIKE '%$idab%';";

$resultused = mysqli_query($db,$vehiculedispoused);
$sused=mysqli_num_rows($resultused);

        echo "<option value='" . $row['id_abonnement'] . "'  ".($sused>0?"disabled":"")."  ".($sused>0?" style=\"background-color: #f39797;\"":"")."  >'" . $row['matricule'] . "'</option>";
    }
    ?>
                                            </select>
                                        </div>
                                        

                                        <div class="col-md-12 padding-12 <?php echo $res['type_vehicule']=="Moto"?'hidden':'' ?>">

<label>Devise:</label>

<select style="height: 50px;" type="text" id="vehicules" name="devise" required>
                                                <option value="FCFA">FCFA</option>
                                                <option value="EURO">EURO</option>

                                                </select>
                                            </div>
                                        <div class="col-md-12 padding-12 <?php echo $res['type_vehicule']=="Moto"?'hidden':'' ?>">

                                            <label>Montant proposer:</label>

                                            <input id="montant" name="montant" type="number">
                                        </div>
                                        <div class="col-md-12 padding-12 <?php echo $res['type_vehicule']=="Moto"?'hidden':'' ?>">

                                            <label>Voulez vous une avance?:</label>

                                            <input id="avance" name="avance" type="number">
                                        </div>

                                        <div class="col-md-12 padding-12 <?php echo $res['type_vehicule']=="Moto"?'hidden':'' ?>">
                                        <label>Informations supplémentaires:</label>

                                            <textarea name="message" class="form-control" rows="6" required=""
                                                placeholder="Votre Message">
                                             </textarea>
                                         
                                        </div>
                                    </div>
                            </div>


                            <div class="form-group text-area">
                            <label class="" style="color: red;"><?php echo $res['statutenvoi']==1?"Ce chargement est deja prise en charge par un transporteur!En modifiant , vous l'affecterrez a un autre.":"" ?></label>

                            </div>
                            <!-- <div class="g-recaptcha" data-sitekey="6LfAXwoaAAAAAL4Bp-qVHLhXLzBW-uYcUykT9592" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>  -->
                            <button type="submit" class="btn btn-primary pull-right" >Attribuer
                            </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>



        </div><?php }}?>

        <?php if($res['contact_name']!=""){?>
        <div class="row" style="margin-top:30px;">
            <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']=='admin'){
                                        ?>
            <div class="col-md-6">
                <div class="contact-map">
                    <h3 class="txt-bordure sections-title">Personne à contacter </h3>
                    <div class="container no-padding">

                        <div class="col-md-12 no-padding">Nom & Prénom du contact : <?php echo ($res['contact_name']==""||$res['contact_name']==" ")?($res['prenom']." ".$res['nom']):$res['contact_name']; ?>
                        </div>
                        <div class="col-md-12 no-padding">Numéro de téléphone du contact :
                            <?php echo $res['contact_phone']; ?> <a href="tel:<?php echo  ($res['contact_phone']==""||$res['contact_phone']==" ")?($res['prenom']." ".$res['nom']):$res['contact_phone'] ; ?>"><i
                                    class="fa fa-phone"></i></a></div>
                        <div class="col-md-12 no-padding">Nom du client : <?php echo $res['nom'].' '.$res['prenom'];  ?>
                        </div>
                        <div class="col-md-12 no-padding">Numero du client :<?php  echo $res['telephone']; ?></div>
                        <div class="col-md-12 no-padding">Email : <a
                                href="mailto:<?php echo $res['email']; ?>"><?php echo $res['email']; ?> </a></div>

                    </div>
                </div>
            </div> <?php }}?><?php }

else {    ?>
            <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']=='admin'){
                                        ?>
            <div class="col-md-6">
                <div class="contact-map">
                    <h3 class="txt-bordure sections-title">Contact client </h3>
                    <div class="container no-padding">
                        <div class="col-md-12 no-padding">Nom du client : <?php echo $res['nom'].' '.$res['prenom'];  ?>
                        </div>
                        <div class="col-md-12 no-padding">Numero du client :<?php  echo $res['telephone']; ?></div>
                        <div class="col-md-12 no-padding">Email : <a
                                href="mailto:<?php echo $res['email']; ?>"><?php echo $res['email']; ?> </a></div>
                    </div>
                </div>
            </div>

            <?php }}?>
            <?php }	?>


        </div>
        <?php
		}
		else{
			echo " Il faut choisir un Chargement !";
		}
	?>
</section>

<?php include"footer.php" ?>