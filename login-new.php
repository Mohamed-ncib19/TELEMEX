
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Iconify Library-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <!--CSS Animate Library-->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  
  <script src="./scripts/auth/Authentification.js" defer></script>
  <script src="./scripts/SignUp/SignUp.js" defer></script>

  <link rel="stylesheet" href="./src/css/CountryPickerSignUp/mobiscroll.jquery.min.css">
    <script src="./src/js/CountryPickerSignUp/mobiscroll.jquery.min.js"></script>
  
    <?php include"header-new.php" ?>

    <style>
      #loginButton{
        background-color:#E92C24 ;
      }
      #loginButton:hover{
        background-color:#2B2E86 ;
      }
      @media screen and (min-width:1023px) {
        #Container{
          width: 90%;
        }
        #LoginSignUpContainer{
          height: 80vh;
        }
     
      }
      

      .md-country-picker-item {
    position: relative;
    line-height: 20px;
    padding: 10px 0 10px 40px;
}

.md-country-picker-flag {
    position: absolute;
    left: 0;
    height: 20px;
}

.mbsc-scroller-wheel-item-2d .md-country-picker-item {
    transform: scale(1.1);
}


    </style>

<div class="h-screen w-full flex flex-col justify-center items-center lg:mt-12 mt-4" >


<div id="Container"  class="flex flex-row justify-center items-center m-auto w-full h-screen " >
  <div id="backgroundContainer" class="w-full bg-[#D9D9D9]/[.4] h-[80vh] lg:flex hidden transition-all duration-700">
    <img id="background" class="w-full  shadow-xl shadow-gray-400 transition-all duration-700" src="./newdesign/images/login-background.png" alt="Bienvenue">
  </div>

  <div id="LoginSignUpContainer" class=" flex flex-col justify-center items-center w-[90vw] lg:h-full h-full lg:mt-0 lg:gap-6 gap-8  bg-[#D9D9D9]/[.5] shadow-lg shadow-gray-400 transition-all duration-700 " >
  <!--Login-->
   <div id="login-container" class="flex flex-col gap-6" >  
  <div class="flex justify-center items-center  text-[2rem] mt-20">
      <span class="text-[#2B2E86]" >CONNECTEZ-</span>
      <span class="text-[#E92C24]" >VOUS</span>
    </div>
   
    <div id="login-container">
      
        <form id="myForm" method="post"  class="flex flex-col gap-6 justify-start items-start w-full " >
          <div class=" ">
            <input class="  bg-gray-100  rounded-xl p-4 border-gray-300 lg:w-[30vw] w-[80vw]  focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="login" type="text" placeholder="Adresse e-mail ou numéro de téléphone"  required>
          </div>
          <div class="  relative">
            <input id="hs-toggle-login-password" class="  bg-gray-100 rounded-xl p-4 border-gray-300 lg:w-[30vw] w-[80vw] focus:ring-1 focus:ring-purple-500 transition-all duration-600 "name="password"  type="password" placeholder="Mot de passe"  required>
            <button type="button" id="ShowHideLoginPassword"  data-hs-toggle-login-password='{
        "target": "#hs-toggle-login-password"
      }' class="absolute top-2 end-0 p-3.5 rounded-e-md">
      <svg class="flex-shrink-0 w-3.5 h-3.5 text-gray-400 dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path class="hs-password-active:hidden " d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
        <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
        <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
        <line id="LineLoginPassword" class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"/>
        <path class="hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
        <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"/>
      </svg>
    </button>  
          </div>
          
          <div class="flex justify-start items-center mr-4 ">
            <div class="hover:bg-red-200 p-4 rounded-full cursor-pointer transition-all duration-500" >
            <input  id="save-me" type="checkbox" value="" class="w-4 h-4 p-2 cursor-pointer text-red-600 bg-gray-100 border-gray-400 rounded focus:ring-red-500 dark:focus:ring-[#E92C24] dark:ring-offset-gray-800 focus:ring-2  dark:border-gray-600 transition-all duration-400">
            </div>
            <label for="save-me" class=" text-sm font-medium text-gray-500 dark:text-gray-300">Se souvenir de moi</label>
          </div>
          <div class="w-full bg-transparent" >
     <button  type="submit" id="loginButton" class=" lg:w-[40%] w-[50%]  p-3 px-7 flex flex-row justify-center items-center m-auto gap-2 rounded-full before:ease relative shadow-lg overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500" >
      <p class="text-white" >Connexion</p>
      <iconify-icon icon="material-symbols:login" class="text-[1.5rem]" style="color: white;"></iconify-icon>
    </button>

    </div> 
        </form>
      

        
      </div>

      <div id="alert-2" class="hidden lg:w-[30vw] w-[90vw] space-x-2 justify-between m-auto lg:mx-auto absolute left-4 bottom-4 transition-all duration-200  animate__animated animate__backInUp" role="alert">
        <svg class="flex-shrink-0 w-4 h-4 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
           <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span id="alertDiv" class="m-auto"></span>
        
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8  dark:text-red-400" data-dismiss-target="#alert-2" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
        </button>
      </div>
    
   
  
    <div class="flex flex-col justify-center items-center gap-2" >
    <a class=" cursor-pointer text-[#E92C24] hover:text-[#2B2E86] hover:scale-105 transition-all duration-600" onclick="window.location.href = 'password-forget.php';">Mot de passe oublié ?</a>
    <p><span class="text-[#2B2E86]" >Vous n'avez aucun profil ?</span> <span  data-te-toggle="tooltip" title="créer un compte"  class=" cursor-pointer text-[#E92C24] hover:text-purple-700 hover:m-5 hover:scale-110 transition-all duration-700 font-semibold" id="signUp" >S'inscrire</span> </p>
    </div>

  </div>
