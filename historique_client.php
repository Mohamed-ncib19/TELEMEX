<?php include"header.php" ?>

<?php
    $telephone=$_GET['telephone'];
    $today =   strtotime(date('d-m-Y')) ;
	
	$sql = "SELECT * FROM `transporteur` WHERE `telephone`='$telephone'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


    if ($row['type']=="transporteur" ){
?>



<?php
    }
    if (($row['type']=="transporteur") OR ($row['type']=="client")){
?>

<section class="page-title-section trouvtrans">
    <div class="container hidden-xs slide-bord">
        <div class="demo-slides">
            <div class="animated lightSpeedIn slide-title"> Mes envois
            </div>
            <p class="lead animated lightSpeedIn">Consultez l'historique </p>
        </div>
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
                            <a href="#pub-ann" aria-controls="pub-ann" role="tab" data-toggle="tab"> Mes envois</a>
                        </li>
                        <?php
    
    if ($row['type']=="transporteur"){
?>
                        <li role="choix">
                            <a href="#choix" aria-controls="choix" role="tab" data-toggle="tab">Historique
                                Disponibilité</a>
                        </li>
                        <?php
    }
?>
                    </ul>

                    <div class="tab-content">
      
                        <div role="tabpanel" class="tab-pane fade in active" id="pub-ann">
                            <div class="css-tab-content">
                                <div class="tab-pane fade in active">




                                    <div class="container result-rech">


                                        <!-- Custom Filter -->
                                        <div class="css-tab-content formulaires">

                                            <div class="container" style="padding-left: unset !important;">
                                            <div class='col-md-2 formulaire'>
                                                                <h3 class='txt-bordure sections-title'>Statut</h3>

                                                                <div class='form-group'>
                                                                    <div class='row'>

                                                                        <div class='col-sm-10 col-xs-12 no-padding '>
                                                                            <select type='text' name='filterstatus'
                                                                                id='filterstatus'
                                                                                required>
                                                                                <option value='0' selected>En attente</option>
                                                                                <option value='1' > En cours </option>
                                                                                <option value='2' > Livré</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                <div class="col-md-5 formulaire">
                                                    <h3 class="txt-bordure sections-title">Depart</h3>

                                                    <div class="form-group">
                                                        <div class="row">

                                                            <div class="col-sm-4 col-xs-12 no-padding hidden">
                                                                <select type="text" name="pays_dep" id="pays2"
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
                                                                <input type="text" name="ville_dep" id="villed"
                                                                    placeholder="Adresse d'enlèvement">
                                                                <input type="text" name="ville_dep" id="villed-x"
                                                                    disabled="disabled"
                                                                    style="color: #CCC; position: absolute; background: transparent; z-index: 1;height:0px;" />
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 no-padding">
                                                                <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                <input type="date" name="ville_dep" id="dated"
                                                                    placeholder="dated">
                                                            </div>
                                                            
                                                                        <div class='col-sm-4 col-xs-12 no-padding'>
                                                                            <!-- <input type = 'text' class = 'form-control'  id = 'tag2' name = 'ville_dep' placeholder = 'Ville de départ'> -->
                                                                            <input type='time' name='time_dep'
                                                                                id='timed' placeholder='dated'>
                                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-5 formulaire" style="margin: left 5px;">
                                                    <h3 class="txt-bordure sections-title">Arrivee</h3>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding hidden">

                                                                <select type="text" name="pays_arr" id="pays3"
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
                                                                <input type="text" name="ville_arr" id="villef"
                                                                    style="width: 100%; border-width: 5px;"
                                                                    placeholder="Adresse de livraison" />
                                                                <div id="suggestions-container"
                                                                    style="position: relative;"></div>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 no-padding">
                                                                <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                <input type="date" name="datef" id="datef"
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
                                                    <th>Date</th>
                                                    <th>Colis</th>
                                                    <th>Point d’enlèvement</th>
                                                    <th>Point de livraison</th>
                                                    <th>Prix</th>
                                                    <th>Code</th>
                                                    <th>Statut</th>
                                                    <th>Note</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                        </table>
                                    </div>

                                    <!-- Script -->
                             

                                </div>
                            </div>
                        </div>

  
              <?php
 
 if ($row['type']=="transporteur"){
?>
                        <div role="tabpanel" class="tab-pane fade in" id="choix">
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
                                                                <select type="text" name="pays_dep" id="pays2"
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
                                                                <input type="text" name="ville_dep" id="villed"
                                                                    placeholder="Adresse d'enlèvement">
                                                                <input type="text" name="ville_dep" id="villed-x"
                                                                    disabled="disabled"
                                                                    style="color: #CCC; position: absolute; background: transparent; z-index: 1;height:0px;" />
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 no-padding">
                                                                <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                <input type="date" name="ville_dep" id="dated"
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

                                                                <select type="text" name="pays_arr" id="pays3"
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
                                                                <input type="text" name="ville_arr" id="villef"
                                                                    style="width: 100%; border-width: 5px;"
                                                                    placeholder="Adresse de livraison" />
                                                                <div id="suggestions-container"
                                                                    style="position: relative;"></div>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 no-padding">
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
                                        <table id='empTable2' class='display dataTable'>
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Matricule</th>
                                                    <th>Départ</th>
                                                    <th>Arrivée</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                        </table>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <?php
    }
   
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
                                    $(document).ready(function() {
                                        var dataTable = $('#empTable').DataTable({
                                            'processing': true,
                                            'serverSide': true,
                                            'serverMethod': 'post',
                                            //'searching': false, // Remove default Search Control
                                            'ajax': {
                                                'url': 'ajaxfile1.php',
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
                                                    var timed = $('#timed').val();
                                                     var timef = $('#timef').val();
                                                   data.telephone = "<?php echo  $telephone; ?>";
                                                   var filterstatus = $('#filterstatus').val();
                                                //    data.Last24 = true;

                                                   data.timed = timed;
                                                                    data.timef = timef;
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
                                                    .split("/")[1] +
                                                    "/" + data.date_liv.split("/")[0] +
                                                    "/" + data.date_liv
                                                    .split("/")[2]))

                                                if (data.date_liv && (new Date(data.date_liv.split(
                                                            "/")[1] + "/" +
                                                        data.date_liv.split("/")[0] + "/" + data
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
                                                }, {
                                                    "mData": "pays_charg",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        // return (row.prix_prop== "" || row.prix_prop== " ")?row
                                                        //     .priceestimated:row
                                                        //     .prix_prop;
                                                            return row.type_vehicule!="Moto"?(row.prix_prop!=" "?  row.prix_prop:" À négocier"):row.priceestimated;

                                                    }
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
                                                }, {
                                                    data: 'rate'
                                                },{
                                                    "mData": "telephone",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return `
                    <a class="${row.statutenvoi!=0?'hidden':''}"   href=${!row.statutenvoi==0?`modif-charg.php?id_charg=${row.id_charg}&amp;telephone=${row.telephone}`:"#"}><img src="./img/modif.png"  style="height:20px;width:20px"></a>
                                        <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp ${row.statutenvoi==1?'hidden':''}"
                                        href=${!row.statutenvoi==0?`supp-charg.php?id_charg=${row.id_charg}&amp;telephone=${row.telephone}`:"#"}><img style="height:20px;width:20px" src="./img/supp.png" ></a>
                                        <a 
                                        class="${row.statutenvoi!=1?'hidden':''}" 
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
                                                        $('#timed').change(function () {
                                                            dataTable.draw();
                                                        });

                                                        $('#timef').change(function () {
                                                            dataTable.draw();
                                                        });
                                    });
                                    </script>

                                    
                                    <!-- Script -->
                                    <script>
                                    $(document).ready(function() {
                                        var dataTable2 = $('#empTable2').DataTable({
                                            'processing': true,
                                            'serverSide': true,
                                            'serverMethod': 'post',
                                            //'searching': false, // Remove default Search Control
                                            'ajax': {
                                                'url': 'ajaxfile3.php',
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
                                                    data.telephone = "<?php echo  $telephone; ?>";


                                                }
                                            },
                                            'success': function(data) {
                                                console.log(data)
                                            },
                                            'error': function(data) {
                                                console.log(data)
                                            },
                                            "createdRow": function(row, data, dataIndex) {
                                                console.log(data.date_arr, new Date(data.date_arr
                                                    .split("/")[1] +
                                                    "/" + data.date_arr.split("/")[0] +
                                                    "/" + data.date_arr
                                                    .split("/")[2]))

                                                if (data.date_arr && (new Date(data.date_arr.split(
                                                            "/")[1] + "/" +
                                                        data.date_arr.split("/")[0] + "/" + data
                                                        .date_arr.split(
                                                            "/")[2]) > new Date())) {

                                                    $(row).addClass('testclassvalid');

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
                                                    data: 'matricule'
                                                },
                                                // {
                                                //     data: 'poid'
                                                // },
                                                // {
                                                //     data: 'volume'
                                                // },
                                                {
                                                    "mData": "ville_dep",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.ville_dep + ", " +
                                                            row.date_dep;
                                                    }
                                                }, {
                                                    "mData": "pays_dep",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.ville_arr + ", " + row
                                                            .date_arr;
                                                    }
                                                },
                                                {
                                                    "mData": "telephone",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return `
<a href="modif-disp.php?id_disp=${row.id_disp}"><img src="./img/modif.png"  style="height:20px;width:20px"></a>
<a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-disp.php?id_disp=${row.id_disp}"><img style="height:20px;width:20px" src="./img/supp.png" ></a>

`;
                                                    }
                                                },
                                                // { data: 'date_dep' },
                                                // { data: 'ville_arr' },
                                                // { data: 'pays_arr' },
                                                // { data: 'date_arr' },
                                                // { data: 'id_dep' }
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

                                        $('#villed').change(function() {
                                            dataTable2.draw();
                                        });
                                        $('#villef').change(function() {
                                            dataTable2.draw();
                                        });
                                        $('#dated').change(function() {

                                            dataTable2.draw();
                                        });
                                        $('#datef').change(function() {
                                            dataTable2.draw();
                                        });
                                        $('#pays3').change(function() {
                                            dataTable2.draw();
                                        });

                                        $('#pays2').change(function() {
                                            dataTable2.draw();
                                        });
                                    });
                                    </script>




<?php } ?>

<?php include"footer.php" ?>