<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>A simple, clean, and responsive HTML invoice template</title>
	
		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>
	<?php
                        $id_charg=$_GET['id_charg'];

                        $selectSQL="SELECT * FROM chargement, transporteur WHERE id_charg='$id_charg' AND chargement.telephone=transporteur.telephone";

                        $resultat = mysqli_query($db,$selectSQL);
                        $res=mysqli_fetch_array($resultat);
                        $s=mysqli_num_rows($resultat);
						// echo ( json_encode($res));
                       
						if($s>0){
							?>
							
	<body>
	<?php   							$empQuery = "SELECT * FROM status_gps st ,abonnements ab , transporteur tr , postuler ps WHERE 1 AND st.Id_abonnement= ab.id_abonnement and ab.telephone=tr.telephone and ps.telephone=tr.telephone and ps.vehicules LIKE CONCAT('%',';', ab.id_abonnement, '%') and ps.id_chargement= ".$id_charg." and st.id_chargement= ".$id_charg."  GROUP by tr.telephone";

$empRecords = mysqli_query($db, $empQuery);

// echo $empQuery ;
while ($row = mysqli_fetch_assoc($empRecords)) {

?>
		<div class="invoice-box" id="testprint">
			<table cellpadding="0" cellspacing="0">
				<tr class="heading">
					<td style="width: 100%; text-align: center;">CONFIRMATION DE CHARGEMENT/ LOADING ORDER 

					</td>
					<td></td>

				</tr>
				<tr class="top">
					<td colspan="2">
						<table>
							
				
							<tr>
								<td class="title">
									<img src="https://telefret.com/logo.png" style="width: 100px; max-width: 300px" />
								</td>

								<td>
								Telefret Invoice #: 123<br />
									Created: <?php echo date("d/m/Y"); ?><br />
									commercial@telefret.com <br>
									+237 655 767 535
									<!-- Due: February 1, 2015 -->
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									<b>Expéditeur/Sender</b><br />
									<?php echo $res['nom'].' '.$res['prenom'];  ?><br />
									<?php  echo $res['r_s']; ?><br />
									<?php  echo $res['telephone']; ?><br />
									<?php echo $res['email']; ?>
								</td>

								<td>
								<b>Transporteur/Carrier</b><br />
								<?php echo $row['nom'].' '.$row['prenom'];  ?><br />
									<?php  echo $row['r_s']; ?><br />
									<?php  echo $row['telephone']; ?><br />
									<?php echo $row['email']; ?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr class="heading row">
					<td class="col-md-6"> Détail du chargement</td>

					<td class="col-md-6"></td>
				</tr>
				<tr class="details row">
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
				<tr class="details row">
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
				<tr class="details row">
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
				<tr class="details row">
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
				<tr class="details row">
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
				<tr class="details row">
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

				<tr class="details row">
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
				
				
				<tr class="heading">
					<td>
					<div style="display: flex; flex-wrap: wrap;">
							<div style=" width: 50%;">
							Poposition du transporteur							</div>
							<div style=" width: 50%; text-align: right;">
							Methode de payement:							</div>
						</div>	
				                                    <b style="">                      </b></td>

					<td> <?php echo $res['methodepayement']==""?"#":$res['methodepayement']; ?></td>
				</tr>
				<tr class="details row">
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
				
				<tr class="heading">
					<td>Information sur le chauffeur </td>

					<td></td>
				</tr>
				<tr class="details row">
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

				<!-- <tr class="item">
					<td>Hosting (3 months)</td>

					<td>$75.00</td>
				</tr>

				<tr class="item last">
					<td>Domain name (1 year)</td>

					<td>$10.00</td>
				</tr> -->

				<tr class="total">
					<td></td>

					<td>Total: (<?php echo $row['devise']==""?"FCFA":$row['devise']; ?>) <?php echo $row['montant']; ?></td>
				</tr>
			</table>
		</div>
		<?php
}
	?>
	</body>


	<?php



		}
		else{
			echo " Il faut choisir un Chargement !";
		}
	?>
</html>
