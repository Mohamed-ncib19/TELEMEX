<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.tailwindcss.com"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

<style>

#loader {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  border-top: 3px solid #FFF;
  border-right: 3px solid transparent;
  box-sizing: border-box;
  animation: rotation 1s linear infinite;
}

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} 
</style>

<?php include"header-new.php";  ?>
<div class="  md:h-screen max-h-max w-full flex flex-col justify-center items-center md:gap-0 gap-4 transition-all duration-500" >



  
  <div class=" md:w-[98%] w-[95%] flex md:flex-row flex-col justify-around items-start md:gap-0 gap-8 md:mt-9 mt-[6rem] transition-all duration-500" >
    
    <div class=" md:w-[40%]   flex flex-col justify-between items-start md:gap-6 gap-4 transition-all duration-500" >

<div class="bg-[#D9D9D9]/[.4] shadow-lg shadow-gray-400 p-3 rounded-md leading-relaxed transition-all duration-500" >
  <h1 class="text-[#E92C24] font-semibold tracking-wide" >DEVENEZ COURSIER</h1>
  <p class="whitespace-normal tracking-wide font-normal text-[#1D1F62]" >Vous êtes jeunes et vous possédez un permis de conduire A ou B et vous aimeriez intégrer une start-up en pleine croissance, envoyez-nous votre <span class="text-[#2B2E86] font-bold" > CV</span> sur <span class="text-[#2B2E86] font-bold" > recrutement@telemex.cm</span></p>
</div>


<div class="bg-[#D9D9D9]/[.4] shadow-lg shadow-gray-400 p-3 rounded-md leading-relaxed  transition-all duration-500" >
  <h1 class="text-[#E92C24] font-semibold tracking-wide" >DEVENEZ PARTENAIRE</h1>
  <p class="whitespace-normal tracking-wide font-normal text-[#1D1F62]" >Vous êtes propriétaire d’une moto, d’un tricycle ou d’un véhicule Utilitaire, intégrer la flotte de véhicule Telemex de votre ville et boostez votre croissance. Remplir le formulaire ci-dessous</p>
</div>

   </div>

    


    <div class=" w-full transition-all duration-700" >
        <form id="enroulementForm" method="post"   class="flex flex-col gap-4 bg-[#D9D9D9]/[.4] shadow-lg shadow-gray-400 p-4 rounded-lg w-full">

        <div class=" w-full flex flex-col md:ietms-start ietms-center  space-y-1 transition-all duration-500" >
       <h1 class="text-[2rem] text-[#2B2E86] md:m-0 m-auto" >ENROULEMENT</h1>
      
      </div>

          <div class="flex md:flex-row flex-col gap-6" >
          <input class="bg-gray-50 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="nomER" type="text" placeholder="Nom*" required>
          <input class="bg-gray-50 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="prenomER" type="text" placeholder="Prénom*" required>
          </div>

          <div class="flex md:flex-row flex-col gap-6" >

        <input class="bg-gray-50 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="phoneER" type="number" placeholder="telephone*" required>
        
        <input class="bg-gray-50 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="emailER" type="email" placeholder="Email" required>
        </div>

        <input class="bg-gray-50 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="villeER" type="text" placeholder="ville" required>

          
        <div class="flex md:flex-row flex-col gap-6" >

            <select class=" rounded-md border-gray-300 w-full focus:ring-1 focus:ring-purple-500"  name="VehiculeER" required>
              <option disabled selected class="text-gray-200" >Type de véhicule</option>
              <option value="moto" class="p-8 max-h-max" >Moto</option>
              <option value="tricycle">Tricycle</option>
              <option value="Véhicule">Véhicule</option>
            </select>

            <input class="bg-gray-50 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="quantity" type="number" min="1" placeholder="Nombre" required>
            </div>

        
            <textarea class="bg-gray-50 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="messageER" placeholder="Laissez un message" style="padding-left: 20px;" required></textarea>
        
            <button class="p-4 md:w-[20%] w-[50%] flex flex-row justify-around m-auto items-center bg-red-600 text-white hover:bg-[#2B2E86] gap-1 rounded-full before:ease relative shadow-lg overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500" type="submit" >
            <p id="send" class="mr-2 animate__animated" >Valider</p>
              <span id="loader" class=" hidden animate__animated z-10"></span>
            </button>

            

        </form>

        
      </div>
      
      
    </div>
    
  </div>
  <script>
$(document).ready(function(){
  $("#enroulementForm").submit(function(event){
    event.preventDefault();
    
    var form=$(this);
    $('#send').addClass('animate__fadeInRight')
    $('#loader').removeClass('hidden')
    $('#loader').addClass('animate__fadeInRight')

    if(form[0].checkValidity()){
      $.ajax({
        type: "POST",
        url: "./submit.php",
        data: form.serialize(),
        success:function(response){

      if(response === "success"){
         Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Votre candidature a été envoyée",
            text:"Nous vous contacterons",
            showConfirmButton: false,
            timer: 3500
        })
          $('#loader').addClass('hidden');
          $('#send').removeClass('animate__fadeInRight')
          $('#loader').removeClass('animate__fadeInRight')
          setTimeout(function(){
          window.location.href="./index.php";
        },2000);
      }else if(response === "user_applied_before"){
          $('#loader').addClass('hidden');
          $('#send').removeClass('animate__fadeInRight')
          $('#loader').removeClass('animate__fadeInRight')
          Swal.fire({
            icon: "error",
            title: "votre Candidature déjà soumise",
            text: "Nous vous contacterons",
       
        });
        $('#loader').addClass('hidden');
        $('#send').removeClass('animate__fadeInRight')
        $('#loader').removeClass('animate__fadeInRight')
        return false;
        

      }else if(response === "error_with_system"){
          Swal.fire({
            icon: "error",
            title: "OPSS...",
            text: "erreur dans le système, Veuillez réessayer plus tard",
        });
        $('#loader').addClass('hidden');
        $('#send').removeClass('animate__fadeInRight')
        $('#loader').removeClass('animate__fadeInRight')
        return false;
      }
    },
      error:function(){
        Swal.fire({
          icon: "error",
          title: "Erreur survenue",
          text: "Quelque chose s'est mal passé ! Veuillez réessayer.",
        });
        $('#loader').addClass('hidden');
        $('#send').removeClass('animate__fadeInRight')
        $('#loader').removeClass('animate__fadeInRight')
        return false;

        }
      })
    }else{
      form[0].reportValidity();
    }

  })
})


   
  </script>
    
  <?php include"footer-new.php"; ?>