<!--end Login-->

 
  <!--sign-up-->
  <div class=" w-full h-full flex-col justify-center items-center gap-8 hidden transition-all duration-700 animate__animated animate__slideInRight" id="sign-up-container" >
   
      <div id="inscription" class="text-center text-[#2B2E86] text-[2rem]">
        <span>INSCRIPTION
        </span>
      </div>
  
  <div class="flex flex-col justify-center items-center w-full gap-4 " >
  <div class="w-[90%]">
   
    <form id="registrationForm" class=" w-full flex flex-col justify-center items-center gap-4" method="post" action="register.php" >

        <div class=" w-full flex lg:flex-row flex-col justify-between items-center gap-4">
          <input class="   bg-gray-100 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="name" type="text" placeholder="Nom" required>
          <input class="  bg-gray-100 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="name1" type="text" placeholder="Prénom" required>
        </div>

        <div class="  w-full">
          <input class="  bg-gray-100 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="phone" type="text" placeholder="Numéro de téléphone" required>
        </div>

        <div class="  w-full flex lg:flex-row flex-col justify-between items-center gap-4">          
          <input class="  bg-gray-100 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="ville" type="text" placeholder="Ville" required>
         
          <div mbsc-page class="demo-country-picker w-full flex justify-center items-center ">        
          <label class="bg-gray-100 w-full border-gray-300 focus:ring-1 focus:ring-purple-500 transition-all duration-600" >
              Pays
              <input class="focus:ring-1 w-full focus:ring-purple-500 transition-all duration-600" name="pays" mbsc-input id="demo-country-picker" data-dropdown="true" data-input-style="box" data-label-style="stacked" placeholder="Sélectionnez votre pays" />
          </label>       
      </div>
        </div>






        

        <div class="  w-full">
          <input class="  w-full bg-gray-100 rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="email" type="email" placeholder="Email" required>
        </div>
        <div class="  w-full flex lg:flex-row flex-col justify-between items-center gap-4">
          
        <div class="relative w-full" >
          <input id="hs-toggle-password" class="   bg-gray-100 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="SignUppassword" type="password" placeholder="Mot de passe" required>
          <button type="button" id="ShowHidePassword"  data-hs-toggle-password='{
        "target": "#hs-toggle-password"
      }' class="absolute top-2 end-0 p-3.5 rounded-e-md">
      <svg class="flex-shrink-0 w-3.5 h-3.5 text-gray-400 dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
        <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
        <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
        <line id="LinePassword" class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"/>
        <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
        <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"/>
      </svg>
    </button>
        </div>

        <div class="relative w-full" >
            <input id="hs-toggle-confirme-password" class="  bg-gray-100 lg:w-[48%] w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" name="confirmpassword" type="password" placeholder="Confirmer le mot de passe*" required>
            <button type="button" id="ShowHideConfirmPassword"  data-hs-toggle-confirme-password='{
        "target": "#hs-toggle-confirme-password"
      }' class="absolute top-2 end-0 p-3.5 rounded-e-md">
      <svg class="flex-shrink-0 w-3.5 h-3.5 text-gray-400 dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path class="hs-password-active:hidden " d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
        <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
        <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
        <line id="LineConfirmePassword" class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"/>
        <path class="hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
        <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"/>
      </svg>
    </button>  
          </div>

        </div>




   

        <div class=" w-full float-left flex justify-start items-center gap-1" >
        <div class="hover:bg-purple-300 p-4 rounded-full cursor-pointer transition-all duration-500" >
                  <input  id="save-me" id="roundCheckbox" required type="checkbox" value="" class="w-4 h-4 p-2 cursor-pointer text-purple-600 bg-gray-100 border-gray-400 rounded focus:ring-purple-500 dark:focus:ring-[#E92C24] dark:ring-offset-gray-800 focus:ring-2  dark:border-gray-600 transition-all duration-400">
                </div>
                <p> <span class="text-lg font-normal text-[#2B2E86]" > J'ai lu et j'accepte </span>  <span data-te-toggle="tooltip" title="lire les conditions générales" onclick="window.location.href = 'condition-new.php';" class="text-[#E92C24] cursor-pointer font-semibold" >conditions générales</span></p>
        </div>

        <button id="registerButton" class="p-4 w-[30%] flex flex-row justify-center items-center bg-red-600 text-white hover:bg-[#2B2E86] gap-1 rounded-full before:ease relative shadow-lg overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500" type="submit" >
          <p>Valider</p>
          <iconify-icon class="text-[1.5rem]" icon="lgi:sign-in" style="color: white;"></iconify-icon>
        </button>

        <div class="flex lg:flex-row -mt-2 flex-col gap-1 justify-center items-center" >
          <p class="text-[#2B2E86]" >Vous avez déjà un compte ?</p>
          <button data-te-toggle="tooltip" title="connexion" id="logIn" class="cursor-pointer text-[#E92C24] hover:text-purple-700 lg:hover:ml-3 rounded-full  transition-all duration-700 font-semibold" type="submit">Connexion</button>
        </div>
      </form>
   
      
    

  </div>

  </div>

