<?php include'header.php' ?>


<?php
$telephone = $_SESSION[ 'telephone' ];

$sql = "SELECT * FROM `transporteur` WHERE `telephone`='$telephone'";
$result = mysqli_query( $db, $sql );
$row = mysqli_fetch_array( $result, MYSQLI_ASSOC );

if ( isset( $_SESSION[ 'login_user' ] )) {
        ?>

<script>// Ask for the password using an alert
// Check if the token is already stored
if (localStorage.getItem('access_token')) {
  // Token exists, the user has access
  // Proceed to the desired page
} else {
  // Token doesn't exist, ask for the password
  var enteredPassword = prompt("Entrer le mot de passe admin:");

  // Define the correct password
  var correctPassword = "gtelemexadmin@01";

  // Check if the entered password matches the correct password
  if (enteredPassword === correctPassword) {
    // Password is correct, store the access token
    localStorage.setItem('access_token', 'access_granted');

    // Proceed to the desired page
  } else {
    // Password is incorrect, redirect to access denied page
    window.history.back();
  }
}
</script>
<section class='page-title-section consultation'>

</section>
<section class='contact-info-section '>
    <div class=' '>
        <div class='row '>
            <div class=''>
                <div class='css-tab' role='tabpanel'>
  
  

                    <ul class='nav nav-tabs' role='tablist'>

                        <li role='abonnement' class='active'>
                            <a href='#abonnement' aria-controls='abonnement' role='tab' data-toggle='tab'> Mes Véhicules
                            </a>
                        </li>

                        <li role='clients' class=''>
                            <a href='#clients' aria-controls='clients' role='tab' data-toggle='tab'>Clients</a>
                        </li>

                        <!-- <li role='transporteurs' class=''>
                            <a href='#transporteurs' aria-controls='transporteurs' role='tab' data-toggle='tab'>
                                Transporteurs </a>
                        </li> -->

                        <li role='transporteurs' class=''>
                            <a href='#chargements' aria-controls='chargements' role='tab' data-toggle='tab'> Historique des envoies
                            </a>
                        </li>

                        <!-- <li role='transporteurs' class=''>
                            <a href='#disponibilite' aria-controls='disponibilite' role='tab' data-toggle='tab'>
                                Disponibilités </a>
                        </li> -->
<!-- 
                        <li role='notifications' class=''>
                            <a href='#notifications' aria-controls='notifications' role='tab' data-toggle='tab'>
                                Notifications </a>
                        </li> -->
                        <!-- <li role='transporteurs' class=''>
                            <a href='#pub_disponibilite' aria-controls='pub_disponibilite' role='tab' data-toggle='tab'>
                                Publication Disponiblité </a>
                        </li> -->
                        <!-- <li role='transporteurs' class=''>
                            <a href='#allvehicule' aria-controls='allvehicule' role='tab' data-toggle='tab'>Localisation</a>
                        </li>
                        <li role='transporteurs' class=''>
                            <a href='#ajout_gps' aria-controls='ajout_gps' role='tab' data-toggle='tab'>Ajout Gps </a>
                        </li> -->
                        <!-- <li role='transporteurs' class=''>
                            <a href='#envoi_sms' aria-controls='envoi_sms' role='tab' data-toggle='tab'>Envoi SMS </a>
                        </li> -->

                    </ul>

                    <div class='tab-content'>

                       <div role='tabpanel' class='tab-pane fade in' id='allvehicule'>
                            <div class='css-tab-content'>
                                <div class='tab-pane fade in'>
                                    
                                    <div class='container'>
                                        <div class='col-md-12'>
                                            <div class='contact-map'>
                                                <h3 class=' sections-title'>Localisations</h3>                                              

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container'>
                                <iframe src="https://telemex.suivi.telefret.com/all" width="900" height="900"></iframe>
                             </div>  
                        </div>

                        <div role='tabpanel' class='tab-pane fade in active' id='abonnement'>
                            <div class='css-tab-content'>
                                <div class='tab-pane fade in active'>
                                    <div class='css-tab-content formulaires'>

                                    </div>
                                    <div class='container'>
                                        <div class='col-md-12'>
                                            <div class='contact-map'>
                                                <h3 class=' sections-title'>Tous les véhicules</h3>

                                                <div class='container result-rech'>

                                                    <!-- Custom Filter -->

                                                    <div class='css-tab-content formulaires'>

                                                        <div class='container hidden' style='padding-left: unset !important;'>
                                                            <div class='col-md-6 formulaire'>
                                                                <h3 class='txt-bordure sections-title'>Debut ulterieur
                                                                    au</h3>

                                                                <div class='form-group'>
                                                                    <div class='row'>

                                                                        <div class='col-sm-4 col-xs-12 no-padding'>
                                                                            <!-- <input type = 'text' class = 'form-control'  id = 'tag2' name = 'ville_deb' placeholder = 'Ville de départ'> -->
                                                                            <input type='date' name='ville_deb'
                                                                                id='dated' placeholder='dated'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='col-md-6 formulaire' style='margin: left 5px;'>
                                                                <h3 class='txt-bordure sections-title'>Fin anterieur au
                                                                </h3>

                                                                <div class='form-group'>
                                                                    <div class='row'>

                                                                        <div class='col-sm-4 col-xs-12 no-padding'>
                                                                            <!-- <input type = 'text' class = 'form-control'  id = 'tag2' name = 'ville_deb' placeholder = 'Ville de départ'> -->
                                                                            <input type='date' name='datef' id='datef'
                                                                                placeholder='datef'>
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
                                                            <th>ID</th>
                                                            <th>Id gps</th>

                                                                <th>Image</th>
                                                                <th>Matricule</th>
                                                                <th>Marque</th>
                                                                <th>Type de véhicule</th>
                                                                <th>Poids maximal</th>
                                                                <th>Interne/Externe</th>
                                                                <th>Pack</th>
                                                                <th>Nombre de commandes</th>
                                                                <th>Chauffeur</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>

                                                <!-- Script -->
                                                <script>
                                                    $(document).ready(function () {
                                                        var dataTable3 = $('#empTable3').DataTable({
                                                            'processing': true,
                                                            'serverSide': true,
                                                            'serverMethod': 'post',
                                                            //'searching': false, // Remove default Search Control
                                                            'ajax': {
                                                                'url': 'ajaxfile5.php',
                                                                'data': function (data) {
                                                                    // Read values

                                                                    var dated = $('#dated').val();
                                                                    var datef = $('#datef').val();

                                                                    // Append to data

                                                                    data.dated = dated;
                                                                    data.datef = datef;

                                                                }
                                                            }
                                                            ,
                                                            'success': function (data) {
                                                                console.log(data)
                                                            }
                                                            ,
                                                            'error': function (data) {
                                                                console.log(data)
                                                            }
                                                            ,
                                                            'createdRow': function (row, data, dataIndex) {
                                                                console.log('row.valide', data.valide)
                                                                $(row).addClass('tablelineAbonnements' + data.id_abonnement);
                                                                $(row).attr('id', 'tablelineAbonnements' + data.id_abonnement);

                                                                if (data.valide == 1) {

                                                                    $(row).addClass('testclassvalid');

                                                                } else {
                                                                    $(row).addClass('testclass');
                                                                }

                                                            }
                                                            ,
                                                            'columns': [
                                                                {
                                                                    data: 'id_abonnement'
                                                                }
                                                                , {
                                                                    data: 'ID_gps'
                                                                }
                                                                ,
                                                                {
                                                                    'mData': 'img_vehicule',
                                                                    'mRender': function (data, type,
                                                                        row) {
                                                                        return `

                            <img   style="max-height:75px" src = "./img/uploaded/${data ? data : 'logo.png'}">
                            `
                                                                    }
                                                                    ,

                                                                }
                                                                ,
                                                                {
                                                                    data: 'matricule'
                                                                }
                                                                ,
                                                                {
                                                                    data: 'marque'
                                                                }
                                                                ,
                                                                {
                                                                    data: 'type_vehicule'
                                                                }
                                                                ,
                                                                {
                                                                    data: 'poid_max'
                                                                }
                                                                ,
                                                                {
                                                                    'mData': 'gps',
                                                                    'mRender': function (data, type,
                                                                        row) {
                                                                        return row.gps == 1 ?
                                                                            'Interne' : 'Externe';
                                                                    }
                                                                    ,

                                                                }
                                                                ,
                                                                {
                                                                    'mData': 'date_deb',
                                                                    'mRender': function (data, type,
                                                                        row) {
                                                                        // console.log( row )
                                                                        return 'Du ' + row
                                                                            .date_deb +
                                                                            ' Au ' + row
                                                                                .date_fin;
                                                                    }
                                                                },
                                                                {
                                                                    data: 'nombre_commande'
                                                                }
                                                                ,
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
                                                                    'mData': 'telephone',
                                                                    'mRender': function (data, type,
                                                                        row) {
                                                                        var value = ``;
                                                                        if (row.valide != 1) {
                                                                            //                     value = value+`
                                                                            //                     <form method = 'POST' name = 'val'
                                                                            // action = "valider_abn.php?id_abn=${row.id_abonnement}">
                                                                            //                     <input type = 'submit' onclick = 'val.submit'
                                                                            //         value = 'Clique pour valider'>
                                                                            //         </form>
                                                                            //         `
                                                                        }
                                                                        return value + `
                                                                        <a href="modif-abonnement.php?id_abonnement=${row.id_abonnement}"><img src="./img/modif.png"  style="height:20px;width:20px"></a>
                                                                        <a
                                        onclick = 'DeleteAbonnements(`+ row.id_abonnement + `);'
                                        style = 'cursor: pointer;'
                                        ><img style = 'height:20px;width:20px' src = './img/supp.png' ></a>

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
                                                        }
                                                        );
                                                        dataTable3.buttons().container()
                                                            .appendTo('#example_wrapper .col-sm-6:eq(0)');

                                                        $('#dated').change(function () {

                                                            dataTable3.draw();
                                                        }
                                                        );
                                                        $('#datef').change(function () {
                                                            dataTable3.draw();
                                                        }
                                                        );

                                                    }
                                                    );
                                                </script>

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
                                    <div class="col-md-12 no-padding hidden">
											<select class="form-control" id="" name="pack"> 
												<option value="1 year">Pack 1 Ans</option>
												<option value="6 months">Pack 6 Mois</option>
												<option value="3 months">Pack 3 Mois</option>
											</select>
										</div>
                                </div>
                            </div>
                         
                            <button type="submit" class="btn btn-primary pull-right">ENREGISTRER</button>
                            
                        </form>
                    </div>
                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role='tabpanel' class='tab-pane fade in' id='clients'>
                            <div class='css-tab-content'>
                                <div class='tab-pane fade in active'>
                                    <div class='css-tab-content formulaires'>

                                    </div>
                                    <div class='container'>
                                        <div class='col-md-12'>
                                            <div class='contact-map'>
                                                <h3 class=' sections-title'>Nos Clients</h3>

                                                <div class='container result-rech'>

                                                    <!-- Custom Filter -->

                                                    <!-- Table -->
                                                    <table id='empTable4' class='display dataTable'>
                                                        <thead>
                                                            <tr>
                                                                <th>Nom et prénom</th>
                                                                <th>RS</th>

                                                                <th>Pays</th>
                                                                <th>Adresse</th>
                                                                <th>Téléphone</th>
                                                                <th>Email</th>
                                                                <th>Date d'inscription</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>

                                                <!-- Script -->
                                                <script>
                                                    $(document).ready(function () {
                                                        var dataTable4 = $('#empTable4').DataTable({
                                                            'processing': true,
                                                            'serverSide': true,
                                                            'serverMethod': 'post',
                                                            //'searching': false, // Remove default Search Control
                                                            'ajax': {
                                                                'url': 'ajaxfile6.php',
                                                                'data': function (data) {
                                                                    // Read values

                                                                    var dated = $('#dated').val();
                                                                    var datef = $('#datef').val();

                                                                    // Append to data

                                                                    data.dated = dated;
                                                                    data.datef = datef;
                                                                    // data.transporteur = "true";
                                                                    data.client = "true";


                                                                }
                                                            },
                                                            'success': function (data) {
                                                                console.log(data)
                                                            },
                                                            'error': function (data) {
                                                                console.log(data)
                                                            },
                                                            "createdRow": function (row, data, dataIndex) {
                                                                console.log("row.verif", data.verif)
                                                                $(row).addClass('tablelinecompte' + data.telephone);
                                                                $(row).attr('id', 'tablelinecompte' + data.telephone);
                                                                if (data.verif != 5) {

                                                                    $(row).addClass('testclassvalid');

                                                                } else {
                                                                    $(row).addClass('testclass');
                                                                }


                                                            },
                                                            'columns': [

                                                                {
                                                                    "mData": "nom",
                                                                    "mRender": function (data, type,
                                                                        row) {
                                                                        return `
                <a target="_blank"
                                                            href="historique_client.php?telephone=${row.telephone}">
                                                           ${row.prenom + " " + row.nom}
                                                        </a>
`
                                                                    },

                                                                },
                                                                {
                                                                    data: 'r_s'
                                                                },

                                                                {
                                                                    data: 'pays'
                                                                },
                                                                {
                                                                    data: 'adresse'
                                                                },
                                                                {
                                                                    data: 'telephone'
                                                                },
                                                                {
                                                                    data: 'email'
                                                                },
                                                                {
                                                                    data: 'Date_inscri'
                                                                },
                                                                {
                                                                    "mData": "code",
                                                                    "mRender": function (data, type,
                                                                        row) {
                                                                        console.log("row,,type",
                                                                            data)
                                                                        var value = `
                
                <input id="mailc${data}" type=text hidden
                                                        value="${row.email}">

                                                    <a class="supp"

                                                    onclick="DeleteCompte(`+ row.telephone + `);"
            style="cursor: pointer;"><img
                                                        style="height:20px;width:20px;"
                                                            src="./img/supp.png"></a>
                                                
                                                   
                `;
                                                                        if (row.verif == 5) {
                                                                            value = value + `
                    <a class="supp"
                    onclick="Deleteunbancompte(`+ row.telephone + `);"
            style="cursor: pointer;"
             ><img
                                                        style="height:20px;width:20px;"
                                                            src="./img/unban.png"></a>
                                                            `
                                                                        } else {
                                                                            value = value + `
                    <a class="supp"
                    onclick="Deletebancompte(`+ row.telephone + `);"
            style="cursor: pointer;"
                                                    ><img
                                                        style="height:20px;width:20px;"
                                                            src="./img/ban.png"></a>
                    `

                                                                        }

                                                                        value = value + `
                <a class="supp" data-toggle="modal"
                                                        onClick="messaffect('c$ {
        data}
        ');"
                                                        data-target="#message" href='#'><img style="height:20px;width:20px;" src="./img/mail.png"></a>
                    `

                                                                        return value;
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
                                                        dataTable4.buttons().container()
                                                            .appendTo('#example_wrapper .col-sm-6:eq( 0 )');


                                                        // $('#dated').change(function() {

                                                        //     dataTable4.draw();
                                                        // });
                                                        // $('#datef').change(function() {
                                                        //     dataTable4.draw();
                                                        // });

                                                    });
                                                </script>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div role="tabpanel" class="tab-pane fade in" id="transporteurs">
                            <div class="css-tab-content">
                                <div class="tab-pane fade in active">
                                    <div class="css-tab-content formulaires">

                                    </div>
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="contact-map">
                                                <h3 class=" sections-title">Nos transporteurs</h3>

                                                <div class="container result-rech">


                                                    <!-- Custom Filter -->


                                                    <!-- Table -->
                                                    <table id='empTable5' class='display dataTable'>
                                                        <thead>
                                                            <tr>
                                                                <th>Nom et prénom</th>
                                                                <th>RS</th>
                                                                <th>Pays</th>
                                                                <th>Adresse</th>
                                                                <th>Téléphone</th>
                                                                <th>Email</th>
                                                                <th>Date d'inscription</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>

                                                <!-- Script -->
                                                <script>
                                                    $(document).ready(function () {
                                                        var dataTable5 = $('#empTable5').DataTable({
                                                            'processing': true,
                                                            'serverSide': true,
                                                            'serverMethod': 'post',
                                                            //'searching': false, // Remove default Search Control
                                                            'ajax': {
                                                                'url': 'ajaxfile6.php',
                                                                'data': function (data) {
                                                                    // Read values

                                                                    var dated = $('#dated').val();
                                                                    var datef = $('#datef').val();

                                                                    // Append to data

                                                                    data.dated = dated;
                                                                    data.datef = datef;
                                                                    data.transporteur = 'true';

                                                                }
                                                            }
                                                            ,
                                                            'success': function (data) {
                                                                console.log(data)
                                                            }
                                                            ,
                                                            'error': function (data) {
                                                                console.log(data)
                                                            }
                                                            ,
                                                            'createdRow': function (row, data, dataIndex) {
                                                                console.log('row.verif', data.verif)
                                                                $(row).addClass('tablelinecompteA' + data.telephone);
                                                                $(row).attr('id', 'tablelinecompteA' + data.telephone);
                                                                if (data.verif != 5) {

                                                                    $(row).addClass('testclassvalid');

                                                                } else {
                                                                    $(row).addClass('testclass');
                                                                }

                                                            }
                                                            ,
                                                            'columns': [
                                                                {
                                                                    'mData': 'nom',
                                                                    'mRender': function (data, type,
                                                                        row) {
                                                                        return `
                            <a target = '_blank'
                            href = "historique_client.php?telephone=${row.telephone}">
                            ${
                                row.prenom+' '+row.nom}
                                </a>
                                `
                                                                    }
                                                                    ,

                                                                }
                                                                ,
                                                                {
                                                                    data: 'r_s'
                                                                }
                                                                ,
                                                                {
                                                                    data: 'pays'
                                                                }
                                                                ,
                                                                {
                                                                    data: 'adresse'
                                                                }
                                                                ,
                                                                {
                                                                    data: 'telephone'
                                                                }
                                                                ,
                                                                {
                                                                    data: 'email'
                                                                }
                                                                ,
                                                                {
                                                                    data: 'Date_inscri'
                                                                }
                                                                ,
                                                                {
                                                                    'mData': 'code',
                                                                    'mRender': function (data, type,
                                                                        row) {
                                                                        var value = ``;

                                                                        value = value + `

                                <!-- Modal -->
                                <div class = 'modal fade'
                                id = "exampleModal${row.telephone}" tabindex = '-1' role = 'dialog' aria-labelledby = 'exampleModalLabel'
                                aria-hidden = 'true'>

                                <div class = 'modal-dialog' role = 'document'>
                                <div class = 'modal-content'>
                                <div class = 'modal-header'>
                                <h5 class = 'modal-title' id = 'exampleModalLabel'><b>Détails des véhicules proposés</b></h5>
                                <button type = 'button' class = 'close' data-dismiss = 'modal' aria-label = 'Close'>
                                <span aria-hidden = 'true'>&times;
                                </span>
                                </button>
                                </div>
                                <div class = 'modal-body' style = '    overflow-x: auto;'>

                                <label id = "postulerError${row.telephone}" hidden style = 'backg'></label>
                                <table id = 'empT' class = 'display dataTable'>
                                <thead>
                                <tr>
                                <th>Image</th>
                                <th>Matricule</th>
                                <th>Genre</th>

                                <th>Marque</th>
                                <th>Poids disponible</th>
                                </tr>
                                </thead>
                                <tbody>

                                `;
                                                                        for (let index = 0; index < row.vehicules.length; index++) {
                                                                            const element = row.vehicules[index];

                                                                            value += `
                                    <tr>

                                    <td><img
                                    src = "./img/uploaded/${element.img_vehicule ? element.img_vehicule : 'logo.png'}">
                                    </td>
                                    <td>$ {
                                        element.matricule}
                                        </td>
                                        <td>$ {
                                            element.type_vehicule}
                                            </td>
                                            <td>$ {
                                                element.marque}
                                                </td>
                                                <td>$ {
                                                    element.poid_max}
                                                    Tonnes </td>

                                                    </tr>`
                                                                            console.log()
                                                                        }
                                                                        value += `
                                                </tbody>
                                                </table>

                                                </div>
                                                <div class = 'modal-footer'>
                                                <button type = 'button' class = 'btn btn-secondary' data-dismiss = 'modal'>Fermer</button>

                                                </div>
                                                </div>
                                                </div>
                                                </form>
                                                </div>`
                                                                        value = value + `

                                                <input id = "mailc${data}" type = text hidden
                                                value = "${row.email}">
                                                <a type = 'button'  data-toggle = 'modal' data-target = "#exampleModal${row.telephone}"
                                                style = 'cursor: pointer;'><img
                                                style = 'height:20px;width:20px;'
                                                src = './img/eye.png'></a>
                                                <a class = 'supp'

                                                onclick = 'DeleteCompte(`+ row.telephone + `);'
                                                style = 'cursor: pointer;'><img
                                                style = 'height:20px;width:20px;'
                                                src = './img/supp.png'></a>

                                                `;
                                                                        if (row.verif == 5) {
                                                                            value = value + `
                                                    <a class = 'supp'
                                                    onclick = 'Deleteunbancompte(`+ row.telephone + `);'
                                                    style = 'cursor: pointer;'
                                                    ><img
                                                    style = 'height:20px;width:20px;'
                                                    src = './img/unban.png'></a>
                                                    `
                                                                        } else {
                                                                            value = value + `
                                                    <a class = 'supp'
                                                    onclick = 'Deletebancompte(`+ row.telephone + `);'
                                                    style = 'cursor: pointer;'
                                                    ><img
                                                    style = 'height:20px;width:20px;'
                                                    src = './img/ban.png'></a>
                                                    `

                                                                        }

                                                                        value = value + `
                                                <a class = 'supp' data-toggle = 'modal'
                                                onClick = "messaffect('c${data}');"
                                                data-target = '#message' href = '#'><img style = 'height:20px;width:20px;' src = './img/mail.png'></a>
                                                `

                                                                        return value;
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
                                                        dataTable5.buttons().container().appendTo('#example_wrapper .col-sm-6:eq(0)');

                            // $( '#dated' ).change( function() {

                            //     dataTable4.draw();
                            // }
                        
                        // $( '#datef' ).change( function() {
                        //     dataTable4.draw();
                        // }
              

                }
            );
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role='tabpanel' class='tab-pane fade in' id='chargements'>
                            <div class='css-tab-content'>
                                <div class='tab-pane fade in active'>
                                    <div class='css-tab-content formulaires'>

                                    </div>
                                    <div class='container'>
                                        <div class='col-md-12'>
                                            <div class='contact-map'>
                                                <h3 class=' sections-title'>Chargements</h3>

                                                <div class='container result-rech'>

                                                    <!-- Custom Filter -->
                                                    <div class='css-tab-content formulaires'>

                                                        <div class='container' style='padding-left: unset !important;'>

                                                        <div class='col-md-2 formulaire hidden'>
                                                                <h3 class='txt-bordure sections-title'>Statut</h3>

                                                                <div class='form-group'>
                                                                    <div class='row'>

                                                                        <div class='col-sm-10 col-xs-12 no-padding '>
                                                                            <select type='text' name='filterstatus'
                                                                                id='filterstatus'
                                                                                required>
                                                                                <option value='0' >En attente</option>
                                                                                <option value='1' > En cours</option>
                                                                                <option value='2' selected> Livré</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>


                                                            <div class='col-md-5 formulaire'>
                                                                <h3 class='txt-bordure sections-title'>Depart</h3>

                                                                <div class='form-group'>
                                                                    <div class='row'>

                                                                        <div class='col-sm-4 col-xs-12 no-padding hidden'>
                                                                            <select type='text' name='pays_dep'
                                                                                id='pays2' placeholder='Pays *'
                                                                                required>
                                                                                <option value='' selected> Tout</option>

                                                                                <option value='Cameroun'
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
                                                                                <option value='Gabon'
                                                                                    style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
                                                                                    Gabon</option>
                                                                                <option value='Tchad'
                                                                                    style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
                                                                                    Tchad</option>
                                                                                <option
                                                                                    value='République centrafricaine'
                                                                                    style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                                    République centrafricaine</option>
                                                                                <option value='Guinée équatoriale'
                                                                                    style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                                    Guinée équatoriale</option>
                                                                                <option value='off'> Pays départ
                                                                                </option>
                                                                            </select>

                                                                        </div>
                                                                        <div class='col-sm-4 col-xs-12 no-padding'>
                                                                            <!-- <input type = 'text' class = 'form-control'  id = 'tag2' name = 'ville_dep' placeholder = 'Ville de départ'> -->
                                                                            <input type='text' name='ville_dep'
                                                                                id='villed'
                                                                                placeholder='Adresse d'enlèvement'>
                                                                            <input type='text' name='ville_dep'
                                                                                id='villed-x' disabled='disabled'
                                                                                style='color: #CCC; position: absolute; background: transparent; z-index: 1;height:0px;' />
                                                                        </div>
                                                                        <div class='col-sm-4 col-xs-12 no-padding'>
                                                                            <!-- <input type = 'text' class = 'form-control'  id = 'tag2' name = 'ville_dep' placeholder = 'Ville de départ'> -->
                                                                            <input type='date' name='ville_dep'
                                                                                id='dated1' placeholder='dated'>
                                                                        </div>
                                                                        <div class='col-sm-4 col-xs-12 no-padding'>
                                                                            <!-- <input type = 'text' class = 'form-control'  id = 'tag2' name = 'ville_dep' placeholder = 'Ville de départ'> -->
                                                                            <input type='time' name='time_dep'
                                                                                id='timed' placeholder='dated'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='col-md-5 formulaire' style='margin: left 5px;'>
                                                                <h3 class='txt-bordure sections-title'>Arrivee</h3>

                                                                <div class='form-group'>
                                                                    <div class='row'>
                                                                        <div class='col-sm-4 col-xs-12 no-padding hidden'>

                                                                            <select type='text' name='pays_arr'
                                                                                id='pays3' placeholder='Pays *'
                                                                                required>
                                                                                <option value='' selected> Tout</option>

                                                                                <option value='Cameroun'
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
                                                                                <option value='Gabon'
                                                                                    style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
                                                                                    Gabon</option>
                                                                                <option value='Tchad'
                                                                                    style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
                                                                                    Tchad</option>
                                                                                <option
                                                                                    value='République centrafricaine'
                                                                                    style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                                    République centrafricaine</option>
                                                                                <option value='Guinée équatoriale'
                                                                                    style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                                    Guinée équatoriale</option>
                                                                                <option value='off'> Pays d'arrivé
                                                                                </option>
                                                                            </select>

                                                                        </div>
                                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                                            <!-- <input type="text" class="form-control"  id="tag3" name="ville_arr" placeholder="Ville de départ"> -->
                                                                            <input type="text" name="ville_arr"
                                                                                id="villef"
                                                                                style="width: 100%; border-width: 5px;"
                                                                                placeholder="Adresse de livraison" />
                                                                            <div id="suggestions-container"
                                                                                style="position: relative;"></div>
                                                                        </div>
                                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                                            <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                            <input type="date" name="datef" id="datef1"
                                                                                placeholder="datef">
                                                                        </div>
                                                                        <div class='col-sm-4 col-xs-12 no-padding'>
                                                                            <!-- <input type = 'text' class = 'form-control'  id = 'tag2' name = 'ville_dep' placeholder = 'Ville de départ'> -->
                                                                            <input type='time' name='time_dep'
                                                                                id='timef' placeholder='dated'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        </form>
                                                    </div>

                                                    <!-- Table -->
                                                    <table id='empTable' class='display dataTable'>
                                                        <thead>
                                                            <tr>
                                                            <th>Image</th>
                                                            <th>Matricule véhicule</th>
                                                            <th>Noms et téléphone du client</th>
                                                            <th>Noms et téléphone expéditeur</th>
                                                            <th>Noms et téléphone destinataire</th>

                                                            <th>Date</th>
                                                            <th>Colis</th>
                                                            <th>Point d’enlèvement</th>
                                                            <th>Point de livraison</th>
                                                            <th>Prix estimer</th>
                                                            <th>Prix proposer</th>
                                                            <th>Code</th>
                                                            <th>Statut</th>
                                                            <th>Note</th>

                                                            <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>                                               
                                                <script>
                                                    $(document).ready(function () {
                                                        var dataTable = $('#empTable').DataTable({
                                                            'processing': true,
                                                            'serverSide': true,
                                                            'serverMethod': 'post',
                                                            //'searching': false, // Remove default Search Control
                                                            'ajax': {
                                                                'url': 'ajaxfile1.php',
                                                                'data': function (data) {
                                                                    // Read values
                                                                    var gender = $('#pays2').val();
                                                                    var name = $('#pays3').val();
                                                                    var villed = $('#villed').val();
                                                                    var villef = $('#villef').val();
                                                                    var dated = $('#dated1').val();
                                                                    var datef = $('#datef1').val();
                                                                    var timed = $('#timed').val();
                                                                    var timef = $('#timef').val();
                                                                    var filterstatus = $('#filterstatus').val();

                                                                    // Append to data
                                                                    data.pays2 = gender;
                                                                    data.pays3 = name;
                                                                    data.villed = villed;
                                                                    data.villef = villef;
                                                                    data.dated = dated;
                                                                    data.datef = datef;
                                                                    data.timed = timed;
                                                                    data.timef = timef;
                                                                    data.status = filterstatus;


                                                                }
                                                            },
                                                            'success': function (data) {
                                                                console.log(data)
                                                            },
                                                            'error': function (data) {
                                                                console.log(data)
                                                            },
                                                            "createdRow": function (row, data, dataIndex) {


                                                                $(row).addClass('tablelinechargement' + data.id_charg);
                                                                $(row).attr('id', 'tablelinechargement' + data.id_charg);
                                                                console.log(data.date_liv, new Date(data
                                                                    .date_liv
                                                                    .split("/")[1] +
                                                                    "/" + data.date_liv.split(
                                                                        "/")[0] +
                                                                    "/" + data.date_liv
                                                                        .split("/")[2]))

                                                                if (data.date_liv && (new Date(data
                                                                    .date_liv.split(
                                                                        "/")[1] + "/" +
                                                                    data.date_liv.split("/")[
                                                                    0] + "/" + data
                                                                        .date_liv.split(
                                                                            "/")[2]) > new Date())) {

                                                                    $(row).addClass('testclassvalid');

                                                                } else {
                                                                    $(row).addClass('testclass');
                                                                }


                                                            },
                                                            'columns': [

                                                                {
                                                    "mData": "img_march",
                                                    "mRender": function(data, type, row) {
                                                        return `<div 
                            
                            class="res-flx-s img-avatar-sm">
                                            <img src="./img/uploaded/${data ? data : 'logo.png'}">
                                        `
                                                    },

                                                },
                                                {
                                                    "mData": "ville_charg",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        var vehs="";
                                                        for (let index = 0; index < row.vehiculechargement.length; index++) {
                                                            const element = row.vehiculechargement[index];
                                                            vehs=vehs+element.matricule
                                                        }
                                                        return vehs;
                                                    }
                                                },
                                                {
                                                    "mData": "ville_charg",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.clientname + ", " +
                                                            row.clientphone;
                                                    }
                                                },{
                                                    "mData": "contact_name",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.name_expediteur + ", " +
                                                            row.telephone_expediteur;
                                                    }
                                                },{
                                                    "mData": "ville_charg",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.contact_name + ", " +
                                                            row.contact_phone;
                                                    }
                                                },
                                                {
                                                    "mData": "pays_charg",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.date_liv;
                                                    }
                                                },
                                                {
                                                    data: 'marchandise'
                                                },
                                                {
                                                    "mData": "ville_charg",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.ville_charg + ", " +
                                                            row.date_charg;
                                                    }
                                                }, {
                                                    "mData": "pays_charg",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.ville_liv + ", " + row
                                                            .date_liv;
                                                    }
                                                },{
                                                    data: 'prix_prop'
                                                },{
                                                    data: 'priceestimated'
                                                },{
                                                    data: 'id_charg'
                                                },{

                                                    "mData": "statutenvoi",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        if (row.statutenvoi==0) {
                                                            return "En attente"
                                                        } else  if (row.statutenvoi==1){
                                                            return "En cours"
                                                        }else  if (row.statutenvoi==2){
                                                            return "Livré"
                                                        }
                                                    }
                                                },{
                                                    data: 'rate'
                                                },  {
                                                                    "mData": "telephone",
                                                                    "mRender": function (data, type,
                                                                        row) {
                                                                        // console.log(row)
                                                                        return `
                                                                        
                <input type="submit" value="Consulter"
                                                            onclick="location.href='chargement.php?id_charg=${row.id_charg}' ">
 
 <input type="submit" value="Consulter les fiches" class="hidden"
                                                            onclick="location.href='invoice1.php?id_charg=`+ row.id_charg + `'">
                                                            <a  class="${(row.statutenvoi==2)?'hidden':''}" href=${!row.statutenvoi==0?`modif-charg.php?id_charg=${row.id_charg}&amp;telephone=${row.telephone}`:"#"}><img src="./img/modif.png"  style="height:20px;width:20px"></a>
                                                            <a class="supp hidden" href="add-statutgps.php?id_charg=${row.id_charg}"><img style="height:20px;width:20px;margin:5px" src="./img/check.png"></a>
                                                                                            
<a 
onclick="DeleteChargement(`+ row.id_charg + `);"
            style="cursor: pointer;"
 ><img style="height:20px;width:20px" src="./img/supp.png" ></a>
 <a class="${(row.statutenvoi==2||row.statutenvoi==0)?'hidden':''}" 
 onclick="showModalRate(`+ row.id_charg + `)"
            style="cursor: pointer;"
 ><img style="height:20px;width:20px" src="./img/iconstar.png" ></a>
`;
                                                                    }
                                                                },
                                                                // { data: 'date_charg' },
                                                                // { data: 'ville_liv' },
                                                                // { data: 'pays_liv' },
                                                                // { data: 'date_liv' },
                                                                // { data: 'id_charg' }
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

                                                        $('#villed').change(function () {
                                                            dataTable.draw();
                                                        });
                                                        $('#villef').change(function () {
                                                            dataTable.draw();
                                                        });
                                                        $('#dated1').change(function () {

                                                            dataTable.draw();
                                                        });
                                                        $('#datef1').change(function () {
                                                            dataTable.draw();
                                                        });
                                                        $('#pays3').change(function () {
                                                            dataTable.draw();
                                                        });

                                                        $('#pays2').change(function () {
                                                            dataTable.draw();
                                                        });
                                                        $('#filterstatus').change(function () {
                                                            dataTable.draw();
                                                        });
                                                        $('#timed').change(function () {
                                                            dataTable.draw();
                                                        });

                                                        $('#timef').change(function () {
                                                            dataTable.draw();
                                                        });
                                                    });
                                                </script>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


































                        <div role="notifications" class="tab-pane fade in" id="notifications">
                            <div class="css-tab-content">
                                <div class="tab-pane fade in">
                                    <div class="css-tab-content formulaires">

                                    </div>
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="contact-map">
                                                <h3 class=" sections-title">Notifications</h3>

                                                <div class="container result-rech">


                                                    <!-- Custom Filter -->
                                                    <div class="css-tab-content formulaires">

                                                        <div class="container" style="padding-left: unset !important;">
                                                            <div class="col-md-6 formulaire">
                                                                <h3 class="txt-bordure sections-title">Depart</h3>

                                                                <div class="form-group">
                                                                    <div class="row">

                                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                                            <select type="text" name="pays_dep"
                                                                                id="pays2" placeholder="Pays *">
                                                                                <option value="all" selected> Tout
                                                                                </option>

                                                                                <option value="Cameroun"
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
                                                                                <option
                                                                                    value="République centrafricaine"
                                                                                    style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                                    République centrafricaine</option>
                                                                                <option value="Guinée équatoriale"
                                                                                    style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                                    Guinée équatoriale</option>

                                                                            </select>

                                                                        </div>
                                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                                            <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                            <input type="text" name="ville_dep"
                                                                                id="villed"
                                                                                placeholder="Adresse d'enlèvement">
                                                                            <input type="text" name="ville_dep"
                                                                                id="villed-x" disabled="disabled"
                                                                                style="color: #CCC; position: absolute; background: transparent; z-index: 1;height:0px;" />
                                                                        </div>
                                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                                            <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                            <input type="date" name="ville_dep"
                                                                                id="dated" placeholder="dated">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 formulaire" style="margin: left 5px;">
                                                                <h3 class="txt-bordure sections-title">Arrivee</h3>

                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-4 col-xs-12 no-padding">

                                                                            <select type="text" name="pays_arr"
                                                                                id="pays3" placeholder="Pays *"
                                                                                required>
                                                                                <option value="all" selected> Tout
                                                                                </option>

                                                                                <option value="Cameroun"
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
                                                                                <option
                                                                                    value="République centrafricaine"
                                                                                    style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                                    République centrafricaine</option>
                                                                                <option value="Guinée équatoriale"
                                                                                    style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                                    Guinée équatoriale</option>

                                                                            </select>

                                                                        </div>
                                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                                            <!-- <input type="text" class="form-control"  id="tag3" name="ville_arr" placeholder="Ville de départ"> -->
                                                                            <input type="text" name="ville_arr"
                                                                                id="villef"
                                                                                style="width: 100%; border-width: 5px;"
                                                                                placeholder="Adresse de livraison" />
                                                                            <div id="suggestions-container"
                                                                                style="position: relative;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                                            <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                            <input type="date" name="datef" id="datef"
                                                                                placeholder="datef">
                                                                        </div>
                                                                        <div class="col-sm-12 col-xs-12 no-padding">

                                                                            <select type="text"
                                                                                name="notification_input"
                                                                                id="notification_input"
                                                                                placeholder="Pays *" required>
                                                                                <option value="all" selected> Tout
                                                                                </option>
                                                                                <option value="Reception"> Notification
                                                                                    de réception</option>
                                                                                <option value="Soumission">Notification
                                                                                    de soumission</option>

                                                                            </select>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        </form>
                                                    </div>

                                                    <table id='empTable212' class='display dataTable'>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Marchandise</th>
                                            <th>Poids</th>
                                            <th>Cout</th>
                                            <th>Départ</th>
                                            <th>Arrivée</th>
                                            <th>Chargeur</th>
                                            <th>Auteur</th>
                                            <th>Véhicules</th>
                                            <th>Proposition</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                                  <script>
                            $(document).ready(function() {
                                var dataTable212 = $('#empTable212').DataTable({
                                    'processing': true,
                                    'serverSide': true,
                                    'serverMethod': 'post',
                                    //'searching': false, // Remove default Search Control
                                    'ajax': {
                                        'url': 'ajaxfile_notification.php',
                                        'data': function(data) {
                                            // Read values
                                            var gender = $('#pays2').val();
                                            var name = $('#pays3').val();
                                            var villed = $('#villed').val();
                                            var villef = $('#villef').val();
                                            var dated = $('#dated').val();
                                            var datef = $('#datef').val();
                                            var notification_input = $('#notification_input').val();

                                            // Append to data
                                            data.pays2 = gender;
                                            data.pays3 = name;
                                            data.villed = villed;
                                            data.villef = villef;
                                            data.dated = dated;
                                            data.datef = datef;
                                            data.type="<?php echo $row['type'] ;  ?>";
                                            data.notification_input = notification_input;


                                        }
                                    },
                                    'success': function(data) {
                                        console.log(data)
                                    },
                                    'error': function(data) {
                                        console.log(data)
                                    },
                                    "createdRow": function(row, data, dataIndex) {
                                        // console.log(data.date_liv, new Date(data.date_liv
                                        //     .split("/")[1] + "/" + data.date_liv
                                        //     .split("/")[0] + "/" + data.date_liv
                                        //     .split("/")[2]))

                                        // if (data.date_liv && (new Date(data.date_liv.split(
                                        //         "/")[1] + "/" + data.date_liv.split(
                                        //         "/")[0] + "/" + data.date_liv.split(
                                        //         "/")[2]) > new Date())) {

                                        //     $(row).addClass('testclassvalid');

                                        // } else {
                                        //     $(row).addClass('testclass');
                                        // }
                                        $(row).addClass('tableline'+data.id_notifications);
                                        $(row).attr( 'id', 'tableline'+data.id_notifications );
                                        if (data.statut =="1") {

                                            $(row).addClass('testclassvalid');

                                        } else {
                                            $(row).addClass('testclass');
                                        }

                                    },
                                    'columns': [

                                        {
                                            "mData": "img_march",
                                            "mRender": function(data, type, row) {
                                                return `<div 

class="res-flx-s img-avatar-sm">
        <img src="./img/uploaded/${data ? data : 'logo.png'}">
    `
                                            },

                                        },
                                        {
                                            data: 'marchandise'
                                        },
                                        {
                                            data: 'poid'
                                        },
                                        {
                                            data: 'prix_prop'
                                        },
                                        {
                                            "mData": "ville_charg",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return row.ville_charg + ", " + row.date_charg;
                                            }
                                        }, {
                                            "mData": "pays_charg",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return row.ville_liv + ", "  + row.date_liv;
                                            }
                                        },
                                        {
                                            "mData": "nom",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return row.nom + " " + row
                                                    .prenom ;
                                            }
                                        },
                                        {
                                            "mData": "nomSender",
                                            "mRender": function(data, type, row) {
                                                 console.log("*****************************",row)
                                                return row.nomSender.nom + " " + row.nomSender.prenom +" " + row.nomSender.email+ " " + row.nomSender.telephone ;
                                            //    return row.nom + " " + row
                                            //         .prenom ;
                                            }
                                        },
                                        {
                                            "mData": "vehicules",
                                            "mRender": function(data, type, row) {
                                                console.log("rowrowrowrowrowrowrowrowrowrowrow",data,type,row)
                                                var val=[];
                                                val=row.vehicules;
                                                ToControle=0;

for (let index = 0; index < val.length; index++) {
     const element = val[index];
   if (element.checked) {
    ToControle=ToControle+1;   
   }
    console.log()
}
                                                var result=`<div 

class="res-flx-s img-avatar-sm">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal${row.id_notifications}"
onclick="Changetest(`+row.id_notifications+`,`+row.id_charg+`);"
> Consulter
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal${row.id_notifications}" 
onmouseover="submitCheck(`+row.id_notifications+`);"
tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form id="postuler" action="post-valide.php" method="POST" >
<input type="text"name="ToControle" hidden  value="${ToControle}">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Détails des véhicules proposés</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table id='empT' class='display dataTable'>
                                                        <thead>
                                                            <tr>
                                                            <th></th>
                                                                <th>Image</th>
                                                                <th>Matricule</th>
                                                                <th>Genre</th>

                                                                <th>Marque</th>
                                                                <th>Poids disponible</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
   
  
                                                        <input type="text"name="id_charg" hidden value="${row.id_charg}">


`;
                                                for (let index = 0; index < val.length; index++) {
                                                     const element = val[index];
                                                     result+=`
                                                     <tr>
                                                     <td>
                                                     <input type="text"name="id_postuler" hidden  value="${row.id_postuler}">
                                                     <input type="text"name="telephone" hidden value="${row.telephone}">

                                                     <input type="text"name="checkId[]" hidden value="${element.id_abonnement}">
                                                     
                                                     <input id="id${row.id_notifications+""+index}" type="hidden" name="check[]" ${element.checked?'value="1"':'value="0"'}>
 <input onchange="$('#id${row.id_notifications+""+index}').val(this.checked?1:0)" type="checkbox" id="dummy-id" 
 name="dummy-name" ${element.checked?'checked':''} <?php echo $row['type']=="transporteur"?'disabled':'' ;  ?> >
                                                     
                                                      </td>
                                                     <td><img src="./img/uploaded/${element.img_vehicule?element.img_vehicule : 'logo.png'}"> </td>
                                                     <td>${element.matricule} </td>
                                                     <td>${element.type_vehicule} </td>
                                                     <td>${element.marque} </td>
                                                     <td>${element.poid_max} Tonnes</td>

    </tr>`
                                                    console.log()
                                                }

                                                return result+= `
                                                </form>
                                                </tbody>
                                                </table>

                                                ${row.type=="Soumission"?` <br>
                                                <label><u><b>Message</b></u></table>
                                                <br>
                                                <label> ${row.message}</table>`:""}
                                                </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" id="btnSubmit${row.id_notifications}"
            disabled  class="btn btn-primary <?php echo $row['type']=="transporteur"?'hidden':'' ;  ?>">Valider</button>
      </div>
    </div>
  </div>
  </form>
</div> </div>`;
                                        }
                                    },
                                        {
                                            "mData": "avance",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return "Montant: " + row
                                                    .montant + "Fcfa Avance " + row.avance +
                                                    "Fcfa";
                                            }
                                        },
                                        {
                                            "mData": "telephone",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return `
                                               
                                        <a 
                                        
                                        onclick="DeleteNotification(`+row.id_notifications+`);"
            style="cursor: pointer;"
                                        
                                         class="supp" ><img style="height:20px;width:20px" src="./img/supp.png" ></a>
                      


`;
                                            }
                                        },
                                        // { data: 'date_charg' },
                                        // { data: 'ville_liv' },
                                        // { data: 'pays_liv' },
                                        // { data: 'date_liv' },
                                        // { data: 'id_charg' }
                                    ],
                                    dom: 'Bfrtip',
                                    buttons: [
                                        //'copyHtml5',
                                        'excelHtml5',
                                        //'csvHtml5',
                                        'pdfHtml5'
                                    ]
                                });
                                dataTable212.buttons().container()
                                    .appendTo('#example_wrapper .col-sm-6:eq(0)');

                                $('#villed').change(function() {
                                    dataTable212.draw();
                                });
                                $('#villef').change(function() {
                                    dataTable212.draw();
                                });
                                $('#dated').change(function() {

                                    dataTable212.draw();
                                });
                                $('#datef').change(function() {
                                    dataTable212.draw();
                                });
                                $('#pays3').change(function() {
                                    dataTable212.draw();
                                });

                                $('#pays2').change(function() {
                                    dataTable212.draw();
                                });
                                $('#notification_input').change(function() {
                                    dataTable212.draw();
                                                    });
                            });
                            </script>
                                                </div>









                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

























                        <div role="tabpanel" class="tab-pane fade in" id="disponibilite">
                            <div class="css-tab-content">
                                <div class="tab-pane fade in active">
                                    <div class="css-tab-content formulaires">

                                    </div>
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="contact-map">
                                                <h3 class=" sections-title">Disponibilités</h3>



                                                <div class="container result-rech">


                                                    <!-- Custom Filter -->

                                                    <div class="css-tab-content formulaires">

                                                        <div class="container" style="padding-left: unset !important;">
                                                            <div class="col-md-6 formulaire">
                                                                <h3 class="txt-bordure sections-title">Depart</h3>

                                                                <div class="form-group">
                                                                    <div class="row">

                                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                                            <select type="text" name="pays_dep"
                                                                                id="pays21" placeholder="Pays *"
                                                                                required>
                                                                                <option value="Cameroun" selected
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
                                                                                <option
                                                                                    value="République centrafricaine"
                                                                                    style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                                    République centrafricaine</option>
                                                                                <option value="Guinée équatoriale"
                                                                                    style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                                    Guinée équatoriale</option>
                                                                                <option value="off"> Pays départ
                                                                                </option>
                                                                            </select>

                                                                        </div>
                                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                                            <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                            <input type="text" name="ville_dep"
                                                                                id="villed1"
                                                                                placeholder="Adresse d'enlèvement">
                                                                            <input type="text" name="ville_dep"
                                                                                id="villed-x" disabled="disabled"
                                                                                style="color: #CCC; position: absolute; background: transparent; z-index: 1;height:0px;" />
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 formulaire" style="margin: left 5px;">
                                                                <h3 class="txt-bordure sections-title">Arrivee</h3>

                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-4 col-xs-12 no-padding">

                                                                            <select type="text" name="pays_arr"
                                                                                id="pays31" placeholder="Pays *"
                                                                                required>
                                                                                <option value="Cameroun" selected
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
                                                                                <option
                                                                                    value="République centrafricaine"
                                                                                    style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                                    République centrafricaine</option>
                                                                                <option value="Guinée équatoriale"
                                                                                    style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                                    Guinée équatoriale</option>
                                                                                <option value="off"> Pays d'arrivé
                                                                                </option>
                                                                            </select>

                                                                        </div>
                                                                        <div class='col-sm-4 col-xs-12 no-padding'>
                                                                            <!-- <input type = 'text' class = 'form-control'  id = 'tag3' name = 'ville_arr' placeholder = 'Ville de départ'> -->
                                                                            <input type='text' name='ville_arr'
                                                                                id='villef1'
                                                                                style='width: 100%; border-width: 5px;'
                                                                                placeholder='Adresse de livraison' />
                                                                            <div id='suggestions-container'
                                                                                style='position: relative;'></div>
                                                                        </div>
                                                                        <!-- <div class = 'col-sm-4 col-xs-12 no-padding'>
                    <input type = 'date' name = 'datef' id = 'datef'
                    placeholder = 'datef'>
                    </div> -->

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        </form>
                                                    </div>

                                                    <!-- Table -->
                                                    <table id='empTable1' class='display dataTable'>
                                                        <thead>
                                                            <tr>
                                                                <th>Image</th>
                                                                <th>Nom</th>
                                                                <th>Genre</th>

                                                                <th>Type de véhicule</th>
                                                                <th>Départ</th>
                                                                <th>Arrivée</th>
                                                                <th>Poids disponible</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                    </table>
                                                </div>

                                                <!-- Script -->
                                                <script>
                    $( document ).ready( function() {
                        var dataTable = $( '#empTable1' ).DataTable( {
                            'processing': true,
                            'serverSide': true,
                            'serverMethod': 'post',
                            //'searching': false, // Remove default Search Control
                            'ajax': {
                                'url': 'ajaxfile4.php',
                                'data': function( data ) {
                                    // Read values
                                    var gender = $( '#pays21' ).val();
                                    var name = $( '#pays31' ).val();
                                    var villed = $( '#villed1' ).val();
                                    var villef = $( '#villef1' ).val();
                                    // var dated = $( '#dated' ).val();
                                    // var datef = $( '#datef' ).val();

                                    // Append to data
                                    data.pays2 = gender;
                                    data.pays3 = name;
                                    data.villed = villed;
                                    data.villef = villef;

                                    // data.dated = dated;
                                    // data.datef = datef;

                                }
                            }
                            ,
                            'success': function( data ) {
                                console.log( data )
                            }
                            ,
                            'error': function( data ) {
                                console.log( data )
                            }
                            ,
                            'createdRow': function( row, data, dataIndex ) {
                                $( row ).addClass( 'tablelinedispo'+data.id_disp );
                                $( row ).attr( 'id', 'tablelinedispo'+data.id_disp );
                                console.log( data.date_arr, new Date( data
                                .date_arr
                                .split( '/' )[ 1 ] +
                                '/' + data.date_arr.split(
                                    '/' )[ 0 ] +
                                    '/' + data.date_arr
                                    .split( '/' )[ 2 ] ) )

                                    if ( data.date_arr && ( new Date( data
                                    .date_arr.split(
                                        '/' )[ 1 ] + '/' +
                                        data.date_arr.split( '/' )[
                                            0 ] + '/' + data
                                            .date_arr.split(
                                                '/' )[ 2 ] ) > new Date() ) ) {

                                                    $( row ).addClass( 'testclassvalid' );

                                                } else {
                                                    $( row ).addClass( 'testclass' );
                                                }

                                            }
                                            ,
                                            'columns': [
                                                {
                                                    'mData': 'img_vehicule',
                                                    'mRender': function( data, type,
                                                    row ) {
                                                        return `<div class = 'res-flx-s img-avatar-sm'>
                                    <img src="./img/uploaded/${data ? data : 'logo.png'}">
                                    </div>
                                `
                                                    }
                                                    ,

                                                }
                                                , 
 {
                                                    data: 'nom'
                                                }
                                                , 
 {
                                                    data: 'genre'
                                                }
                                                , 
 {
                                                    data: 'type_vehicule'
                                                }
                                                , 
 {
                                                    'mData': 'ville_dep',
                                                    'mRender': function( data, type,
                                                    row ) {
                                                        // console.log( row )
                                                        return row.ville_dep +
                                                        ', '  +
                                                        row.date_dep;
                                                    }
                                                }
                                                , {
                                                    'mData': 'pays_dep',
                                                    'mRender': function( data, type,
                                                    row ) {
                                                        // console.log( row )
                                                        return  row.ville_arr +
                                                        ', ' +  row
                                                        .date_arr;
                                                    }
                                                }
                                                , 
 {
                                                    'mData': 'poid_disp',
                                                    'mRender': function( data, type,
                                                    row ) {
                                                        // console.log( row )
                                                        return row.poid_disp +
                                                        'Tonnes ';
                                                    }
                                                }
                                                , 
 {
                                                    'mData': 'telephone',
                                                    'mRender': function( data, type,
                                                    row ) {
                                                        // console.log( row )
                                                        return `

                                    <input type = 'submit' value = 'Consultez' onclick = "location.href='disponibilite.php?id_disp=${ row.id_disp}'  "
                                    <?php
                                                        if (!isset($_SESSION['login_user'])) {

                                                            echo 'disabled';

                                }

                                                        ?>
                                                        >

                                    <a
                                        onclick='DeleteDispo(`+row.id_disp+`);'
                                        style='cursor: pointer;'

                                        class='supp'
                                    ><img
                                        style='height:20px;width:20px' src='./img/supp.png'></a>
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
                                        }
                                    );
                                    dataTable.buttons().container()
                                    .appendTo( '#example_wrapper .col-sm-6:eq(0)' );

                                    $( '#villed1' ).change( function() {
                                        dataTable.draw();
                                    }
                                );
                                $( '#villef1' ).change( function() {
                                    dataTable.draw();
                                }
                            );
                            $( '#dated1' ).change( function() {

                                dataTable.draw();
                            }
                        );
                        $( '#datef1' ).change( function() {
                            dataTable.draw();
                        }
                    );
                    $( '#pays31' ).change( function() {
                        dataTable.draw();
                    }
                );

                $( '#pays21' ).change( function() {
                    dataTable.draw();
                }
            );

        }
    );
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <! -- Ajout Dispoibilité -->
                            <div role='tabpanel' class='tab-pane fade in' id='pub_disponibilite'>
                                <div class='css-tab-content'>
                                    <div class='tab-pane fade in active'>
                                        <div class='css-tab-content formulaires'>

                                        </div>
                                        <div class='container'>
                                            <div class='col-md-12'>
                                                <div class='contact-map'>

                                                    <! -- Ajout Dispo -->
                                                        <form id='form1' runat='server' action='post-dispoadm.php'
                                                            method='POST'>
                                                            <h3 class='txt-bordure sections-title'>Ajouter Camion</h3>
                                                            <div class='row form-group'>
                                                                <div class='col-sm-3 col-xs-12  no-padding left-title'>
                                                                    <select name='id_ab'>
                                                                        <?php
    $sql = mysqli_query( $db, 'SELECT * FROM abonnements' );
    while ( $row = $sql->fetch_assoc() ) {
        echo "<option value='" . $row[ 'id_abonnement' ] . "'>" . $row[ 'matricule' ] . '</option>';
    }
    ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class='row form-group'>
                                                                <div class='col-sm-3 col-xs-12  no-padding left-title'>
                                                                    Poids Disponible ( T ) </div>
                                                                <div class='col-sm-1 hidden-xs no-padding left-title'>
                                                                    <font color='red'>*</font>
                                                                </div>
                                                                <div class='col-sm-5 col-xs-12 no-padding'>
                                                                    <input step='0.1' min='0.1' type='number' required
                                                                        class='col-xs-12' name='poid_disp'>
                                                                </div>
                                                            </div>

                                                            <div class='col-md-6 col-xs-12 formulaire'>
                                                                <h3 class='txt-bordure sections-title'>Chargement</h3>
                                                                <div class='form-group'>
                                                                    <div class='row'>
                                                                        <div
                                                                            class='col-sm-4 col-xs-12 no-padding left-title'>
                                                                            Pays de Départ </div>
                                                                        <div class='col-sm-6 col-xs-12 no-padding'>

                                                                            <select type='text' name='pays_dep'
                                                                                id='pays8' placeholder='Pays *' required
                                                                                onchange='changePays(8)'>
                                                                                <option selected value='Cameroun'
                                                                                    style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
                                                                                    Cameroun</option>
                                                                                <option value='Congo'
                                                                                    style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
                                                                                    Congo</option>
                                                                                <option value='Gabon'
                                                                                    style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
                                                                                    Gabon</option>
                                                                                <option value='Tchad'
                                                                                    style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
                                                                                    Tchad</option>
                                                                                <option
                                                                                    value='République centrafricaine'
                                                                                    style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                                    République centrafricaine</option>
                                                                                <option value='Guinée équatoriale'
                                                                                    style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                                    Guinée équatoriale</option>
                                                                            </select>

                                                                        </div>
                                                                    </div>

                                                                    <div class='row'>
                                                                        <div
                                                                            class='col-sm-4 col-xs-12 no-padding left-title'>
                                                                            Ville de Départ </div>
                                                                        <div class='col-sm-6 col-xs-12 no-padding'>

                                                                            <input type='text' name='ville_dep'
                                                                                id='autocomplete' />
                                                                        </div>

                                                                    </div>
                                                                    <div class='row'>
                                                                        <div
                                                                            class='col-sm-4 col-xs-12 no-padding left-title'>
                                                                            Date de Départ </div>
                                                                        <div class='col-sm-6 col-xs-12 no-padding'>
                                                                            <input required type='date' name='date_dep'>
                                                                        </div>
                                                                    </div>

                                                                    <div class='row'>
                                                                        <div
                                                                            class='col-sm-4 col-xs-12 no-padding left-title'>
                                                                            Adresse de Départ </div>
                                                                        <div class='col-sm-8 col-xs-12 no-padding form'>
                                                                            <textarea required
                                                                                placeholder='Votre Adresse de Départ'
                                                                                name='adresse_dep'></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class='col-md-6 col-xs-12 formulaire'>
                                                                <h3 class='txt-bordure sections-title'>Arrivée</h3>
                                                                <div class='form-group'>
                                                                    <div class='row'>
                                                                        <div
                                                                            class='col-sm-4 col-xs-12 no-padding left-title'>
                                                                            Pays d'arrivée </div>
                                                                        <div class="col-sm-6 col-xs-12 no-padding">


                                                                            <select type="text" name="pays_arr"
                                                                                id="pays9" placeholder="Pays *" required
                                                                                onchange="changePays(9)">
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
                                                                                <option
                                                                                    value="République centrafricaine"
                                                                                    style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                                    République centrafricaine</option>
                                                                                <option value="Guinée équatoriale"
                                                                                    style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                                    Guinée équatoriale</option>
                                                                            </select>

                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div
                                                                            class="col-sm-4 col-xs-12 no-padding left-title">
                                                                            Ville d'arrivée </div>
                                                                        <div class='col-sm-6 col-xs-12 no-padding'>
                                                                            <input type='text' name='ville_arr'
                                                                                id='autocomplete-dynamic'
                                                                                style='width: 100%; border-width: 5px;' />
                                                                        </div>

                                                                    </div>
                                                                    <div class='row'>
                                                                        <div
                                                                            class='col-sm-4 col-xs-12 no-padding left-title'>
                                                                            Au plus tard </div>
                                                                        <div class='col-sm-6 col-xs-12 no-padding'>
                                                                            <input required type='date' name='date_arr'>
                                                                        </div>
                                                                    </div>

                                                                    <div class='row'>
                                                                        <div
                                                                            class='col-sm-4 col-xs-12 no-padding left-title'>
                                                                            Destination </div>
                                                                        <div class='col-sm-8 col-xs-12 no-padding form'>
                                                                            <textarea required
                                                                                placeholder='Votre adresse de destination'
                                                                                name='adresse_arr'></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class='col-md-8 col-xs-12 formulaire'>
                                                                <h3 class='txt-bordure sections-title'>Personne à
                                                                    contacter</h3>
                                                                <div class='form-group'>
                                                                    <div class='row margt'>
                                                                        <div
                                                                            class='col-sm-3 col-xs-12 no-padding left-title'>
                                                                            Moi même</div>
                                                                        <div class='col-sm-7 col-xs-12 no-padding form'>
                                                                            <div class='onoffswitch'>
                                                                                <input type='checkbox' checked='checked'
                                                                                    class='onoffswitch-checkbox'
                                                                                    name='contactPersonX'
                                                                                    id='contactPersonX'
                                                                                    onclick='contactPerson()'>
                                                                                <label class='onoffswitch-label'
                                                                                    for='contactPersonX'>
                                                                                    <span
                                                                                        class='onoffswitch-inner'></span>
                                                                                    <span
                                                                                        class='onoffswitch-switch'></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id='meNot' style='display:none'>
                                                                        <div class='row'>
                                                                            <div
                                                                                class='col-sm-3 col-xs-12  no-padding left-title'>
                                                                                Nom Complet</div>
                                                                            <div
                                                                                class='col-sm-1 hidden-xs no-padding left-title'>
                                                                                <font color='red'>*</font>
                                                                            </div>
                                                                            <div class='col-sm-5 col-xs-12 no-padding'>
                                                                                <input type='text' id='contact_name'
                                                                                    name='contact_name' value=''
                                                                                    class='col-xs-12'>
                                                                            </div>
                                                                        </div>
                                                                        <div class='row'>
                                                                            <div
                                                                                class='col-sm-3 col-xs-12  no-padding left-title'>
                                                                                Numéro de téléphone</div>
                                                                            <div
                                                                                class='col-sm-1 hidden-xs no-padding left-title'>
                                                                                <font color='red'>*</font>
                                                                            </div>
                                                                            <div class='col-sm-5 col-xs-12 no-padding'>
                                                                                <input type='number' pattern='[0-9]{15}'
                                                                                    value='' id='contact_phone'
                                                                                    name='contact_phone'
                                                                                    class='col-xs-12'>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='col-md-8 col-xs-12 formulaire'>
                                                                <div class='col-xs-1 form pull-right hidden-xs'>
                                                                    <div class='res-flx petit '>
                                                                        <input type='submit' value='Valider'>

                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class='col-xs-12 form hidden-lg hidden-sm hidden-md'>
                                                                    <div class='res-flx petit '>
                                                                        <input type='submit' value='Postuler'>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>

                                                        <! -- fin Form -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <! -- fin -->

                                <!--ajout SMS-->
                                <div role='tabpanel' class='tab-pane fade in' id='envoi_sms'>
                                    <div class='css-tab-content'>
                                        <div class='tab-pane fade in active'>
                                            <div class='css-tab-content formulaires'>

                                            </div>
                                            <div class='container'>
                                                <div class='col-md-12'>
                                                    <div class='contact-map'>
                                                        <h3 class=' sections-title'>Send SMS</h3>
                                                        <form action='https://api.1s2u.io/bulksms' method='get'>
                                                            <input name='username' type='hidden' value='smscontact020'>
                                                            <input name='password' type='hidden' value='web89355'>

                                                            <label for='phone'>Votre Numéro</label>
                                                            <input type='tel' name='mno' /><br />
                                                            <label for='body'>Votre Message</label>
                                                            <input name='sid' type='hidden' value='Telefret'>
                                                            <textarea name='msg' maxlength='160'></textarea><br />
                                                            <input name='mt' type='hidden' value='0'>
                                                            <input name='fl' type='hidden' value='1'>
                                                            <input type='submit' />
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--fin ajout SMS-->

                                <! -- Ajout Gps -->
                                    <div role='tabpanel' class='tab-pane fade in' id='ajout_gps'>
                                        <div class='css-tab-content'>
                                            <div class='tab-pane fade in active'>
                                                <div class='css-tab-content formulaires'>

                                                </div>
                                                <div class='container'>
                                                    <div class='col-md-12'>
                                                        <div class='contact-map'>

                                                            <form id='form1' runat='server' action='ajout-gps.php'
                                                                method='POST'>
                                                                <h3 class='txt-bordure sections-title'>Ajouter GPS</h3>
                                                                <div class='row'>
                                                                    <div
                                                                        class='col-sm-3 col-xs-12  no-padding left-title'>
                                                                        Matricule abonnement
                                                                        <select name='id_ab'>
                                                                            <?php
    $sql = mysqli_query( $db, 'SELECT * FROM abonnements' );
    while ( $row = $sql->fetch_assoc() ) {
        echo "<option value='" . $row[ 'id_abonnement' ] . "'>" . $row[ 'matricule' ] . '</option>';
    }
    ?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class='col-sm-3 col-xs-12  no-padding left-title'>
                                                                    ID gps</div>
                                                                <div class='col-sm-1 hidden-xs no-padding left-title'>
                                                                    <font color='red'>*</font>
                                                                </div>
                                                                <div class='col-sm-5 col-xs-12 no-padding'>
                                                                    <input type='text' id='id_gps' name='id_gps'
                                                                        value='' class='col-xs-12'>
                                                                    <input type='submit' value='Ajout GPS'>
                                                                </div>
                                                            </form>

                                                            <br><br>
                                                            <!-- <form id='form2' runat='server' action='activ-gps.php'
                                                                method='POST'>
                                                                <h3 class='txt-bordure sections-title'>Activation Suivi
                                                                </h3>
                                                                <div class='row'>
                                                                    <div
                                                                        class='col-sm-3 col-xs-12  no-padding left-title'>
                                                                        Matricule abonnement
                                                                        <select name='id_abonn'>
                                                                            </?php
    $sql = mysqli_query( $db, 'SELECT * FROM abonnements' );
    while ( $row = $sql->fetch_assoc() ) {
        echo "<option value='" . $row[ 'id_abonnement' ] . "'>" . $row[ 'matricule' ] . '</option>';
    }
    ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class='col-sm-3 col-xs-12  no-padding left-title'>
                                                                    Activation Suivi</div>
                                                                <div class='col-sm-1 hidden-xs no-padding left-title'>
                                                                    <font color='red'>*</font>
                                                                </div>
                                                                <div class='col-sm-5 col-xs-12 no-padding'>
                                                                    <select class='form-control' id='' name='Suivi'>

                                                                        <option value='1'>Non-Active</option>
                                                                        <option value='0'>Active</option>

                                                                    </select>
                                                                    <div class='row'>
                                                                        <div
                                                                            class='col-sm-4 col-xs-12 no-padding left-title'>
                                                                            Id Disponibilité </div>
                                                                        <div class='col-sm-6 col-xs-12 no-padding'>
                                                                            <input required type='text' name='IdDispo'>
                                                                        </div>
                                                                    </div>
                                                                    <div class='row'>
                                                                        <div
                                                                            class='col-sm-4 col-xs-12 no-padding left-title'>
                                                                            Date Début Suivi </div>
                                                                        <div class='col-sm-6 col-xs-12 no-padding'>
                                                                            <input required type='date' name='date_deb'>
                                                                        </div>
                                                                    </div>
                                                                    <div class='row'>
                                                                        <div
                                                                            class='col-sm-4 col-xs-12 no-padding left-title'>
                                                                            Date Fin Suivi </div>
                                                                        <div class='col-sm-6 col-xs-12 no-padding'>
                                                                            <input required type='date' name='date_fin'>
                                                                        </div>
                                                                    </div>
                                                                    <input type='submit' value='Valider'>
                                                                </div>

                                                            </form> -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <! -- fin -->

                                        <!--ajout SMS-->
                                        <div role='tabpanel' class='tab-pane fade in' id='Envoi_SMS'>
                                            <div class='css-tab-content'>
                                                <div class='tab-pane fade in active'>
                                                    <div class='css-tab-content formulaires'>

                                                    </div>
                                                    <div class='container'>
                                                        <div class='col-md-12'>
                                                            <div class='contact-map'>
                                                                <h3 class=' sections-title'>Send SMS</h3>
                                                                <form action='https://api.1s2u.io/bulksms' method='get'>
                                                                    <input name='username' type='hidden'
                                                                        value='smscontact020'>
                                                                    <input name='password' type='hidden'
                                                                        value='web89355'>

                                                                    <label for='phone'>Votre Numéro</label>
                                                                    <input type='tel' name='mno' /><br />
                                                                    <label for='body'>Votre Message</label>
                                                                    <input name='sid' type='hidden' value='Telefret'>
                                                                    <textarea name='msg'
                                                                        maxlength='160'></textarea><br />
                                                                    <input name='mt' type='hidden' value='0'>
                                                                    <input name='fl' type='hidden' value='1'>
                                                                    <input type='submit' />
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--fin ajout SMS-->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='modal fade fond' id='message' tabindex='-1' role='dialog' aria-labelledby='quoteModalLabel'
        aria-hidden='true'>
        <div class='w-50'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span
                            aria-hidden='true'>&times;
                        </span></button>
                </div>
                <div class='modal-body'>
                    <section class='packs-setion'>
                        <div class='flxrow form-group'>
                            <div class='row text-center'>
                                <div class='col-xs-12'>
                                    <span class='section-sub sections-title'>Envoyer un message </span>
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <div class='row form w80'>
                                <form name='msg' action='admin-sendmail.php' method='POST'>
                                    <div class='col-sm-12'>
                                        <input type='text' id='mailmsg' name='mailmsg' placeholder='E-mail'>
                                    </div>

                                    <div class='col-sm-12'>
                                        <textarea name='msg' placeholder='Votre Message'></textarea>
                                    </div>

                                    <div class='col-sm-12 regle-form'>
                                        <input class='pull-right' type='submit' value='Envoyer'>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</section>

<?php
} else {
    ?>

<section class='page-title-section consultation'>
</section>

<section class='contact-info-section '>
    <div class=' '>
        <div class='row '>
            <div class=''>
                <div class='css-tab' role='tabpanel'>
                    <ul class='nav nav-tabs' role='tablist'>

                        <li role='pub-ann' class='active'>
                            <a href='#pub-ann' aria-controls='pub-ann' role='tab' data-toggle='tab'> Vous n'êtes pas un
                                Admin </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php }
    ?>
<?php include'footer.php' ?>