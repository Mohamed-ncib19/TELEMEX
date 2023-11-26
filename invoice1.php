<!DOCTYPE html>
<html lang="zxx">
<?php
include 'config.php';
session_start();

?>
<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/invo-html/HTML/main/invoice-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Feb 2022 11:45:52 GMT -->
<head>
    <title>Telefret</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/c/font-awesome.min.24.del">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <script>
function functionConfirmCreate(btname, wrapper) {
    var contentWidth = $("#"+wrapper).width();
        var contentHeight = $("#"+wrapper).height();
        var topLeftMargin = 20;
        var pdfWidth = contentWidth + (topLeftMargin * 2);
        var pdfHeight = (pdfWidth * 1.5) + (topLeftMargin * 2);
        var canvasImageWidth = contentWidth;
        var canvasImageHeight = contentHeight;
        var totalPDFPages = Math.ceil(contentHeight / pdfHeight) - 1;

        html2canvas($("#"+wrapper)[0], {allowTaint: true}).then(function (canvas) {
            canvas.getContext('2d');
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF('p', 'pt', [pdfWidth, pdfHeight]);
            pdf.addImage(imgData, 'JPG', topLeftMargin, topLeftMargin, canvasImageWidth, canvasImageHeight);
            for (var i = 1; i <= totalPDFPages; i++) {
                pdf.addPage(pdfWidth, pdfHeight);
                pdf.addImage(imgData, 'JPG', topLeftMargin, -(pdfHeight * i) + (topLeftMargin * 4), canvasImageWidth, canvasImageHeight);
            }
            pdf.save("sample-invoice.pdf");
        });

}


    </script>

