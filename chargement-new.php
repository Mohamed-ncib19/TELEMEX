<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

<?php  include "header-new.php"; ?>
<?php if((isset($_SESSION['login_user'])) ) {               ?>

<div class="h-screen ">


<div class=" bg-[url('./newdesign/images/envoyer-un-colis.jpg')] bg-no-repeat bg-fixed  md:h-[50vh] h-[30vh] w-full md:bg-cover  mt-20" >

    <div class="bg-black w-full h-full bg-opacity-50 inset-0 flex flex-col justify-center items-start" >
        <div class="  md:mx-5 mx-2 flex  flex-col md:gap-7 gap-3  w-full" >
            <h1 class="md:text-[3rem] text-[2rem] text-white tracking-wide font-semibold" >ENVOYER UN <span class="text-[#E92C24]" >COLIS</span></h1>
            <p class="md:text-[1.5rem] text-[1rem] text-white md:mx-6 mx-2 tracking-wider" >Veuillez remplir le formulaire suivant</p>
        </div>
    </div>
   
</div>

<form id="myForm" class="md:w-[80%] w-[90%] m-auto bg-[#D9D9D9]/[.4]" action="post-charg.php" method="POST" enctype="multipart/form-data">

      
            <div class="text-[#E92C24] text-[1.5rem]" >
                <p>Caractéristiques</p>
            </div>

      


        <div >
            <div >
                <div >
                    <div >
                        <div >


                                        <select name="marchandise" id="marchandise"
                                            required >
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


                                        <textarea 
                                            placeholder="Plus de details sur votre marchandise" name="details_march"
                                             
                                            ></textarea>


                                        
                            
                                <div >

                                    <p >
                                        Image du colis :
                                    </p>

                                    <input id="file" type="file" class="hidden" name="img_march"
                                    onchange="previewFile()" >
                                        <div >
                                            <label for="file"  >

                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                    viewBox="0 0 22 22" fill="none" class=" absolute m-2" >
                                                    <path
                                                        d="M11.1393 0C5.14403 0 0.27832 4.86571 0.27832 10.861C0.27832 16.8562 5.14403 21.7219 11.1393 21.7219C17.1345 21.7219 22.0002 16.8562 22.0002 10.861C22.0002 4.86571 17.1345 0 11.1393 0ZM16.5698 11.9471H12.2254V16.2914H10.0532V11.9471H5.7088V9.77487H10.0532V5.43048H12.2254V9.77487H16.5698V11.9471Z"
                                                        fill="#E92C24" />
                                                </svg>

                                                    <img id="blah" class="relative w-[40%] h-[40%]" src="newdesign/images/pile.png" />
                                               
                                            </label>
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
                                    imageLabel.style.objectFit = 'contain';
                                    imageLabel.src =reader.result;
                                   
                                },
                                false,

                            );
                            if(inputImage){
                                reader.readAsDataURL(inputImage);
                            }
                        }
                           </script>


                                   
                                        <select  name="type_vehicule"
                                            id="vehicule"class="w-full"required
                                            onChange="changecat(this.value);">
                                            <option value="" selected disabled>Type de véhicule*</option>
                                            <option value="Moto">Moto</option>
                                            <option value="Tricycle">Tricycle</option>
                                            <option value="Van">Van</option>
                                        </select>
                                    
                                
                                    <br><br><br><br><br><br><br><br><br><br>


                                    
                                      
                                        <!-- Modal toggle -->
<button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="flex justify-between items-center gap-4 text-white bg-[#E92C24] focus:ring-4 focus:outline-none  rounded-lg p-2" type="button">
<p>Adresse d'enlèvement</p>
<iconify-icon icon="icomoon-free:location" class="text-[1.5rem]" style="color: white;"></iconify-icon>
</button>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class=" animate__animated animate__fadeInUp hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-max">
    <div class="relative p-4 md:w-[50%] w-[90%] h-[50%]">
        <!-- Modal content -->
        <div class="relative bg-red-300 rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Adresse d'enlèvement
                </h3>
                <button type="button" class=" bg-transparent text-white  rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class=" w-[80%] flex flex-col justify-center m-auto gap-4 p-2" >

            <div class="flex justify-between" >
            <select type="text" name="pays_charg" id="pays4" onchange="initialize()"
                                            placeholder="Pays *">
                                            <option value="" selected disabled>Pays de Chargement</option>
                                            <option  value="Cameroun"
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




                                        <input type="text" name="ville_charg" id="ville4" 
                                            placeholder="Ville" />
                                            </div>


                                            <div>
                                        <div class="hidden" >
                                            <div  id="lat_area">
                                                <label for="latitude"> Latitude </label>
                                                <input type="text" name="latitude" id="latitude">
                                            </div>

                                            <div  id="long_area">
                                                <label for="latitude"> Longitude </label>
                                                <input type="text" name="longitude" id="longitude">
                                            </div>
                                        </div>
                                        <div class="hidden" >
                                            <div >
                                                Distance(Km) :</div>
                                            <div >

                                                <input type="number" name="distance" id="distance" value="0" disabled>
                                            </div>

                                        </div>
                                        </div>
                                        
                                        <input type="text" id="adresse_charg" placeholder="adresse charge*" >
                                    </div>

                                    <div class="border-b border-black pt-4 m-auto w-[20%]" ></div>

                                    <br><br><br><br>

                                           





                                   





                              




                             
                               








        </div>
    </div>
