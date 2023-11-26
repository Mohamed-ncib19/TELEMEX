<?php include"header.php" ?>

    <section class="page-title-section trouvtrans">
        <div class="container hidden-xs slide-bord">
            <div class="demo-slides">
                <div class="animated lightSpeedIn slide-title">Votre historique</div>
                <p class="lead animated lightSpeedIn">Consultez Votre historique</p>
            </div>
        </div>
    </section>

<?php
    $telephone=$_SESSION['login_user'];
    $today =   strtotime(date('d-m-Y')) ;

    if ($_SESSION['type']=="transporteur"){
?>

    <section class="contact-info-section">
        <div class="container ">

            <div class="row content-row">
                
                <div class="col-md-12">
                    <div class="contact-map">
                        <h3 class="txt-bordure sections-title">Historique des Disponibilités</h3>
                        <?php            
                            $selectSQL="SELECT * FROM disponibilite, abonnements WHERE disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone='$telephone'";

                            $resultat = mysqli_query($db,$selectSQL);
                            $res=mysqli_fetch_array($resultat);
                            $s=mysqli_num_rows($resultat);
                            
                            if($s>0){
                                do{
                                    $date_ar =$res["date_arr"];
									$date_americain = str_replace('/', '-', $date_ar );
									
                                    $date_arr=strtotime($date_americain) ;
									
                        ?>        
                                    
                                    <div class="cadre <?php if($date_arr>$today){ echo 'valide' ;} ?>">

                                        <div class="res-flx-s img-avatar-sm">
                                            <img src="./img/uploaded/<?php echo $res['img_vehicule']; ?>">
                                        </div>
                                        <div class="res-flx-s "><font style="text-transform: uppercase;"><?php echo $res['matricule']; ?></font></div>
                                        
                                        <div class="res-flx-s">Départ :  <?php echo $res['ville_dep'].", ".$res['pays_dep'].", ".$res['date_dep'] ; ?></div>
                                        
                                        <div class="res-flx-s">Arrivée : <?php echo $res['ville_arr'].", ".$res['pays_arr'].", ".$res['date_arr'] ; ?></div>
                                        
										<a class="supp" href="modif-disp.php?id_disp=<?php echo $res['id_disp']; ?>"><img src="./img/modif.png" ></a>
                                        <a class="supp" onclick="return confirm('Êtes-vous sûr de votre choix ?')" href="supp-disp.php?id_disp=<?php echo $res['id_disp']; ?>"><img src="./img/supp.png" ></a>
                                    </div>
                        
                        <?php
                            
                                }
                                while($res=mysqli_fetch_array($resultat));
                            }
                            else{
                                echo "<p> Vous n'avez rien dans votre historique </p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    }
    if ( ($_SESSION['type']=="client") OR ($_SESSION['type']=="transporteur") ){
?>
                
     <section class="contact-info-section">
        <div class="container ">

            <div class="row content-row">
                
                <div class="col-md-12">
                    <div class="contact-map">
                        <h3 class="txt-bordure sections-title">Historique des Chargements</h3>
                        <?php
                            $selectSQL="SELECT * FROM chargement WHERE telephone='$telephone'";

                            $resultat = mysqli_query($db,$selectSQL);
                            $res=mysqli_fetch_array($resultat);
                            $s=mysqli_num_rows($resultat);
                            
                            if($s>0){
                                do{
									$date_liv =$res["date_liv"];
									$date_liv_americain = str_replace('/', '-', $date_liv );
									
                                    $date_livraison=strtotime($date_liv_americain) ;
                        ?>        
                                    
                                    <div class="cadre <?php if($date_livraison>$today){ echo 'valide' ;} ?>">

                                        <div class="res-flx-s img-avatar-sm">
                                            <img src="./img/uploaded/<?php echo $res['img_march']; ?>">
                                        </div>
                                        
                                        <div class="res-flx-s "><?php echo $res['marchandise']; ?></div>
                                        <div class="res-flx-s "><?php echo $res['poid']; ?></div>
                                        <div class="res-flx-s "><?php echo $res['volume']; ?></div>
                                        
                                        <div class="res-flx-s">Départ :<?php echo $res['ville_charg'].", ".$res['pays_charg'].", ".$res['date_charg'] ; ?></div>
                                        
                                        <div class="res-flx-s">Arrivée:<?php echo $res['ville_liv'].", ".$res['pays_liv'].", ".$res['date_liv'] ; ?></div>
                                        
										<a class="supp" href="modif-charg.php?id_charg=<?php echo $res['id_charg']; ?>"><img src="./img/modif.png" ></a>
										
                                        <a class="supp" onclick="return confirm('Êtes-vous sûr de votre choix ?')" href="supp-charg.php?id_charg=<?php echo $res['id_charg']; ?>"><img src="./img/supp.png" ></a>
                                    </div>
                        
                        <?php
                            
                                }
                                while($res=mysqli_fetch_array($resultat));
                            }
                            else{
                                echo "<p> Vous n'avez rien dans votre historique </p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>           
                
                
<?php } ?>

<?php include"footer.php" ?>