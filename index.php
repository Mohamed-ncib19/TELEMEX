
  <?php include"header-new.php" ?>
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 carousel-image" src="newdesign/images/slider/1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 carousel-image" src="newdesign/images/slider/2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 carousel-image" src="newdesign/images/slider/3.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 carousel-image" src="newdesign/images/slider/4.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 carousel-image" src="newdesign/images/slider/5.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 carousel-image" src="newdesign/images/slider/6.jpg" alt="Third slide">
      </div>
    </div>
    <div class="e1_598">
      <span class="e1_286">Suivi de votre expédition</span>

      <div class="e1_282">
        <input type="text" class="e1_282input search-input" placeholder="Saisissez votre numéro de suivi">
        <span class="search-icon" id="searchButton">
          <img src="newdesign/images/Iconawesomsearch.svg">
        </span>
      </div>
      <span class="e1_329">Plusieurs numéros de suivi Besoin d'aide ?</span>
      <?php if(!(isset($_SESSION['login_user'])) ) {               ?>
        <button class="rounded-button" 
    style="    
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    top: 385px;" onclick="window.location.href = 'login-new.php';">Envoyer un colis</button>
        
					<?php }else{ ?>
      <button class="rounded-button" 
    style="    
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    top: 385px;" onclick="window.location.href = 'chargement-new.php';">Envoyer un colis</button>
    <?php } ?>
    </div>
  </div>

  <div class="row" style="padding-top: 50px;
  padding-left: 100px;
  padding-right: 100px;
    margin: unset;">

    <div class="col-md-6">

      <div class="div-with-border" style="margin-bottom: 20px;">
        <h3 style="font-size: 35px;">
          Identifier des opportunités de croissance en tant que partenaire de service
        </h3>
        <div class="e1_328"></div>
      </div>
      <span>
        Rejoignez nos équipes pour recevoir des mises à jour concernant les opportunités de nouvelles tournées, stimuler
        vos revenus et développer votre entreprise.</span>
      <div class="e1_52">
        <button class="e1_30" style="color: red;margin-top: 20px ;" onclick="window.location.href = 'inscription1.php';">Devenir partenaire
          <span>></span>
        </button>
      </div>
    </div>
    <div class="col-md-6">
      <img src="newdesign/images/group2.svg" alt="" style="    width: 100%;height: 100%;">
    </div>

  </div>

  <div class="row" style="margin: unset;">
    <div class="col-md-6"
      style="padding-bottom: 100px;padding-left: 100px;margin-top: 50px;background-color: rgba(43.00000123679638, 46.000001057982445, 134.00000721216202, 1);">
      <span class="aboute1_360">À PROPOS</span>
      <br>
      <span class="aboute1_361">Telemex, est la solution
        innovante de la livraison de dermier kilometre développée par la START-UP TELEFRET SAS. Telemex est spécialisée
        dans la distribution de colis, de courriers et des repas. Elle est basée sur une solution informatique de prise
        de
        commande, de simulation de prix instantanés et d'un tracking en temps réel.

        Nous proposons l’intégration d’une solution Addon API pour l’ensemble des sites de E-Commerce ou Market Place.
        Nous proposons également un package complet de gestion de vos flux pour externaliser vos services d'entreposage,
        gestion de stock et la livraison de vos produits.</span>
      <br>

      <button class="aboute1_362" style="color: white;margin-top: 100px;">Contactez-nous</button>
    </div>

    <img class="apropos" src="newdesign/images/design/moto_livraison.png">
  </div>


  <div class="row justify-content-center" style="font-family: Poppins;
  color: white;text-align: center;margin: unset;">
    <div class="col-md-12" style="text-align: center;margin-top: 100px;    margin-bottom: 100px;">
      <span class="servicee1_364">Nos services de livraison</span>
    </div>
    <div class="col-md-3" style="padding: 20px; ">
      <div class="image-container custom-bg">
        <div class="servicee1_386">
          <img src="newdesign/images/burguer1.svg" alt="Image 1">
        </div>
      </div>
      <div class="content-container custom-bg">
        <span class="servicee1_392" style="color: red;">Repas et Boissons</span>
        <p>Commandez vos repas et contactez-nous pour assurer la livraison. Que vous soyez à la maison ou au bureau.</p>
      </div>
    </div>
    <div class="col-md-3" style="padding: 20px; ">
      <div class="image-container custom-bg">
        <div class="servicee1_386">
          <img src="newdesign/images/services.svg" alt="Image 1" style="height: 100%;">
        </div>
      </div>
      <div class="content-container custom-bg">
        <span class="servicee1_392" style="color: red;">Colis et Courrier</span>
        <p>Confiez-nous la livraison de vos colis et gagnez en temps et en argent et concentrez-vous sur votre activité.</p>
      </div>
    </div>
    <div class="col-md-3" style="padding: 20px; ">
      <div class="image-container custom-bg">
        <div class="servicee1_386">
          <img src="newdesign/images/service.png" alt="Image 1">
        </div>
      </div>
      <div class="content-container custom-bg">
        <span class="servicee1_392" style="color: red;">Espace stockage</span>

        <p>Nous disposons d’espaces aménagés pour répondre au problème de stockage de marchandises des Ecommerçants en toute sécurité.</p>
      </div>
    </div>
  </div>





  <style>
  .container {
    position: relative;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .arrow {
    position: absolute;
    right: -40px;
    top: -190%;
    transform: translateY(-50%);
  }
</style>
  <div class="row justify-content-center" style="font-family: Poppins;
  color: white;text-align: center;margin: unset;">
    <div class="worke1_408" style="margin-top: 100px;background-color: #fff!important;"><span class="worke1_410" style="color: black!important;">Comment ça marche ?</span></div>

    <div class="parent-container"style="background-color: white;height: 200px!important;">
      <div class="child">
        <div class="square-container">
          <img src="newdesign/images/Icon material-get-app.svg" alt="Icon" class="icon">
        </div>
        <div class="text-container container">
          <h3 class="title ">TÉLÉCHARGER</h3>
          <div class="arrow">
            <img src="newdesign/images/ic_arrow_forward_24px.svg" alt="Arrow">
          </div> 
        </div>
        
      </div>
      <div class="child">
        <div class="square-container">
          <img src="newdesign/images/ic_person_add_24px.svg" alt="Icon" class="icon">
        </div>
        <div class="text-container container">
          <h3 class="title">Connectez-vous</h3>
          <div class="arrow">
            <img src="newdesign/images/ic_arrow_forward_24px.svg" alt="Arrow">
          </div> 
        </div>
      </div>
      <div class="child">
        <div class="square-container">
          <img src="newdesign/images/Icon material-payment.svg" alt="Icon" class="icon">
        </div>
        <div class="text-container container">
          <h3 class="title">commander</h3>
          <div class="arrow">
            <img src="newdesign/images/ic_arrow_forward_24px.svg" alt="Arrow">
          </div> 
        </div>
      </div>
      <div class="child">
        <div class="square-container">
          <img src="newdesign/images/Icon feather-package (1).svg" alt="Icon" class="icon">
        </div>
        <div class="text-container">
          <h3 class="title">réceptionner</h3>
          <!-- <p class="description">Après réception du colis, vous pouvez attribuer une note à votre coursier selon la
            qualité de son service pour finaliser l’opération.</p> -->
        </div>
      </div>
    </div>

    <div class="parent-container" style="background-color: white;">
      <div class="child">
        <div class="text-container">
          <p class="description">Accédez à la plateforme via le lien www.telemex.cm ou téléchargez l’application Telemex sur Play store ou App store et inscrivez-vous en suivant les étapes d’inscription.</p>
        </div>
      </div>
      <div class="child">
        <div class="text-container">
          <p class="description">Connectez-vous à la plateforme en entrant vos accès (Numéro de téléphone et mot de passe) ensuite renseigner les informations de votre coli ainsi que l’adresse de départ et de livraison puis cliquer sur valider.</p>
        </div>
      </div>
      <div class="child">
        <div class="text-container">
          <p class="description">Une fois la commande validée, vous recevrez le lien de suivi de votre livraison par SMS. Cliquez dessus et visualisez l’évolution de votre colis en temps réel.</p>
        </div>
      </div>
      <div class="child">
        <div class="text-container">
          <p class="description">Après réception du colis, vous pouvez attribuer une note à votre coursier selon la qualité de son service pour finaliser l’opération.</p>
        </div>
      </div>
    </div>

  </div>




  <div class="row justify-content-center" style="font-family: Poppins;
color: white;text-align: center;margin: unset;">
    <div class="col-md-12" style="text-align: center;margin-top: 100px;    margin-bottom: 100px;">
      <span class="servicee1_364">Pourquoi nous choisir ?</span>
    </div>
    <div class="col-md-3" style="padding: 20px;height: 400px; ">
      <div class="image-container custom-bg">
        <div class="servicee1_386">
          <img src="newdesign/images/security.svg" alt="Image 1">
        </div>
      </div>
      <div class="content-container custom-bg">
        <h3>SÉCURITÉ</h3>
        <p>Ne confiez plus vos Colis aux
          inconnus. Chez TELEMEX, tous les
          coursiers sont identifiés et
          professionnels. Vous avez la
          possibilité de faire le suivi en
          temps réel</p>
      </div>
    </div>
    <div class="col-md-3" style="padding: 20px;height: 400px; ">
      <div class="image-container custom-bg">
        <div class="servicee1_386">
          <img src="newdesign/images/Iconmaterial-devices-other.svg" alt="Image 1">
        </div>
      </div>
      <div class="content-container custom-bg">
        <h3>FLEXIBILITÉ </h3>
        <p>Depuis votre bureau ou la maison, faites-vous livrer grâce à la solutionTELEMEX en un clic ceci sur un
          support au choix (ordinateur, smartphone ou tablette).</p>
      </div>
    </div>
    <div class="col-md-3" style="padding: 20px;height: 400px; ">
      <div class="image-container custom-bg">
        <div class="servicee1_386">
          <img src="newdesign/images/boost.svg" alt="Image 1">
        </div>
      </div>
      <div class="content-container custom-bg">
        <h3>BOOSTEZ VOTRE
          PERFORMANCE</h3>

        <p>Concentrez-vous sur votre activité et confiez la livraison de vos colis à TELEMEX</p>
      </div>
    </div>
  </div>

  <div class="row justify-content-center" style="font-family: Poppins;
  color: white;margin: unset;">
    <div class="col-md-12" style="text-align: center;margin-top: 100px;    margin-bottom: 100px;">
      <span class="servicee1_364">ILS PARLENT DE NOUS</span>
    </div>
    <div class="col-md-3" style="padding: 20px;text-align: unset!important; ">
      <div class="content-container custom-bg" style="border-top-left-radius: 41px;
          border-top-right-radius: 41px;
          padding-top: 20px;">
                <img src="newdesign/images/kinky.svg" alt="Image 1">

       <p>J’ai une boutique de vente de produits cosmétiques c’était assez compliqué pour moi de livrer les clients qui me passaient les commandes et qui n’avaient pas le temps de se déplacer pour récupérer. J’ai découvert TELEMEX via le réseau Facebook, je me suis dit je vais essayer en testant leur service. Ça fera un bon bout de temps aujourd’hui que je travaille avec eux et je relève particulièrement un point qui me satisfait, celui des prix accessibles qu’ils pratiquent. Merci TELEMEX</p>
       <h3 style="color: red;">NOM</h3>
        <h3 style="color: red;">Entreprise</h3>
      </div>
    </div>
    <div class="col-md-3" style="padding: 20px;">
      <div class="content-container custom-bg" style="border-top-left-radius: 41px;
        border-top-right-radius: 41px;
        padding-top: 20px;">
        <img src="newdesign/images/kinky.svg" alt="Image 1">
        <p>J’ai découvert Telemex par le biais d’une amie qui me l’a recommandé. Moi J’effectue régulièrement mes vente en ligne étant très occupée j’ai souvent du mal à faire à livrer moi-même. Je les ai contacté la première fois en leur fournissant toutes les infos. En un laps de temps l’opération s’est faite. J’ai été très Surprise de la rapidité et le professionnalisme de leur coursier. Dorénavant je ne me tracasserai plus je sais que j’ai la solution.</p>
        <h3 style="color: red;">NOM</h3>
        <h3 style="color: red;">Entreprise</h3>
      </div>
    </div>
    <div class="col-md-3" style="padding: 20px;">
      <div class="content-container custom-bg" style="border-top-left-radius: 41px;
        border-top-right-radius: 41px;
        padding-top: 20px;">
        <img src="newdesign/images/kinky.svg" alt="Image 1">

        <p>Notre restaurant est réputé comme l’un des meilleurs dans la ville de Douala. Depuis que nous avons découvert TELEMEX nous n’avons plus de problèmes de livraison avec nos clients. Leur disponibilité et rapidité nous permet de satisfaire nos clients. Merci TELEMEX</p>
        <h3 style="color: red;">NOM</h3>
        <h3 style="color: red;">Entreprise</h3>

      </div>
    </div>
  </div>

  <div class="row" style="margin: unset;">
    <div class="col-md-6">
      <div class="footere1_471">Expédiez vos colis
        via notre app
        mobile</div>
    </div>
    <div class="col-md-6"> <img style="margin-top: 100px;width: 100%;" src="newdesign/images/group8.svg" />
    </div>
  </div>

  
  <div class="row justify-content-center" style="font-family: Poppins;
  color: white;text-align: center;margin: unset;">
    <div class="col-md-12" style="text-align: center;margin-top: 100px;    margin-bottom: 100px;">
      <span class="servicee1_364">ILS NOUS FONT CONFIANCE</span>
    </div>
    <div class="col-md-2" style="padding: 20px;">
      <img src="newdesign/images/design/IMG-20230616-WA0021.jpg" alt="" style="width: 100%;">
    </div>
    <div class="col-md-2" style="padding: 20px;">
      <img src="newdesign/images/design/IMG-20230525-WA0025.jpg" alt="" style="width: 100%;">
    </div>
    <div class="col-md-2" style="padding: 20px;">
      <img src="newdesign/images/design/IMG-20230616-WA0022.jpg" alt="" style="width: 100%;">
    </div>
    <div class="col-md-2" style="padding: 20px;">
      <img src="newdesign/images/design/kinky.png" alt="" style="width: 100%;">
    </div>
    <div class="col-md-2" style="padding: 20px;">
      <img src="newdesign/images/design/Logo CK.png" alt="" style="width: 100%;">
    </div>
  </div>
  <div class="row justify-content-center" style="font-family: Poppins;
    color: black;text-align: center;margin: unset; margin-bottom: 100px;">
    <div class="col-md-12" style="text-align: center;margin-top: 100px;">
      <span class="servicee1_364">Nos performances</span>
    </div>
    <div class="col-md-6" style="padding: 20px;text-align:right;">
      <h3 >+5000 Colis livrés</h3>
    </div>
    <div class="col-md-6" style="padding: 20px; text-align: left;">
      <h3 > +200 Clients
        satisfaits</h3>
    </div>
  </div>


  <?php include"footer-new.php" ?>