</div> 


       <br><br><br><br><br><br><br><br><br><br><br><br>                     
                                   
                                    
                                    <div >
                                    <div >
                                        Heure de ramassage<span >*</span>
                                    </div>
                                    <div >
                                        <input type="time" name="date_charg" required
                                            onclick="getDistanceAndPrice()"
                                            s>
                                    </div>
                                </div>   


       <div >
                                    <div >
                                        Expéditeur: Moi même <span >*</span>
                                    </div>
                                    <div >
                                        <div >
                                            <input type="checkbox"  name="contactPersonX1"
                                                id="contactPersonX1" onclick="contactPerson1()">
                                            <label  for="contactPersonX1">
                                                <span ></span>
                                                <span ></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>


                            <div >
                                <div >
                                    <div >
                                        Nom expéditeur <span >*</span>
                                    </div>
                                    <div >
                                        <input c id="name_expediteur" name="name_expediteur"
                                            required type="text"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div >
                                <div >
                                    <div >
                                        Téléphone expéditeur<span>*</span>
                                    </div>
                                    <div >
                                        <input  name="telephone_expediteur" type="number"
                                            id="telephone_expediteur" 
                                            required>
                                    </div>
                                </div>
                            </div>
                           





                     

                        

                <div >
                    <div >
                        <div >
                            
                            <div >
                                <div>
                                    
                                    <div >

                                        <select type="text" name="pays_liv" id="pays5" onchange="initialize1()"
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

                                    </div>
                                </div>
                                <div >
                                    <div >
                                        Adresse de Livraison <span >*</span>
                                    </div>
                                    <div >
                                        <input type="text" name="ville_liv" id="ville5" 
                                            placeholder="Adresse d'enlèvement" />
                                        <div id="arrdiv"     >
                                            <input type="text"  
                                                placeholder="Location" name="autocomplete" id="autocomplete1"
                                                 >
                                            <img id="mapmylocation1"  
                                                src="newdesign/images/ic_person_pin_circle_24px.svg" alt="My Location"
                                                onclick="setMyLocation('autocomplete1','latitude1','longitude1','ville5')">
                                        </div>


                                        <div >


                                            <div  id="lat_area">
                                                <label for="latitude"> Latitude </label>
                                                <input type="text" name="latitude1" id="latitude1">
                                            </div>

                                            <div  id="long_area">
                                                <label for="latitude"> Longitude </label>
                                                <input type="text" name="longitude1" id="longitude1"
                                                    >
                                            </div>
                                        </div>
                                        <div >
                                            <div >Temps estimé pour
                                                l’enlèvement</div>
                                            <div >
                                                <input type="time" name="date_liv" id="date_liv">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div >
                                <div >
                                    <div >
                                        Destinataire: Moi même<span></span>
                                    </div>
                                    <div >
                                        <div >
                                            <input type="checkbox"  name="contactPersonX1"
                                                name="contactPersonX" id="contactPersonX" onclick="contactPerson()">
                                            <label  for="contactPersonX">
                                                <span ></span>
                                                <span ></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div >
                                <div >
                                    <div >
                                        Nom du destinataire<span >*</span>
                                    </div>
                                    <div >
                                        <input name="contact_name" id="contact_name"
                                            type="text" placeholder="Nom"
                                             required>
                                    </div>
                                </div>
                            </div>
                            <div >
                                <div >
                                    <div >
                                        Téléphone du destinataire<span >*</span>
                                    </div>
                                    <div >
                                        <input name="contact_phone" id="contact_phone"
                                        type="number" required="">
                                    </div>
                                </div>
                            </div>
                            <div >
                                <div >
                                    <div >
                                        Montant Estimer(XAF) : <span >*</span>
                                    </div>
                                    <div >
                                        <input type="number" name="priceestimated"
                                            id="priceestimated"
                                            style="  pointer-events: <?php echo $_SESSION['type']!="admin"?'none':''; ?>;padding-left: 20px;width:  100%!important;" required="">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div id="alertDiv"></div>

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
                                                name="deviseval"  disabled>
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


<?php } ?>
<?php /* include "footer-new.php" */ ?>