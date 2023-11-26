<?php include "header-new.php" ?>

<?php
    $telephone=$_GET['email'];
    $today =   strtotime(date('d-m-Y')) ;
	
	$sql = "SELECT * FROM `transporteur` WHERE `email`='$telephone'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  


// Encryption key (must be a valid key for the chosen encryption algorithm)
$encryptionKey = 'ThisIsYourEncryptionKey';

// Initialization vector (IV) for AES encryption (must be 16 bytes)
$iv = 'ThisIsYourIV1234';

// Encryption method and padding scheme
$encryptionMethod = 'AES-256-CBC';

// Encrypt the string
$encryptedString = openssl_encrypt($row['password'], $encryptionMethod, $encryptionKey, 0, $iv);


    if ($_GET['token']==$encryptedString){
?>
<div class="row" style="margin: unset;text-align: center;">
  <div class="col-md-12" style="margin-top: 100px;display: inherit;
    text-align: center;
    justify-content: center;">
    <div class="row" style="width: 570px;">
      <span class="servicee1_364" style="color: #2B2E86!important;font-size: 35px;">Changer votre mot de passe
        <div class="e1_328" style="position: unset!important;"></div>
      </span>
    </div>
  </div>

  <div class="col-md-12" style="text-align: center;margin-top: 30px;justify-content: center;
    text-align: center;
    display: inherit;">
      <form id="registrationForm" method="post" action="submit-password.php" >

    <div class="row" style="width: 570px;">
    <input class="v1_106 classicInput hidden" type="email" name="email" required value="<?php echo $_GET['email'] ?>"
            style="padding-left: 20px;width:  100%!important;">
      <div class="row col-md-12">
        <div class="col-md-4">
          Mot de Passe*
        </div>
        <div class="col-md-8">
          <input class="v1_106 classicInput" type="password" name="password" required 
            style="padding-left: 20px;width:  100%!important;">
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12" style="text-align: center;margin-top: 30px;justify-content: center;
    text-align: center;
    display: inherit;">
    <div class="row" style="width: 570px;">

      <div class="row col-md-12">
        <div class="col-md-4">
          Confirmer le mot de Passe*
        </div>
        <div class="col-md-8">
          <input class="v1_106 classicInput" type="password" name="confirmpassword" required 
            style="padding-left: 20px;width:  100%!important;">
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12" style="text-align: center;justify-content: center;
    text-align: center;
    display: inherit;margin-bottom: 30px;">
        <div id="alertDiv" style="display: none;"></div> </br>

    <div class="row" style="width: 570px;">

      <button class="aboute1_362"id="registerButton"
        style="color: white;background-color: red!important;margin-top: 20px; width: unset!important;padding-left: 10px; padding-right: 10px; height: 40px!important;"
        type="submit">Valider></button>
    </div>

  </div>
  </form>

</div>

</div>



<?php } ?>

<script>
$(document).ready(function() {
    $("#registrationForm").submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        var form = $(this);
        var password = $("input[name='password']").val();
        var confirmPassword = $("input[name='confirmpassword']").val();
        if (password !== confirmPassword) {
            $("#alertDiv").text("Les mots de passe ne correspondent pas.").show();
            return;
        }

        if (form[0].checkValidity()) {
            $.ajax({
                type: "POST",
                url: "submit-password.php", // Replace with the actual URL of your registration PHP script
                data: form.serialize(),
                success: function(response) {
                    if (response === "success") {
                        window.location.href = "login-new.php"; // Redirect to index.php on successful registration
                    } else {
                        $("#alertDiv").text("Une erreur s'est produite lors de l'inscription. Veuillez réessayer.").show();
                    }
                },
                error: function() {
                    $("#alertDiv").text("Une erreur s'est produite. Veuillez réessayer.").show();
                }
            });
        } else {
            // Trigger form validation
            form[0].reportValidity();
        }
    });
});
</script>
<?php include "footer-new.php" ?>