</div>
<div id="alert-3" class="hidden lg:w-[30vw] w-[90vw] space-x-2 justify-between m-auto lg:mx-auto absolute left-4 bottom-4 transition-all duration-200  animate__animated animate__backInUp" role="alert">
        <svg class="flex-shrink-0 w-4 h-4 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
           <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span id="alertSignUpDiv" class="m-auto"></span>
        
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8  dark:text-red-400" data-dismiss-target="#alert-3" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
        </button>
      </div>
<!--end sign-up-->

</div>

</div>


<!--Success Alert Login-->
<div id="successAlert" class="hidden lg:w-[30vw] w-[90vw] space-x-2 justify-between m-auto lg:mx-auto absolute left-4 bottom-4 transition-all duration-200  animate__animated animate__backInUp">
    <div  class="bg-green-200 border-l-4 border-green-500 text-green-900 px-4 py-3 rounded relative">
        <span class="block sm:inline">Success! Your action was successful.</span>
    </div>
</div>

<!--Success Alert SignUp-->
<div id="successAlertSignUp" class="hidden lg:w-[30vw] w-[90vw] space-x-2 justify-between m-auto lg:mx-auto absolute left-4 bottom-4 transition-all duration-200  animate__animated animate__backInUp">
    <div  class="bg-green-200 border-l-4 border-green-500 text-green-900 px-4 py-3 rounded relative">
        <span class="block sm:inline">Success! Your action was successful.</span>
    </div>
</div>

</div>


<?php  include"footer-new.php" ?>



<script>

const loginContainer = document.querySelector('#login-container');
const signUpButton = document.querySelector('#signUp');
const signUpContainer = document.querySelector('#sign-up-container');
const logInButtonFromSignUp = document.querySelector('#logIn');
const Container = document.querySelector('#Container');
const backgroundContainerImage =document.querySelector('#backgroundContainer')
const backgroundImgContainer =document.querySelector('#background');
const LoginSignUpContainer =document.querySelector('#LoginSignUpContainer');


