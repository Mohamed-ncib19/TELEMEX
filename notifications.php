<?php include"header.php" ?>
<?php
  if  (isset($_SESSION['login_user'])) {   ?>
<?php
    $telephone=$_SESSION['telephone'];
    $today =   strtotime(date('d-m-Y')) ;
	
	$sql = "SELECT * FROM `transporteur` WHERE `telephone`='$telephone'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


?>


<section class="page-title-section trouvtrans">
    <div class="container hidden-xs slide-bord">
        <div class="demo-slides">
            <div class="animated lightSpeedIn slide-title">Notifications de <?php echo $row['prenom'].' '.$row['nom']; ?>
            </div>
            <p class="lead animated lightSpeedIn">Consultez l'historique des notifications de
                <?php echo $row['prenom'].' '.$row['nom']; ?></p>
        </div>
    </div>
</section>

<section class="contact-info-section">
    <div class=" ">
        <div class="row ">

<div role="tabpanel" class="tab-pane fade in" id="soumissions">
                            <div class="css-tab-content">
                                <div class="tab-pane fade in active">



                            <div class="container result-rech">


                                <!-- Custom Filter -->
                                <div class="css-tab-content formulaires">

                                    <div class="container" style="padding-left: unset !important;">
                                        <div class="col-md-6 formulaire hidden">
                                            <h3 class="txt-bordure sections-title">Depart</h3>

                                            <div class="form-group ">
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
                                                  </div>
                                                    <div class="col-sm-4 col-xs-12 no-padding">
                                                        <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                        <input type="date" name="ville_dep" id="dated"
                                                            placeholder="dated">
                                                    </div>
                                                    <?php
        if ($_SESSION['type']=="transporteur"){
    ?>               <div class="col-sm-12 col-xs-12 no-padding">

<select type="text" name="notification_input" id="notification_input"
    placeholder="Pays *" required>
    <option value="all" selected
        style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
        Tout</option>
    <option value="Reception" 
        style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
        Notification de réception</option>
    <option value="Soumission"
        style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
        Notification de soumission</option>
   
</select>

</div>
<?php
        }
    ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 formulaire hidden" style="margin: left 5px;">
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
                                                        <div id="suggestions-container" style="position: relative;">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12 no-padding">
                                                        <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                        <input type="date" name="datef" id="datef" placeholder="datef">
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
                                            <th>Départ</th>
                                            <th>Arrivée</th>
                                            <th>Auteur</th>
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
                                        'url': 'ajaxfile_notification.php',
                                        'data': function(data) {
                                            // Read values
                                            var gender = $('#pays2').val();
                                            var name = $('#pays3').val();
                                            var villed = $('#villed').val();
                                            var villef = $('#villef').val();
                                            var dated = $('#dated').val();
                                            var datef = $('#datef').val();
                                            // Append to data
                                            <?php
        if (isset($_GET['id_notification'])){
    ?>           
                                                                                 data.id_notification = <?php echo $_GET['id_notification'] ;  ?>;


<?php
        }
    ?>          
                                            data.pays2 = gender;
                                            data.pays3 = name;
                                            data.villed = villed;
                                            data.villef = villef;
                                            data.dated = dated;
                                            data.datef = datef;
                                            data.type="<?php echo $row['type'] ;  ?>";
                                            data.telephone="<?php echo $_SESSION['telephone'] ;  ?>";
                                            <?php
        if ($_SESSION['type']=="transporteur"){
    ?>           
                                                var notification_input = $('#notification_input').val();

                                            data.notification_input = notification_input;

<?php
        }
    ?>           

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
                                            "mData": "ville_charg",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return row.ville_charg + ", " + row.date_charg;
                                            }
                                        }, {
                                            "mData": "pays_charg",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return row.ville_liv + ", " + row.date_liv;
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
                                            "mData": "telephone",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return `
                                                <?php
                                                            if ($_SESSION['type']!="client"){
                                                    ?>
                                                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal${row.id_notifications}"
onclick="Changetest(`+row.id_notifications+`,`+row.id_chargement+`);">
  Consulter
</button>
                                                    <?php 
															} 
                                                    ?>
                               
<a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-notification.php?id_notification=${row.id_notifications}&amp;redirect=${'notifications.php'}"><img style="height:20px;width:20px;margin:5px" src="./img/supp.png" ></a>
                                
`;
// </?php  if ($row['type']=="client") {
//        ?>
//          <a  class="supp" href="add-statutgps.php?id_notification=${row.id_notifications}&amp;id_postuler=${row.id_postuler}&amp;id_charg=${row.id_charg}"><img style="height:20px;width:20px" src="./img/check.png" ></a>


// </?php }
//        ?>
                                            }
                                        }
                                    ],
                                    dom: 'Bfrtip',
                                    buttons: [
                                        ////'copyHtml5',
                                        'excelHtml5',
                                        ////'csvHtml5',
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

                                <?php
        if ($_SESSION['type']=="transporteur"){
    ?>           
                                           $('#notification_input').change(function() {
                                            dataTable2.draw();
                                                    });

<?php
        }
    ?> 
                            });
                            </script>



                        </div>
                    </div>
                </div>

                </div>
    </div>
</section>





<?php }else{ 
    
    echo "<script>location.href='index.php?msg=cnx';</script>";

    
}?>










 




      
<?php include"footer.php" ?>


