<script src="https://cdn.tailwindcss.com"></script>

<?php include"header-new.php" ?>


  <div class="" id="sign-up-container" >
  
    <div>
      <span>INSCRIPTION
      <div></div></span>
    </div>
    
    
    <div>
      <div>
      <form id="registrationForm" method="post" action="submit.php">
      <div class="classicInput1">
            <input class=" classicInput" name="name" type="text" placeholder="Nom" required>
          </div>
          <div class="classicInput1">
            <input class=" classicInput" name="name1" type="text" placeholder="Prénom" required>
          </div>
          <div class="classicInput1">
            <input class=" classicInput" name="phone" type="text" placeholder="Numéro de téléphone" required>
          </div>
          <div class="classicInput1">
            <input class=" classicInput" name="ville" type="text" placeholder="Ville" required>
          </div>
          <div class="classicInput1">
            <input class=" classicInput" name="email" type="email" placeholder="Email" required>
          </div>
          <div class="classicInput1">
            <input class=" classicInput" name="password" type="password" placeholder="Mot de passe" required>
          </div> 
          <div class="classicInput1">
            <input class=" classicInput" name="confirmpassword" type="password" placeholder="Confirmer le mot de passe*" required>
          </div>
      </div>
    <div id="alertDiv" style="display: none;"></div> 

    </div>

    <div >
    <div>
    <p><input type="checkbox" id="roundCheckbox" required> J'ai lu et j'accepte  <p onclick="window.location.href = 'condition-new.php';">conditions générales</p></p>
    </div>   
    </div>
    <div>
    <div >
    <button id="registerButton" type="submit">Valider></button>
    </div>    
    </form>

  </div>
  <div  >
    <div >
    </div>   
    </div>
  <div >
    <div >
    <p>Vous avez déjà un compte ?</p>
    </div>   
    </div>
  <div >
    <div>
    <button onclick="window.location.href = 'login-new.php';"type="submit">Connexion></button>
    </div>    

  </div>
  </div>


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
                url: "register.php", // Replace with the actual URL of your registration PHP script
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


  <?php include"footer-new.php" ?>