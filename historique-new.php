<?php include"header-new.php" ?>
<?php
    $telephone=$_GET['telephone'];
    $today =   strtotime(date('d-m-Y')) ;
	
	$sql = "SELECT * FROM `transporteur` WHERE `telephone`='$telephone'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


    // if (($row['type']=="transporteur") OR ($row['type']=="client")){
?>
  <div class="row" style="margin: unset;text-align: center;">
  <div class="col-md-12" style="margin-top: 100px;display: inherit;
    text-align: center;
    justify-content: center;">
    <div class="row col-md-9">
      <span class="servicee1_364" style="color: #2B2E86!important;">Mon Historique
      <div class="e1_328" style="position: unset!important;"></div></span>
    </div>
    </div>
    <div class="col-md-12" style="margin-top: 100px;display: inherit;
    text-align: center;
    justify-content: center;">
    <div class="row col-md-9" style="text-align: center;
    display: flex;
    justify-content: center;">
    <div class="row" >
    <div class="col-md-3" >
      <span class="servicee1_364" style="color: #2B2E86!important;font-size: 16px!important;"><img src="newdesign/images/Iconmaterial-email.svg" style="width: 25px;"> STATUT
      </span></br>
      <div class="classicInput1" >
            <select type='text' name='filterstatus' class="v1_106 classicInput"
            style="width: 100%;padding-left: 10px;"
                id='filterstatus'
                required>
                <option value='0' selected>En attente</option>
                <option value='1' > En cours </option>
                <option value='2' > Livré</option>
            </select>  
        </div>
    </div>





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






    <div class="col-md-3" >
      <span class="servicee1_364" style="color: #2B2E86!important;font-size: 16px!important;">DÉPART
      </span></br>
      <div class="classicInput1" >
            <input class="v1_106 classicInput" ame="ville_dep" id="villed" type="text" placeholder="Adresse d'enlèvement" style="width: 100%;padding-left: 10px;" required>
          </div>
    </div>
    <div class="col-sm-4 col-xs-12 no-padding hidden">
        <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
        <input type="date" name="ville_dep" id="dated"
            placeholder="dated">
    </div>
    <div class='col-sm-4 col-xs-12 no-padding hidden'>
        <!-- <input type = 'text' class = 'form-control'  id = 'tag2' name = 'ville_dep' placeholder = 'Ville de départ'> -->
        <input type='time' name='time_dep'
            id='timed' placeholder='dated'>
    </div>




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




    <div class="col-md-3" >
      <span class="servicee1_364" style="color: red!important;font-size: 16px!important;">ARRIVÉE
      </span></br>
      <div class="classicInput1" >
            <input class="v1_106 classicInput" name="ville_arr" id="villef" type="text" placeholder="Adresse de livraison" style="width: 100%;padding-left: 10px;" required>
          </div>
    </div>
    <div class="col-md-3" >
      <span class="servicee1_364" style="color: red!important;font-size: 16px!important;">DATE
      </span></br>
      <div class="classicInput1" >
            <input class="v1_106 classicInput" type="date" name="datef" id="datef"  placeholder="datef"style="width: 100%;padding-left: 10px;" required>
          </div>
    </div>
    <div class='col-sm-4 col-xs-12 no-padding hidden'>
                                                                            <!-- <input type = 'text' class = 'form-control'  id = 'tag2' name = 'ville_dep' placeholder = 'Ville de départ'> -->
                                                                            <input type='time' name='time_dep'
                                                                                id='timef' placeholder='dated'>
                                                                        </div>
   
    </div>
    </div>
    </div>
    <div class="col-md-12" style="text-align: center;
    display: flex;
    justify-content: center;">
      <div class="col-md-9" style="margin-bottom: 30px;">
     

                                        <!-- Table -->
                                        <table id='empTable' class='display dataTable' >
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
                                                    <th style="width: 100px!important;">Action</th>
                                                </tr>
                                            </thead>

                                        </table>
   
</table>

    </div>
  
      
    </div>
 
  </div>



  
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

                                                // if (data.date_liv && (new Date(data.date_liv.split(
                                                //             "/")[1] + "/" +
                                                //         data.date_liv.split("/")[0] + "/" + data
                                                //         .date_liv.split(
                                                //             "/")[2]) > new Date())) {

                                                //     $(row).addClass('testclassvalid');

                                                // } else {
                                                //     $(row).addClass('testclass');
                                                // }


                                            },
                                            'columns': [
                                                {
                                                    "mData": "img_march",
                                                    "mRender": function(data, type, row) {
                                                        return `<div 
                            
                            class="res-flx-s img-avatar-sm">
                                            <img style="    height: 90px!important;" src="./img/uploaded/${data ? data : 'logo.png'}">
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
                    <a style="color: black!important;"class="${row.statutenvoi!=0?'hidden':''} "   href=${!row.statutenvoi==0?`edit-chargement-new.php?id_charg=${row.id_charg}&amp;telephone=${row.telephone}`:"#"}>Modifier<img src="newdesign/images/awesome-pencil-alt.svg"  style="height:20px;width:20px"></a></br>
                                        <a style="color: black!important;" class=" "onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp ${row.statutenvoi==1?'hidden':''}"
                                        href=${!row.statutenvoi==0?`supp-charg.php?id_charg=${row.id_charg}&amp;telephone=${row.telephone}`:"#"}>Suprimer<img style="height:20px;width:20px" src="newdesign/images/material-cancel.svg" ></a></br>
                                        <a style="color: black!important;"
                                        class="${row.statutenvoi!=1?'hidden':''} " 
 onclick="showModalRate(`+ row.id_charg + `)"
            style="cursor: pointer;"
 >Noter<img style="height:20px;width:20px" src="./img/iconstar.png" ></a>
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

<?php // ?>

  
  <?php include"footer-new.php" ?>