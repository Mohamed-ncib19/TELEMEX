<?php include"header-new.php" ?>


  <div class="row" style="margin: unset;text-align: center;">   
    <div class="col-md-12" style="text-align: center!important;
    justify-content: center;
    display: inherit;">
    <div class="col-md-9 row" style="margin-top: 50px;">
    <div class="col-md-3" style="background-color: white!important;padding: 20px;border: 2px solid #b4b0b0;
    border-radius: 10px;
    padding: 20px;
    height: 250px; ">
      <div class="image-container custom-bg"style="background-color: white!important;">
        <div class="servicee1_386" style="background-color: #2B2E86!important;">
          <img src="newdesign/images/ic_account_circle_24px.svg" style="height: 100%;">
        </div>
      </div>
      <div class="content-container custom-bg"style="background-color: white!important;">
        <span class="servicee1_392" style="color: red;"> <?php echo $_SESSION['login_user'] ?> </span>
      </div>
    </div>
     <div class="col-md-9" >
     <div class="col-md-12"style="border: 2px solid #b4b0b0;
    border-radius: 10px;
    padding: 20px;">
      <div class="v1_146">
     
    <div class="classicInput1">
    <span class="servicee1_364" style="color: #2B2E86!important;font-size: 25px;">Informations sur le compte
          </div>
      <form id="registrationForm" method="post" action="submit.php">
      <div class="classicInput1">
            <input class="v1_106 classicInput" name="name" type="text" placeholder="Nom" style="padding-left: 20px;    width: 100%!important;" value="<?php echo $_SESSION['login_user'] ?>" required="">
          </div>
          <div class="classicInput1">
            <input class="v1_106 classicInput" name="name1" type="text" placeholder="Prénom" style="padding-left: 20px;    width: 100%!important;" value="<?php echo $_SESSION['prenom'] ?>" required="">
          </div>
          <div class="classicInput1">
            <input class="v1_106 classicInput" name="phone" type="text" placeholder="Numéro de téléphone" style="padding-left: 20px;    width: 100%!important;" value="<?php echo $_SESSION['telephone'] ?>" required="">
          </div>
          <div class="classicInput1">
            <input class="v1_106 classicInput" name="ville" type="text" placeholder="Ville" style="padding-left: 20px;    width: 100%!important;" value="<?php echo $_SESSION['adresse'] ?>" required="">
          </div>
          <div class="classicInput1">
            <input class="v1_106 classicInput" name="email" type="email" placeholder="Email" style="padding-left: 20px;    width: 100%!important;" value="<?php echo $_SESSION['email'] ?>" required="">
          </div>
          <div class="classicInput1">
    <span class="servicee1_364" style="color: #2B2E86!important;font-size: 25px;">Changer le mot de passe
          </div>
          <div class="classicInput1">
            <input class="v1_106 classicInput" name="password" type="password" placeholder="Mot de passe actuel" style="padding-left: 20px;    width: 100%!important;" required="">
          </div> 
          <div class="classicInput1">
            <input class="v1_106 classicInput" name="password" type="password" placeholder="Nouveau mot de passe" style="padding-left: 20px;    width: 100%!important;" required="">
          </div> 
          <div class="classicInput1">
            <input class="v1_106 classicInput" name="confirmpassword" type="password" placeholder="Confirmer le mot de passe*" style="padding-left: 20px;    width: 100%!important;"  required="">
          </div>
          <div class="classicInput1">
          <button id="loginButton" class="aboute1_362" style="color: white; width: unset!important;padding-left: 10px; padding-right: 10px; height: 40px!important;"  type="submit">Enregistrer les modifications</button>
          </div>
      </div>
    <div id="alertDiv" style="display: none;"></div> 

    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12" style="text-align: center;justify-content: center;
    text-align: center;
    display: inherit;">
    </div>
  
  </div>
  <div class="col-md-12" style="text-align: center;justify-content: center;">

  <img src="newdesign/images/groupe13.svg" alt="" style="width: 40%;">
  </div>

  <script>
$(document).ready(function() {
    $("#loginButton").click(function() {
      
        var emailOrPhone = $("input[name='login']").val();
        var password = $("input[name='password']").val();
        
        $.ajax({
            type: "POST",
            url: "auth.php", // Remplacez "auth.php" par le chemin de votre script PHP d'authentification
            data: {
                login: emailOrPhone,
                password: password
            },
            success: function(response) {
                if (response === "success") {
                    window.location.href = "index.php"; // Redirigez vers index.php en cas de succès
                } else {
                    $("#alertDiv").text("Échec de l'authentification. Veuillez vérifier vos informations d'identification.").show();
                }
            },
            error: function() {
                $("#alertDiv").text("Une erreur s'est produite. Veuillez réessayer.").show();
            }
        });
    });
});
</script>


  <?php include"footer-new.php" ?>