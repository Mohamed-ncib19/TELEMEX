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
 .s1 { color: black; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 14pt; }
 .s2 { color: #484848; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
 .s3 { color: #484848; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
 .s4 { color: black; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
 .s5 { color: #00F; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: underline; font-size: 12pt; }
 .p, p { color: #272727; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; margin:0pt; }
 .s7 { color: #F00; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
 .s8 { color: black; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 16pt; }
 .s9 { color: #272727; font-family:"Calibri Light", sans-serif; font-style: italic; font-weight: normal; text-decoration: none; font-size: 12pt; }
 .s10 { color: #272727; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 16pt; }
 .s11 { color: #272727; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; }
 .s12 { color: #F00; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
 .s13 { color: #272727; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 14pt; }
 .s14 { color: #272727; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
 .a { color: #272727; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
 h1 { color: black; font-family:Calibri, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 16pt; }
 .s16 { color: black; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
 li {display: block; }
 #l1 {padding-left: 0pt; }
 #l1> li>*:first-child:before {content: "- "; color: #484848; font-family:"Calibri Light", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }
 li {display: block; }
 #l2 {padding-left: 0pt; }
 #l2> li>*:first-child:before {content: " "; color: #272727; font-family:Symbol, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }
 li {display: block; }
 #l3 {padding-left: 0pt; }
 #l3> li>*:first-child:before {content: " "; color: #272727; font-family:Symbol, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }
 li {display: block; }
 #l4 {padding-left: 0pt; }
 #l4> li>*:first-child:before {content: " "; color: #272727; font-family:Symbol, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }
 #l5 {padding-left: 0pt; }
 #l5> li>*:first-child:before {content: " "; color: #272727; font-family:Symbol, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }
 #l6 {padding-left: 0pt; }
 #l6> li>*:first-child:before {content: " "; color: #272727; font-family:Symbol, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }
 li {display: block; }
 #l7 {padding-left: 0pt; }
 #l7> li>*:first-child:before {content: " "; color: #272727; font-family:Symbol, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }
 table, tbody {vertical-align: top; overflow: visible; }
</style><p class="s1" style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">ARTICLE 1 : PREAMBULE</p><p class="s2" style="padding-top: 10pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;"><a href="http://www.telemex.cm/" class="s3" target="_blank">Les présentes Conditions Générales d’Utilisation et d’information légale (dorénavant, CGU) s’appliquent au site Web de TELEMEX dont le domaine est www.telemex.cm, et à l’application mobile, ainsi qu’à tous leurs sites liés à </a>www.telemex.cm par TELEFRET, ainsi qu’à tous leurs filiales et associés, ce qui inclut les sites web de TELEFRET dans le monde (dorénavant et conjointement, le « site web »). Le site web est propriété de TELEFRET. En utilisant le site web, vous manifestez votre accord avec les présentes CGU.</p><p class="s2" style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Si vous n’êtes pas d’accord, nous vous prions de vous abstenir d’utiliser le site web. À travers des présentes CGU et de Souscription, TELEFRET met à la disposition des utilisateurs (dorénavant Utilisateur ou Utilisateurs) le site Web et l’application mobile Telemex (dorénavant dénommés conjointement, la plateforme). Afin de respecter la réglementation, les données d’identification du titulaire de la plateforme suivantes sont fournies :</p><ul id="l1"><li data-list-text="-"><p class="s2" style="padding-left: 30pt;text-indent: -6pt;text-align: left;">Dénomination sociale : Telefret SAS</p></li><li data-list-text="-"><p class="s2" style="padding-top: 2pt;padding-left: 30pt;text-indent: -6pt;text-align: left;">Siège social : Douala-Cameroun</p></li><li data-list-text="-"><p class="s4" style="padding-top: 2pt;padding-left: 30pt;text-indent: -6pt;text-align: left;">Registre de Commerce de Douala sous le Numéro : RC/DLN/2022/B/1691</p></li><li data-list-text="-"><p class="s4" style="padding-top: 2pt;padding-left: 31pt;text-indent: -7pt;text-align: left;">Numéro Identifiant Unique (NIU) : M082217617729X</p></li><li data-list-text="-"><p style="padding-top: 2pt;padding-left: 30pt;text-indent: -6pt;text-align: left;"><a href="mailto:commercial@telemex.cm" class="s3" target="_blank">Adresse mail : </a><a href="mailto:commercial@telemex.cm" class="s5" target="_blank">commercial@telemex.cm</a></p></li></ul><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s1" style="padding-top: 2pt;padding-left: 23pt;text-indent: 0pt;text-align: justify;">ARTICLE 2 : OBJET</p><p style="padding-top: 10pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Telemex est une société de technologie, qui offre à travers sa plateforme un service de livraison à la demande permettant aux clients d’indiquer via la plateforme les produits qu’ils souhaitent se faire livrer et grâce à la géolocalisation, de suivre en temps réel le déplacement des coursiers (dorénavant dénommés <span style=" color: #F00;">Telemexers</span>) qui leur sont affectés.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Les <span style=" color: #F00;">Telemexers </span>sont donc un réseau de coursiers / distributeurs qui sont soit des agents recrutés par Telemex en interne, soit des professionnels indépendants qui collaborent avec Telemex de façon continue ou occasionnelle. Dans tous les cas, les <span style=" color: #F00;">Telemexers </span>s’engagent à effectuer les courses qui leur sont envoyées sur la plateforme selon les règles définies par Telemex et selon les engagements consentis dans le contrat qui les lient à TELEFRET.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Dans le cadre des présentes CGU, nous nous référons aux Clients et <span style=" color: #F00;">Telemexers </span>en tant qu’Utilisateurs.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s1" style="padding-top: 10pt;padding-left: 23pt;text-indent: 0pt;text-align: justify;">ARTICLE 3 : TERMES D’UTILISATION</p><p style="padding-top: 10pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">L’accès à la Plateforme et la création volontaire d’un profil par l’Utilisateur, implique la connaissance et l’acceptation claire et expresse des CGU suivantes et la Politique de Confidentialité par tous les Utilisateurs.</p><p class="s1" style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">ARTICLES 4 : ACCES ET ENREGISTREMENT DES CLIENTS</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">Pour être Client de la Plateforme, il est indispensable de respecter les conditions suivantes :</p><ul id="l2"><li data-list-text=""><p style="padding-top: 2pt;padding-left: 23pt;text-indent: -18pt;text-align: justify;">Être âgé de 18 ans ou plus.</p></li><li data-list-text=""><p style="padding-top: 2pt;padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: justify;">Remplir de manière véridique les champs obligatoires du formulaire d’enregistrement, dans lequel sont demandées des données à caractère personnel comme le nom, le numéro de téléphone, la ville et l’adresse mail sur la plateforme.</p></li><li data-list-text=""><p style="padding-left: 23pt;text-indent: -18pt;line-height: 15pt;text-align: justify;">Accepter les présentes CGU.</p></li><li data-list-text=""><p style="padding-top: 2pt;padding-left: 23pt;text-indent: -18pt;text-align: justify;">Accepter la Politique de Confidentialité et de Protection des Données.</p><p style="padding-top: 2pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">L’Utilisateur garantit que toutes les données sur son identité et légitimité fournies à Telemex dans ses formulaires d’enregistrement de la Plateforme sont véridiques, exactes et complètes. De plus, il s’engage à tenir à jour ses données.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Si l’Utilisateur fournit des données fausses, inexactes ou incomplètes ou si Telemex considère qu’il existe des raisons fondées pour douter de leur véracité, exactitude et intégralité, Telemex pourra refuser l’accès et l’utilisation présente ou future de la Plateforme ou de n’importe lequel de ses contenus et/ou services.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 115%;text-align: justify;">En s’inscrivant sur la Plateforme, l’Utilisateur sélectionnera un nom d’utilisateur (username) et un mot de passe d’accès (password). Aussi bien le username que le password sont strictement confidentiels, personnels et incessibles.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">L’Utilisateur s’engage à ne pas révéler les données relatives à son compte ni à les rendre accessibles à des tiers. L’Utilisateur sera le seul responsable en cas d’utilisation de ces données par des tiers, y compris les manifestations exposées sur la Plateforme, ou toute autre action réalisée moyennant l’utilisation du username et/ou du password.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;"><a href="mailto:commercial@telemex.cm" class="a" target="_blank">Telemex ne peut pas garantir l’identité des Utilisateurs enregistrés, par conséquent elle ne sera pas responsable de l’utilisation de l’identité d’un Utilisateur enregistré par des tiers non enregistrés. Les Utilisateurs s’engagent à informer immédiatement Telemex de la soustraction, diffusion ou perte de leur username ou password, en le communiquant à travers un e-mail à </a><a href="mailto:commercial@telemex.cm" class="s7" target="_blank">commercial@telemex.cm.</a></p><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s8" style="padding-top: 7pt;padding-left: 23pt;text-indent: 0pt;line-height: 115%;text-align: justify;">ARTICLES 5 : QUELLE INFORMATION PERSONNELLE TELEMEX, COLLECTE-T-IL AU SUJET DE SES UTILISATEURS ?</p><p style="padding-top: 7pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">La plateforme Telemex (qui inclut le site internet et l’application) est utilisée par les Clients et les <span style=" color: #F00;">Telemexers</span>. Les informations que Telemex reçoit de ses Utilisateurs sont collectées comme indiqué ci-dessous.</p></li><li data-list-text=""><p style="padding-left: 23pt;text-indent: -18pt;line-height: 15pt;text-align: justify;">Informations que l’utilisateur transmet à Telemex directement</p><p style="padding-top: 2pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Telemex récolte et garde des informations que l’utilisateur introduit sur la plateforme Telemex ou que l’utilisateur lui-même donne à Telemex telles que :</p></li><li data-list-text=""><p class="s9" style="padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: justify;">Données d’inscription<span class="p">: les informations que l’utilisateur fournit à Telemex lors de la création du compte sur la plateforme Telemex : nom, prénom, numéro de téléphone, ville, adresse mail et mot de passe.</span></p></li><li data-list-text=""><p class="s9" style="padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: justify;">Données provenant du compte utilisateur <span class="p">: Les informations des commandes faites par l’utilisateur, ainsi que les évaluations que l’utilisateur fait sur ses commandes.</span></p></li><li data-list-text=""><p style="padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: justify;"><i>Informations supplémentaires que l’utilisateur veut partager </i>: Les informations que l’utilisateur fournit à Telemex à d’autres fins. Par exemple, une photographie de lui ou l’adresse de facturation, dans le cas où l’utilisateur demande de recevoir des factures. Ou encore la signature que l’Utilisateur appose sur la fiche du <span style=" color: #F00;">Telemexer </span>à la fin de sa commande.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s10" style="padding-top: 9pt;padding-left: 23pt;text-indent: 0pt;text-align: justify;">ARTICLES 6 : FONCTIONNEMENT DU SERVICE DE LIVRAISON</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Lorsqu’un Utilisateur enregistré en tant que Client souhaite se faire livrer un produit, il se connecte sur la plateforme et envoie sa requête selon les étapes à suivre et les informations à renseigner sur ladite plateforme.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Le service de livraison élémentaire consiste au ramassage d’un produit à l’adresse de collecte puis sa livraison à l’adresse de livraison, les deux adresses étant renseignées par le Client et se trouvant exclusivement dans le territoire d’action de Telemex. Ainsi, le Client peut demander au <span style=" color: #F00;">Telemexer </span>d’acheter personnellement des produits en son nom, de les récupérer et de les livrer aux adresses consignées. Par le biais de ce mandat, le <span style=" color: #F00;">Telemexer </span>s’engage à acquérir les produits demandés par le Client comme indiqué, en suivant les spécifications fournies par ce dernier.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Le Client est le seul responsable du renseignement des adresses de collecte et de livraison dans la Plateforme. Par conséquent, il ne fait porter à Telemex et au <span style=" color: #F00;">Telemexer </span>aucune responsabilité pour erreur ou négligence dans la collecte ou la livraison de la commande si cette dernière est due au renseignement d’adresses erronées. Le Client devra assumer le coût éventuel engendré par cette erreur.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Le Client devra fournir toutes les informations, dans les moindres détails, concernant le service objet de la livraison. Pour ce faire, il pourra saisir le descriptif complet de sa demande dans le champ « Détails colis » et renseigner la personne à contacter dans la ligne « téléphone destinataire ». Le Client aura la possibilité de contacter depuis la plateforme le <span style=" color: #F00;">Telemexer </span>qui est en charge d’exécuter sa commande.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Le Client exempte Telemex et le <span style=" color: #F00;">Telemexer </span>de toute négligence ou erreur dans les indications données pour l’exécution de sa commande. En conséquence, le Client devra assumer l’erreur résultant des indications incorrectes et prendre en charge les dépenses éventuelles engendrées.</p><p style="padding-top: 2pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Dans le cas où la plateforme n’inclut pas le prix du service, le Client devra indiquer le prix exact ou un prix approximatif.</p><p style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">Deux cas sont possibles :</p></li><li data-list-text=""><p style="padding-top: 2pt;padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: justify;">Soit le <span style=" color: #F00;">Telemexer </span>a le montant indiqué : dans ce cas, le service peut être acquis en personne par le <span style=" color: #F00;">Telemexer </span>selon ce que le Client a estimé et jamais pour un montant supérieur à 30% du prix indiqué. Dans le cas où le prix est plus élevé, le <span style=" color: #F00;">Telemexer </span>communiquera avec le Client pour l’informer de cette situation. Si le <span style=" color: #F00;">Telemexer </span>a assez de fonds, il procédera à l’achat. Sinon, soit le client enverra par mobile money au <span style=" color: #F00;">Telemexer </span>le montant nécessaire pour procéder à l’achat, soit il changera sa commande pour un montant inférieur correspondant au montant que le <span style=" color: #F00;">Telemexer </span>a à sa disposition, soit le <span style=" color: #F00;">Telemexer </span>et le Client décideront d’un commun accord d’annuler la commande.</p></li><li data-list-text=""><p style="padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: justify;">Soit le <span style=" color: #F00;">Telemexer </span>n’a pas le montant indiqué : dans ce cas, le <span style=" color: #F00;">Telemexer </span>communiquera avec le Client pour l’informer de cette situation. Soit le client enverra par mobile money au <span style=" color: #F00;">Telemexer </span>le montant nécessaire pour procéder à l’achat, soit il changera sa commande pour un montant inférieur correspondant au montant que le <span style=" color: #F00;">Telemexer </span>a à sa disposition, soit le <span style=" color: #F00;">Telemexer </span>et le Client décideront d’un commun accord d’annuler la commande</p></li></ul><p style="text-indent: 0pt;text-align: left;"><br/></p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Si le produit et/ou service n’est pas disponible, le <span style=" color: #F00;">Telemexer </span>devra appeler le Client pour lui faire part des options disponibles. Si le Client n’est d’accord avec aucune des options exposées par le <span style=" color: #F00;">Telemexer </span>et n’est donc pas intéressé par des options alternatives. Si le Client ne répond pas aux appels, le <span style=" color: #F00;">Telemexer </span>attendra dix (10) minutes avant de partir.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Dans le cas où le client ne se trouve pas à la localisation consignée dans la commande, le Papser devra conserver le produit pendant 24 heures, ou pendant 10 minutes dans le cas d’un bien périssable. Le client se tient responsable à 100% du coût du service de base d’achat, de même que du prix du produit, et devra payer un nouveau service pour recevoir le bien non-livré. Le <span style=" color: #F00;">Telemexer </span>ne pourra, en aucune circonstance, être tenu pour responsable de la détérioration ou la péremption des produits achetés.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">A la fin de la course, dans le cas où un produit a été acheté, le <span style=" color: #F00;">Telemexer </span>fournira au Client le reçu physique correspondant à l’achat dudit produit. Si l’objet de la course est la simple livraison d’un produit sans achat, le <span style=" color: #F00;">Telemexer </span>le livrera au Client à l’heure et au lieu indiqués par ce dernier. Dans tous les cas, le <span style=" color: #F00;">Telemexer </span>ou le client fera une notation via la plateforme afin de valider la fin de la course et une signature manuelle pour accuser réception de son colis ou repas.</p><p class="s8" style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">ARTICLE 7 : TARIF DES SERVICES ET FACTURATION</p><p style="padding-top: 11pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">L’inscription et l’utilisation de la Plateforme pour les Clients et les <span style=" color: #F00;">Telemexers </span>sont entièrement gratuites.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Le Client ne devra payer que pour chaque service demandé à travers la Plateforme ou en dehors.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Le prix total de chaque service de livraison est fonction de la distance parcourue par le <span style=" color: #F00;">Telemexer </span>et du temps nécessaire pour effectuer le service. Telemex se réserve le droit de modifier le prix de livraison en fonction du créneau horaire auquel est réalisé le service et/ou en fonction de la distance parcourue pour exécuter l’opération. Conformément à ces conditions, le Client aura le droit de connaître le tarif de la livraison avant de passer sa commande et de réaliser le paiement, hormis dans le cas où l’Utilisateur ne renseigne pas l’adresse de ramassage.  Les frais de livraison peuvent varier, en cas de force majeure, entraînant une augmentation du tarif.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Telemex se réserve le droit de modifier ses prix à n’importe quel moment. Les changements effectués auront un effet immédiat à compter de leur publication. Le Client autorise expressément Telemex à ce qu’elle lui envoie à l’adresse mail et/ou au numéro de téléphone fournis lors de la création de son compte, la confirmation de sa commande et la facture générée pour cette commande.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">L’annulation ultérieure de la commande par le Client, dans le cas où un <span style=" color: #F00;">Telemexer </span>a déjà été attribué, donnera à Telemex le droit de facturer au Client les frais pour les services déjà initiés par le <span style=" color: #F00;">Telemexer</span>. De même, dans le cas où le Client a demandé au <span style=" color: #F00;">Telemexer </span>d’acheter un produit en son nom, si le Client annule la commande après l’achat, il prendra en charge le coût du service d’expédition fourni par le <span style=" color: #F00;">Telemexer</span>, ainsi que le coût du produit.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s8" style="padding-top: 10pt;padding-left: 23pt;text-indent: 0pt;line-height: 113%;text-align: left;">ARTICLES 8 : DROIT DE RETRACTION ET ANNULATION DES COMMANDES.</p><p class="s11" style="padding-top: 8pt;padding-left: 23pt;text-indent: 0pt;text-align: justify;">Le Client pourra annuler une commande tant que la Plateforme n’a pas assigné un <span class="s12">Telemexer</span>.</p><p class="s11" style="padding-top: 10pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Ainsi, si le Client annule une commande pour laquelle un <span class="s12">Telemexer </span>est déjà assigné, la Plateforme générera des frais équivalents à 100% du tarif de collecte.</p><p class="s11" style="padding-top: 8pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Dans le cas où le <span class="s12">Telemexer </span>a été en mesure de retourner le produit, le Client sera uniquement redevable des coûts des deux services de collecte et de livraison, ainsi que des frais de retour. Le retour, dans tous les cas, sera soumis aux politiques de retour du commerçant. Le Client déclare être conscient que dans le cas des produits périssables (c’est-à-dire de la nourriture), il est possible qu’il ne puisse procéder au retour. Ainsi, Telemex sera en droit de facturer à la fois le produit que le <span class="s12">Telemexer </span>avait déjà acquis dans le cadre de son mandat et le service d’expédition encouru (collecte, livraison et retour).</p><p style="padding-top: 8pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Dans le cas où le Client a indiqué incorrectement l’adresse de livraison des produits, il peut entrer une nouvelle adresse à tout moment à condition qu’il se trouve dans la même ville que la commande initiale. Dans ce cas, le Client accepte que ce soit considéré comme une nouvelle</p><p style="padding-top: 2pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">commande et que les montants correspondants à l’ancienne (si le déplacement du <span style=" color: #F00;">Telemexer </span>vers l’ancienne adresse a déjà eu lieu) et la nouvelle livraison seront facturés. Dans le cas où le Client indique une ville différente de celle indiquée dans sa commande initiale, la commande sera annulée et le Client devra prendre en charge les coûts générés comme établi dans cette clause.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 115%;text-align: justify;">Telemex se réserve le droit d’annuler une commande sans besoin de faire valoir une cause juste. En cas d’annulation demandée par Telemex, le Client aura le droit au remboursement de son paiement si celui-ci a été effectué à l’avance sur la plateforme.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">Méthodes de paiement</p><p style="padding-top: 2pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Le Client peut effectuer le paiement des services en espèces, par mobile money ou via sa carte de crédit. Le Client sera informé, lors de l’accès à la commande, des différentes options de paiement qu’il a en fonction du territoire depuis lequel il demande le service.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">En cas de paiement en espèces, le client doit payer le prix au moment de la livraison du produit. Le client ne peut pas refuser de payer le coût du service de livraison et / ou le prix du produit demandé. Le client peut uniquement refuser de payer le coût du service s’il a fait une réclamation et a reçu une résolution favorable de Telemex au moment de la livraison.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 115%;text-align: justify;">Dans le cas où, pour une raison quelconque, le Client n’a pas payé les frais liés au service demandé, il sera bloqué et ne pourra utiliser la plateforme jusqu’à ce qu’il régularise sa dette.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s13" style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">ARTICLE 9 : POLITIQUE D’EXCLUSION DES MARCHANDISES</p><p class="s11" style="padding-top: 10pt;padding-left: 23pt;text-indent: 0pt;text-align: justify;">Liste non limitative d’exemples de produits dont la livraison est exclue ou soumise à des conditions.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p style="text-indent: 0pt;text-align: left;"><br/></p><table style="border-collapse:collapse;margin-left:24.074pt" cellspacing="0"><tr style="height:102pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Animaux et espèces régulées</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;padding-right: 3pt;text-indent: 0pt;line-height: 114%;text-align: left;">Les parties d’animaux, ou de fluides ; graines interdites, plantes nuisibles ; plantes ou autres organismes régulés (y compris leurs dérivés) en danger d’extinction ou dont le commerce est réalisé, dans tous les cas,</p><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">selon les dispositions de la loi.</p></td></tr><tr style="height:135pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Copyright sur logiciel et média</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;padding-right: 3pt;text-indent: 0pt;line-height: 114%;text-align: left;">Copies non autorisées de livres, musique, films et autre matériel protégé ou avec licence y compris les copies sans attribution appropriée ; et copies non autorisées de logiciel, jeux vidéo et autre matériel protégé ou avec licence, y compris OEM ou d’autres produits activant des messages non</p><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;">demandés.</p></td></tr></table><table style="border-collapse:collapse;margin-left:24.074pt" cellspacing="0"><tr style="height:101pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Contrefaçons et produits non autorisés</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 17pt;padding-right: 16pt;text-indent: 0pt;line-height: 114%;text-align: center;">Répliques ou imitations de créateurs ou d’autres biens ; objets de personnes</p><p class="s14" style="padding-left: 6pt;padding-right: 6pt;text-indent: 0pt;line-height: 114%;text-align: center;">célèbres qui exigeraient normalement une authentification ; faux autographes ; devises</p><p class="s14" style="padding-left: 17pt;padding-right: 16pt;text-indent: 0pt;line-height: 15pt;text-align: center;">; timbres ; tickets ou d’autres biens non</p><p class="s14" style="padding-top: 2pt;padding-left: 16pt;padding-right: 16pt;text-indent: 0pt;text-align: center;">autorisés.</p></td></tr><tr style="height:85pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Dispositifs ou outils pour débloquer des mesures de sécurité</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Modems, puces ou autres dispositifs pour annuler des mesures techniques de protection, ainsi que sur des dispositifs numériques, même pour débloquer des</p><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;">iPhones.</p></td></tr><tr style="height:203pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Drogues</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;padding-right: 3pt;text-indent: 0pt;line-height: 114%;text-align: left;">Substances contrôlées, narcotiques, drogues illégales, et drogues accessoires, y compris les psychoactives et les drogues végétales comme les champignons hallucinogènes, ainsi que le matériel promouvant leur utilisation ; ou substances légales comme les plantes et herbes, d’une manière suggérant leur ingestion, inhalation, extraction, ou autre emploi pouvant provoquer la même utilisation qu’un composant, drogue ou substance illégale ou produisant des</p><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">bénéfices non prouvés pour la santé.</p></td></tr><tr style="height:34pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Parties humaines</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Organes ou autres parties du corps ; fluides</p><p class="s14" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">corporels ; cellules souches ; embryons.</p></td></tr><tr style="height:220pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Biens volés ou illégaux</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Matériel, produits ou information promouvant des biens illégaux ou facilitant des actes illégaux ; biens sur lesquels n’est pas possédée la propriété ou ne possédant pas le droit de vente ; biens produits avec violation des droits de tiers ; biens avec violation de restrictions sur l’importation, exportation ou étiquetage ; véhicules à moteur soumis à des restrictions de transfert ; vous (Utilisateur de Telemex) êtes le seul et entier responsable pour vérifier que tous les objets sont authentiques et</p><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">légaux.</p></td></tr><tr style="height:34pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Biens outrageants</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 17pt;padding-right: 16pt;text-indent: 0pt;text-align: center;">Biens de littérature, produits, ou autre</p><p class="s14" style="padding-top: 2pt;padding-left: 17pt;padding-right: 16pt;text-indent: 0pt;text-align: center;">matériel qui :</p></td></tr></table><table style="border-collapse:collapse;margin-left:24.074pt" cellspacing="0"><tr style="height:236pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p style="text-indent: 0pt;text-align: left;"><br/></p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><ul id="l3"><li data-list-text=""><p class="s14" style="padding-left: 20pt;padding-right: 20pt;text-indent: -18pt;line-height: 114%;text-align: left;">Diffament une personne ou groupe de personnes en se fondant sur leur race,</p><p class="s14" style="padding-left: 80pt;text-indent: -67pt;line-height: 114%;text-align: left;">ethnie, origine nationale, religion, sexe ou autre facteur.</p></li><li data-list-text=""><p class="s14" style="padding-left: 7pt;padding-right: 7pt;text-indent: -4pt;line-height: 114%;text-align: left;">Diffament une personne ou groupe de personnes protégées selon la loi applicable dans des cas de diffamations (par exemple la famille royale dans certaines juridictions).</p></li></ul><ul id="l4"><li data-list-text=""><p class="s14" style="padding-left: 16pt;text-indent: -18pt;text-align: left;">Exaltent ou incitent à des actes violents.</p><ul id="l5"><li data-list-text=""><p class="s14" style="padding-top: 2pt;padding-left: 22pt;text-indent: -18pt;text-align: left;">Promeuvent l’intolérance ou la haine.</p><ul id="l6"><li data-list-text=""><p class="s14" style="padding-top: 2pt;padding-left: 11pt;padding-right: 10pt;text-indent: 6pt;line-height: 115%;text-align: left;">Promeuvent ou soutiennent une appartenance à des groupes terroristes ou d’autres organisations interdites par la loi.</p></li></ul></li></ul></li></ul><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">Vont à l’encontre de la morale publique.</p></td></tr><tr style="height:135pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Objets et artefacts culturellement protégés</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Matériel couvert par la Convention de</p><p class="s14" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">l’UNESCO de 1970 sur les mesures à adopter pour interdire et empêcher l’importation,</p><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">l’exportation et le transfert de propriétés illicites de biens culturels ou d’autres biens dont la vente, exportation ou transfert sont restreints par la loi ; artefacts, formations de</p><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;">grottes (stalactites et stalagmites).</p></td></tr><tr style="height:68pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 114%;text-align: left;">Dispositifs pyrotechniques et substances dangereuses</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;padding-right: 6pt;text-indent: 0pt;line-height: 114%;text-align: left;">Articles pyrotechniques et biens reliés sur des marchés dont la livraison est réglementée, ainsi que les substances</p><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;">comme l’essence ou le propane.</p></td></tr><tr style="height:51pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Dispositifs de trafic routier</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Radars, plaques minéralogiques, appareils</p><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 17pt;text-align: left;">illégaux de changement d’éléments de trafic routier et produits reliés.</p></td></tr><tr style="height:85pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Armes</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;padding-right: 6pt;text-indent: 0pt;line-height: 114%;text-align: left;">Armes à feu, munition et autres objets, en incluant de manière non limitative des armes à feu, couteaux camouflables ou indétectables, armes d’arts martiaux,</p><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">silencieux, munition ou revues de munition.</p></td></tr><tr style="height:68pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Devises et Argent</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;padding-right: 3pt;text-indent: 0pt;line-height: 115%;text-align: left;">Change de devises ou de devises assurées avec des métaux précieux, ainsi que des billets, monnaies ou des autres titres de</p><p class="s14" style="padding-left: 5pt;text-indent: 0pt;line-height: 14pt;text-align: left;">valeur.</p></td></tr><tr style="height:34pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Mauvaise utilisation de la plateforme/Abus</p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Nous ne tolérons pas l’emploi d’un langage</p><p class="s14" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">abusif, ainsi que des comportements abusifs</p></td></tr></table><table style="border-collapse:collapse;margin-left:24.074pt" cellspacing="0"><tr style="height:34pt"><td style="width:227pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p style="text-indent: 0pt;text-align: left;"><br/></p></td><td style="width:226pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"><p class="s14" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">envers notre entreprise ou envers les</p><p class="s14" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">professionnels indépendants.</p></td></tr></table><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s8" style="padding-top: 1pt;padding-left: 23pt;text-indent: 0pt;text-align: left;">ARTICLES 10 : OBLIGATIONS DE L’UTILISATEUR</p><p style="padding-top: 11pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: left;">L’Utilisateur est entièrement responsable de l’accès et de l’utilisation correcte de son profil et des autres contenus de la Plateforme avec soumission à la légalité en vigueur, nationale ou internationale du pays depuis lequel il fait utilisation de la Plateforme, ainsi qu’aux principes de bonne foi, de morale, de bonnes pratiques et de respect de l’ordre public. En particulier, il assume l’engagement d’observer diligemment les présentes Conditions Générales</p><p style="padding-left: 23pt;text-indent: 0pt;text-align: left;">d’Utilisation.</p><p style="padding-top: 2pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: left;">Les Utilisateurs s’abstiendront d’utiliser leur profil et les autres contenus de la Plateforme à des fins ou effets illicites et qui soient nuisibles aux droits et intérêts de tiers ou, de n’importe quelle manière, puissent endommager, mettre hors d’état, affecter ou détériorer la Plateforme, ses contenus et ses services. De plus, il est interdit d’empêcher l’utilisation ou la jouissance normales de la Plateforme à d’autres Utilisateurs.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: left;">Telemex ne pourra pas être considérée comme responsable éditorial, et déclare expressément qu’elle ne s’identifie à aucune des opinions que peuvent émettre les Utilisateurs de la Plateforme, dont les conséquences sont entièrement assumées par leurs auteurs.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Quiconque manquant à ces obligations répondra de tout préjudice ou dommage provoqué. Telemex ne répondra d’aucune conséquence, dommage ou préjudice pouvant découler de cet accès ou utilisation illicites par des tiers.</p><p style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">En général, les Utilisateurs s’engagent, à titre indicatif, mais non limitatif, à :</p><ul id="l7"><li data-list-text=""><p style="padding-top: 2pt;padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: left;">Ne pas altérer ou modifier, totalement ou partiellement la Plateforme, en éludant, désactivant ou manipulant ses fonctions ou services ;</p></li><li data-list-text=""><p style="padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: left;">Ne pas enfreindre les droits de propriété industrielle et intellectuelle ou les normes régulatrices de la protection de données à caractère personnel ;</p></li><li data-list-text=""><p style="padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: left;">Ne pas utiliser la Plateforme pour injurier, diffamer, intimider, violer la propre image ou harceler d’autres Utilisateurs ;</p></li><li data-list-text=""><p style="padding-left: 23pt;text-indent: -18pt;line-height: 15pt;text-align: left;">Ne pas accéder aux comptes de courrier électronique d’autres Utilisateurs ;</p></li><li data-list-text=""><p style="padding-top: 2pt;padding-left: 23pt;text-indent: -18pt;line-height: 115%;text-align: left;">Ne pas introduire de virus informatiques, fichiers défectueux, ou tout autre programme informatique pouvant provoquer des dommages ou des altérations dans les contenus ou systèmes de Telemex ou de tiers ;</p></li><li data-list-text=""><p style="padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: left;">Ne pas envoyer de courriers électroniques à caractère massif et/ou répétitif à plusieurs personnes, ni envoyer des adresses de courrier électronique de tiers sans leur consentement ;</p></li><li data-list-text=""><p style="padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: left;">Ne pas réaliser d’actions publicitaires de biens ou de services sans le consentement préalable de Telemex.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p style="padding-top: 2pt;padding-left: 23pt;text-indent: 0pt;line-height: 115%;text-align: left;">Tout Utilisateur pourra dénoncer un autre Utilisateur s’il considère qu’il manque aux présentes Conditions Générales d’Utilisation ; de plus, tous les Utilisateurs peuvent informer Telemex de tout abus ou violation des présentes conditions, en envoyant un mail</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: left;"><a href="mailto:commercial@telemex.cm" class="a" target="_blank">à </a>commercial@telemex.cm. Telemex vérifiera cette dénonciation, dans les plus brefs délais, et adoptera les mesures qu’elle considère opportunes, en se réservant le droit de retirer et/ou suspendre tout Utilisateur de la Plateforme pour le manquement aux présentes Conditions Générales d’Utilisation. De plus, Telemex se réserve le droit de retirer et/ou suspendre tout message ayant un contenu illégal ou offensif, sans besoin d’avertissement préalable ou de notification ultérieure.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s8" style="padding-top: 9pt;padding-left: 23pt;text-indent: 0pt;text-align: left;">ARTICLE 11 : GEOLOCALISATION</p><p style="padding-top: 11pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Telemex pourra collecter, utiliser et partager des données précises sur les localisations, y compris la localisation géographique en temps réel de l’ordinateur ou du dispositif mobile de l’Utilisateur. Ces données de localisation sont collectées et utilisées par Telemex pour montrer aux Utilisateurs les lieux de collecte et de livraison. En ce sens, les Utilisateurs consentent expressément à ce que leurs données de géolocalisation soient partagées avec d’autres Utilisateurs pour réaliser correctement la commission demandée à tout moment. Lesdites données ne seront révélées dans aucun autre cas.  Les Utilisateurs opteront pour une désactivation de leur géolocalisation dans leur appareil, comme décrit dans la Politique de Confidentialité.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">C’est la responsabilité de l’Utilisateur de renseigner correctement les adresses de collecte et de livraison. Dans cette mesure, Telemex n’est pas responsable en cas d’erreur ou d’omission.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s8" style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">ARTICLE 12 : DESINSCRIPTION DE L’UTILISATEUR</p><p class="s11" style="padding-top: 11pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: left;"><a href="mailto:commercial@telemex.cm" style=" color: #272727; font-family:&quot;Calibri Light&quot;, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt;" target="_blank">L’Utilisateur pourra se désinscrire de la Plateforme en faisant la demande par mail à </a><span style=" color: #00F; font-family:&quot;Calibri Light&quot;, sans-serif; font-style: normal; font-weight: normal; text-decoration: underline; font-size: 11pt;">commercial@telemex.cm</span>.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s10" style="padding-top: 1pt;padding-left: 23pt;text-indent: 0pt;text-align: left;">ARTICLE 13 : RESPONSABILITE DE TELEMEX</p><p style="padding-top: 11pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: left;">L’Utilisateur est responsable d’avoir à sa disposition les services et équipements nécessaires à la navigation sur l’Internet et à l’accès à la Plateforme. En cas d’incidence ou de difficulté à accéder à la Plateforme, l’Utilisateur peut informer Telemex de ce fait en envoyant un mail</p><p style="padding-top: 2pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: left;"><a href="mailto:commercial@telemex.cm" class="a" target="_blank">à </a>commercial@telemex.cm, qui procédera à analyser l’incidence et donnera des indications à l’Utilisateur pour la résoudre dans les plus brefs délais.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: left;">Telemex ne contrôle ni n’est responsable des contenus exprimés par les Utilisateurs à travers la Plateforme, ceux-ci étant les seuls responsables de l’adéquation légale de ces contenus.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: left;">Telemex ne sera pas responsable en cas d’interruptions du service, erreurs de connexion, manque de disponibilité ou déficiences du service d’accès à l’Internet, ni d’interruptions du réseau de l’Internet ou pour toute autre raison étrangère à son contrôle.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Telemex n’est pas responsable des erreurs de sécurité pouvant se produire ni des dommages pouvant être provoqués sur le système informatique de l’Utilisateur (matériel et logiciel), aux fichiers ou documents qui y sont stockés, du fait de :</p></li><li data-list-text=""><p style="padding-left: 23pt;text-indent: -18pt;line-height: 114%;text-align: left;">La présence d’un virus dans le système informatique ou terminal mobile de l’Utilisateur utilisé pour la connexion aux services et contenus de la Plateforme ;</p></li><li data-list-text=""><p style="padding-left: 23pt;text-indent: -18pt;line-height: 15pt;text-align: left;">Un mauvais fonctionnement du navigateur ;</p></li><li data-list-text=""><p style="padding-top: 2pt;padding-left: 23pt;text-indent: -18pt;text-align: left;">L’utilisation de versions non à jour de celui-ci.</p></li></ul><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s10" style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">ARTICLES 14 : RESPONSABILITE POUR CONTENUS</p><p style="padding-top: 3pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Telemex n’est pas obligée de contrôler et ne contrôle pas l’utilisation que les Utilisateurs font de la Plateforme et, par conséquent, ne garantit pas que les Utilisateurs utilisent la Plateforme conformément aux dispositions des présentes Conditions Générales d’Utilisation, ni qu’ils l’utilisent de manière diligente et/ou prudente. Telemex n’est pas obligée de vérifier et ne vérifie pas l’identité des Utilisateurs, ni la véracité, validité, exhaustivité et/ou authenticité des données qu’ils fournissent.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Telemex se dégage de toute responsabilité quant aux dommages et préjudices de toute nature pouvant découler de l’utilisation illicite de la Plateforme par les Utilisateurs ou pouvant découler du manque de véracité, validité, exhaustivité et/ou authenticité de l’information que les Utilisateurs fournissent à d’autres Utilisateurs sur eux-mêmes et, en particulier, mais de manière non exclusive, pour les dommages et préjudices de toute nature pouvant découler de la supplantation d’identité d’un tiers effectuée par un Utilisateur dans n’importe quel type de communication réalisée à travers la Plateforme. En particulier, Telemex ne se fait pas responsable de l’utilisation de la Plateforme, ainsi que des commandes qu’une tierce partie peut réaliser depuis le compte de l’Utilisateur.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Sans préjudice de ce qui précède, Telemex se réserve le droit de limiter, totalement ou partiellement, l’accès à la Plateforme à certains Utilisateurs, ainsi que d’annuler, suspendre, bloquer ou éliminer certains types de contenus, moyennant l’utilisation d’instruments technologiques aptes à cet effet, si elle est informée de manière probatoire que l’activité ou l’information stockée est illicite ou porte atteinte à des biens ou à des droits d’un tiers. En ce sens, Telemex pourra établir les filtres nécessaires afin d’éviter qu’à travers le service puissent être diffusés sur le réseau des contenus illicites ou nuisibles. La mise à disposition par les Utilisateurs de contenus à travers la Plateforme supposera la cession en faveur de Telemex de tous les droits d’exploitation découlant des contenus fournis sur la Plateforme.</p><p class="s8" style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">ARTICLE 15 : MISE A JOUR ET MODIFICATIONS DE LA PLATEFORME</p><p style="padding-top: 11pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Telemex se réserve le droit de modifier, à tout moment et sans préavis, les présentes Conditions Générales d’Utilisation et la Politique de Confidentialité. Les Utilisateurs devront lire attentivement ces Conditions Générales en accédant à la Plateforme. Dans tous les cas, l’acceptation des Conditions Générales sera une étape préalable et indispensable à l’accès aux services et contenus disponibles à travers la Plateforme de Telemex.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">En outre, Telemex se réserve le droit d’effectuer, à tout moment et sans préavis, des mises à jour, modifications ou élimination d’information contenue sur sa Plateforme dans sa configuration et présentation et des conditions d’accès, sans assumer aucune responsabilité à cet effet. Telemex ne garantit pas l’absence d’interruptions ou d’erreurs lors de l’accès à la Plateforme ou à son contenu, ni que celle-ci est toujours mise à jour ; nonobstant, Telemex réalisera, tant que ne se présentent pas des causes qui le rendent impossible ou difficile à exécuter, et dès qu’elle est informée des erreurs, déconnexions ou manque de mise à jour des contenus, tous les dispositifs visant à corriger les erreurs, rétablir la communication et mettre à jour les contenus.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s8" style="padding-left: 23pt;text-indent: 0pt;text-align: justify;">ARTICLE 16 : PROPRIETE INTELLECTUELLE</p><p style="padding-top: 11pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">Telemex est titulaire ou licenciée de tous les droits de propriété intellectuelle et industrielle inclus dans la Plateforme, ainsi que sur les contenus accessibles à travers celle-ci. Les droits de propriété intellectuelle de la Plateforme, ainsi que les textes, images, conception graphique, structure de navigation, information et contenus qui y sont recueillis appartiennent à Telemex, à qui revient l’exercice exclusif de leurs droits d’exploitation sous n’importe quelle forme et, en particulier, les droits de reproduction, distribution, communication publique et transformation, conformément à la législation sénégalaise sur les droits de propriété intellectuelle et industrielle.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">L’autorisation donnée à l’Utilisateur pour accéder à la Plateforme ne suppose aucune renonciation, transmission, licence ou cession totale ni partielle des droits de propriété intellectuelle ou industrielle par Telemex. Il n’est permis de supprimer, éluder ou manipuler d’aucune manière les contenus de la Plateforme de Telemex. De plus, il est interdit de modifier, copier, réutiliser, exploiter, reproduire, communiquer publiquement, charger des fichiers, envoyer par courrier, transmettre, utiliser, traiter ou distribuer de n’importe quelle forme la totalité ou une partie des contenus inclus dans la Plateforme de Telemex à des fins publiques ou commerciales, sans l’autorisation expresse et par écrit de Telemex ou, le cas échéant, du titulaire des droits.</p><p style="padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: justify;">L’Utilisateur qui partage tout type de contenu à travers la Plateforme garantit qu’il possède les droits nécessaires pour ce faire, Telemex étant dégagée de toute responsabilité quant au contenu et à la légalité de l’information offerte. Fournir des contenus de la part des Utilisateurs à travers la Plateforme supposera la cession à Telemex, avec un caractère gratuit, et avec la</p><p style="padding-top: 2pt;padding-left: 23pt;text-indent: 0pt;line-height: 114%;text-align: left;">maximale ampleur permise par la législation en vigueur, des droits d’exploitation de propriété intellectuelle ou industrielle découlant de ces contenus.</p><p style="text-indent: 0pt;text-align: left;"><br/></p><h1 style="padding-left: 23pt;text-indent: 0pt;text-align: left;">ARTICLE 17 : IMPAYÉ</h1><p style="text-indent: 0pt;text-align: left;"><br/></p><p class="s16" style="padding-left: 23pt;text-indent: 42pt;line-height: 150%;text-align: justify;">En cas d’impayé, ou d’opposition volontaire ou abusive après paiement par carte bancaire, un dossier de litige est ouvert par le service clients. TELEFRET se réserve également le droit de suspendre ou interdire l’accès au membre en cas d’impayé ou de tentative de fraude ou de défaut de paiement.</p></body>
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
         <br>

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