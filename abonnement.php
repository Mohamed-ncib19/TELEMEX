<?php include"header.php" ?>

    <?php
        if (array_key_exists('type', $_SESSION) && $_SESSION['type']=="transporteur"){
    ?>

    <section class="page-title-section trouvtrans">
        <div class="container hidden-xs slide-bord">
            <div class="demo-slides">
                <div class="animated lightSpeedIn slide-title">Mes véhicules</div>
                <p class="lead animated lightSpeedIn"></p>
            </div>
        </div>
    </section>


    <section class="contact-info-section">
        <div class="container ">

            <div class="row content-row">
                
                <div class="col-md-12">
                    <div class="contact-map">
          

<div class="container result-rech">

<?php
                            $telephone=$_SESSION['telephone'];
            
                            $selectSQL="SELECT * FROM abonnements WHERE telephone='$telephone'";

                            $resultat = mysqli_query($db,$selectSQL);
                            $res=mysqli_fetch_array($resultat);
                            $s=mysqli_num_rows($resultat);
                            
                        ?>    
    <!-- Custom Filter -->

    <div class="css-tab-content formulaires">

        <div class="container hidden" style="padding-left: unset !important;">
            <div class="col-md-6 formulaire">
                <h3 class="txt-bordure sections-title">Debut ulterieur
                    au</h3>

                <div class="form-group">
                    <div class="row">

                        <div class="col-sm-4 col-xs-12 no-padding">
                            <!-- <input type="text" class="form-control"  id="tag2" name="ville_deb" placeholder="Ville de départ"> -->
                            <input type="date" name="ville_deb"
                                id="dated" placeholder="dated">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 formulaire" style="margin: left 5px;">
                <h3 class="txt-bordure sections-title">Fin anterieur au
                </h3>

                <div class="form-group">
                    <div class="row">

                        <div class="col-sm-4 col-xs-12 no-padding">
                            <!-- <input type="text" class="form-control"  id="tag2" name="ville_deb" placeholder="Ville de départ"> -->
                            <input type="date" name="datef" id="datef"
                                placeholder="datef">
                        </div>

                    </div>
                </div>
            </div>


        </div>
        </form>
    </div>

    <!-- Table -->
    <table id='empTable3' class='display dataTable'>
        <thead>
            <tr>
                <th>Image</th>
                <th>Matricule</th>
                <th>Marque</th>
                <th>Type de véhicule</th>
                <th>Poids maximal</th>
                <th>Interne/Externe</th>
                <th>Chauffeur</th>
                <th>Action</th>
            </tr>
        </thead>

    </table>
</div>

<!-- Script -->
<script>
  
$(document).ready(function() {
    var dataTable3 = $('#empTable3').DataTable({
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        //'searching': false, // Remove default Search Control
        'ajax': {
            'url': 'ajaxfile5.php',
            'data': function(data) {
                // Read values

                var dated = $('#dated').val();
                var datef = $('#datef').val();

                // Append to data

                data.dated = dated;
                data.datef = datef;
                data.transporteur = "true";
                data.telephone = <?php echo $_SESSION['telephone']; ?> ;


            }
        },
        'success': function(data) {
            console.log(data)
        },
        'error': function(data) {
            console.log(data)
        },
        "createdRow": function(row, data, dataIndex) {
            console.log("row.valide", data.valide)
            $(row).addClass('tablelineAbonnements'+data.id_abonnement);
$(row).attr( 'id', 'tablelineAbonnements'+data.id_abonnement );

            if (data.valide == 1) {

                $(row).addClass('testclassvalid');

            } else {
                $(row).addClass('testclass');
            }


        },
        'columns': [

            {
                "mData": "img_vehicule",
                "mRender": function(data, type,
                    row) {
                    return `
                   
                    <div 

class="res-flx-s img-avatar-sm">
<img src="./img/uploaded/${data ? data : 'logo.png'}"> </div>`
                },

            },
            {
                data: 'matricule'
            },

            {
                data: 'marque'
            },
            {
                data: 'type_vehicule'
            },
            {
                data: 'poid_max'
            },
            {
                "mData": "gps",
                "mRender": function(data, type,
                    row) {
                    return row.gps == 1 ?
                        'Externe' : 'Interne';
                },

            },
            {
                "mData": "nom_chauffeur",
                "mRender": function(data, type,
                    row) {
                    // console.log(row)
                    return  row
                        .nom_chauffeur +
                        " / " + row
                        .telephone_chauffeur;
                }
            },
            {
                "mData": "telephone",
                "mRender": function(data, type,
                    row) {
                    var value = ``;
                    if (row.valide != 1) {
                        //                     value=value+` 
                        //                     <form method="POST" name="val"
                        // action="valider_abn.php?id_abn=${row.id_abonnement}">
                        //                     <input type="submit" onclick="val.submit"
                        //         value="Clique pour valider">
                        //         </form>
                        //         `
                    }
                    return value + `
                    <a href="modif-abonnement.php?id_abonnement=${row.id_abonnement}"><img src="./img/modif.png"  style="height:20px;width:20px"></a>

                    <a 
onclick="DeleteAbonnements(`+row.id_abonnement+`);"
style="cursor: pointer;"
><img style="height:20px;width:20px" src="./img/supp.png" ></a>
               
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
    dataTable3.buttons().container()
        .appendTo('#example_wrapper .col-sm-6:eq(0)');


    $('#dated').change(function() {

        dataTable3.draw();
    });
    $('#datef').change(function() {
        dataTable3.draw();
    });

});
</script>












                    </div>
                </div>
                <div class="col-md-12 m-t-50">
                    <div class="contact-map">
                        <h3 class="txt-bordure sections-title">Ajoutez un Vehicule</h3>
                        
                        <form id="new_abnmt" action="new_abnmt.php" method="POST" name="new_abnmt" enctype="multipart/form-data">

                            <div class="form-group">
                                <div class="row">
                                <div class="col-md-12  left-title p-l-0 hidden-xs">Médias</div>

                                <div class="row">
                                    <div class="col-md-3 no-padding margb">
                                        <div class="col-md-12  left-title p-l-0 hidden-xs">Image du Véhicule</div>
                                        <div class="add-img col-sm-10 col-xs-12 no-padding previmg">
                                            <input id="file" type="file" class="input-file" name="avat" required="" onchange="readURL(this);">
                                            <label for="file" class="label-file"><span class="plus">+</span></label>
                                            <div class="imgs-prev">
                                                <img  id="blah" src="./img/contact-back.png" alt="your image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 no-padding margb">
                                        <div class="col-md-12  left-title p-l-0 hidden-xs">Carte grise</div>
                                        <div class="add-img col-sm-10 col-xs-12 no-padding previmg">
                                            <input id="file1" type="file" class="input-file" name="avat1" required="" onchange="readURLC1(this);">
                                            <label for="file1" class="label-file"><span class="plus">+</span></label>
                                            <div class="imgs-prev">
                                                <img  id="blah1" src="./img/contact-back.png" alt="your image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 no-padding margb">
                                        <div class="col-md-12  left-title p-l-0 hidden-xs">Assurance valide</div>
                                        <div class="add-img col-sm-10 col-xs-12 no-padding previmg">
                                            <input id="file2" type="file" class="input-file" name="avat2" required="" onchange="readURLC2(this);">
                                            <label for="file2" class="label-file"><span class="plus">+</span></label>
                                            <div class="imgs-prev">
                                                <img  id="blah2" src="./img/contact-back.png" alt="your image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 no-padding margb">
                                        <div class="col-md-12  left-title p-l-0 hidden-xs">CNI du gerant</div>
                                        <div class="add-img col-sm-10 col-xs-12 no-padding previmg">
                                            <input id="file3" type="file" class="input-file" name="avat3" required="" onchange="readURLC3(this);">
                                            <label for="file3" class="label-file"><span class="plus">+</span></label>
                                            <div class="imgs-prev">
                                                <img  id="blah3" src="./img/contact-back.png" alt="your image" />
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </br>
                                    </br>
                                    </br>

                                    <div class="col-md-12 m-t-lg no-padding">
                                        <div class="cont-filtre flxstart">
                                            <span class="m-t-sm" >Interne/Externe</span>
                                            <div class="onoffswitch ">
                                                <input type="checkbox" name="gps" class="onoffswitch-checkbox" id="myonoffswitch3">
                                                <label class="onoffswitch-label" for="myonoffswitch3">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input  id='id_gps' name='id_gps' type="text" class="form-control" required="" placeholder="ID GPS"> 
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input name="matricule" type="text" class="form-control" required="" placeholder="Matricule de Véhicule"> 
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input name="marque" type="text" class="form-control" required="" placeholder="Marque de Véhicule">
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <select class="form-control" id="" name="type_vehicule"> 
                                        <option value="Moto" selected>Moto</option>
                                        <option value="Tricycle">Tricycle</option>
                                        <option value="Van">Van</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input name="poid_max" type="number" class="form-control" placeholder="Poids Maximal en tonne" required="">
                                    </div>
                                 
                                    <div class="col-md-12 no-padding">
                                        <input name="nom_chauffeur" type="text" class="form-control" required="" placeholder="Nom et prénom du chauffeur"> 
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input name="telephone_chauffeur" type="text" class="form-control" required="" placeholder="téléphone du chauffeur">
                                    </div>
                               


                                    <?php
										if( ($s>0) OR (($s==0) AND ($_SESSION['date_limite'] < strtotime(date('d-m-Y')))) ){
									?>
										<div class="col-md-12 no-padding hidden">
											<select class="form-control" id="" name="pack"> 
												<option value="1 year">Pack 1 Ans</option>
												<option value="6 months">Pack 6 Mois</option>
												<option value="3 months">Pack 3 Mois</option>
											</select>
										</div>
									<?php
										}
									?>
                                </div>
                            </div>
                         
                            <button type="submit" class="btn btn-primary pull-right">ENVOYER</button>
                            
                        </form>
                    </div>
                </div>

                
            </div>
        </div>
        <div >
                                                                    <div > 
<!--                                                                     
  <form action="https://docs.google.com/forms/d/e/1FAIpQLSfOfX4x8wc4r0-yXU_Otoj3XUlVDXkMZdw1PEXUPlAQwqUH_Q/viewform?usp=sf_link"">
    


   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit"  style="height:50px;width:200px" ><font size="5pt">Cliquer ici </font></button> <font color="red"  size="5pt"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; et envoyez les documents ci-dessous pour completer votre abonnement </font>
   </form>  <font color="green"  size="3pt"><ul><li> &nbsp;&nbsp;&nbsp; * Copie de carte grise du vehicule </li> <li>&nbsp;&nbsp;&nbsp; * Copie de la police d'assurance en cours de validité <li><li>&nbsp;&nbsp;&nbsp;* Copie de la CNI du gerant</li><ul></font></div></div>
                          
                            -->
  
                      
                            
                          
    </section>

<?php }else{ ?>
<section class="page-title-section trouvtrans">
        <div class="container hidden-xs slide-bord">
            <div class="demo-slides">
                <p >Veillez vous connecter</p>
            </div>
        </div>
    </section>
    <?php } ?>
<?php include"footer.php" ?>