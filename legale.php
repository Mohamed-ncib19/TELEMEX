<!DOCTYPE html>
<html>
<?php 
    include("config.php");
    session_start();
	header("Content-Type: text/html;charset=UTF-8");

?>
<head>
  <title>TELEMEX</title>
  <meta http-equiv="Content-language" content="fr" />
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
    .whatsapp-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background-color: green;
    color: white;
    border-radius: 50%;
    text-align: center;
    font-size: 25px;
    line-height: 50px;
    z-index: 1000;
    transition: all 0.3s ease;
    display: flex;
  justify-content: center;
  align-items: center;
  }

  .whatsapp-button:hover {
    transform: scale(1.1);
  }
    .navbar-nav {
  justify-content: center;
  text-align: center;
}
    .navbar {
      height: 122px;
      background-color: #2B2E86 !important;
    }

    .navbar-brand img {
      width: 260px;
      height: 38px;
    }

    .navbar-brand {
      left: 151px !important;
    }

    .navbar-nav .nav-link {
      font-size: 17px;
      font-family: 'Poppins', sans-serif;
    }

    .navbar-nav .nav-link {
      font-size: 17px;
      font-family: 'Poppins', sans-serif;
      color: white !important;
    }

    .carousel {
      width: 100%;
      height: 800px;

    }

    .carousel-item {
      height: 800px;
    }

    .carousel-image {
      width: 100%;
      margin: 0 auto;
    }

    .carousel-indicators li {
      background-color: transparent;
      border: 1px solid #fff;
      border-radius: 50%;
      width: 12px;
      height: 12px;
      margin: 0 4px;
    }

    .carousel-indicators .active {
      background-color: #fff;
      border-color: #fff;
    }

    .e1_282input {
      padding: 20px;
      font-family: 'Poppins', sans-serif;
      font-size: 16px;
      color: #333;
    }

    .e1_282input::placeholder {
      color: #999;
      font-style: italic;
    }

    .search-container {
      position: relative;
    }

    .search-icon {
      position: absolute;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
      /* Ensure the icon doesn't interfere with input interaction */
    }

    /* Adjust the icon style based on your icon library or custom icon */
    .search-icon i {
      color: #999;
      font-size: 16px;
    }

    .image-container {
      text-align: center;
      border-top-left-radius: 41px;
      border-top-right-radius: 41px;
      padding-top: 20px;
    }

    .image-container img {
      max-width: 100%;
      height: auto;
      margin: 0 auto;
    }

    .content-container {
      padding: 20px;
      text-align: center;
      border-bottom-left-radius: 41px;
      border-bottom-right-radius: 41px;
    }

    .rounded-button {
      border-radius: 50px;
      background-color: red;
      color: white;
      padding: 10px 20px;
    }

    .custom-bg {
      background-color: #2B2E86;
    }

    
  .navbar .nav-itemCustom {
    position: absolute;
    right: 20px;
  }
  .navbar .nav-itemCustom1 {
    position: absolute;
    right: 120px;
  }

  @media (max-width: 991px) {
    .navbar .nav-itemCustom{
      position: static;
    }
    .navbar .nav-itemCustom1 {
      position: static;
    }
  }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="newdesign/styles.css">

</head>

