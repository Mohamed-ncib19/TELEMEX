
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<script src="https://kit.fontawesome.com/5cf19f275e.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="./scripts/profileModifications/profileModif.js" defer></script>
  <script src="./scripts/profileModifications/changePassword.js" defer></script>


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


<?php include"header-new.php" ?>



<div> <?php if($_SESSION['login_user']){ ?> </div>
<div class=" max-h-max  flex justify-center items-center mt-20 " >
    <div class="flex md:flex-row flex-col justify-around items-start w-full max-h-max" >

      <div class=" bg-gradient-to-tr from-[#E92C24]/[.3] to-[#2B2E86]/[.3] flex flex-col justify-center items-center rounded-lg lg:h-[30vh] lg:w-[30%] w-[90%] lg:m-0 m-auto lg:mb-0 mb-4 shadow-md border-gray-200" >
       
        <iconify-icon icon="mingcute:user-4-fill" class="text-[#2b2e86] text-[8rem]" ></iconify-icon>
        <div class="flex flex-col justify-center items-center w-full gap-1 p-3 text-gray-800 font-mono tracking-wide text-center "> 
          <?php if($_SESSION['type'] === "admin"){?>
          <h1>Bienvenue ,Admin</h1>
        <?php }else{ ?>
        
          <p class="text-[1.5rem]" > Bienvenue, <?php echo ucfirst( $_SESSION['prenom'])." ". ucfirst( $_SESSION['login_user']); ?></p>
                 <?php } ?>
        </div>
      </div>

      <div class=" flex flex-col bg-[#D9D9D9]/[.6] rounded lg:justify-start justify-center lg:items-start items-center lg:w-[65%] w-[90%] lg:m-0 m-auto" >
        <div class=" w-full px-4 py-2 border-b border-gray-700 flex flex-row justify-between" >
          <div>
          <h1 class="text-[1.5rem]" >Compte</h1>
          <p class="text-[1rem]" >Gérer votre compte</p>
          </div>
          <button id="modify-Profile" class="flex justify-center items-center " >
           <i class="fa-regular fa-pen-to-square text-[2rem] text-[#5A5DA6] hover:text-red-500 p-2 m-auto rounded-xl" ></i>
          </button>
        </div>

        <form id="registrationForm" method="post" class="flex flex-col justify-between items-start gap-2  p-2 w-full" >
          <div>
            <h1 class="text-[1.4rem]" >Détails</h1>
          </div>
        <div class="flex lg:flex-row flex-col justify-between  w-[70%] gap-8 p-2" >
            <input name="name" id="name" type="text" class="bg-gray-100  rounded-xl p-4 border-gray-300 lg:w-[20vw] w-[80vw] focus:ring-1 focus:ring-purple-500 transition-all duration-400 disabled:bg-slate-50 disabled:text-slate-500  disabled:shadow-none tracking-wider font-normal"
             placeholder="Nom" disabled value="<?php echo $_SESSION['login_user'] ?>">
          
            <input name="name1" id="firstName" type="text" class="bg-gray-100  rounded-xl p-4 border-gray-300 lg:w-[20vw] w-[80vw] focus:ring-1 focus:ring-purple-500 transition-all duration-400 disabled:bg-slate-50 disabled:text-slate-500  disabled:shadow-none tracking-wider font-normal" placeholder="Prénom" disabled value="<?php echo $_SESSION['prenom'] ?>">
            </div>
            <div class="flex lg:flex-row flex-col justify-between  w-[70%] gap-8 p-2"  >
              <input name="phone" id="phone" type="text" class="bg-gray-100  rounded-xl p-4 border-gray-300 lg:w-[20vw] w-[80vw] focus:ring-1 focus:ring-purple-500 transition-all duration-400 disabled:bg-slate-50 disabled:text-slate-500  disabled:shadow-none tracking-wider font-normal" placeholder="Numéro de téléphone" disabled value="<?php echo $_SESSION['telephone'] ?>">
              <input name="email" id="email" type="email" class="bg-gray-100  rounded-xl p-4 border-gray-300 lg:w-[20vw] w-[80vw] focus:ring-1 focus:ring-purple-500 transition-all duration-400 disabled:bg-slate-50 disabled:text-slate-500  disabled:shadow-none tracking-wider font-normal" placeholder="Email" disabled value="<?php echo $_SESSION['email'] ?>">
            </div>

            <div class="flex lg:flex-row flex-col justify-between  w-[70%] gap-8 p-2" >
            <input name="ville" id="ville" type="text" class="bg-gray-100  rounded-xl p-4 border-gray-300 lg:w-[20vw] w-[80vw] focus:ring-1 focus:ring-purple-500 transition-all duration-400 disabled:bg-slate-50 disabled:text-slate-500  disabled:shadow-none tracking-wider font-normal" placeholder="Ville" disabled value="<?php echo $_SESSION['adresse'] ?>">
          </div>
          <div class="flex justify-start items-start w-full p-3 " >
            <button 
            id="SaveModifications"
            type="submit"
            class=" hidden p-4 px-7 animate__animated animate__fadeInRight bg-red-600 text-white flex-row justify-center lg:items-start items-center lg:m-0 m-auto gap-2  rounded-full before:ease relative shadow-lg overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-700"
            >
            <p>Enregistrer les modifications</p>
            <span id="loader" class="hidden z-10"></span>
            </button>
            </form>

            <script>
              const modifyButton = document.querySelector('#modify-Profile');
              const saveChanges = document.querySelector("#SaveModifications");
              const nameInput =document.querySelector('#name')
              const firstName =document.querySelector('#firstName')
              const phone =document.querySelector('#phone')
              const email =document.querySelector('#email')
              const ville =document.querySelector('#ville')
              modifyButton.addEventListener('click',()=>{
                saveChanges.classList.remove('hidden')
                saveChanges.classList.add('flex')
                nameInput.removeAttribute('disabled')
                firstName.removeAttribute('disabled')
                phone.removeAttribute('disabled')
                email.removeAttribute('disabled')
                ville.removeAttribute('disabled');
                nameInput.focus();
               
              })
            </script>
          </div>
          
         
            <form id="changingPassword" method="post" class="flex flex-col p-2 gap-4 lg:justify-start lg:items-start  lg:w-full  transition-all duration-700 " >
            <h1 class="text-[1.4rem]" >Changer le mot de passe</h1>

            <div class="flex flex-col justify-center items-start gap-2" >
            <div class="relative" >
              <input 
              name="password"
              type="password"
              id="hs-toogle-current-password"
              placeholder="Mot de passe actuel"
              class="bg-gray-100 rounded-xl p-4 border-gray-300 lg:w-[20vw] w-[80vw] focus:ring-3 focus:border-purple-500   focus:ring-purple-500 transition-all duration-500"
             
              >
              <button type="button" id="ShowHideCurrentPassword" data-hs-toogle-current-password='{
                    "target": "#hs-toogle-current-password"
                  }' class="absolute text-red-700 top-2 end-0 p-3.5 rounded-e-md">
                  <svg class="flex-shrink-0 w-3.5 h-3.5 text-black dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path class="hs-password-active:hidden " d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
                    <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
                    <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
                    <line id="LineCurrentPassword" class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"/>
                    <path class="hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                    <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"/>
                  </svg>
                </button> 
                
            </div>
            <p id="alertWrongCurrentPassword" class="animate__animated animate__fadeInLeft hidden text-sm ml-2 text-red-600 rounded-r-md  justify-center items-center gap-1 tracking-wider" > <span class="text-[1.5rem]" >!</span> incompatible password</p>
            </div>

            <div>
            <div class="relative" >

              <input
              name="newPassword"
              type="password"
              id="hs-toogle-new-password"
              placeholder="Nouveau mot de passe"
              class="bg-gray-100 rounded-xl p-4 border-gray-300 lg:w-[20vw] w-[80vw] focus:ring-3 focus:border-purple-500   focus:ring-purple-500  transition-all duration-500"
              >
              <button type="button" id="ShowHideNewPassword" data-hs-toogle-new-password='{
                    "target": "#hs-toogle-new-password"
                  }' class="absolute text-red-700 top-2 end-0 p-3.5 rounded-e-md">
                  <svg class="flex-shrink-0 w-3.5 h-3.5 text-black dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path class="hs-password-active:hidden " d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
                    <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
                    <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
                    <line id="LineNewPassword" class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"/>
                    <path class="hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                    <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"/>
                  </svg>
                </button> 
            </div>
            <p id="alertWrongNewPassword" class="animate__animated animate__fadeInLeft hidden text-sm ml-2 text-red-600 rounded-r-md  justify-center items-center gap-1 tracking-wider" > <span class="text-[1.5rem]" >!</span> short password</p>

            </div>
            <div>
            <div class="relative" >

              <input
              name="confirmpassword"
              type="password"
              id="hs-toogle-confirm-new-password"
              placeholder="Confirmer le mot de passe*"
              class="bg-gray-100 rounded-xl p-4 border-gray-300 lg:w-[20vw] w-[80vw] focus:ring-3 focus:ring-purple-500 transition-all duration-500"
              >
               <button type="button" id="ShowHideConfirmNewPassword" data-hs-toogle-confirm-new-password='{
                    "target": "#hs-toogle-confirm-new-password"
                  }' class="absolute text-red-700 top-2 end-0 p-3.5 rounded-e-md">
                  <svg class="flex-shrink-0 w-3.5 h-3.5 text-black dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path class="hs-password-active:hidden " d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
                    <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
                    <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
                    <line id="LineconfirmNewPassword" class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"/>
                    <path class="hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                    <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"/>
                  </svg>
                </button>
            </div>
            <p id="alertWrongConfirmNewPassword" class="animate__animated animate__fadeInLeft hidden text-sm ml-2 text-red-600 rounded-r-md  justify-center items-center gap-1 tracking-wider" > <span class="text-[1.5rem]" >!</span> incompatible password</p>

            </div>
          
            <div class="flex justify-start items-start p-3 " >
            <button 
            id="savePasswordChanging"
            type="submit"
            class=" p-4 px-7   flex bg-red-600 text-white flex-row justify-center lg:items-start items-center lg:m-0 m-auto gap-2  rounded-full before:ease relative shadow-lg overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-700"
            >
            <p>Enregistrer les modifications</p>
            <span id="loader" class="hidden z-10"></span>

            </button>
          </div>
        </form>
          


      </div>
    </div>

    
  </div>
  

