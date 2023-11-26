<?php include"header.php";?>

<?php include"sendsms.php"?>

<?php
    
    

    extract($_POST,EXTR_OVERWRITE);
    $today =   strtotime(date('d-m-Y')) ;

    $editFormAction = $_SERVER['PHP_SELF'];
    if (isset($_SERVER['QUERY_STRING'])) {
      $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
    }

    $filtre = "1=1" ;

    
    
    if (!empty($_POST)){
        
        if($pays_charg!="off"){
            $filtre.=" AND pays_charg='$pays_charg'";
        }
        
        if($ville_charg!="off"){
            $filtre.=" AND ville_charg='$ville_charg'";
        }
        
        if($pays_liv!="off"){
            $filtre.=" AND pays_liv='$pays_liv'";
        }
        
        if($ville_liv!="off"){
            $filtre.=" AND ville_liv='$ville_liv'";
        }
        
    }

    if(isset($_SESSION['login_user'])) {
    
    $telephone=$_SESSION['telephone'];
    
    $selectSQL="SELECT * FROM abonnements WHERE telephone='$telephone' AND valide='1' ";
                                                     
        $resultat = mysqli_query($db,$selectSQL);
        $res=mysqli_fetch_array($resultat);
        $s=mysqli_num_rows($resultat);                                              
    }
?>


<section class="page-title-section trouvtrans">
    <div class="container hidden-xs slide-bord">
    
    </div>
</section>


