//Login authentification
$(document).ready(function() {
    $("#loginButton").click(function(event) {
      event.preventDefault();
        var emailOrPhone = $("input[name='login']").val();
        var password = $("input[name='password']").val();
        
        
        
        $.ajax({
            type: "POST",
            url: "./auth.php",
            data: {
                login: emailOrPhone,
                password: password
            },
            success: function(response) {
              
                if (response === "success") {
                  $('#successAlert').removeClass('hidden')
                  setTimeout(function(){
                    window.location.href = "index.php"
                },1000)
              
              } else {
                  $('#alert-2').removeClass('hidden')
                  $('#alert-2').addClass('flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50  dark:text-red-400 transition-all duration-200 ')
                  $("#alertDiv").text("échec de la connexion, vérifiez vos informations.").show();
                    
                }
            },
            error: function() {
                $("#alertDiv").text("Une erreur s'est produite. Veuillez réessayer.").show();
            }
        });
    });
});