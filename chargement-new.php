<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="./CountriesData/fetchCountriesCharg.js" defer></script>
  <script src="./CountriesData/fetchCountriesLiv.js" defer></script>

<?php  include "header-new.php"; ?>
<?php if((isset($_SESSION['login_user'])) ) { ?>

<div class="h-screen ">


<div class=" bg-[url('./newdesign/images/envoyer-un-colis.jpg')] bg-no-repeat bg-fixed  lg:h-[50vh] h-[30vh] w-full lg:bg-cover mt-16" >

    <div class="bg-black w-full h-full bg-opacity-50 inset-0 flex flex-col justify-center items-start" >
        <div class="  lg:mx-5 mx-2 flex  flex-col lg:gap-7 gap-3  w-full" >
            <h1 class="lg:text-[3rem] text-[2rem] text-white tracking-wide font-semibold" >ENVOYER UN <span class="text-[#E92C24]" >COLIS</span></h1>
            <p class="lg:text-[1.5rem] text-[1rem] text-white lg:mx-6 mx-2 tracking-wider" >Veuillez remplir le formulaire suivant</p>
        </div>
    </div>
   
</div>

<form id="myForm" class="lg:w-[70%] w-[90%] m-auto bg-[#D9D9D9]/[.4] rounded-lg mt-2" action="post-charg.php" method="POST" enctype="multipart/form-data">

      
            <div class="text-[#E92C24] text-[2.5rem] p-5  lg:w-[40%] w-full text-center " >
                <p>Caractéristiques</p>
            </div>

      


        <div >
            <div >
                <div >
                    <div >
                        <div >

                        <div class="flex lg:flex-row flex-col justify-around items-center gap-4 bg-gray-200 rounded-xl p-2">
                                <div class=" flex flex-col justify-around gap-8 p-2 lg:w-[40%] w-full" >
                                        <select name="marchandise" id="marchandise" required class="w-full bg-gray-50  rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600 " >
                                            <option value="" selected disabled> Type de colis*</option>
                                            <option value="repas">repas</option>
                                            <option value="plis">plis</option>
                                            <option value="Médicaments">Médicaments</option>
                                            <option value="Vêtements">Vêtements</option>
                                            <option value="Sac à main">Sac à main</option>
                                            <option value="téléphone">téléphone</option>
                                            <option value="petit colis">petit colis</option>
                                            <option value="Autres">Autres</option>
                                        </select>


                                        <textarea placeholder="Plus de details sur votre marchandise" name="details_march" class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" ></textarea>
                                        
                                        
                                        <select  name="type_vehicule" class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" id="vehicule" required onChange="changecat(this.value);">
                                            <option value="" selected disabled>Type de véhicule*</option>
                                            <option value="Moto">Moto</option>
                                            <option value="Tricycle">Tricycle</option>
                                            <option value="Van">Van</option>
                                        </select>
                                    </div>
                                        

                            <!--upload image-->
                                <div class=" max-w-sm" >

                                    <p >
                                        Image du colis :
                                    </p>

                                    <input id="file" type="file" class="hidden" name="img_march"
                                    onchange="previewFile()" required>
                                        <div class="" >
                                            <label for="file"  >

                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    viewBox="0 0 22 22" fill="none" class=" absolute m-2" >
                                                    <path
                                                        d="M11.1393 0C5.14403 0 0.27832 4.86571 0.27832 10.861C0.27832 16.8562 5.14403 21.7219 11.1393 21.7219C17.1345 21.7219 22.0002 16.8562 22.0002 10.861C22.0002 4.86571 17.1345 0 11.1393 0ZM16.5698 11.9471H12.2254V16.2914H10.0532V11.9471H5.7088V9.77487H10.0532V5.43048H12.2254V9.77487H16.5698V11.9471Z"
                                                        fill="#E92C24" />
                                                </svg>

                                                    <img id="blah" class="relative   m-auto bg-contain" src="newdesign/images/pile.png" />
                                               
                                            </label>
                                        </div>

                                </div>
                            </div>

                           <script>
                            function previewFile(){
                            const inputImage =  document.querySelector('#file').files[0];
                            const imageLabel = document.querySelector('#blah');
                            const reader = new FileReader();
                           
                            reader.addEventListener(
                                "load",
                                ()=>{
                                   // Adjust to your desired height
                                   imageLabel.classList.add('w-[30%]')
                                   imageLabel.classList.add('h-[30%]')
                                    imageLabel.src =reader.result;
                                   
                                },
                                false,

                            );
                            if(inputImage){
                                reader.readAsDataURL(inputImage);
                            }
                        }
                           </script>


                                   
                                       
                                    
                                
<div class="flex lg:flex-row flex-col justify-around items-center p-2" >

<div class=" lg:w-[30%] w-full flex flex-col justify-center items-center gap-4 lg:mt-2 mt-6" >
                                      
<!-- Modal toggle -->
<button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="flex justify-between items-center gap-4 shadow-lg hover:bg-[#2B2E86]/[.9] transition-all duration-500 text-white bg-red-600 focus:ring-4 focus:outline-none  rounded-lg p-2" type="button">
<p>Adresse d'enlèvement</p>
<iconify-icon icon="icomoon-free:location" class="text-[1.5rem]" style="color: white;"></iconify-icon>
</button>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class=" animate__animated animate__fadeInUp hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full lg:inset-0 h-[calc(100%-1rem)] max-h-max">
    <div class="relative p-4 lg:w-[50%] w-[90%] h-[50%]">
        <!-- Modal content -->
        <div class="relative  bg-gradient-to-bl from-[#092663]/[.5] to-[#503387] backdrop-brightness-125 backdrop-blur-xl rounded-xl shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 lg:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Adresse d'enlèvement
                </h3>
                <button type="button" class=" bg-transparent text-gray-300 hover:text-white hover:bg-gray-100/[.1]  rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  " data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class=" w-[80%] flex flex-col justify-center m-auto gap-4 p-2 mt-5" >

            <div class="flex md:flex-row flex-col justify-between gap-4" >
            <select type="text" name="pays_charg" id="pays4" onchange="initialize()"
            class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600"
                                            placeholder="Pays *" required onchange=""initialize() >
                                            <option value="" selected disabled>Pays de Chargement</option>
                                            <option  value="Cameroun"
                                                style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
                                                Cameroun</option>
                                            <option value="Senegal"
                                                style="background:url('./img/flags/senegal.jpg') no-repeat; width:30px; height:30px;">
                                                Senegal</option>
                                            <option value="Côte dIvoire"
                                                style="background:url('./img/flags/ivoire.png') no-repeat; width:30px; height:30px;">
                                                Côte d'Ivoire</option>
                                            <option value="Togo"
                                                style="background:url('./img/flags/togo.png') no-repeat; width:30px; height:30px;">
                                                Togo</option>
                                            <option value="Congo(R)"
                                                style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
                                                Congo(R)</option>
                                            <option value="Gabon"
                                                style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
                                                Gabon</option>
                                            <option value="Tchad"
                                                style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
                                                Tchad</option>
                                            <option value="République centrafricaine"
                                                style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                République centrafricaine</option>
                                            <option value="Guinée équatoriale"
                                                style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                Guinée équatoriale</option>
                                        </select>



                                        <select name="ville_charg" id="ville4" class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" placeholder="Ville charge" required>
                                            <option id="ville_ch" value="" selected disabled>Ville(choose country first)</option>
                                        </select>
                                            
                                            </div>


                                            <div>
                                        <div class="hidden" >
                                            <div  id="lat_area">
                                                <label for="latitude"> Latitude </label>
                                                <input type="text" name="latitude" id="latitude" >
                                            </div>

                                            <div  id="long_area">
                                                <label for="latitude"> Longitude </label>
                                                <input type="text" name="longitude" id="longitude">
                                            </div>
                                        </div>
                                        
                                        </div>
                                        
                                        <input type="text" id="adresse_charg" placeholder="Adresse charge *" class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" required >
                                        <div class="border-b border-gray-200 pt-4 m-auto w-[20%]" ></div>

                                        <button data-modal-toggle="crud-modal" type="button" class="lg:w-[30%] w-[50%] my-4 text-gray-200 hover:text-white  p-3 px-7 bg-[#E92C24] flex flex-row justify-center items-center m-auto gap-2 rounded-xl before:ease relative shadow-lg overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500" id="getLocation" >DONE</button>
                                           
                                     
                                     
                                    </div>

        </div>
    </div>
</div> 
<!--end of modal-->

                         
                                  
                                    
<!-- onclick="getDistanceAndPrice()" -->

<div class="flex flex-row justify-center items-center bg-gray-50 rounded-lg relative w-full">
    <label for="date_charg">
        <iconify-icon icon="uil:calender" class="absolute font-bold text-[1.5rem] cursor-pointer right-4 top-1/2 transform -translate-y-1/2 text-red-500" onclick="document.querySelector('#timeInput').click();" ></iconify-icon>

    </label>
    <input type="datetime-local" placeholder="Heure de ramassage" class="w-full bg-gray-50 rounded-lg p-4 text-red-500 after:font-extrabold border-gray-300 focus:ring-1 focus:ring-purple-500 transition-all duration-700" id="timeInput" name="date_charg" required>
</div>


                                    <script>
                                        var dateInput =document.querySelector('#timeInput');

                                        flatpickr(dateInput, {
                                                enableTime: true,
                                                dateFormat: "Y-m-d H:i",
                                               
                                            });

                                    
                                    </script>





<div class="flex flex-row justify-between items-center w-full" >
<label for="contactPersonD1">Expéditeur: Moi même</label>
<label class="relative inline-flex items-center me-5 cursor-pointer">
  <input type="checkbox" value="" class="sr-only peer"  name="contactPersonD1" id="contactPersonD1" >
  <div class="w-11 h-6  bg-gray-200 rounded-full  dark:bg-red-600 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white   after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all duration-600 checked:ring-green-600  peer-checked:bg-green-500"></div>
</label>
</div>                                       


                                    
                                    
                                        <input class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" id="name_expediteur" name="name_expediteur"
                                            required type="text"
                                            required
                                            placeholder="Nom expéditeur"
                                            >
                                    
                                
                            
                                   
                                    
                                        <input class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600"  name="telephone_expediteur" type="number"
                                            id="telephone_expediteur" 
                                            required
                                            placeholder="Téléphone expéditeur"
                                            >
                                    
                             

</div>

<div class=" lg:w-[30%] w-full flex flex-col justify-between  items-center gap-4 lg:mt-2 mt-6" >

<button data-modal-target="crud-modal-liv" data-modal-toggle="crud-modal-liv" class="flex justify-between items-center gap-4 shadow-lg hover:bg-[#2B2E86]/[.9] transition-all duration-500 text-white bg-red-600 focus:ring-4 focus:outline-none  rounded-lg p-2" type="button">
<p>Adresse de déstinataire</p>
<iconify-icon icon="icomoon-free:location" class="text-[1.5rem]" style="color: white;"></iconify-icon>
</button>

<!-- Main modal -->
<div id="crud-modal-liv" tabindex="-1" aria-hidden="true" class=" animate__animated animate__fadeInUp hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full lg:inset-0 h-[calc(100%-1rem)] max-h-max">
    <div class="relative p-4 lg:w-[50%] w-[90%] h-[50%]">
        <!-- Modal content -->
        <div class="relative bg-gradient-to-bl from-[#092663]/[.5] to-[#503387] backdrop-brightness-125 backdrop-blur-xl rounded-xl shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 lg:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Adresse de livraison
                </h3>
                <button type="button" class=" bg-transparent text-gray-300 hover:text-[white] hover:bg-gray-100/[.1] rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-toggle="crud-modal-liv">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class=" w-[80%] flex flex-col justify-center m-auto gap-4 p-2 mt-5" >

            <div class="flex md:flex-row flex-col justify-between gap-4" >
            <select type="text" name="pays_liv" id="pays5" onchange="initializeLiv()"
            class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600"
                                            placeholder="Pays *">
                                            <option value="" selected disabled>Pays
                                        de Livraison</option>
                                            <option value="Cameroun"
                                                style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
                                                Cameroun</option>
                                            <option value="Senegal"
                                                style="background:url('./img/flags/senegal.jpg') no-repeat; width:30px; height:30px;">
                                                Senegal</option>
                                            <option value="Côte d'Ivoire"
                                                style="background:url('./img/flags/ivoire.png') no-repeat; width:30px; height:30px;">
                                                Côte d'Ivoire</option>
                                            <option value="Togo"
                                                style="background:url('./img/flags/togo.png') no-repeat; width:30px; height:30px;">
                                                Togo</option>
                                            <option value="Congo(R)"
                                                style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
                                                Congo(R)</option>
                                            <option value="Gabon"
                                                style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
                                                Gabon</option>
                                            <option value="Tchad"
                                                style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
                                                Tchad</option>
                                            <option value="République centrafricaine"
                                                style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                République centrafricaine</option>
                                            <option value="Guinée équatoriale"
                                                style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                Guinée équatoriale</option>
                                        </select>



                                        <select name="ville_liv" id="ville5" class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600">
                                            <option value="" selected>Ville de livraison</option>
                                        </select>

                       
                                            </div>


                                            <div>
                                            <div class="hidden" >


<div  id="lat_area">
    <label for="latitude"> Latitude </label>
    <input type="text" name="latitude1" disabled id="latitude1">
</div>

<div  id="long_area">
    <label for="latitude"> Longitude </label>
    <input type="text" name="longitude1" disabled id="longitude1"
        >
</div>
</div>
<div class="hidden" >
                                            <div >Temps estimé pour
                                                l’enlèvement</div>
                                            <div >
                                                <input type="time" name="date_liv" id="date_liv" class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" >
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <input type="text"  id="adresse_liv" placeholder="Adresse livraison *" class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" required >
                                        <div class="border-b border-gray-200 pt-4 m-auto w-[20%]" ></div>
                                        
                                        <button data-modal-toggle="crud-modal" type="button" class="lg:w-[30%] w-[50%] my-4 text-gray-200 hover:text-white  p-3 px-7 bg-[#E92C24] flex flex-row justify-center items-center m-auto gap-2 rounded-xl before:ease relative shadow-lg overflow-hidden transition-all before:absolute before:right-0 before:top-0 before:h-12 before:w-6 before:translate-x-12 before:rotate-6 before:bg-white before:opacity-10 before:duration-700 hover:before:-translate-x-40 duration-500" id="getLocation" >DONE</button>
                                    </div>

        </div>
    </div>
</div> 
<!--end of modal-->

<select  name="type_livraison" class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600" id="vehicule" required onChange="changecat(this.value);">
                                            <option value="" selected disabled>Type de livraison*</option>
                                            <option value="Moto">Livraison rapide</option>
                                            <option value="Tricycle">Livraison Urgente</option>
                                            <option value="Van">Livraison Efficace</option>
                                        </select>

<div class="flex flex-row justify-between items-center w-full" >
<label for="contactPersonX1">Destinataire: Moi même</label>
<label class="relative inline-flex items-center me-5 cursor-pointer">
  <input type="checkbox" value="" class="sr-only peer"  name="contactPersonX1" id="contactPersonX1" >
  <div class="w-11 h-6  bg-gray-200 rounded-full  dark:bg-red-600 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white   after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all duration-600 checked:ring-green-600  peer-checked:bg-green-500"></div>
</label>
</div> 







                              
                                        <input name="contact_name" id="contact_name"
                                            type="text" placeholder="Nom du destinataire"
                                            class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600"
                                             required>
                                  

                                        <input name="contact_phone" id="contact_phone"
                                        placeholder="Téléphone du destinataire"
                                        class="bg-gray-50  w-full rounded-xl p-4 border-gray-300   focus:ring-1 focus:ring-purple-500 transition-all duration-600"
                                        type="number" required="">
                                  

</div>

                               
</div>           

<div class="hidden" >
                                            <div >
                                                Distance(Km) :</div>
                                            <div >

                                                <input type="number" name="distance" id="distance" value="0" disabled>
                                            </div>

                                        </div>

                <div >
                    <div >
                        <div >
                            
    
                    
                            <div >


                                <div >
                                    <div >
                                        Montant Estimer(XAF) : <span >*</span>
                                    </div>
                                    <div >
                                        <input type="number" name="priceestimated"
                                            id="priceestimated"
                                            style="  pointer-events: <?php echo $_SESSION['type']!="client"?'none':''; ?>;padding-left: 20px;width:  100%!important;" required >
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </div>





   
        <div  id="FACULTATIF">

            <div  >
                <div >
                    <span>Facultatif
                    </span>
                </div>

            </div>
            <div >
                <div>
                    <div  >
                        <div >
                            <div >


                                <div >
                                    <div >
                                        <div >
                                            Proposer un Prix
                                        </div>
                                        <div>
                                            <div >
                                                <input type="checkbox"  name="prop_prix"
                                                    id="myonoffswitch88" onclick="activate()">
                                                <label  for="myonoffswitch88">
                                                    <span ></span>
                                                    <span ></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div id="prixprop" >
                                            <div >
                                                <input type="number" placeholder="Prix"
                                                    onchange="form1.deviseval.value=form1.devise.value" name="prix_prop"
                                                    
                                                    >
                                            </div>
                                            <div >
                                                <select name="devise" 
                                                    onclick="form1.deviseval.value=form1.devise.value"
                                                    >
                                                    <option value="FCFA">FCFA</option>
                                                    <option value="EURO">EURO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div  id="prixpropdetails" >
                                    <div >
                                        <div >
                                            Modalité de payement <span >*</span>
                                        </div>
                                        <div >
                                            <input  type="number"
                                                onchange="form1.reste.value=form1.prix_prop.value-form1.avance.value"
                                                placeholder="Au chargement" name="avance"
                                                >
                                        </div>
                                        <div >
                                            <input  type="number"
                                                placeholder="A la livraison"
                                                onfocus="form1.avance.value=form1.prix_prop.value-form1.reste.value"
                                                name="reste" >
                                        </div>
                                        <div >
                                            <input  type="number" placeholder="devise"
                                                onfocus="form1.avance.value=form1.prix_prop.value-form1.reste.value"
                                                name="deviseval">
                                        </div>
                                    </div>
                                </div>
                                <div >
                                    <div >
                                        <div >
                                            Valeur de la marchandise
                                        </div>
                                        <div>
                                            <div >
                                                <input type="checkbox"  name="mvaleur"
                                                    id="myonoffswitch22" onclick="activate4()">
                                                <label  for="myonoffswitch22">
                                                    <span ></span>
                                                    <span ></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div id="valeurm" >
                                            <div >
                                                <input type="number" placeholder="Prix"
                                                    onchange="form1.deviseval.value=form1.devise.value" name="prix_prop"
                                                    
                                                    >
                                            </div>
                                            <div >
                                                <select name="devise" 
                                                    onclick="form1.deviseval.value=form1.devise.value"
                                                    >
                                                    <option value="FCFA">FCFA</option>
                                                    <option value="EURO">EURO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div >
                                    <div >
                                        <div >
                                            Mode de payement<span >*</span>
                                        </div>
                                        <div >
                                            <select name="methodepayement" 
                                                >
                                                <option value="Espèce">Espèce</option>
                                                <option value="Chèque">Chèque</option>
                                                <option value="Virement">Virement</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="alertDiv" ></div>

                        </div>
                    </div>


                </div>
                <div id="alertDiv" ></div>


            </div>

        </div>
    

   
    
    <div  >
        <button id="loginButton" 
            type="submit">ENVOYER></button>

    </div>

</form>

</div>
<script>
    const form1 =document.querySelector('#myForm')
    const deviseval =document.querySelector('#deviseval')
    const devise =document.querySelector('#devise')
    const reste =document.querySelector('#reste')
    const avance =document.querySelector('#avance')
    const prix_prop =document.querySelector('#prix_prop')
</script>

<?php } ?>
<?php  include "footer-new.php" ?>