<section class="contact-info-section">
    <div class=" ">
        <div class="row ">
            <div class="">
                <div class="css-tab" role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="pub-ann" class="active">
                            <a href="#pub-ann" aria-controls="pub-ann" role="tab" data-toggle="tab">Liste des commandes</a>
                        </li>
                        <li role='transporteurs' class=''>
                            <a href='#allvehicule' aria-controls='allvehicule' role='tab' data-toggle='tab'>Localisation</a>
                        </li>
                        <li role='transporteurs' class=''>
                            <a href='#SMS' aria-controls='SMS' role='tab' data-toggle='tab'>SMS</a>
                        </li>
                        <!-- <li role="soumissions">
                            <a href="#soumissions" aria-controls="soumissions" role="tab" data-toggle="tab">Mes
                                soumissions</a>
                        </li> -->
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                    <div role='tabpanel' class='tab-pane fade in' id='SMS'>
                            <div class='css-tab-content'>
                                <div class='tab-pane fade in'>
                                    
                                    <div class='container'>
                                        <div class='col-md-12'>
                                            <div class='contact-map'>
                                                <h3 class=' sections-title'>Envoi de SMS</h3>                                              

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='container form-group'>
                        
                            <form method="post" action="post_sms.php">
                            
                    
                                <div class="row">
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                            Numéro de téléphone :</div>
                                                            <div class="col-sm-7 col-xs-12 no-padding">
                                                                <input type="number" name="numero" id="numero" required class="col-xs-12">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                            Message:</div>
                                                            <div class="col-sm-7 col-xs-12 no-padding form">
                                                                <textarea
                                                                    placeholder="Plus de details sur votre marchandise"
                                                                    name="message" id="message" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 formulaire">
                                                    <div class="form center">
                                                    <button type="submit" name="submit">Envoyer</button>
                                                    </div>
                                                </div>
                            </form>
                            </div>  
                    </div>
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
                            <div class='row' style="padding:15px ;">
                                <div class="col-md-5">
                                <table  id='empTableAbon' class='display dataTable'>
                                            <thead >
                                            <tr>
                                                <th>Matricule</th>
                                                <th>Position</th>
                                                <th>Nombre de commandes</th>
                                                <th>Vitesses</th>
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
                                                                'url': 'ajaxfile_vehicules1.php',
                                                                'data': function (data) {
                                                                    // Read values

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
                                                    data: 'matricule'
                                                },{
                                                        data: 'display_name'
                                                    },     {
                                                    data: 'nombreCommandes'
                                                },   {
                                                    data: 'vitesse'
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


                                </div>
                                <div class="col-md-7">
                                <iframe src="https://telemex.suivi.telefret.com/all" width="900" height="900"></iframe>
                                </div >  
                             </div >  
                        </div>
                        <div role="tabpanel" class="tab-pane fade in active" id="pub-ann">
                            <div class="css-tab-content">
                                <div class="tab-pane fade in active">





                                    <div class="container result-rech">


                                        <!-- Custom Filter -->
                                        <div class="css-tab-content formulaires">

                                            <div class="container" style="padding-left: unset !important;">

                                            <div class='col-md-4 formulaire'>
                                                                <h3 class='txt-bordure sections-title'>Statut</h3>

                                                                <div class='form-group'>
                                                                    <div class='row'>

                                                                        <div class='col-sm-10 col-xs-12 no-padding '>
                                                                            <select type='text' name='filterstatus'
                                                                                id='filterstatus'
                                                                                required>
                                                                                <option value='0' selected>En attente</option>
                                                                                <option value='1' > En cours</option>
                                                                                <!-- <option value='2' > Livré</option> -->
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                <div class="col-md-4 formulaire">
                                                    <h3 class="txt-bordure sections-title">Depart</h3>

                                                    <div class="form-group">
                                                        <div class="row">

                                                            <div class="col-sm-12 col-xs-12 no-padding hidden">
                                                                <select type="text" name="pays_dep" id="pays2"
                                                                    placeholder="Pays *" >
                                                                    <option value="" selected> Tout</option>
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
                                                                    <option value="République centrafricaine"
                                                                        style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                        République centrafricaine</option>
                                                                    <option value="Guinée équatoriale"
                                                                        style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                        Guinée équatoriale</option>
                                                                    
                                                                </select>

                                                            </div>
                                                            <div class="col-sm-11 col-xs-12 no-padding">
                                                                <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                <input type="text" name="ville_dep" id="villed"
                                                                    placeholder="Adresse d’enlèvement">
                                                                <input type="text" name="ville_dep" id="villed-x"
                                                                    disabled="disabled"
                                                                    style="color: #CCC; position: absolute; background: transparent; z-index: 1;height:0px;" />
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 no-padding hidden">
                                                                <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                <input type="date" name="ville_dep" id="dated"
                                                                    placeholder="dated">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 formulaire" style="margin: left 5px;">
                                                    <h3 class="txt-bordure sections-title">Arrivee</h3>

                                                    <div class="form-group">
                                                        <div class="row">

                                                            <div class="col-sm-12 col-xs-12 no-padding hidden">

                                                                <select type="text" name="pays_arr" id="pays3"
                                                                    placeholder="Pays *" >
                                                                    <option value="" selected> Tout</option>

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
                                                                    <option value="République centrafricaine"
                                                                        style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                        République centrafricaine</option>
                                                                    <option value="Guinée équatoriale"
                                                                        style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                        Guinée équatoriale</option>
                                                                    
                                                                </select>

                                                            </div>
                                                            <div class="col-sm-11 col-xs-12 no-padding">
                                                                <!-- <input type="text" class="form-control"  id="tag3" name="ville_arr" placeholder="Ville de départ"> -->
                                                                <input type="text" name="ville_arr" id="villef"
                                                                    style="width: 100%; border-width: 5px;"
                                                                    placeholder="Adresse de livraison" />
                                                                <div id="suggestions-container"
                                                                    style="position: relative;"></div>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 no-padding hidden">
                                                                <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
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
                                        <table id='empTable' class='display dataTable'>
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Marchandise</th>
                                                    <!-- <th>Poids</th> -->
                                                    <!-- <th>Nombre de véhicules</th> -->
                                                    <th>Prix</th>
                                                    <th>Départ</th>
                                                    <th>Arrivée</th>
                                                    <th>Code</th>
                                                    <th>Matricule</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>

                                    <script>
                                    $(document).ready(function() {
                                        var dataTable = $('#empTable').DataTable({
                                            'processing': true,
                                            'serverSide': true,
                                            'serverMethod': 'post',
                                            //'searching': false, // Remove default Search Control
                                            'ajax': {
                                                'url': 'ajaxfile2.php',
                                                'data': function(data) {
                                                    // Read values
                                                    var gender = $('#pays2').val();
                                                    var name = $('#pays3').val();
                                                    var villed = $('#villed').val();
                                                    var villef = $('#villef').val();
                                                    var dated = $('#dated').val();
                                                    var datef = $('#datef').val();
                                                    // Append to data
                                                    data.pays2 = gender;
                                                    data.pays3 = name;
                                                    data.villed = villed;
                                                    data.villef = villef;
                                                    data.dated = dated;
                                                    data.datef = datef;
                                                    // data.Last24 = true;
                                                    var filterstatus = $('#filterstatus').val();
                                                    data.status = filterstatus;

                                                }
                                            },
                                            'success': function(data) {
                                                console.log(data)
                                            },
                                            'error': function(data) {
                                                console.log(data)
                                            },
                                            "createdRow": function(row, data, dataIndex) {
                                                console.log(data.date_liv, new Date(data.date_liv
                                                    .split("/")[1] + "/" + data.date_liv
                                                    .split("/")[0] + "/" + data.date_liv
                                                    .split("/")[2]))

                                                if (data.date_liv && (new Date(data.date_liv.split(
                                                        "/")[1] + "/" + data.date_liv.split(
                                                        "/")[0] + "/" + data.date_liv.split(
                                                        "/")[2]) >= (new Date()).setDate((new Date()).getDate() - 1) )) {

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
                                                // {
                                                //     data: 'poid'
                                                // },
                                        //         {
                                        //     data: 'nb_vehicules'
                                        // },
                                        {
                                                    "mData": "prix_prop",
                                                    "mRender": function(data, type, row) {
                                                        console.log("============================",row)
                                                        return row.type_vehicule!="Moto"?(row.prix_prop!=" "?  row.prix_prop:" À négocier"):row.priceestimated+' FCFA';
                                                    }
                                                },
                                                {
                                                    "mData": "ville_charg",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.ville_charg + ", "  + row.date_charg;
                                                    }
                                                }, {
                                                    "mData": "pays_charg",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.ville_liv + ", "  + row.date_liv;
                                                    }
                                                }, {
                                                    data: 'id_charg'
                                                }, {
                                                    data: 'matricule'
                                                }, {
                                                    "mData": "telephone",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return `
                            <div class="">
                   <input type="submit" value="Consulter" onclick="location.href='chargement.php?id_charg=${row.id_charg}' "
                                                                
                                                                   
                                                               >
                                                               <a class="${!(row.statutenvoi==0)?'hidden':''}" href="modif-charg.php?id_charg=${row.id_charg}&amp;telephone=${row.telephone}"><img src="./img/modif.png"  style="height:20px;width:20px"></a>

                                                               <a class="${(row.statutenvoi==2||row.statutenvoi==0)?'hidden':''}" 
 onclick="showModalRate(`+ row.id_charg + `)"
            style="cursor: pointer;"
 ><img style="height:20px;width:20px" src="./img/iconstar.png" ></a>
                                                               </div>
                                                        
                                                        <div class="hidden">
                                                            <input type="submit" value="Consulter" onclick="location.href='chargement.php?id_charg=${row.id_charg}' "
                                                             <?php 
                                                                if(!isset($_SESSION['login_user'])) { 
                                                                    echo "disabled" ;  
                                                                } else {
                                                                    if ($_SESSION['type']!="transporteur"){ echo "disabled" ;} }  
                                                               ?>      
                                                                   
                                                               >
                                                              
                                                        </div>


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
                                        $('#filterstatus').change(function () {
                                                            dataTable.draw();
                                                        });
                                    });
                                    </script>



                                </div>
                            </div>
                        </div>















 <div role="tabpanel" class="tab-pane fade in" id="soumissions">
                            <div class="css-tab-content">
                                <div class="tab-pane fade in active">



                            <div class="container result-rech">


                                <!-- Custom Filter -->
                                <div class="css-tab-content formulaires">

                                    <div class="container" style="padding-left: unset !important;">
                                        <div class="col-md-6 formulaire">
                                            <h3 class="txt-bordure sections-title">Depart</h3>

                                            <div class="form-group">
                                                <div class="row">

                                                    <div class="col-sm-4 col-xs-12 no-padding">
                                                        <select type="text" name="pays_dep" id="pays21"
                                                            placeholder="Pays *" required>
                                                            <option value="" selected> Tout</option>

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
                                                            <option value="République centrafricaine"
                                                                style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                République centrafricaine</option>
                                                            <option value="Guinée équatoriale"
                                                                style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                Guinée équatoriale</option>
                                                            
                                                        </select>

                                                    </div>
                                                    <div class="col-sm-4 col-xs-12 no-padding">
                                                        <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                        <input type="text" name="ville_dep" id="villed1"
                                                            placeholder="Adresse d'enlèvement">
                                                        <input type="text" name="ville_dep" id="villed-x"
                                                            disabled="disabled"
                                                            style="color: #CCC; position: absolute; background: transparent; z-index: 1;height:0px;" />
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12 no-padding">
                                                        <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                        <input type="date" name="ville_dep" id="dated1"
                                                            placeholder="dated">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 formulaire" style="margin: left 5px;">
                                            <h3 class="txt-bordure sections-title">Arrivee</h3>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding">

                                                        <select type="text" name="pays_arr" id="pays31"
                                                            placeholder="Pays *" required>
                                                            <option value="" selected> Tout</option>

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
                                                            <option value="République centrafricaine"
                                                                style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                République centrafricaine</option>
                                                            <option value="Guinée équatoriale"
                                                                style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                Guinée équatoriale</option>
                                                            
                                                        </select>

                                                    </div>
                                                    <div class="col-sm-4 col-xs-12 no-padding">
                                                        <!-- <input type="text" class="form-control"  id="tag3" name="ville_arr" placeholder="Ville de départ"> -->
                                                        <input type="text" name="ville_arr" id="villef1"
                                                            style="width: 100%; border-width: 5px;"
                                                            placeholder="Adresse de livraison" />
                                                        <div id="suggestions-container" style="position: relative;">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12 no-padding">
                                                        <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                        <input type="date" name="datef" id="datef1" placeholder="datef">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    </form>
                                </div>

                                <!-- Table -->
                                <table id='empTable2' class='display dataTable'>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Marchandise</th>
                                            <th>Poids</th>
                                            <th>Cout</th>
                                            <th>Départ</th>
                                            <th>Arrivée</th>
                                            <th>Véhicules</th>
                                            <th>Proposition</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <script>
                            $(document).ready(function() {
                                var dataTable2 = $('#empTable2').DataTable({
                                    'processing': true,
                                    'serverSide': true,
                                    'serverMethod': 'post',
                                    //'searching': false, // Remove default Search Control
                                    'ajax': {
                                        'url': 'ajaxfile_proposition.php',
                                        'data': function(data) {
                                            // Read values
                                            var gender = $('#pays21').val();
                                            var name = $('#pays31').val();
                                            var villed = $('#villed1').val();
                                            var villef = $('#villef1').val();
                                            var dated = $('#dated1').val();
                                            var datef = $('#datef1').val();
                                            // Append to data
                                            data.pays2 = gender;
                                            data.pays3 = name;
                                            data.villed = villed;
                                            data.villef = villef;
                                            data.dated = dated;
                                            data.datef = datef;
                                            data.telephone="<?php echo $_SESSION['telephone'] ;  ?>";

                                        }
                                    },
                                    'success': function(data) {
                                        console.log(data)
                                    },
                                    'error': function(data) {
                                        console.log(data)
                                    },
                                    "createdRow": function(row, data, dataIndex) {
                                        console.log(data.date_liv, new Date(data.date_liv
                                            .split("/")[1] + "/" + data.date_liv
                                            .split("/")[0] + "/" + data.date_liv
                                            .split("/")[2]))

                                        if (data.date_liv && (new Date(data.date_liv.split(
                                                "/")[1] + "/" + data.date_liv.split(
                                                "/")[0] + "/" + data.date_liv.split(
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
                                                return row.ville_charg + ", "  + row.date_charg;
                                            }
                                        }, {
                                            "mData": "pays_charg",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return row.ville_liv + ", " + row.date_liv;
                                            }
                                        },
                                        {
                                            "mData": "vehicules",
                                            "mRender": function(data, type, row) {
                                                var val=[];
                                                val=row.vehicules;
                                                var result=`<div 

class="res-flx-s img-avatar-sm">`;
                                                for (let index = 0; index < val.length; index++) {
                                                     const element = val[index];
                                                     result+=`<label >${element.matricule}</label> </br>`
                                                    console.log()
                                                }

                                                return result+= ` </div>`;
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
                                                <a href="modif-postuler.php?id_charg=${row.id_charg}&amp;id_postuler=${row.id_postuler}"><img src="./img/modif.png"  style="height:20px;width:20px"></a>
                                        <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-postuler.php?id_charg=${row.id_charg}&amp;telephone=${row.telephone}&amp;id_postuler=${row.id_postuler}"><img style="height:20px;width:20px" src="./img/supp.png" ></a>
                      


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
                                dataTable2.buttons().container()
                                    .appendTo('#example_wrapper .col-sm-6:eq(0)');

                                $('#villed1').change(function() {
                                    dataTable2.draw();
                                });
                                $('#villef1').change(function() {
                                    dataTable2.draw();
                                });
                                $('#dated1').change(function() {

                                    dataTable2.draw();
                                });
                                $('#datef1').change(function() {
                                    dataTable2.draw();
                                });
                                $('#pays31').change(function() {
                                    dataTable2.draw();
                                });

                                $('#pays21').change(function() {
                                    dataTable2.draw();
                                });
                            });
                            </script>



                        </div>
                    </div>
                </div>





























                <div role="tabpanel" class="tab-pane fade in" id="choix">
                    <div class="css-tab-content">
                        <div class="tab-pane fade in active">
                            <div class="css-tab-content formulaires">
                                <form id="form1" runat="server" action="post-dispo.php" method="POST">

                                    <div class="container">
                                        <div class="col-md-8 col-xs-12 formulaire">
                                            <h3 class="txt-bordure sections-title">Vos Matricules</h3>

                                            <div class="form-group">
                                                <?php if ( (isset($_SESSION['login_user'])) AND ($_SESSION['type']=="transporteur") ) {
																	if ($s!=0){
                                                            ?>
                                                <div class="row">
                                                    <div class="col-sm-3 col-xs-12 no-padding left-title">
                                                        Matricule </div>
                                                    <div class="col-sm-1 hidden-xs no-padding left-title">
                                                        <font color="red">*</font>
                                                    </div>
                                                    <div class="col-sm-5 col-xs-12 no-padding">
                                                        <select class="form-control" id="" name="id_ab" required>
                                                            <?php
                                                                            do{
                                                                                if($_SESSION['type']=='transporteur'){
                                                                        ?>
                                                            <option value="<?php echo $res['id_abonnement']; ?>">
                                                                <?php echo $res['matricule']; ?></option>
                                                            <?php
                                                                                }
                                                                            }
                                                                            while($res=mysqli_fetch_array($resultat));
                                                                        ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3 col-xs-12  no-padding left-title">Poids
                                                        Disponible (T) </div>
                                                    <div class="col-sm-1 hidden-xs no-padding left-title">
                                                        <font color="red">*</font>
                                                    </div>
                                                    <div class="col-sm-5 col-xs-12 no-padding">
                                                        <input step="0.1" min="0.1" type="number" required
                                                            class="col-xs-12" name="poid_disp">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                        <font color="red">* Champs obligatoires</font>
                                                    </div>
                                                </div>

                                                <?php
                                                                    }
                                                                    else{
                                                                ?>

                                                <a href="packs.php">Abonnez Vous pour Accéder a Nos Services</a>

                                                <?php
                                                                    }
                                                                }
                                                                else{
                                                                ?>

                                                <a href="#" id='logintest' data-toggle="modal" data-target="#login">Vous
                                                    n'êtes pas connecté</a>

                                                <?php
                                                                }
                                                                ?>
                                            </div>
                                        </div>



                                        <div class="col-md-6 col-xs-12 formulaire">
                                            <h3 class="txt-bordure sections-title">Chargement</h3>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Pays
                                                        de Départ </div>
                                                    <div class="col-sm-6 col-xs-12 no-padding">
                 
                                                        <select type="text" name="pays_dep" id="pays4" onchange="initialize()"
                                                            placeholder="Pays *" required >
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
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Ville
                                                        de Départ </div>
                                                        <input  type="text" name="ville_dep" id="ville4" style="height:0px;width:0px"   />

                                                    <div  id="depdiv" class="col-sm-6 col-xs-12 no-padding">
                                                        <!-- style="height: 80px; width :200px;"-->
                                                        <!--<input type="text" name="ville_dep" id="autocomplete-ajax"  placeholder="Ville de départ">
            <input type="text" name="ville_dep" id="autocomplete-ajax-x" disabled="disabled" style="color: #CCC; position: absolute; background: transparent; z-index: 1;"/> -->

                                                        <input type="text"  name="autocomplete" id="autocomplete" class="form-control" placeholder="Select Location">

                                                    </div>

                                                    <!-- <div class="col-sm-6 col-xs-12 no-padding"> 
                                                                        <input required type='text' id="tag8" class="form-control" name="ville_dep" >
                                                                    </div> -->
                                                </div>
                                                <div class="card-body hidden">

 
                        <div class="form-group " id="lat_area">
                            <label for="latitude"> Latitude </label>
                            <input type="text" name="latitude" id="latitude" class="form-control">
                        </div>
 
                        <div class="form-group" id="long_area">
                            <label for="latitude"> Longitude </label>
                            <input type="text" name="longitude" id="longitude" class="form-control">
                        </div>
                    </div>
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Date
                                                        de Départ </div>
                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                        <input required type="date" name="date_dep">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                        Adresse de Départ </div>
                                                    <div class="col-sm-8 col-xs-12 no-padding form">
                                                        <textarea required placeholder="Votre Adresse de Départ"
                                                            name="adresse_dep"></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xs-12 formulaire">
                                            <h3 class="txt-bordure sections-title">Arrivée</h3>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Pays
                                                        d'arrivée </div>
                                                    <div class="col-sm-6 col-xs-12 no-padding">


                                                        <select type="text" name="pays_arr" id="pays5" onchange="initialize1()"
                                                            placeholder="Pays *" required >
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
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Ville
                                                        d'arrivée </div>
                                                        <input type="text" name="ville_arr" id="ville5" style="height:0px;width:0px"  />

                                                    <div  id="arrdiv"class="col-sm-6 col-xs-12 no-padding">
                                                        <!-- style="height: 80px; width :200px;"-->
                                                            <input type="text" name="autocomplete" id="autocomplete1" class="form-control" placeholder="Select Location">

                                                    </div>
                                                    <div class="card-body hidden">

 
<div class="form-group " id="lat_area">
    <label for="latitude"> Latitude </label>
    <input type="text" name="latitude" id="latitude1" class="form-control">
</div>

<div class="form-group" id="long_area">
    <label for="latitude"> Longitude </label>
    <input type="text" name="longitude" id="longitude1" class="form-control">
</div>
</div>
                                                    <!-- <div class="col-sm-6 col-xs-12 no-padding"> 
                                                                        <input type='text' required class="form-control"  id="tag9" name="ville_arr" >   
                                                                        
                                                                    </div> -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Au
                                                        plus tard </div>
                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                        <input required type="date" name="date_arr">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                        Destination </div>
                                                    <div class="col-sm-8 col-xs-12 no-padding form">
                                                        <textarea required placeholder="Votre adresse de destination"
                                                            name="adresse_arr"></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-8 col-xs-12 formulaire">
                                            <h3 class="txt-bordure sections-title">Personne à contacter</h3>
                                            <div class="form-group">
                                                <div class="row margt">
                                                    <div class="col-sm-3 col-xs-12 no-padding left-title">Moi
                                                        même</div>
                                                    <div class="col-sm-7 col-xs-12 no-padding form">
                                                        <div class="onoffswitch">
                                                            <input type="checkbox" checked="checked"
                                                                class="onoffswitch-checkbox" name="contactPersonX"
                                                                id="contactPersonX" onclick="contactPerson()">
                                                            <label class="onoffswitch-label" for="contactPersonX">
                                                                <span class="onoffswitch-inner"></span>
                                                                <span class="onoffswitch-switch"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="meNot" style="display:none">
                                                    <div class="row">
                                                        <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                            Nom Complet</div>
                                                        <div class="col-sm-1 hidden-xs no-padding left-title">
                                                            <font color="red">*</font>
                                                        </div>
                                                        <div class="col-sm-5 col-xs-12 no-padding">
                                                            <input type="text" id="contact_name" name="contact_name"
                                                                value="" class="col-xs-12">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                            Numéro de téléphone</div>
                                                        <div class="col-sm-1 hidden-xs no-padding left-title">
                                                            <font color="red">*</font>
                                                        </div>
                                                        <div class="col-sm-5 col-xs-12 no-padding">
                                                            <input type="number" pattern="[0-9]{15}" value=""
                                                                id="contact_phone" name="contact_phone"
                                                                class="col-xs-12">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-xs-12 formulaire">
                                            <div class="col-xs-1 form pull-right hidden-xs">
                                                <div class="res-flx petit ">
                                                    <input type="submit" value="Valider" <?php 
                                                                    if(!isset($_SESSION['login_user'])) { 
                                                                        echo "disabled" ;  
                                                                    } else {
                                                                        if (($_SESSION['type']!="transporteur") OR ( $s==0 ) ){ echo "disabled" ;} }  
                                                                   ?>>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 form hidden-lg hidden-sm hidden-md">
                                                <div class="res-flx petit ">
                                                    <input type="submit" value="Postuler" <?php 
                                                                    if(!isset($_SESSION['login_user'])) { 
                                                                        echo "disabled" ;  
                                                                    } else {
                                                                        if (($_SESSION['type']!="transporteur") OR ( $s==0 ) ){ echo "disabled" ;} }  
                                                                   ?>>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
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