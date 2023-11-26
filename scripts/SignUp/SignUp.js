$(document).ready(function() {
    $("#registrationForm").submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        var form = $(this);
        var SignUpPassword = $("input[name='SignUppassword']").val();
        var confirmPassword = $("input[name='confirmpassword']").val();
        var pays = $("input[name='pays']").val();
        var apiphoneIndicative = `https://restcountries.com/v2/name/${pays}`;
        function testHasNumbers(str){
            return /\d/.test(str);
        }
        if (SignUpPassword.length <10) {
            $('#alert-3').removeClass('hidden')
                  $('#alert-3').addClass('flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50  dark:text-red-400 transition-all duration-200 ')
            $("#alertSignUpDiv").text("votre mot de passe doit contenir plus de 10 lettres").show();
            return;
        }
        if(!testHasNumbers(SignUpPassword)){
            $('#alert-3').removeClass('hidden')
                  $('#alert-3').addClass('flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50  dark:text-red-400 transition-all duration-200 ')
            $("#alertSignUpDiv").text("votre mot de passe doit avoir des chiffres").show();
            return;
        }
        if (SignUpPassword !== confirmPassword) {
            $('#alert-3').removeClass('hidden')
                  $('#alert-3').addClass('flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50  dark:text-red-400 transition-all duration-200 ')
            $("#alertSignUpDiv").text("Les mots de passe ne correspondent pas.").show();
            return;
        }

        if (form[0].checkValidity()) {
            // Fetch the phone code
            fetch(apiphoneIndicative)
                .then((response) => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    } else {
                        return response.json();
                    }
                })
                .then((data) => {
                    const phoneCode = data[0].callingCodes[0];
                    

                    // Add phone code to the form data
                    var formData = form.serialize() + '&phoneCode=' + phoneCode;

                    // Use AJAX to submit the form data to register.php
                    $.ajax({
                        type: "POST",
                        url: "./register.php",
                        data: formData,
                        success: function(response) {
                            if (response === "success") {
                                $('#successAlertSignUp').removeClass('hidden')
                                setTimeout(function(){
                                  window.location.href = "index.php"
                              },1000)
                            } else {
                                $('#alert-3').removeClass('hidden')
                  $('#alert-3').addClass('flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50  dark:text-red-400 transition-all duration-200 ')
                                $("#alertSignUpDiv").text("Une erreur s'est produite lors de l'inscription. Veuillez réessayer.").show();
                            }
                        },
                        error: function() {
                            $('#alert-3').removeClass('hidden')
                  $('#alert-3').addClass('flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50  dark:text-red-400 transition-all duration-200 ')
                            $("#alertSignUpDiv").text("Une erreur s'est produite. Veuillez réessayer.").show();
                        }
                    });
                })
                .catch(error => {
                    console.log("fetch error:", error);
                });
        } else {
            // Trigger form validation
            form[0].reportValidity();
        }
    });
});
