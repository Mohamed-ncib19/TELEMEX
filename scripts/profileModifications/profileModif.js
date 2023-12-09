$(document).ready(function(){
    $('#SaveModifications').click(function(event){
        event.preventDefault();
        var name = $("input[name='name']").val();
        var firstName = $("input[name='name1']").val();
        var phone = $("input[name='phone']").val();
        var mail = $("input[name='email']").val();
        var ville = $("input[name='ville']").val();
        $('#loader').removeClass('hidden')
        $.ajax({
            type:"POST",
            url:"./Submit-changes.php",
            data:{
                name:name,
                name1:firstName,
                phone:phone,
                email:mail,
                ville:ville
            },
            success:function (response) {
                if(response === "success"){
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Votre profil a été modifié",
                        showConfirmButton: false,
                        timer: 3500
                    })
                      $('#loader').addClass('hidden');
                      
                }
            },
            error:function(response){
                console.log("error");
            }
        });
    });
});