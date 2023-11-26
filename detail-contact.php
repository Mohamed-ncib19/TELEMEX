<?php include"header.php" ?>
                        
<?php if  (isset($_SESSION['login_user'])) {  if($_SESSION['type']=="admin"){ ?>
    
<?php

    $email=$_GET["email"];
    
        
    $selectSQL="SELECT * FROM transporteur WHERE email='$email'";

    $resultat = mysqli_query($db,$selectSQL);
    $res=mysqli_fetch_array($resultat);
                                                                                 
?>
<section class="page-title-section consultation">

</section>  

<section class="contact-info-section ">
    <div class=" ">
        <div class="row ">
            <div class="">
                <div class="css-tab" role="tabpanel" id="coord">
                    <p>Nom : <?php echo $res["nom"] ?></p>
                    <p>Prenom :<?php echo $res["prenom"] ?></p>
                    <p>Raison Social :<?php echo $res["r_s"] ?></p>
                    <p>Pays :<?php echo $res["pays"] ?></p>
                    <p>Adresse :<?php echo $res["adresse"] ?></p>
                    <p>Téléphone :<?php echo $res["telephone"] ?></p>
                    <p>Email : <?php echo $res["email"] ?></p>
                </div>
                <div class="css-tab"><a href="" onclick="PrintElem('coord')" >Imprimer</a></div>
            </div>
        </div>
    </div>
</section>

<?php } }else{ ?>

<section class="page-title-section consultation">
</section>

<section class="contact-info-section ">
    <div class=" ">
        <div class="row ">
          <div class="">
            <div class="css-tab" role="tabpanel">
              <ul class="nav nav-tabs" role="tablist">

                  <li role="pub-ann" class="active">
                      <a href="#pub-ann" aria-controls="pub-ann" role="tab" data-toggle="tab"> Vous n'êtes pas un Admin </a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</section>

<?php } ?>
<?php include"footer.php" ?>