signUpButton.addEventListener('click',()=>{
  signUpContainer.classList.remove('hidden');
  loginContainer.classList.add('hidden');
  LoginSignUpContainer.classList.remove('h-full')
  LoginSignUpContainer.classList.add('max-h-max')
  LoginSignUpContainer.classList.add('mt-[13pc]')
  Container.classList.remove('flex-row');
  Container.classList.add('flex-row-reverse')
  backgroundContainerImage.classList.add('animate__animated');
  backgroundContainerImage.classList.remove('animate__slideInRight'); 
  backgroundContainerImage.classList.add('animate__slideInLeft'); 
  backgroundImgContainer.src="./newdesign/images/signup-background.png"
});

logInButtonFromSignUp.addEventListener('click', () => {
  loginContainer.classList.remove('hidden');
  signUpContainer.classList.add('hidden');
  LoginSignUpContainer.classList.remove('max-h-max')
  LoginSignUpContainer.classList.remove('mt-[13pc]')
  LoginSignUpContainer.classList.add('h-full')
  loginContainer.classList.add('animate__animated');
  loginContainer.classList.add('animate__slideInLeft')
  Container.classList.remove('flex-row-reverse');
  Container.classList.add('flex-row')
  signUpContainer.classList.add('hidden');
  backgroundContainerImage.classList.remove('animate__slideInLeft');
  backgroundContainerImage.classList.add('animate__slideInRight'); 
  backgroundImgContainer.src="./newdesign/images/login-background.png"
})
</script>





     

<script>
        mobiscroll.setOptions({
        locale: mobiscroll.localeAr,       
        theme: 'ios',                      
            themeVariant: 'light'          
    });
    
    $(function () {
        var inst = $('#demo-country-picker').mobiscroll().select({
            display: 'anchored',           
            filter: true,                  
            itemHeight: 40,                
            renderItem: function (item) {  
                return '<div class="md-country-picker-item">' +
                    '<img class="md-country-picker-flag" src="https://img.mobiscroll.com/demos/flags/' + item.data.value + '.png" />' +
                    item.display + '</div>';
            }
        }).mobiscroll('getInst');
    
        $.getJSON('https://trial.mobiscroll.com/content/countries.json', function (resp) {
            var countries = [];
            for (var i = 0; i < resp.length; ++i) {
                var country = resp[i];
                countries.push({ text: country.text, value: country.value });
            }
            inst.setOptions({ data: countries });
            
        });
       
    });
</script>


<script>
//Show Hide login Password
var LoginPasswordInput = document.querySelector('#hs-toggle-Login-password');
    var ShowHideLoginPassword =document.querySelector('#ShowHideLoginPassword');
    var LineLoginePassword =document.querySelector('#LineLoginPassword');
    ShowHideLoginPassword.addEventListener('click',()=>{
      if (LoginPasswordInput.type === "password") {
      LoginPasswordInput.type = "text";
      LineLoginePassword.classList.add('hidden')
  }else{
    LoginPasswordInput.type = "password";
    LineLoginePassword.classList.remove('hidden')
  }
    });

//Show Hide SignUp Password
    var passwordInput = document.querySelector('#hs-toggle-password');
    var ShowHidePassword =document.querySelector('#ShowHidePassword');
    var LinePassword =document.querySelector('#LinePassword');
    ShowHidePassword.addEventListener('click',()=>{
      if (passwordInput.type === "password") {
      passwordInput.type = "text";
      LinePassword.classList.add('hidden');
  }else{
    passwordInput.type = "password";
    LinePassword.classList.remove('hidden');
  }
    });
//Show Hide Confirm Password
    var ConfirmPasswordInput = document.querySelector('#hs-toggle-confirme-password');
    var ShowHideConfirmPassword =document.querySelector('#ShowHideConfirmPassword');
    var LineConfirmePassword =document.querySelector('#LineConfirmePassword');
    ShowHideConfirmPassword.addEventListener('click',()=>{
      if (ConfirmPasswordInput.type === "password") {
      ConfirmPasswordInput.type = "text";
      LineConfirmePassword.classList.add('hidden')
  }else{
    ConfirmPasswordInput.type = "password";
    LineConfirmePassword.classList.remove('hidden')
  }
    });
</script>