<script>
  //Show Hide login Password
var CurrentPasswordInput = document.querySelector('#hs-toogle-current-password');
    var ShowHideCurrentPassword =document.querySelector('#ShowHideCurrentPassword');
    var LineCurrentPassword =document.querySelector('#LineCurrentPassword');
    ShowHideCurrentPassword.addEventListener('click',()=>{
      if (CurrentPasswordInput.type === "password") {
        CurrentPasswordInput.type = "text";
        LineCurrentPassword.classList.add('hidden')
  }else{
    CurrentPasswordInput.type = "password";
    LineCurrentPassword.classList.remove('hidden')
  }
    });
      //Show Hide new Password
var NewPasswordInput = document.querySelector('#hs-toogle-new-password');
    var ShowHideNewPassword =document.querySelector('#ShowHideNewPassword');
    var LineNewPassword =document.querySelector('#LineNewPassword');
    ShowHideNewPassword.addEventListener('click',()=>{
      console.log(NewPasswordInput,ShowHideNewPassword,LineNewPassword)
      if (NewPasswordInput.type === "password") {
        NewPasswordInput.type = "text";
        LineNewPassword.classList.add('hidden')
  }else{
    NewPasswordInput.type = "password";
    LineNewPassword.classList.remove('hidden')
  }
    });
      //Show Hide confirm New Password
 var ConfirmePasswordInput = document.querySelector('#hs-toogle-confirm-new-password');
    var ShowHideConfirmePasswordPassword =document.querySelector('#ShowHideConfirmNewPassword');
    var LineConfirmePasswordPassword =document.querySelector('#LineconfirmNewPassword');
    ShowHideConfirmePasswordPassword.addEventListener('click',()=>{
      if (ConfirmePasswordInput.type === "password") {
        ConfirmePasswordInput.type = "text";
        LineConfirmePasswordPassword.classList.add('hidden')
  }else{
    ConfirmePasswordInput.type = "password";
    LineConfirmePasswordPassword.classList.remove('hidden')
  } 
    });
</script>

<div> <?php } ?> </div>
 






  <?php include"footer-new.php" ?>