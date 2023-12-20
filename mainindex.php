<?php include"header.php";
	include('./config.php');?>
	
<style>
	.suivieform{
		width:30%;
	}
	@media screen and (max-width: 768px){
		.suivieform{
		width:90%;
	}
}
</style>
<section class="page-title-section trouvtrans">
        <div class="container hidden-xs slide-bord">
           
        </div>
    </section>
	<section class="contact-info-section">
        <div class="container ">

            <div class="row content-row">
                
                <div class="col-md-12">
                    <div class="contact-map"">

					<div class="row text-center" >
       


	   <rs-mask-wrap class="suivieform" style="position: absolute; display: block; overflow: visible;top:17%;left: 50%;
   transform: translate(-50%, 0); ">
	   <rs-layer id="slider-1-slide-1-layer-7" class="rs-layer-static rs-layer" data-type="text"
		data-rsp_ch="on" data-xy="xo:2px,1px,0,19px;yo:103px,90px,68px,86px;" 
		data-text="w:normal;s:20,17,12,24;l:25,21,15,26;fw:400,400,400,700;" data-dim="w:471.233px,412px,313px,448px;" data-onslides="s:1;" data-frame_0="x:0,0,0,0px;y:0,0,0,0px;" data-frame_1="x:0,0,0,0px;y:0,0,0,0px;" data-frame_999="o:0;st:w;" style="z-index: 5; font-family: Roboto; height: auto; color: rgb(255, 255, 255);
		 text-decoration: none; white-space: normal; width: 30px; min-height: 0px; min-width: 0px; max-height: none;
		  max-width: none; text-align: left; line-height: 20px; letter-spacing: 0px; font-weight: 700; font-size:
		   19px; transform-origin: 50% 50%; opacity: 1; transform: translate(0px, 0px); visibility: visible;" data-startslide="1" 
		   data-endslide="5" data-idcheck="true" data-stylerecorder="true" data-initialised="true">
		   <form method="post" id="form"  data-stylerecorder="true" style="text-align: left; line-height: 20px; 
		   letter-spacing: 0px; font-weight: 700; font-size: 19px;">
		   <input type="text" class="" id="CODE_EXPEDITION" 
			required="" placeholder="Saisissez le N° d'expédition" style="background-color: rgb(255, 255, 255); width:100%;height:45px;color:black!important;border-radius: 2px; font-weight: 700; text-align: left; line-height: 20px;
			  letter-spacing: 0px; padding-left: 16px; padding-right: 16px;" data-stylerecorder="true">
<button style="float: right; width: 45px; height: 45px; padding: 0px; margin-right: 5px; border-radius: 100%; position:
absolute; right: -20px; text-align: left; line-height: 20px; letter-spacing: 0px; font-weight: 700;    background-color: #2b2d86; border-color: 
rgb(156, 191, 97); border-style: solid; border-width: 2px;" data-stylerecorder="true"><i style="font-size: 18px; height: 35px;
 line-height: 34px; width: 35px; padding-left: 8px; position: absolute; top: 5%; left: 6%; text-align: left; letter-spacing: 0px;
  font-weight: 400;" class="fa fa-search" data-stylerecorder="true"></i></button></form> 
						   </rs-layer></rs-mask-wrap>

						   </br></br>
</br></br>
					<?php
						if( $_SESSION['type'] == "admin") {
					?>
					<button onclick="window.location.href ='espace-client.php'" class="button" style="width:35%;height: 45px;">Envoyer un colis</button>
					</br></br>

					<button onclick="window.location.href ='historique_client.php?telephone=<?php echo $_SESSION['telephone'] ?>'" class="button" style="width:35%;height: 45px;">Mes envois</button>

					<?php } ?>
 					</div>
					</div>


				</div>
			</div>
		</div>
	</section>
      
                    
			

					<script>
						// We access to the inputs by their id's
let CODE_EXPEDITION = document.getElementById("CODE_EXPEDITION");

let contactForm = document.getElementById("form");

// Event listener
contactForm.addEventListener("submit", function (e) {
 
  
    e.preventDefault();
    window.location.assign("https://telemex.suivi.telefret.com/"+CODE_EXPEDITION.value);
  

});
					</script>

<?php include"footer.php" ?>