<body>
  <header>
    <div class="row" style="margin: unset!important;    background-color: #2B2E86 !important;
    font-family: 'Poppins', sans-serif;
    color: white !important;">
      <div class="col-md-6">
      </div>
      <div class="col-md-6">
        <div class="row" style=" float: right; padding-right: 20px;">
          <div class="row">

            <span style="padding-right: 20px;">
              commercial@telemex.cm
            </span>
            <span style="padding-right: 20px;">
              <a href="https://wa.me/+237655767535"><img src="newdesign/images/WhatsApp.png" style="width: 25px;"></img></a>
            </span>
            <span style="padding-right: 20px;">
              +237 655 767 535
            </span>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="newdesign/images/logo.png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse"
        style="z-index: 1;background-color: #2B2E86!important;padding: 15px;">
        <ul class="navbar-nav ml-auto" style="width: 100%;">
        <?php if((isset($_SESSION['login_user'])) ) {               ?>
          <li class="nav-item">
            <a class="nav-link" href="mainindex.php">
              Espace client <img src="newdesign/images/ic_account_circle_24px.svg" >
            </a>
          </li>
					<?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="inscription1.php">Nous rejoindre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://suivie.telemex.cm/">Suivi</a>
          </li>
         
        

          <?php if(!(isset($_SESSION['login_user'])) ) { ?>

          <li class="nav-item nav-itemCustom1">
            <a class="nav-link" href="mainindex.php">Connexion</a>
          </li>
          <li class="nav-item nav-itemCustom">
            <a class="nav-link" href="mainindex.php">Inscription</a>
          </li>
            <?php } ?>
        </ul>
      </div>
    </nav>
  </header>

  <div  class="content" style="    width: 90%;margin:100px">

  <style type="text/css"> * {margin:0; padding:0; text-indent:0; }
 .s1 { color: #00AF50; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 18pt; }
 p { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 14pt; margin:0pt; }
 .a { color: #0462C1; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: underline; font-size: 14pt; }
 .s2 { color: #0462C1; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 14pt; }
</style><p class="s1" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">PROPRIÉTÉ INTELLECTUELLE</p><p style="padding-top: 9pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Le contenu, la mise en page, le graphisme, les bases de données, la conception et tous les éléments constituant le site web Telemex.cm sont la propriété exclusive de la société : TELEFRET SAS.</p><p class="s2" style="padding-top: 8pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: justify;"><a href="mailto:commercial@telemex.cm" style=" color: black; font-family:&quot;Times New Roman&quot;, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 14pt;" target="_blank">TELEFRET, Société par Actions Simplifiée est immatriculée au CAMEROUN, au Capital de 1.000.000 XAF ayant son siège à BONAMOUSSADI BP : 5489 Douala-Cameroun, Tel : +237 690465196, Mail : </a><a href="mailto:commercial@telemex.cm" class="a" target="_blank">commercial@telemex.cm</a> <span style=" color: #000;">inscrite  au  Registre  de  Commerce  de  Douala  sous  le  Numéro RC/DLN/2022/B/1691, Numéro Identifiant Unique (NIU) : M082217617729X.</span></p><p class="s2" style="padding-top: 8pt;padding-left: 5pt;text-indent: 0pt;line-height: 108%;text-align: justify;"><a href="http://www.telemex.cm/" style=" color: black; font-family:&quot;Times New Roman&quot;, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 14pt;" target="_blank">Toute reproduction partielle ou totale du contenu du site </a><span style=" color: #0462C1; font-family:&quot;Times New Roman&quot;, serif; font-style: normal; font-weight: normal; text-decoration: underline; font-size: 14pt;">www.telemex.cm</span> <span style=" color: #000;">par quelque procédé que ce soit, sous quelque forme que ce soit, sans l’autorisation expresse, écrite et préalable de leur propriétaire, est strictement interdite. Tout contrevenant s’expose à des poursuites judiciaires.</span></p><p class="s1" style="padding-top: 8pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">RESPECT DE LA VIE PRIVÉE</p><p class="s2" style="padding-top: 9pt;padding-left: 5pt;text-indent: 0pt;line-height: 108%;text-align: justify;"><a href="http://www.telemex.cm/" style=" color: black; font-family:&quot;Times New Roman&quot;, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 14pt;" target="_blank">Toutes les données à caractère personnelle, collectées sur le site </a><a href="http://www.telemex.cm/" class="a" target="_blank">www.telemex.cm</a> <span style=" color: #000;">sont fournies par l’utilisateur lui-même, à travers les formulaires du site. Elles sont conservées dans les bases de données du site, et ne sont utilisées à aucune fin commerciale ou prospective.</span></p><p style="padding-top: 8pt;padding-left: 5pt;text-indent: 0pt;line-height: 108%;text-align: justify;">Ces données à caractères personnel ne font l’objet d’aucun traitement autre que celui nécessaire au bon fonctionnement du site, et dont le contenu est défini dans les Conditions Générale d’Utilisation et préalablement accepté par l’utilisateur.</p><p style="padding-top: 7pt;padding-left: 5pt;text-indent: 0pt;line-height: 108%;text-align: justify;">L’utilisateur, a néanmoins accès à ces données à travers son profil sécurisé. Il a le droit de les modifier et les maintenir à jour. L’utilisateur a également le droit de supprimer ses propres données à caractères personnel. Il est invité pour cela à adresser une demande au responsable du traitement du site.</p><p style="padding-top: 7pt;padding-left: 5pt;text-indent: 0pt;line-height: 109%;text-align: justify;"><a href="mailto:commercial@telemex.cm" style=" color: black; font-family:&quot;Times New Roman&quot;, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 14pt;" target="_blank">Les demandes de suppression peuvent être formulées par mail à l’adresse suivante : </a><span style=" color: #0462C1; font-family:&quot;Times New Roman&quot;, serif; font-style: normal; font-weight: normal; text-decoration: underline; font-size: 14pt;">commercial@telemex.cm</span>.</p><p class="s1" style="padding-top: 8pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">HÉBERGEMENT DU SITE</p><p class="s2" style="padding-top: 9pt;padding-left: 5pt;text-indent: 0pt;line-height: 109%;text-align: left;"><a href="http://www.telemex.cm/" style=" color: black; font-family:&quot;Times New Roman&quot;, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 14pt;" target="_blank">Le site </a><span style=" color: #0462C1; font-family:&quot;Times New Roman&quot;, serif; font-style: normal; font-weight: normal; text-decoration: underline; font-size: 14pt;">www.telemex.cm</span> <span style=" color: #000;">ainsi que les bases de données sont hébergés sur les serveurs de Camoo Hosting à Yaoundé, Cameroun.</span></p>
  </div>




  <div class="row justify-content-center" style="font-family: Poppins;
      color: white;text-align: center;margin: unset; background-color: #E92C24;">

    <div class="col-md-3" style="padding: 20px;text-align: center;">
      <span><b>Company <br>
          About <br>
          Product</b></span>
    </div>
    <div class="col-md-3" style="padding: 20px;text-align: center;">
      <span>Join us <br>
        Devenir partenaire
      </span>
    </div>
    <div class="col-md-3" style="padding: 20px;text-align: center;">
      <span>Carrière <br>
        Emploi
      </span>
    </div>
    <div class="col-md-3" style="padding: 20px;text-align: center;">
      <span>Autres informations <br>
       <a href="cgu.php" style="color: white!important;;">Conditions d'utilisation</a>  <br>
       <a href="legale.php" style="color: white!important;;">Mentions légales</a>   <br>

      </span>
    </div>
    <div class="col-md-12 row">
      <div class="col-md-3" style="padding: 20px;">

        <span style="padding-right: 20px;">
          <a href="https://www.facebook.com/profile.php?id=100091002866528&mibextid=ZbWKwL"><img src="newdesign/images/2021_Facebook_icon.svg.png"
              style="width: 35px;"></img></a>
        </span><span style="padding-right: 20px;">
          <a href="https://wa.me/+237655767535"><img src="newdesign/images/WhatsApp.png" style="width: 35px;"></img></a>
        </span>
      </div>
    </div>
    <div class="col-md-12" style="text-align: center;">
      <span class="">Copyright © 2023 TELEMEX</span>
    </div>
  </div>


  





  <a href="https://wa.me/+237655767535" target="_blank" class="whatsapp-button center">
  <img src="newdesign/images/WhatsApp.png" style="width: 35px;">
</a>
</body>


<script>
  // Get the necessary elements
  const searchInput = document.querySelector('.search-input');
  const searchButton = document.getElementById('searchButton');
  
  // Add a click event listener to the search button
  searchButton.addEventListener('click', function() {
    // Get the value of the input
    const inputValue = searchInput.value;
    
    // Redirect the user to the desired link
    window.location.href = 'https://telemex.suivi.telefret.com/' + inputValue;
  });
</script>
</html>