<?php if(isset($_SESSION['login_user'])) { ?>

<?php
                        $id_charg=$_GET['id_charg'];

                        $selectSQL="SELECT * FROM chargement, transporteur WHERE id_charg='$id_charg' AND chargement.telephone=transporteur.telephone";

                        $resultat = mysqli_query($db,$selectSQL);
                        $res=mysqli_fetch_array($resultat);
                        $s=mysqli_num_rows($resultat);
						//  echo ( json_encode($res));
                        //  echo ( $selectSQL);

                      

						if($s>0){
							?>
<!-- Invoice 7 start -->
<div class="invoice-7 invoice-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner">
                <?php   							$empQuery = "SELECT * FROM status_gps st ,abonnements ab , transporteur tr , postuler ps WHERE 1 AND st.Id_abonnement= ab.id_abonnement and ab.telephone=tr.telephone and ps.telephone=tr.telephone and ps.vehicules LIKE CONCAT('%',';', ab.id_abonnement, '%') and ps.id_chargement= ".$id_charg." and st.id_chargement= ".$id_charg."  ";

$empRecords = mysqli_query($db, $empQuery);
                        $s1=mysqli_num_rows($empRecords);

// echo $empQuery ;

$i=0;
if ($s1==0) {
    # code...

?>
    <div class="invoice-info" id="invoice_wrapper<?php echo $i;  ?>">
                        <div class="invoice-headar">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-name">
                                        <div class="logo">
                                        <label for=""> Aucune offre disponible et accepté pour le moment!</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
<?php  
}else 
while ($row = mysqli_fetch_assoc($empRecords)) {
    if(isset($_SESSION['telephone'])&&( ($_SESSION['telephone']==$res['telephone'])||($_SESSION['telephone']==$row['telephone'])||$_SESSION['type']=='admin' )  ) { 

?>
                    <div class="invoice-info" id="invoice_wrapper<?php echo $i;  ?>">
                        <div class="invoice-headar">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-name">
                                        <div class="logo">
                                        <img style="height: 100px!important; max-width: 300px"class="logo" src="assets/img/logo.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice">
                                    <h1 class="text-end">Invoice: #943249</h1>
                                        <h1 class="text-end" style="    font-size: 13px;!important">Telefret Invoice</h1>
                                        <h1 class="text-end" style="    font-size: 13px;!important">Created: <?php echo date("d/m/Y"); ?></h1>
                                        <h1 class="text-end" style="    font-size: 13px;!important">commercial@telefret.com</h1>
                                        <h1 class="text-end" style="    font-size: 13px;!important">+237 655 767 535</h1>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-number">
                                        <h4 class="inv-title-1">Expéditeur/Sender</h4>
                                        <p class="invo-addr-1">
                                        <?php echo $res['nom'].' '.$res['prenom'];  ?><br />
									<?php  echo $res['r_s']; ?><br />
									<?php  echo $res['telephone']; ?><br />
									<?php echo $res['email']; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-number text-end">
                                        <h4 class="inv-title-1">Transporteur/Carrier</h4>
                                        <p class="invo-addr-1">
                                        <?php echo $row['nom'].' '.$row['prenom'];  ?><br />
									<?php  echo $row['r_s']; ?><br />
									<?php  echo $row['telephone']; ?><br />
									<?php echo $row['email']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row mt-2">
                                <div class="col-sm-6">
                                    <h4 class="inv-title-1">Date</h4>
                                    <p class="inv-from-1">Due Date:24/08/2021</p>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <h4 class="inv-title-1">Payment Method</h4>
                                    <p class="inv-from-1">Credit Card</p>
                                </div>
                            </div> -->
                        </div>
                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table table-striped invoice-table">
                                    <thead class="bg-active">
                                    <tr>
                                        <th>Détail du chargement</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td>
						<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
								<b>Nature/type marchandise: </b>	<?php echo $res['marchandise']; ?>
							</div>
							<div style=" width: 50%;">
								<b>Emballage: </b>	<?php echo $res['emballage']; ?>
							</div>
						</div>
					</td>
                                    </tr>
                                    <tr >
					<td>
						<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
								<b>Nombre de Colis :</b><?php echo $res['nb_colis']; ?>	
							</div>
							<div style=" width: 50%;">
								<b>Type de véhicule :</b>	 <?php echo $res['type_vehicule'].'  '.$res['poid']; ?>
							</div>
						</div>
					</td>
				</tr>
				<tr >
					<td>
						<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
								<b>Nombre de véhicules:</b>	<?php echo $res['nb_vehicules']; ?>
							</div>
							<div style=" width: 50%;">
								<b>Tonnage: </b><?php echo $res['poid']; ?>	
							</div>
						</div>
					</td>
				</tr>
				<tr >
					<td>
						<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
								<b>Date de chargement/loading date:</b>	<?php echo $res['date_charg']; ?>
							</div>
							<div style=" width: 50%;">
								<b>Date de livraison/unloading date :</b>	<?php echo $res['date_liv']; ?>
							</div>
						</div>
					</td>
				</tr>
				<tr >
					<td>
						<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
								<b>Tolérance de chargement/ loading tolerance :</b>	 <?php if($res['tol_charg']==1){ echo $res['jr_retard2']." jour(s)"; } else{echo "Non";} ?>
							</div>
							<div style=" width: 50%;">
								<b>Tolérance de livraison/unloading tolerance :</b>	 <?php if($res['tol_liv']==1){ echo  $res['jr_retard']." jour(s)"; } else{echo "Non";} ?>
							</div>
						</div>
					</td>
				</tr>
				<tr >
					<td>
						<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
								<b>Adresse de chargement/loading adresse:</b>	   <?php echo $res['adresse_charg'].' , '.$res['ville_charg'].' , '.$res['pays_charg']; ?>
							</div>
							<div style=" width: 50%;">
								<b>Adresse de livraison/unloading adresse:</b>	 <?php echo $res['adresse_liv'].' , '.$res['ville_liv'].' , '.$res['pays_liv']; ?>
							</div>
						</div>
					</td>
				</tr>

				<tr >
					<td>
						<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
								<b>Montant convenu/ Agreed amount:</b> <?php if(($res['prix_prop']=="") OR ($res['prix_prop']==" ")){ echo " N'est pas indiqué"; } else{echo $res['prix_prop'];} ?>	
							</div>
							<div style=" width: 50%;">
								<b>Valeur de la marchandise/Goods value:</b> <?php if(($res['valeurm']=="") OR ($res['valeurm']==" ")){ echo " N'est pas indiqué"; } else{echo $res['valeurm'];} ?>	
							</div>
						</div>
					</td>
				</tr>
				
				
				<tr  class="bg-active">
					<td>
					<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
							Poposition du transporteur							</div>
							<div style=" width: 50%; text-align: right;">
							Methode de payement:	<?php echo $res['methodepayement']==""?"#":$res['methodepayement']; ?>						</div>
						</div>	
				                                 </td>

				
				</tr>
				<tr >
					<td>
						<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
								<b>Montant:</b>	   <?php echo $row['montant']. ' '.$row['devise']; ?>
							</div>
							<div style=" width: 50%;">
								<b>Avance:</b>	 <?php echo $row['avance']. ' '.$row['devise']; ?>
							</div>
						</div>
					</td>
				</tr>
				
				<tr  class="bg-active">
					<td>Information sur le chauffeur </td>

				</tr>
				<tr >
					<td>
						<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
								<b>Nom et prénom:</b>	   <?php echo $row['nom_chauffeur']==""?"/":$row['nom_chauffeur']; ?>
							</div>
							<div style=" width: 50%;">
								<b>Téléphone:</b>	  <?php echo $row['telephone_chauffeur']==""?"/":$row['telephone_chauffeur']; ?>
							</div>
						</div>
					</td>
				</tr>
                <tr  class="bg-active">
					<td>Information sur le véhicule </td>

				</tr>
				<tr >
					<td>
						<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
								<b>Matricule:</b>	   <?php echo $row['matricule']==""?"/":$row['matricule']; ?>
							</div>
							<div style=" width: 50%;">
								<b>Marque:</b>	  <?php echo $row['marque']==""?"/":$row['marque']; ?>
							</div>
						</div>
					</td>
				</tr>
                <tr >
					<td>
						<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
								<b>Type vehicule:</b>	   <?php echo $row['type_vehicule']==""?"/":$row['type_vehicule']; ?>
							</div>
							<div style=" width: 50%;">
								<b>Poid max:</b>	  <?php echo $row['poid_max']==""?"/":$row['poid_max']; ?>
							</div>
						</div>
					</td>
				</tr>
            
                <tr>
                                        <td class="text-end f-w-600"> Total: (<?php echo $row['devise']==""?"FCFA":$row['devise']; ?>) <?php echo $row['montant']; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-bottom">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <h3 class="inv-title-1">Important Note</h3>
                                        <ul class="important-notes-list-1">
                                            <li>Once order done, money can't refund</li>
                                            <li>Delivery might delay due to some external dependency</li>
                                            <li>This is computer generated invoice and physical signature does not require.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-offsite">
                                    <div class="text-end">
                                        <h3 class="inv-title-1">Payment Info</h3>
                                        <p class="text-13">This payment made by BRAC BANK master card without any problem</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-contact">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="social-list d-print-none">
                                        <span>Follow Us</span>
                                        <a href="#" class="facebook-bg">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" class="twitter-bg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="google-bg">
                                            <i class="fa fa-google"></i>
                                        </a>
                                        <a href="#" class="linkedin-bg">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <a id="invoice_download_btn<?php echo $i;  ?>"
                        onclick="functionConfirmCreate('invoice_download_btn<?php echo $i;  ?>','invoice_wrapper<?php echo $i;  ?>');"
                        
                        class="btn btn-lg btn-download">
                            <i class="fa fa-download"></i> Download Invoice
                        </a>
                        <a 
                        href="<?php echo 'https://gestionsuivi.telefret.com/'.$row['Id_dispo'];?>"
                        
                        class="btn btn-lg btn-primary">
                            <i class="fa fa-link"></i> Suivre le véhicule
                        </a>
                    </div>
                    <?php

$i=$i+1;
}
                        }
	?>
                  

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 7 end -->
<?php



		}
		else{
			echo " Il faut choisir un Chargement !";
		}
	?>
                        <?php }else
                        echo " Veillez vous connecter a la plateforme !"; ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jspdf.min.js"></script>
<script src="assets/js/html2canvas.js"></script>
<script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/invo-html/HTML/main/invoice-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Feb 2022 11:45:52 GMT -->
</html>
