<?php include("header.php") ?>

<section class="page-title-section consultation">
</section>
<section class="contact-info-section">
    <div class="container ">

        <div class="row content-row">

            <div class="col-md-4">
                <div class="contact-map" id="testprint">
                    <?php
                        $id_charg=$_GET['id_charg'];

                        $selectSQL="SELECT * FROM chargement, transporteur WHERE id_charg='$id_charg' AND chargement.telephone=transporteur.telephone";

                        $resultat = mysqli_query($db,$selectSQL);
                        $res=mysqli_fetch_array($resultat);
                        $s=mysqli_num_rows($resultat);

                        if($s>0){
                            $date_liv=   $res['date_liv'];
                            $date_charg=   $res['date_charg'];

                    ?>

                 
                    <div class="form-group">
                                <b class="txt-bordure sections-title">Expéditeur</b>

                                <div class="col-md-12 ">Entreprise : <?php echo $res['r_s']; ?></div>

                                <div class="col-md-12 ">E-mail : <?php echo $res['email']; ?></div>
                                <div class="col-md-12 ">Télephone : <?php echo $res['telephone']; ?></div>


                            </div>
                        <br>
                        <br>
                        <div class="form-group">
                                <b style="    font-size: 20px;
    font-weight: 500;
    margin-bottom: 20px;
    color: #2b2d86;
    width: 100% !important;">Détail de l’offre </b>

                            </div>

                            <div class="res-flx img_lg">
                        <img src="./img/uploaded/<?php echo $res['img_march']; ?>">
                    </div>
                    <div class="col-md-12">Marchandise : <?php echo $res['marchandise']; ?></div>
                    <div class="col-md-12">Emballage : <?php echo $res['emballage']; ?></div>
                  
                    <div class="col-md-12">Nombre de Colis : <?php echo $res['nb_colis']; ?></div>
                   

                   
                    <div class="col-md-12">Détails sur le colis : <?php echo $res['details_march']; ?></div>
                    <div class="col-md-12">Type de véhicule : Camion
                        <?php echo $res['type_vehicule'].'  '.$res['poid']; ?></div>
                        <div class="col-md-12">Nombre de véhicules : <?php echo $res['nb_vehicules']; ?></div>

                    <div class="col-md-12">Adresse Chargement :
                        <?php echo $res['adresse_charg'].' , '.$res['ville_charg']; ?></div>
                    <div class="col-md-12">Date Chargement : <?php echo $res['date_charg']; ?></div>
                    <div class="col-md-12">Tolérence au retard Chargement :
                        <?php if($res['tol_charg']==1){ echo $res['jr_retard2']." jour(s)"; } else{echo "Non";} ?></div>

                    <div class="col-md-12">Adresse Livraison :
                        <?php echo $res['adresse_liv'].' , '.$res['ville_liv']; ?></div>
                    <div class="col-md-12">Date d'arrivée au plus tard : <?php echo $res['date_liv']; ?></div>
                    <div class="col-md-12">Tolérence au retard Livraison :
                        <?php if($res['tol_liv']==1){ echo  $res['jr_retard']." jour(s)"; } else{echo "Non";} ?></div>

                    <div class="col-md-12">Prix
                        proposé:<?php if(($res['prix_prop']=="") OR ($res['prix_prop']==" ")){ echo " N'est pas indiqué"; } else{echo $res['prix_prop'];} ?>
                    </div>
                    <div class="col-md-12">Valeur de la
                        Marchandise:<?php if(($res['valeurm']=="") OR ($res['valeurm']==" ")){ echo " N'est pas indiqué"; } else{echo $res['valeurm'];} ?>
                    </div>
                    <br>
                    <div class="col-md-12">Avance:<?php if(($res['avance']=="") OR ($res['avance']==" ")){ echo " N'est pas indiqué"; } else{echo $res['avance'];} ?>
                    </div>
                    <div class="col-md-12">Méthode de payement:<?php if(($res['methodepayement']=="") OR ($res['methodepayement']==" ")){ echo " N'est pas indiqué"; } else{echo $res['methodepayement'];} ?>
                    </div>

                    <div class="col-md-12">Autres informations:<?php if(($res['autre_info']=="") OR ($res['autre_info']==" ")){ echo ""; } else{echo $res['autre_info'];} ?>
                    </div>
                        <br>
                     
                                <b style="    font-size: 15px;
    font-weight: 200;
    margin-bottom: 20px;
    color: #2b2d86;
    width: 100% !important;" >Personne à contacter</b>
 <div class="col-md-12">Nom & Prénom  : <?php echo $res['contact_name']==""? $res['r_s']:$res['contact_name']; ?></div>
                            <div class="col-md-12">Numéro de téléphone :
                            <?php echo $res['contact_phone']? $res['telephone']:$res['contact_phone']; ?> <a href="tel:<?php echo $res['contact_phone']; ?>"><i
                                    class="fa fa-phone"></i></a></div>
                    <div class="col-md-12">
                        <a href="invoice2.php?id_charg=<?php echo $_GET['id_charg']; ?>">Ordre 
de chargement</a> <br>
                        <a href="invoice1.php?id_charg=<?php echo $_GET['id_charg']; ?>">Consulter les fiches de transport</a>

                </div>

                </div>
            </div>

            <?php if  (isset($_SESSION['login_user'])) {    ?>



            <div class="col-md-8">
       
                 
                                         <h3 class="txt-bordure sections-title">Liste des véhicules sélectionnés</h3>
                    <div class="col-md-12"  style="overflow-x: auto;">
                        <div class="contact-map">
                        <div class="tab-pane fade in active">
                                    <div class="css-tab-content formulaires">
                                        
                                    </div>
									<div>


									
                                    <div class="container result-rech">


                                    <!-- Custom Filter -->

                                    <!-- Table -->
                                    <table id='empTable1' class='display dataTable'>
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Marque</th>
                                                <th>Type de véhicule</th>
                                                <th>Matricule</th>
                                                <th>Poids max</th>
                                                <th>Chauffeur</th>
                                                <th>Propiétaire</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                    </table>

                                    <script>
                                $(document).ready(function() {
                                    var dataTable = $('#empTable1').DataTable({
                                        'processing': true,
                                        'serverSide': true,
                                        'serverMethod': 'post',
                                        //'searching': false, // Remove default Search Control
                                        'ajax': {
                                            'url': 'ajaxfilechv.php',
                                            'data': function(data) {
                                              
												data.now = <?php echo $_GET['id_charg']; ?>;


                                            }
                                        },
                                        'success': function(data) {
                                            console.log(data)
                                        },
                                        'error': function(data) {
                                            console.log(data)
                                        },
                                        "createdRow": function(row, data, dataIndex) {
                                            // console.log(data.date_arr, new Date(data.date_arr
                                            //     .split("/")[1] +
                                            //     "/" + data.date_arr.split("/")[0] +
                                            //     "/" + data.date_arr
                                            //     .split("/")[2]))

                                             if (data.suivi ) {

                                                $(row).addClass('testclassvalid');
                                                $(row).attr( 'id', 'tablelinesuivi'+data.id_abonnement );

                                             } else {
                                                 $(row).addClass('testclass');
                                             }


                                        },
                                        'columns': [

                                            {
                                                "mData": "img_vehicule",
                                                "mRender": function(data, type, row) {
                                                    return `<div 

class="res-flx-s img-avatar-sm">
<img src="./img/uploaded/${data ? data : 'logo.png'}">
`
                                                },

                                            },
                                            {
                                                data: 'marque'
                                            },
                                            {
                                                data: 'type_vehicule'
                                            },
                                            {
                                                data: 'matricule'
                                            },
                                             {
                                                "mData": "poid_max",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return row.poid_max + "Tonnes " ;
                                                }
                                            },
                                            {
                                                "mData": "nom_chauffeur",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return row.nom_chauffeur + " / " + row
                                                        .telephone_chauffeur ;
                                                }
                                            }, {
                                                "mData": "nom",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return data.suivi+" / "+ row.nom + " " + row
                                                        .prenom + " / " + row
                                                        .telephone+ " / " + row
                                                        .email+ " / " + row
                                                        .r_s;
                                                }
                                            },
                                            {
                                                "mData": "telephone",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return `
                                                    <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-vehicule.php?id_abonnement=${row.id_abonnement}&amp;id_chargement=<?php echo $_GET['id_charg']; ?>"><img style="height:20px;width:20px;margin:5px" src="./img/supp.png" ></a>
                                                    <button type="button" class="btn btn-primary" id="btssuivi${row.id_abonnement}"
onclick="validsuivi(`+row.id_abonnement+`);"
>
 ${row.suivi?'Désactiver':'Activer'} 
</button>
`;
                                                }
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
                                        .appendTo('#example_wrapper .col-sm-6:eq(0)');

                                    $('#villed').change(function() {
                                        dataTable.draw();
                                    });
                                    $('#villef').change(function() {
                                        dataTable.draw();
                                    });
                                    $('#dated').change(function() {

                                        dataTable.draw();
                                    });
                                    $('#datef').change(function() {
                                        dataTable.draw();
                                    });
                                    $('#pays3').change(function() {
                                        dataTable.draw();
                                    });

                                    $('#pays2').change(function() {
                                        dataTable.draw();
                                    });
                                });
                                </script>


                                </div>

                          
                        </div>
                    </div>
            
                </div>
                
            </div>
                            </br>

                            </br>

                            </br>
                            <?php

                        $rrr="SELECT * FROM status_gps WHERE id_chargement='$id_charg' ";

                        $r1 = mysqli_query($db,$rrr);
                        $data=null;
                        while ($r11 = mysqli_fetch_assoc($r1)) {
                            $data=$r11;
                        }
                      //    echo  json_encode($data)  ;
                      //    echo explode("-",  $data["Date_D"])[2]."/".explode("-",$data["Date_D"])[1]."/".explode("-",$data["Date_D"])[0]  ;
                  // echo "                    ". $res["date_charg"];
                   ?>
      <?php
                      
                    ?>


            <div class="contact-map">

<div class="form-group">                
<form id="postuler" action="post-status.php" method="POST">

<div class="row">
<input id="id_chargement" hidden name="id_chargement"
value="<?php echo  $id_charg; ?>" type="number">

<input id="to_telephone" hidden name="to_telephone"
value="<?php echo  $res['telephone']; ?>" >
<input id="mail" hidden name="mail"
value="<?php echo  $res['email']; ?>" >

<div class="col-md-12 padding-12">
<label>Date de début du suivit:</label>

<input id="Date_D" name="Date_D" type="date" value="<?php echo  $data==null? date("Y-m-d", strtotime(str_replace('/', '-', $res["date_charg"] ))) :date("Y-m-d", strtotime(str_replace('/', '-',explode("-",  $data["Date_D"])[2]."/".explode("-",$data["Date_D"])[1]."/".explode("-",$data["Date_D"])[0] )))  ; ?>" >
</div>
<div class="col-md-12 padding-12">
<label>Date de fin du suivit:</label>

<input id="Date_D" name="Date_F" type="date" value="<?php echo   $data==null? date("Y-m-d", strtotime(str_replace('/', '-', $res["date_charg"] ))) :date("Y-m-d", strtotime(str_replace('/', '-',explode("-",  $data["Date_F"])[2]."/".explode("-",$data["Date_F"])[1]."/".explode("-",$data["Date_F"])[0]  ))); ?>" >
</div>

</div>
</div>

<button type="submit" class="btn btn-primary pull-right">Enregistrer
</button>
</form>
</div>


        </div><?php }?>

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

                        <div class="col-md-12 no-padding">Nom & Prénom du contact : <?php echo ($res['contact_name']==""||$res['contact_name']=="")?($res['prenom']." ".$res['nom']):$res['contact_name']; ?>
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