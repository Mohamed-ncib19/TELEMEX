$(document).ready(function(){
    
        $.ajax({
            type:"GET",
            url:"./getuserPass.php",
            success:function(response){
                //current password conditions
                $("input[name='password']").on('change',function(){
                    if(($(this).val()) === response){
                    $('#alertWrongCurrentPassword').addClass('hidden');
                    $("input[name='password']").removeClass('border-red-500')
                    $("input[name='password']").removeClass('ring-red-500')
                    $("input[name='password']").addClass('border-2')
                    $("input[name='password']").addClass('border-green-600')
                    $("input[name='password']").addClass('ring-green-600')
                   }else{
                    $('#alertWrongCurrentPassword').removeClass('hidden');
                    $('#alertWrongCurrentPassword').removeClass('animate__fadeOutLeft');
                    $('#alertWrongCurrentPassword').addClass('animate__fadeInLeft');
                    $("input[name='password']").removeClass('border-green-600')
                    $("input[name='password']").removeClass('ring-green-600')
                    $("input[name='password']").addClass('border-red-500')
                    $("input[name='password']").addClass('ring-red-500')
                    


                }
                }                )
               
            },
            error:function(response){
                console.log(response);
            }
        });
        //new password conditions
        $("input[name='newPassword']").on('input',function(){
            var newPassword = $("input[name='newPassword']").val();
            if((newPassword.length)>=10){
                    $('#alertWrongNewPassword').addClass('hidden');
                    $("input[name='newPassword']").removeClass('focus:border-red-500')
                    $("input[name='newPassword']").removeClass('focus:ring-red-500')
                    $("input[name='newPassword']").addClass('focus:border-green-500')
                    $("input[name='newPassword']").addClass('focus:ring-green-500')
                    $("input[name='newPassword']").addClass('border-green-500')
                    $("input[name='newPassword']").removeClass('focus:ring-3')
                    $("input[name='newPassword']").removeClass('focus:border-purple-500')
                    $("input[name='newPassword']").removeClass('focus:ring-purple-500')
                    $("input[name='newPassword']").addClass('ring-green-500')
                    $("input[name='newPassword']").removeClass('border-red-500')
                $("input[name='newPassword']").removeClass('ring-red-500')
            }else{
                $('#alertWrongNewPassword').removeClass('hidden');
                $('#alertWrongNewPassword').removeClass('animate__fadeOutLeft');
                $('#alertWrongNewPassword').addClass('animate__fadeInLeft');
                $("input[name='newPassword']").removeClass('focus:border-green-500')
                $("input[name='newPassword']").removeClass('focus:ring-green-500')
                $("input[name='newPassword']").addClass('border-2')
                $("input[name='newPassword']").addClass('focus:border-red-500')
                $("input[name='newPassword']").addClass('focus:ring-red-500')
                $("input[name='newPassword']").addClass('border-red-500')
                $("input[name='newPassword']").addClass('ring-red-500')
                $("input[name='newPassword']").removeClass('border-green-500')
                    $("input[name='newPassword']").removeClass('ring-green-500')
            }

            $("input[name='confirmpassword']").on('input',function(){
                var confirmpassword = $("input[name='confirmpassword']").val();
                if((confirmpassword === newPassword)){
                        $('#alertWrongConfirmNewPassword').addClass('hidden');
                        $("input[name='confirmpassword']").removeClass('focus:border-red-500')
                        $("input[name='confirmpassword']").removeClass('focus:ring-red-500')
                        $("input[name='confirmpassword']").addClass('focus:border-green-500')
                        $("input[name='confirmpassword']").addClass('focus:ring-green-500')
                        $("input[name='confirmpassword']").removeClass('focus:ring-3')
                        $("input[name='confirmpassword']").removeClass('focus:border-purple-500')
                        $("input[name='confirmpassword']").removeClass('focus:ring-purple-500')
                        $("input[name='confirmpassword']").addClass('border-green-500')
                        $("input[name='confirmpassword']").addClass('ring-green-500')
                        $("input[name='confirmpassword']").removeClass('border-red-500')
                    $("input[name='confirmpassword']").removeClass('ring-red-500')
                }else{
                    $('#alertWrongConfirmNewPassword').removeClass('hidden');
                    $('#alertWrongConfirmNewPassword').removeClass('animate__fadeOutLeft');
                    $('#alertWrongConfirmNewPassword').addClass('animate__fadeInLeft');
                    $("input[name='confirmpassword']").removeClass('focus:border-green-500')
                    $("input[name='confirmpassword']").removeClass('focus:ring-green-500')
                    $("input[name='confirmpassword']").addClass('border-2')
                    $("input[name='confirmpassword']").addClass('focus:border-red-500')
                    $("input[name='confirmpassword']").addClass('focus:ring-red-500')
                    $("input[name='confirmpassword']").addClass('border-red-500')
                    $("input[name='confirmpassword']").addClass('ring-red-500')
                    $("input[name='confirmpassword']").removeClass('border-green-500')
                        $("input[name='confirmpassword']").removeClass('ring-green-500')
                }
            
            })
                   

        })

//confirme new password conditions

    $("#changingPassword").submit(function(event){
        event.preventDefault();
        var form = $(this);
        const alertWrongPass = document.querySelector('#alertWrongCurrentPassword');
        

        $.ajax({
            type:'POST',
            url:"./changePassword.php",
            data:form.serialize(),
            success:function(response){
                if(response === 'password_changed'){
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Votre mot de passe a été changé",
                        showConfirmButton: false,
                        timer: 3500
                    })
                      $('#loader').addClass('hidden');
                }else if(response === "wrong_curent_password"){
                    alertWrongPass.classList.remove('hidden');
                    alertWrongPass.classList.add('flex');
                }
            },
            error: function () {
                console.log(this.error)
            }
        })


    })
})