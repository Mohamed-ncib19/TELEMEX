<?php include "header-new.php" ?>


<div class="row" style="margin: unset;text-align: center;">

  <div class="col-md-12" style="margin-top: 100px;display: inherit;
    text-align: center;
    justify-content: center;">
    <div class="row" style="width: 570px;">
      <span class="servicee1_364" style="color: #2B2E86!important;font-size: 35px;">Récupérer votre mot de passe
        <div class="e1_328" style="position: unset!important;"></div>
      </span>
    </div>
  </div>
  <?php
if (!isset($_GET['send'])) {
    // The "send" parameter is present in the URL
    // Show the form here
    ?>
  <div class="col-md-12" style="text-align: center;margin-top: 30px;justify-content: center;
    text-align: center;
    display: inherit;">
    <div class="row" style="width: 570px;">
<form method="POST" action="reset_password.php" style="width: 100%;">
      <div class="row col-md-12">
        <div class="col-md-4">
          Votre e-mail*
        </div>
        <div class="col-md-8">
          <input class="v1_106 classicInput" type="email" name="email" required placeholder="Adresse e-mail"
            style="padding-left: 20px;width:  100%!important;">
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12" style="text-align: center;justify-content: center;
    text-align: center;
    display: inherit;margin-bottom: 30px;">
    <div class="row" style="width: 570px;">
      <button class="aboute1_362"
        style="margin-top: 20px;color: white;background-color: red!important; width: unset!important;padding-left: 10px; padding-right: 10px; height: 40px!important;"
        type="submit">Valider></button>
    </div>

  </div>
</form> <?php
} else {
    // The "send" parameter is not present in the URL
    // Show a label or message here
    ?>
    <div class="col-md-12" style="text-align: center;margin-top: 30px;justify-content: center;
    text-align: center;
    display: inherit;">
    <div class="row" style="width: 570px;">
<form method="POST" action="reset_password.php" style="width: 100%;">
      <div class="row col-md-12">
        <div class="row">
        Les instructions de réinitialisation du mot de passe ont été envoyées à votre adresse électronique.
        </div>
      </div>
    </div>
  </div>
    <?php
}
?>


</div>

</div>

<?php include "footer-new.php" ?>